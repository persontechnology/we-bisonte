<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PhpParser\Node\Stmt\TryCatch;

class WhatsAppController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:WhatsApp']);
    }

    public function index()
    {
        $data = array(
            'usuarios' => User::all(),
            'productos' => Producto::all() 
        );
        return view('whatsapp.index',$data);
    }
    public function enviar(Request $request)
    {
        $request->validate([
            "usuarios"    => "required|array",
            "usuarios.*"  => "required|exists:users,id",
            "productos"    => "nullable|array",
            "productos.*"  => "nullable|exists:productos,id",
            "descripcion"=>'required|string|max:255'
        ]);
        
        try {
            $productos_info = array();
            if($request->productos){
                foreach ($request->productos as $pro) {
                    array_push($productos_info,route('productoInfo',$pro));
                }
            }
            

            foreach ($request->usuarios as $user) {
                $u=User::find($user);
                $this->enviarMensaje($u->telefono,$request->descripcion,$productos_info);
            }
            $data = array(
                'success' => 'Mensaje WhastApp, enviado exitosamente.' ,
            );
        } catch (\Throwable $th) {
            $data = array('error' => 'Ocurrio un error, porfavor vuelva intentar '.$th->getMessage() );
        }
        return response()->json($data);
        
    }

    public function enviarMensaje($numero,$msg,$productos)
    {
        $productos_msg="";
        foreach ($productos as $p) {
           $productos_msg=Str::of($productos_msg)->append($p.'\n');
        }
        
        $curl = curl_init();
        $idInstancia=config('chatapi.ID_INSTANCIA');
        $idToken=config('chatapi.ID_TOKEN');

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.ultramsg.com/".$idInstancia."/messages/chat",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "token=".$idToken."&to=".$numero."&body=".$msg. "\nProductos: 👇\n".$productos_msg." &priority=1&referenceId=",
        CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded"
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        return false;
        } else {
        return true;
        }
    }
}
