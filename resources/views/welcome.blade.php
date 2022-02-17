@extends('layouts.app',['title'=>'Inicio'])

@section('content')
<div style="height: 100vh">
    <div class="flex-center flex-column">
      <h5 class="animated fadeIn mb-3">
        CONTROL DE INVENTARIOS Y FACTURACIÓN MEDIANTE UNA APLICACIÓN WEB PARA LA DISTRIBUIDORA BISONTE Y NOTIFICACIONES POR MENSAJE DE TEXTO MEDIANTE WHATSAPP.
      </h5>
      <p class="animated fadeIn text-muted">
          Elaborado por:
      </p>
      <p>Jordan Stalin Cajamarca Palomo – Diana Katherine Loachamin Tito</p>
    </div>
  </div>
  @prepend('linksPie')
    <script>
    $('#menuInicio').addClass('active');
    </script>
    
@endprepend
@endsection
