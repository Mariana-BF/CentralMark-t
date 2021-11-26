@extends('layouts.app')

@section('content')
<h1 class="text-center mb-5 mt-5">Catálogo</h1>
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-3">
            <div class="sticky-top-2">
                <div class="card">
                    <h3 class="text-center mt-2">Categorias</h3>
                    <button  id="platofuerte" class="text-center mb-2 mx-4 btn-success">Frutas</button>
                    <button id="bebidas"  class="text-center mb-2 btn-success mx-4">Verduras</button>
                    <button id="postres"  class="text-center  mb-2 btn-success mx-4">Lacteos</button>
                    <button id="carnes"  class="text-center  mb-2 btn-success mx-4">Carnes</button>

                    
                </div>
            </div>
            <div class="sticky-top-3 mt-5">
                <div class="card " id="ordenes">
                    <h3 class="text-center mt-2">¡Finaliza tu pedido!</h3>
                    <div id="contenido2" class="text-center">                       
                    </div>
                    <hr class="my-1">
                    <form class="btn btn-primary mr-2" id="ordenar"  method="POST"  action="{{route('Order.crear')}}">
                        @csrf
                        <input  type="hidden" name="idUsuario" value="{{ Auth::user()->id }}">                    
                        <button class="button" type="submit">Ver carrito</button>
                    </form>

                </div>
            </div>
        </div>

        <div class="col-9">
            <div class="portfolio" id="contenido">
                {{-- Recorrer todos los registros --}}
                @foreach ($platillos as $platillo)
                    <div class="portfolio__item" >
                        <img src="/storage/{{$platillo->imagen}}" alt="" width="100%">
                        <div class="portfolio__desc text-center">
                            <h3 class="portfolio__title">{{$platillo->nombre}}</h3>
                            <a href="#{{$platillo->id}}"  class="button">Agregar</a>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- the portafolio lightboxes -->
            <div class="portfolio-lightboxes">
                @foreach ($platillos as $platillo)
                <div id="{{$platillo->id}}" class="portfolio-lightbox">
                    <div class="portfolio-lightbox__content">
                        <a href="#" class="close"></a>
                        <img src="/storage/{{$platillo->imagen}}" alt="">
                            
                        <div class="card text-center bg-dark">
                           <div class="card-body">
                                <h3 class="portfolio-lightbox__title  mt-2">{{$platillo->nombre}}</h3>
                                <p class="portfolio-lightbox__body">{{$platillo->descripcion}}</p>
                                <p>Precio: ${{$platillo->precio}} - 1kg.</p>
                                 <form class="btn btn-primary mr-2" id="ordenar"  method="POST"  action="{{route('InsertarOrden',['id_platillo' => $platillo->id ] )}}">
                                    @csrf
                                    @method('PUT')
                                    <input  type="hidden" name="cantidad" id="inputvalue" >
                                    <input  type="hidden" name="idUsuario" value="{{ Auth::user()->id }}">
                                    <input  type="hidden" name="id" value="{{$platillo->id}}">

                                    <button class="button" type="submit">Ordenar</button>
                                </form>
                                <input id="cantidad" class="cantidad" type="number" min="1" max="100" />
                          </div>
                        </div>
                           
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
    <form action="GET" action="/orden/ordenes" id="form1">
        @csrf
        <input type="hidden" name="id" value="1">
    </form>
@endsection

@section('javascript')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/actualizar.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/insertarEnOrden.js') }}"></script>
@endsection



