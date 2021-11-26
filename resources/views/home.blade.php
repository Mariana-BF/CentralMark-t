@extends('layouts.app') <!-- Barra y el footer-->

@section('content') <!-- Lo de enmedio -->
<header class="py-5" style="background-color: rgb(65, 124, 65)">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-6 fw-bolder">Bienvenido(a) Vendedor(a) {{ Auth::user()->name }}</h1>
            <p class="lead fw-normal text-white-50 mb-0">Administra tus productos y pedidos</p>
        </div>
    </div>
  </header>
<h2 class="text-center mb-5 mt-5">Mis productos</h2>

    <div class="col-md-10 mx-auto bg-white p-3">
        <a href="{{ route('admin.ordenes') }}" type="button" class="btn btn-success mb-3">Administrar pedidos</a>
        <table class="table">
            <thead class="colorTabla text-light">
                <tr class="text-center">
                    <th scole="col">Producto</th>
                    <th scole="col">Categoría</th>
                    <th scole="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($infoPlatillos as $platillo)
                    <tr class="text-center">
                        <td>{{$platillo->nombre}}</td>
                        <td>{{$platillo->categoria}}</td>
                        <td class="text-center">
                            <a class="btn btn-dark mr-1 w-50 mb-2" href="{{route('platillos.editar',['platillo'=>$platillo->id])}}">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
        <a type="button" class="btn btn-success w-50"  href="{{route('platillos.agregar')}}"  >Nuevo producto</a>
        </div>
    </div>

@endsection