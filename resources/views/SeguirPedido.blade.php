@extends('layouts.app') <!-- Barra y el footer-->

@section('content')

<div class='container mt-5'>
    <h1 class="mb-4"> El estatus de tu pedido #{{$orden->id}} es: </h1>
      @if ( $orden->estatus == 1 )
          <div class="text-center mt-4 mb-5">
            <img id="previsualizar"  src="/storage//images/confirmada.png"   
              class="" alt="example placeholder avatar" width="400px" height="400px">
              <h2 class="mt-5"> ¡Tu pedido ha sido confirmado!</h2>
            </div>
      @endif

      @if ($orden->estatus == 2)
      <div class="text-center mb-5">
        <img id="previsualizar"  src="/storage//images/progreso.png"   
        class="" alt="example placeholder avatar" width="400px" height="400px">
        <h2>       ¡Tu pedido esta siendo preparado!        </h2>
      </div>
      @endif

      @if ($orden->estatus == 3)
        <div class="text-center mb-4">
           <img id="previsualizar"  src="/storage//images/Enviada.png"   
            class="" alt="example placeholder avatar" width="400px" height="400px">
            <h2>¡Tu pedido ya va en camino!</h2>
         </div>
       <div class="text-center mt-3">

       <a href="{{ route('Orden.pedidofinalizado') }}"> <button type="button" class="btn btn-primary">Finalizar pedido</button>
       </a>
    
        </div>
     @endif

     
    </>

 
 


</div>




@endsection