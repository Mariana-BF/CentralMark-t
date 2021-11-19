@extends('layouts.app')


    

    @section('content')

 
        <section class="tabla">
            <div class="list-group">

                <a class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">1 kg jitomate <br> 1 kg zanahoria <br> 1 kg manzana </h5>
                        <h5 class="mb-1">Estado: Pendiente</h5>
                        <button type="button" class="btn btn-outline-dark mt-auto" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-bs-whatever="@mdo"> Ver estado</button>
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
                        <button type="button" class="btn btn-outline-dark mt-auto" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-bs-whatever="@mdo"> Ver estado</button>
                    </div>
                </a>


                <a class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">2 kg jitomate <br> 2 kg fresa <br> 3 kg naranja </h5>
                        <h5 class="mb-1">Estado: Pendiente</h5>
                        <button type="button" class="btn btn-outline-dark mt-auto" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-bs-whatever="@mdo"> Ver estado</button>
                    </div>
                </a>
            </div>
    @endsection