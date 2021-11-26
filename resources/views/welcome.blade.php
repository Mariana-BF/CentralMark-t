@extends('layouts.app')

@section('content')
   
<div class="conteiner" ></div>

<!-- Header-->
<header class="py-5" style="background-color: rgb(65, 124, 65)">
  <div class="container px-4 px-lg-5 my-5">
      <div class="text-center text-white">
          <h1 class="display-6 fw-bolder">Encuentra lo mejor de tu mercado aquí!</h1>
          <p class="lead fw-normal text-white-50 mb-0">Compras al mayoreo con servicio a domicilio</p>
      </div>
  </div>
</header>
<!-- Section-->



<section class="py-5">
  <div class="container px-4 px-lg-5 mt-5">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
          <div class="col mb-5">
              <div class="card h-100">
                  <!-- Product image-->
                  <img class="card-img-top"  src="storage//images/img1.jpeg"  alt="" />
                  <!-- Product details-->
                  <div class="card-body p-4">
                      <div class="text-center">
                          <!-- Product name-->
                          <h5 class="fw-bolder">Naranjas</h5>
                          <!-- Product price-->
                          $40.00 - $80.00
                      </div>
                  </div>
                  <!-- Product actions-->
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a  class="btn btn-outline-success"data-bs-toggle="modal" data-bs-target="#exampleModal">Ver más</a></div>
                  </div>
                   
              </div>
          </div>

          <div class="col mb-5">
              <div class="card h-100">
                  <!-- Sale badge-->
                  <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta</div>
                  <!-- Product image-->
                  <img class="card-img-top" src="storage//images/jitomate.jpg" height="185" width="840" alt="" />
                  <!-- Product details-->
                  <div class="card-body p-4">
                      <div class="text-center">
                          <!-- Product name-->
                          <h5 class="fw-bolder">Jitomate</h5>
                          <!-- Product reviews-->
                          <!-- Product price-->
                          <span class="text-muted text-decoration-line-through">$20.00</span>
                          $18.00
                      </div>
                  </div>
                  <!-- Product actions-->
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a  class="btn btn-outline-success"data-bs-toggle="modal" data-bs-target="#exampleModal">Ver más</a></div>
                </div>
              </div>
          </div>
          <div class="col mb-5">
              <div class="card h-100">
                  <!-- Sale badge-->
                  <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta</div>
                  <!-- Product image-->
                  <img class="card-img-top" src="storage//images/rabanos.jpeg" height="185" width="840" alt="..." />
                  <!-- Product details-->
                  <div class="card-body p-4">
                      <div class="text-center">
                          <!-- Product name-->
                          <h5 class="fw-bolder">Rabanos</h5>
                          <!-- Product price-->
                          <span class="text-muted text-decoration-line-through">$50.00</span>
                          $25.00
                      </div>
                  </div>
                  <!-- Product actions-->
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a  class="btn btn-outline-success"data-bs-toggle="modal" data-bs-target="#exampleModal">Ver más</a></div>
                </div>
              </div>
          </div>
          <div class="col mb-5">
              <div class="card h-100">
                  <!-- Product image-->
                  <img class="card-img-top" src="storage//images/papaya.jpg" height="185" width="840" alt="..." />
                  <!-- Product details-->
                  <div class="card-body p-4">
                      <div class="text-center">
                          <!-- Product name-->
                          <h5 class="fw-bolder">Papaya</h5>
                          <!-- Product reviews-->
                          <div class="d-flex justify-content-center small text-warning mb-2">
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                              <div class="bi-star-fill"></div>
                          </div>
                          <!-- Product price-->
                          $40.00
                      </div>
                  </div>
                  <!-- Product actions-->
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a  class="btn btn-outline-success"data-bs-toggle="modal" data-bs-target="#exampleModal">Ver más</a></div>
                </div>
              </div>
          </div>
          <div class="col mb-5">
              <div class="card h-100">
                  <!-- Sale badge-->
                  <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta</div>
                  <!-- Product image-->
                  <img class="card-img-top" src="storage//images/guayaba2.jpg" height="185" width="840" alt="..." />
                  <!-- Product details-->
                  <div class="card-body p-4">
                      <div class="text-center">
                          <!-- Product name-->
                          <h5 class="fw-bolder">Guayabas</h5>
                          <!-- Product price-->
                          <span class="text-muted text-decoration-line-through">$50.00</span>
                          $25.00
                      </div>
                  </div>
                  <!-- Product actions-->
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a  class="btn btn-outline-success"data-bs-toggle="modal" data-bs-target="#exampleModal">Ver más</a></div>
                </div>
              </div>
          </div>
          <div class="col mb-5">
              <div class="card h-100">
                  <!-- Product image-->
                  <img class="card-img-top" src="storage//images/brocoli.jpg" height="185" width="840" alt="..." />
                  <!-- Product details-->
                  <div class="card-body p-4">
                      <div class="text-center">
                          <!-- Product name-->
                          <h5 class="fw-bolder">Brocoli</h5>
                          <!-- Product price-->
                          $120.00 - $280.00
                      </div>
                  </div>
                  <!-- Product actions-->
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a  class="btn btn-outline-success"data-bs-toggle="modal" data-bs-target="#exampleModal">Ver más</a></div>
                </div>
              </div>
          </div>    
      </div>
  </div>

</section>
    
@endsection