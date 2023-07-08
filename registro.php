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
            <h5 class="card-title text-center mb-5 fw-light fs-5">Registro</h5>
            <form action="servidor/registro/registrar.php"  method="post">

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="usuario" name="usuario"
                placeholder="Usuario"  autocomplete="off" required autofocus>
                <label for="usuario">Usuario</label>
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password"
                 placeholder="Password" required>
                <label for="password">Password</label>
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
                <input type="text" class="form-control" id="email" name="email"
                 placeholder="Email" required>
                <label for="email">Email</label>

                <div class="valid-feedback">
                  Ok
                </div>
                <div class="invalid-feedback">
                  Debe ingresar un email válido.
                </div>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="celular" name="celular"
                 placeholder="999 000 00 00" required>
                <label for="celular">Celular</label>

                <div class="valid-feedback">
                  Ok
                </div>
                <div class="invalid-feedback">
                  El numero de telefono ingresado es inválido.
                </div>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="genero" name="genero"
                 placeholder="Masculino / Femenino" required>
                <label for="genero">Genero</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nacimiento" name="nacimiento"
                 placeholder="Año de nacimiento" required>
                <label for="nacimiento">Año de nacimiento</label>
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
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Registrar</button>
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

  //Funcion para validar el telefono
  function validarTelefono(parametro){
        var patron = /^\d{10}$/;

        if(!patron.test(parametro)){
          return false;
        }else{
          return true;
        }
      }

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }else if

        form.classList.add('was-validated')
      }, false)
    })
})()
    </script>

    <script>
      (

      var formulario = document.addForm;

      if (validarTelefono(formulario.celular.value) == false{

        formulario.celular.value="";
        formulario.celular.focus();

      } else{}

      ))
    </script>
  </body>
</html>