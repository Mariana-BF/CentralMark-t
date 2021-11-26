@extends('layouts.app') <!-- Barra y el footer-->

@section('content')
<section class="">
    <div class="container rounded bg-white mt-0 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                        class="rounded-circle mt-5" width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold">Cliente Prueba</span><span
                        class="text-black-50">correo@mail.com.my</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Configuración Perfil</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Nombre</label><input type="text"
                                class="form-control" placeholder="Nombre" value=""></div>
                        <div class="col-md-6"><label class="labels">Apodo</label><input type="text"
                                class="form-control" value="" placeholder="Apodo"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Apellido Paterno</label><input type="text"
                                class="form-control" placeholder="Apellido Paterno" value=""></div><br>
                        <div class="col-md-12"><label class="labels">Apellido Materno</label><input type="text"
                                class="form-control" placeholder="Apellido Materno" value=""></div>
                        <div class="col-md-12"><label class="labels">Correo</label><input type="text"
                                class="form-control" placeholder="Correo" value=""></div>
                        <div class="col-md-12"><label class="labels">Contraseña</label><input type="text"
                                class="form-control" placeholder="Contraseña" value=""></div>
                        <div class="col-md-12"><label class="labels">Domicilio</label><input type="text"
                                class="form-control" placeholder="Direccion completa" value=""></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Pais</label><input type="text"
                                class="form-control" placeholder="Pais" value=""></div>
                        <div class="col-md-6"><label class="labels">Estado/Region</label><input type="text"
                                class="form-control" value="" placeholder="Estado"></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                            type="button">Guardar perfil</button></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Informacion
                            Pago</span><span class="border px-3 p-1 add-experience"><i
                                class="fa fa-plus"></i>&nbsp;</span></div><br>
                    <div class="col-md-12"><label class="labels">Numero tarjeta</label><input type="text"
                            class="form-control" placeholder="Numero tarjeta" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">Fecha expiracion</label><input type="text"
                            class="form-control" placeholder="Fecha expiracion" value=""></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>


@endsection