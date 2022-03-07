@extends('layouts.app',['title'=>'Inicio'])

@section('content')
<!-- Container -->
<div class="flex-fill">

  <!-- Error title -->
  <div class="text-center mb-4">
    <img src="{{ asset('img/lolok.png') }}" class="img-fluid mb-4" width="300" alt="">
    <h1 class="display-3 font-weight-semibold line-height-1 mb-2">BISONTE</h1>
    <h4>CONTROL DE INVENTARIOS Y FACTURACIÓN MEDIANTE UNA APLICACIÓN WEB PARA LA DISTRIBUIDORA BISONTE Y NOTIFICACIONES POR MENSAJE DE TEXTO MEDIANTE WHATSAPP.</h4>
    <span>Elaborado por:</span>
    <i>
      Jordan Stalin Cajamarca Palomo – Diana Katherine Loachamin Tito
    </i>
  </div>
  <!-- /error title -->

</div>
<!-- /container -->
  @prepend('linksPie')
      <script>
      $('#menuInicio').addClass('active');
      </script>
      
  @endprepend
@endsection
