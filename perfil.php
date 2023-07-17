
<?php require ('./layouts/header.php') ?>

<div class="container-fluid">

<style>
  .content-wrapper{
    margin-left:2px;
    padding:2px;
  }
</style>

<div class="d-flex mt-2 ml-0 pl-0" id="wrapper">
           
        <!-- Sidebar -->
          <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion mt-1 ml-0 pl-0" id="accordionSidebar">

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">
                        <i class=""></i>
                        <span>Escritorio</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Perfil
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw "></i>
                        <span>Mi cuenta</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Configuracion:</h6>
                            <a class="collapse-item" href="https://liga.nettual.com/perfil.php">Detalles</a>
                            <a class="collapse-item" href="https://liga.nettual.com/perfil.php">Ajustes</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw "></i>
                        <span>Chat</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Mensajes:</h6>
                            <a class="collapse-item" href="utilities-color.html">Directos</a>
                            <a class="collapse-item" href="utilities-border.html">Globales</a>
                            <a class="collapse-item" href="utilities-animation.html">Redactar</a>
                            <a class="collapse-item" href="utilities-other.html">Promotor</a>
                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Eventos
                </div>

                

                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <i class="fas fa-fw "></i>
                        <span>Próximos</span></a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="tables.html">
                        <i class="fas fa-fw "></i>
                        <span>Pasados</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Resultados
                </div>

                

                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <i class="fas fa-fw "></i>
                        <span>Personales</span></a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="tables.html">
                        <i class="fas fa-fw "></i>
                        <span>Equipo</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
                <!-- Heading -->
                <div class="sidebar-heading">
                    Mercado
                </div>

                

                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <i class="fas fa-fw"></i>
                        <span>Mis compras</span></a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="tables.html">
                        <i class="fas fa-fw"></i>
                        <span>Mis ventas</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
          </ul>
        <!-- End of Sidebar -->
            <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y" >
              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                    <h5 class="card-header text-center">Detalles del perfil</h5>
                    <!-- Account -->
                    <div class="card-body">
                    <div class="card-body text-center">
                      <img src="https://liga.nettual.com/assets/img/me-removebg-preview.png" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px;">
                      <h5 class="my-3">Mazter707</h5>
                    </div>
                  </div>
                <hr class="my-0" />

                <div class="col-lg-12">
                <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nombre completo</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Jesus Garcia Martinez</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">mazter707@laliga.run</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Celular</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(097) 234-5678</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Género</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Masculino</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Año de nacimiento</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">1975</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Equipo</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Yapur MX</p>
              </div>
            </div>
            <hr>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary">Editar</button>
            </div>
            
          </div>

          <div class="card mt-5">
                    <h5 class="card-header">Eliminar cuenta</h5>
                    <div class="card-body">
                      <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                          <h6 class="alert-heading fw-bold mb-1">Estás seguro que deseas eliminar la cuenta?</h6>
                          <p class="mb-0">Una vez que eliminas tu cuenta, no hay vuelta atrás. Favor de estar seguro.</p>
                        </div>
          <form id="formAccountDeactivation" onsubmit="return false">
                        <div class="form-check mb-3">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="accountActivation"
                            id="accountActivation"
                          />
                          <label class="form-check-label" for="accountActivation"
                            >Confirmo que deseo eliminar  mi cuenta.</label
                          >
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">Eliminar cuenta</button>
                      </form>
</div>
              </div>
            </div>
        </div>
</div>
  <?php require ('./layouts/footer.php') ?>