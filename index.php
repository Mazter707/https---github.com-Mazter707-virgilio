

<?php require ('./layouts/header.php') ?>

  <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="./assets/img/portada-transformed.jpeg" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light" style="text-align: center;">laliga</h1>
                    <h5 class="font-weight-light" style="text-align: center;">UNIDAD Y FLEXIBILIDAD</h5>
                    <p>Tu sitio de encuentro con los mejores eventos ciclistas!</p>
                    <p>Sé parte de nosotros y no te pierdas ninguna noticia de las carreras que organizamos.</p>
                    <a class="btn btn-primary mx-auto d-block" href="registro.php">REGÍSTRATE!</a>
                </div>
            </div>
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
      <h4>Productos relacionados</h4>
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
              <img src="./assets/img/portada.jpg" class="d-block w-100" alt="Primera imagen">
              <div class="carousel-caption d-none d-md-block">
                <h5>Unidad y Flexibilidad !</h5>
                <p>Los mejores eventos ciclistas están aquí.</p>
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
              <img src="./assets/img/vuelta-espana.png" class="d-block w-100" alt="Tercera imagen">
              <div class="carousel-caption d-none d-md-block">
                <h5>Jersey Vuelta de España</h5>
                <p>Comodidad y elegancia en un mismo artículo.</p>
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