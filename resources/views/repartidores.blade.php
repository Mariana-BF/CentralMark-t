@extends('layouts.app') <!-- Barra y el footer-->

@section('content')
<header class="py-5" style="background-color: rgb(65, 124, 65)" style="width: 50%">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-6 fw-bolder">Asigna un repartidor a un pedido!</h1>
           
        </div>
    </div>
  </header>
    <section class="tabla" style="margin-top: 2%">
        <div class="list-group">

            <a class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">1 kg jitomate <br> 1 kg zanahoria <br> 1 kg manzana </h5>
                    <h5 class="mb-1">Estado: Pendiente</h5>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                         Repartidores
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <li><button class="dropdown-item" type="button">Mariana</button></li>
                          <li><button class="dropdown-item" type="button">Hugo</button></li>
                          <li><button class="dropdown-item" type="button">Ileana</button></li>
                        </ul>
                      </div>
                </div>
            </a>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Confirmar</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>¿Estas seguro de cambiar el estado de este pedido?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary">Cambiar</button>
                        </div>
                    </div>
                </div>
            </div>


            <a class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">1 kg rábano <br> 1 pieza elote <br> 1 kg fresa </h5>
                    <h5 class="mb-1">Estado: Pendiente</h5>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                         Repartidores
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <li><button class="dropdown-item" type="button">Mariana</button></li>
                          <li><button class="dropdown-item" type="button">Hugo</button></li>
                          <li><button class="dropdown-item" type="button">Ileana</button></li>
                        </ul>
                      </div>
                </div>
            </a>


            <a class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">2 kg jitomate <br> 2 kg fresa <br> 3 kg naranja </h5>
                    <h5 class="mb-1">Estado: Pendiente</h5>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                         Repartidores
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <li><button class="dropdown-item" type="button">Mariana</button></li>
                          <li><button class="dropdown-item" type="button">Hugo</button></li>
                          <li><button class="dropdown-item" type="button">Ileana</button></li>
                        </ul>
                      </div>
                </div>
            </a>
        </div>
@endsection