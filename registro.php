<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/registro.css">
    <link rel="icon" href="https://liga.nettual.com/assets/img/logo-laliga.ico">
    <title>Registro de usuario</title>
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-1 " >Registro</h5>
            <form class="needs-validation" novalidate action="servidor/registro/registrar.php" name ="addForm" method="post" autocomplete="off">

              <div class="form-floating mb-3 ">
                <input type="text" class="form-control" id="usuario" name="usuario"
                placeholder="Usuario"  autocomplete="off" required autofocus>
                <label for="usuario">Usuario</label>

                <div class="valid-feedback">
                  Ok
                </div>
                <div class="invalid-feedback">
                  Favor de ingresar un nombre de Usuario.
                </div>
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password"
                 placeholder="Password" autocomplete="off" required>
                <label for="password">Contraseña</label>

                <div class="valid-feedback">
                  Ok
                </div>
                <div class="invalid-feedback">
                  Es necessario que ingrese una Contraseña.
                </div>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombre_completo" name="nombre_completo"
                 placeholder="Nombre completo" autocomplete="off" required>
                <label for="nombre_completo">Nombre completo</label>

                <div class="valid-feedback">
                  Ok
                </div>
                <div class="invalid-feedback">
                  Debe ingresar su Nombre completo.
                </div>
              </div>

              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email"
                 placeholder="Email" autocomplete="off" required>
                <label for="email">Email</label>

                <div class="valid-feedback">
                  Ok
                </div>
                <div class="invalid-feedback">
                  Debe ingresar un email válido.
                </div>
              </div>

              <div class="form-floating mb-3">
                <input type="text"  class="form-control" id="celular" name="celular"
                 placeholder="999 000 00 00" autocomplete="off" required>
                <label for="celular">Celular</label>

                <div class="valid-feedback">
                  Ok
                </div>
                <div class="invalid-feedback">
                  Debe ingreasr su número de celular.
                </div>
              </div>

              <div class="form-floating mb-3">
                <div class="input-group mb-3">
                  <label class="input-group-text" for="inputGroupSelect01">Género</label>
                  <select class="form-select" id="genero" name="genero" required>
                    <option selected disabled value="">Selecciona...</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                  </select>
                  <div class="valid-feedback">
                      Ok
                  </div>
                  <div class="invalid-feedback">
                        Favor de ingresar el género.
                  </div>

                 
                  </div>

            
              </div>

              <div class="form-floating mb-3">
                <div class="input-group mb-3">
                  <label class="input-group-text" for="inputGroupSelect02">Año de nacimiento</label>
                  <select class="form-select" id="nacimiento" name="nacimiento" required>
                    <option selected disabled value="">Selecciona...</option>
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

                  <div class="valid-feedback">
                    Ok
                    </div>
                    <div class="invalid-feedback">
                      Favor de ingresar su año de nacimiento.
                    </div>
                  </div>
              </div>

                

              <div class="form-floating mb-3">
                <div class="input-group mb-3">
                  <label class="input-group-text" for="inputGroupSelect03">Equipo (opcional)</label>
                  <select class="form-select" id="equipo" name="equipo">
                    <option selected>Selecciona...</option>
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
             

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" onclick="validarFormulario();" type="submit">Registrar</button>
              </div>

              <a class="d-block text-center mt-2 small" href="login.php">Ya tienes una cuenta? Ingresa!</a>

              <hr class="my-4">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
    </script>


<script>

       //Funcion para validar el numero de telefono
       function validarTelefono(parametro){
        var patron = /^\d{10}$/;

        if(!patron.test(parametro)){
          return false;
        }else{
          return true;
        }
      }

      //Funcion para validar Formulario.
      function validarFormulario(){
        
        var formulario = document.addForm;
        if(validarTelefono(formulario.celular.value) == false){
          alert("Favor de ingresar un número de telefono válido");
          formulario.celular.value = "";
          formulario.celular.focus();
        }     
      }
</script>


  </body>
</html>