

<?php require ('./layouts/header.php') ?>

  <!-- Page Content-->

            
            <!-- Heading Row-->
            
          
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">PRÓXIMAS CARRERAS!</p></div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                      <div class="card"  >
                        <img src="./assets/img/huracan.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h3 class="card-title" style="text-align: center;">HURACÁN</h3>
                          <p class="card-text">Sábado 1 de Julio  |  Campeche</p>
                          <h5 class="card-title" style="text-align: center;">$ 300.00</h5>
                          <a href="#" class="btn btn-primary mx-auto d-block" >Inscríbete</a>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                      <div class="card" >
                        <img src="./assets/img/jonuta.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h3 class="card-title" style="text-align: center;">JONUTA</h3>
                          <p class="card-text">Domingo 20 de Agosto  |  Jonuta</p>
                          <h5 class="card-title" style="text-align: center;">$ 300.00</h5>
                          <a href="#" class="btn btn-primary mx-auto d-block" >Inscríbete</a>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                      <div class="card" >
                        <img src="./assets/img/pixan.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h3 class="card-title" style="text-align: center;">PIXAN HELL</h3>
                          <p class="card-text">Domingo 29 de Octubre  |  Mérida</p>
                          <h5 class="card-title" style="text-align: center;">$ 300.00</h5>
                          <a href="#" class="btn btn-primary mx-auto d-block" >Inscríbete</a>
                        </div>
                      </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
<!--Aqui inicia el carrusel -->

<div class="container">
  <div class="card">
    <div class="card-header">
      <h4>Outfit !</h4>
    </div>
      <div class= "card-body">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./assets/img/mexico.jpeg" class="d-block w-100" alt="Primera imagen">
              <div class="carousel-caption d-none d-md-block">
                <h5>Celebremos fiestas patrias con este precioso Jersey !</h5>
                <p>Fabricado con telas que te mantienen fresco y seco.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./assets/img/tour-france-large.jpg" class="d-block w-100" alt="Segunda imagen">
              <div class="carousel-caption d-none d-md-block">
                <h5>Jersey Tour de Francia</h5>
                <p>Excelenta ventilación que te mantiene fresco..</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./assets/img/vintage.jpeg" class="d-block w-100" alt="Tercera imagen">
              <div class="carousel-caption d-none d-md-block">
                <h5>Sumérgete en la época dorada del ciclismo !</h5>
                <p>Rinde homenaje a los ciclistas legendarios que dejaron una huella imborrable en este deporte.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>
  </div>
</div>
<!--Aqui termina el carrusel -->

       
  <?php require ('./layouts/footer.php') ?>