@extends('layouts.app')

    <!-- Navigation-->
    

    @section('content')

    <div class="container-fluid" style="width: 45%" >
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Busca un producto" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
    </div>

    <ul class="nav justify-content-end" style="margin-right: 2%">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('pedidos') }}">Pedidos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="{{ route('perfil') }}" >Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Carrito</a>
        </li>
       
      </ul>

      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Frutas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Verduras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Carnes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Lacteos</a>
        </li>
       
      </ul>
      



    <!-- Header-->
    <header class="bg-light py-2" style="margin-top: 2%" >
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images\carrusel1.png') }}" class="d-block w-100" width="200" height="400" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Productos de calidad</h5>
                        <p>Frescura y calidad garantizada.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images\carrusel1.png') }}" class="d-block w-100" width="100" height="400" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Aprovecha nuestras ofertas</h5>
                        <p>¡Ofertas todos los fines de semana!.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images\carrusel1.png') }}" class="d-block w-100" width="100" height="400" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Entrega a domiclio</h5>
                        <p>Elije tus productos y recibelos de manera segura y rápida.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ asset('images\jitomate.jpg') }}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Jitomate</h5>
                                <!-- Product price-->
                                $10.00 - 1Kg
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al
                                    carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                            Oferta
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ asset('images\cebolla.jpg') }}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Cebolla</h5>
                                <!-- Product reviews-->

                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                $18.00 - Kg
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al
                                    carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                            Oferta
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top"src="{{ asset('images\papa.jpg') }}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Papa</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$15.00</span>
                                $12.00 - Kg
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al
                                    carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ asset('images\zanahoria.jpg') }}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Zanahorias</h5>
                                <!-- Product reviews-->

                                <!-- Product price-->
                                $15.00 - Kg
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agreegar al
                                    carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ asset('images\aguacate.jpg') }}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Aguacate</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$35.00</span>
                                $25.00 - Kg
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al
                                    carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ asset('images\manzana.jpg') }}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Manzana</h5>
                                <!-- Product price-->
                                $42.00 - Kg
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al
                                    carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ asset('images\pera.jpg') }}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Pera</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                $18.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al
                                    carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ asset('images\uvas.jpg') }}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Uvas</h5>
                                <!-- Product reviews-->
                                <!-- Product price-->
                                $40.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al
                                    carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-white shadow-sm" >
        <div class="container"><p class="m-0 text-center text-black">Copyright &copy; Noviembre 2021</p></div>
      </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    @endsection