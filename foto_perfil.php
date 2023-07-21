<?php require ('./layouts/header.php') ?>
<form action ="cambiar_foto_perfil.php" method ="POST" enctype="multipart/form-data">
  <div class="card">
      <div class="card-body pt-3">
        <!-- Bordered Tabs -->
        <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit" aria-selected="true" role="tab">Editar foto de perfil</button>
          </li>
        </ul>
          <div class="tab-pane fade profile-edit pt-3 active show text-center" id="profile-edit" role="tabpanel">
            <!-- Profile Edit Form -->
            <form>
              <div class="row mb-3 text-center">                     
                <div class="col-md-8 col-lg-9 text-center">
                  <img src="assets/img/me-removebg-preview.png" alt="Profile">
                  <div class="pt-2">
                    <input type="file" name="foto" id="foto"><br><br>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                </div>
              </div>                  
            </form><!-- End Profile Edit Form -->
          </div>
          <!-- End Bordered Tabs -->
      </div>
</form>
    <?php require ('./layouts/footer.php') ?>