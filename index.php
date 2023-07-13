

<?php require ('./layouts/header.php') ?>

<!-- Jumbotron -->

<div
class="p-5 text-center bg-image mb-5"
style="
  background-image: url('https://liga.nettual.com/assets/img/portada-transformed.jpeg');
  height: 80vh;
"
>
<div class="mask" style="background-color: rgba(1, 15, 59, 0.6);">
  <div class="d-flex justify-content-center align-items-center h-100">
    <div class="text-white">
      <h1 class="mb-3">laliga</h1>
      <h4 class="mb-3">UNIDAD Y FLEXIBILIDAD</h4>
      <a class="btn btn-outline-light btn-lg" href="https://liga.nettual.com/registro.php" role="button"
      >Únete !</a
      >
    </div>
  </div>
</div>
</div>

<!-- Jumbotron -->

<!-- Cards -->
<div class="container-fluid mb-5">
  <div class="row">
    <div class="col-md">
      <div class="card text-center">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="https://liga.nettual.com/assets/img/300x480_camp.jpg" class="img-fluid"/>
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">CAMPECHE</h5>
          <p class="card-text">Domingo 16 de Julio | Dzilbache</p>
          <h5 class="card-title">$ 300.00</h5>
          <a href="#!" class="btn btn-primary">Inscribete</a>
        </div>
      </div>
    </div>
    <div class="col-md">
      <div class="card text-center">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="https://liga.nettual.com/assets/img/jonuta.jpg" class="img-fluid"/>
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">NONUTA</h5>
          <p class="card-text">Domingo 20 de Agosto | Jonuta</p>
          <h5 class="card-title">$ 155.00</h5>
          <a href="#!" class="btn btn-primary">Inscribete</a>
        </div>
      </div>
    </div>
    <div class="col-md">
      <div class="card text-center">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="https://liga.nettual.com/assets/img/300x480_MEXICO.jpg" class="img-fluid"/>
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title">VIVA MEXICO</h5>
          <p class="card-text">Domingo 17 de Septiembre | Valladolid</p>
          <h5 class="card-title">$ 750.00</h5>
          <a href="#!" class="btn btn-primary">Inscribete</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Cards -->

<!-- Carousel wrapper -->
<div id="carouselBasicExample" class="carousel slide carousel-fade mb-5" data-mdb-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>

  <!-- Inner -->
  <div class="carousel-inner">
    <!-- Single item -->
    <div class="carousel-item active">
      <img src="https://liga.nettual.com/assets/img/mexico.jpeg" class="d-block w-100" alt="Playera Viva México tricolor"/>
      <div class="carousel-caption d-none d-md-block">
        <h5>Jersey conmemorativo Fiestas Patrias</h5>
        <p>Fabricado con telas que te mantienen fresco y seco.</p>
        <a class="btn btn-lg btn-primary" href="https://www.yapur.mx/collections/2023/products/mexico-2023" target="_blank">Cómprala !</a>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="https://liga.nettual.com/assets/img/tour-france-large.jpg" class="d-block w-100" alt="Corredor del tour de Francia"/>
      <div class="carousel-caption d-none d-md-block">
        <h5>Jersey Tour de Francia</h5>
        <p>Un clásico que siempre debes portar.</p>
        <a class="btn btn-lg btn-primary" href="https://www.yapur.mx/collections/grandes-vueltas/products/tour-2023" target="_blank">Cómprala !</a>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="https://liga.nettual.com/assets/img/vintage.jpeg" class="d-block w-100" alt="Playeras de ciclistas legendarios"/>
      <div class="carousel-caption d-none d-md-block">
        <h5>Revive la época dorada del ciclismo</h5>
        <p>Rinde homenaje a las grandes leyendas del ciclismo.</p>
        <a class="btn btn-lg btn-primary" href="https://www.yapur.mx/collections/grandes-vueltas/products/tour-2023" target="_blank">Cómprala !</a>
      </div>
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>
<!-- Carousel wrapper -->


  <?php require ('./layouts/footer.php') ?>