
<?php require ('./layouts/header.php') ?>

<div class="container-fluid ml-0 pl-0" >

<style>
  .content-wrapper{
    margin-left:1px;
    padding:1px;
  }
</style>

<div class="d-flex mt-2 ml-0 pl-0" id="wrapper">
           
  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

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

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        
  </ul>
<!-- End of Sidebar -->
            <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4" style="text-align: center;"><span class="text-muted fw-light">Configuración /</span> Cuenta</h4>

              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                    <h5 class="card-header">Detalles del perfil</h5>
                    <!-- Account -->
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                          src="./assets/img/me-removebg-preview.png"
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar"
                        />
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Actualizar foto</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload"
                              class="account-file-input"
                              hidden
                              accept="image/png, image/jpeg"
                            />
                          </label>
                          

                          <p class="text-muted mb-0">Formatos de imagen permitidos: JPG, GIF or PNG. Tamaño máximo de 800K</p>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input
                              class="form-control"
                              type="text"
                              id="usuario"
                              name="usuario"
                              value="Mazter707"
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Nombre completo</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="firstName"
                              value="Jesus Garcia Martinez"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="password" class="form-label">Contraseña</label>
                            <input class="form-control" type="password" name="password" id="lastName" value="********" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="email"
                              value="mazter707@nettual.com"
                              placeholder="jmazter707@nettual.com"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">Celular</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text">MX (+52)</span>
                              <input
                                type="text"
                                id="phoneNumber"
                                name="phoneNumber"
                                class="form-control"
                                placeholder="648 146 9759"
                              />
                            </div>
                          </div>
                          
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="country">Género</label>
                            <select id="country" class="select2 form-select">
                              <option value="">Selecciona</option>
                              <option value="Masculino">Masculino</option>
                              <option value="Femenino">Femenino</option>
                            </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="language" class="form-label">Año de nacimiento</label>
                            <select id="language" class="select2 form-select">
                              <option value="">Selecciona</option>
                              <option value="1973">1973</option>
                              <option value="1974">1974</option>
                              <option value="1975">1975</option>
                              <option value="1976">1976</option>
                              <option value="1977">1977</option>
                              <option value="1978">1978</option>
                              <option value="1979">1979</option>
                              <option value="1980">1980</option>
                              <option value="1981">1981</option>
                              <option value="1982">1982</option>
                              <option value="1983">1983</option>
                              <option value="1984">1984</option>
                              <option value="1985">1985</option>
                              <option value="1986">1986</option>
                              <option value="1987">1987</option>
                              <option value="1988">1988</option>
                              <option value="1989">1989</option>
                              <option value="1990">1990</option>
                              <option value="1991">1991</option>
                              <option value="1992">1992</option>
                              <option value="1993">1993</option>
                              <option value="1994">1994</option>
                              <option value="1995">1995</option>
                              <option value="1996">1996</option>
                              <option value="1997">1997</option>
                              <option value="1998">1998</option>
                              <option value="1999">1999</option>
                              <option value="2000">2000</option>
                              <option value="2001">2001</option>
                              <option value="2002">2002</option>
                              <option value="2003">2003</option>
                              <option value="2004">2004</option>
                              <option value="2005">2005</option>
                              <option value="2006">2006</option>
                              <option value="2007">2007</option>
                              <option value="2008">2008</option>
                              <option value="2009">2009</option>
                              <option value="2010">2010</option>
                              <option value="2011">2011</option>
                              <option value="2012">2012</option>
                              <option value="2013">2013</option>
                              <option value="2014">2014</option>
                              <option value="2015">2015</option>
                              <option value="2016">2016</option>
                              <option value="2017">2017</option>
                    <option value="2018">2018</option>
                            </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="timeZones" class="form-label">Equipo</label>
                            <select id="timeZones" class="select2 form-select">
                              <option value="">Selecciona</option>
                              <option value="Titanes">Titanes</option>
                              <option value="Fox Extreme">Fox Extreme</option>
                              <option value="Horizon MTB">Horizon MTB</option>
                              <option value="Primos Uribe y Amigos">Primos Uribe y Amigos</option>
                              <option value="Primos Uribe">Primos Uribe</option>
                              <option value="Campeche">Campeche</option>
                              <option value="Brothers tem MTB">Brothers tem MTB</option>
                              <option value="Xaos">Xaos</option>
                              <option value="ELEGIDOSMTB">ELEGIDOSMTB</option>
                              <option value="Seyba Playa MTB">Seyba Playa MTB</option>
                              <option value="ARIEL TEAM _ RAPTORS">ARIEL TEAM _ RAPTORS</option>
                              <option value="BROTHERS TEAM">BROTHERS TEAM</option>
                              <option value="TEAM RACE HORMIGON">TEAM RACE HORMIGON</option>
                              <option value="Miserables">Miserables</option>
                              <option value="Fridas en Bici Campeche">Fridas en Bici Campeche</option>
                              <option value="FRIDASCAMPECHE">FRIDASCAMPECHE</option>
                              <option value="ARIEL TEAM_ RAPTORS">ARIEL TEAM_ RAPTORS</option>
                              <option value="Coyotes MTB Yucatan">Coyotes MTB Yucatan</option>
                              <option value="Familia Jaguar">Familia Jaguar</option>
                              <option value="BROTHERS TEAM MTB">BROTHERS TEAM MTB</option>
                              <option value="RAPTORS TEAM ARIEL">RAPTORS TEAM ARIEL</option>
                              <option value="BIKE CLUB LEONES">BIKE CLUB LEONES</option>
                              <option value="YAPUR.MX">YAPUR.MX</option>
                              <option value="Mtb Campeche">Mtb Campeche</option>
                              <option value="EL PEDAL">EL PEDAL</option>
                              <option value="Diablos MTB">Diablos MTB</option>
                              <option value="Triclub Perezosos">Triclub Perezosos</option>
                              <option value="Brother team campeche mtb">Brother team campeche mtb</option>
                              <option value="PNDJXS">PNDJXS</option>
                              <option value="Yucatan">Yucatan</option>
                              <option value="Cycling Adventure">Cycling Adventure</option>
                              <option value="La Tripa MTB">La Tripa MTB</option>
                              <option value="Chacamax racing Team">Chacamax racing Team</option>
                              <option value="Piratas-cadencia bike team">Piratas-cadencia bike team</option>
                              <option value="Raptors mtb Campeche">Raptors mtb Campeche</option>
                              <option value="Becal Bikers">Becal Bikers</option>
                              <option value="team campeche">team campeche</option>
                              <option value="ADAMSBIKE MTB TEAM">ADAMSBIKE MTB TEAM</option>
                              <option value="Independiente">Independiente</option>
                              <option value="TEAM RACE HOPRMIGON">TEAM RACE HOPRMIGON</option>
                              <option value="Bycicle mechanic/MTB Hecelchakan">Bycicle mechanic/ MTB Hecelchakan</option>
                            </select>
                          </div>
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Guardar</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                  <div class="card">
                    <h5 class="card-header">Eliminar cuenta</h5>
                    <div class="card-body">
                      <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                          <h6 class="alert-heading fw-bold mb-1">Estás seguro que deseas eliminar la cuenta?</h6>
                          <p class="mb-0">Una vez que eliminas tu cuenta, no hay vuelta atrás. Favor de estar seguro.</p>
                        </div>
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
        </div>
</div>
  <?php require ('./layouts/footer.php') ?>