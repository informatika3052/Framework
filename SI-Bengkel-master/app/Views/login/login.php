<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>D'Garage</title>

     <!-- Google Font: Source Sans Pro -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="<?= base_url(); ?>/template/plugins/fontawesome-free/css/all.min.css">
     <!-- icheck bootstrap -->
     <link rel="stylesheet" href="<?= base_url(); ?>/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
     <!-- Theme style -->
     <link rel="stylesheet" href="<?= base_url(); ?>/template/docs/assets/css/adminlte.min.css">
     <link rel="stylesheet" href="<?= base_url(); ?>/template/docs/assets/css/style.css">
</head>

<body class="hold-transition login-page ">
     <div class="login-box">
          <!-- /.login-logo -->
          <div class="card card-outline card-dark">
               <div class="card-header text-center">
                    <h4 class="h1 text-danger text-bold">D '<span class="garasi text-bold text-dark">G a r a g e</span></h4>
               </div>
               <div class="card-body">
                    <?php if (session()->getFlashdata('pesan')) : ?>
                         <div class="alert alert-dismissible fade show alert-danger" role="alert">
                              <?= session()->getFlashdata('pesan'); ?>
                         </div>
                    <?php endif; ?>
                    <form method="POST" action="<?= base_url('home/validateLogin'); ?>">
                         <div class="input-group mb-3">
                              <input type="text" id="email" class="form-control" name="email" placeholder="Email" value="<?= old('email'); ?>">
                              <div class="input-group-append">
                                   <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                   </div>
                              </div>
                         </div>
                         <p class=" text-danger ml-2 mt-1"> <?= $validation->getError('email'); ?></p>
                         <div class="input-group mb-3">
                              <input type="password" class="form-control " id="password" name="password" placeholder="Password" value="<?= old('password'); ?>">
                              <div class="input-group-append">
                                   <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                   </div>
                              </div>
                         </div>
                         <p class=" text-danger ml-2 mt-1"> <?= $validation->getError('password'); ?></p>
                         <div class="row">
                              <!-- <div class="col-6"> -->
                              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                              <!-- </div> -->

                         </div>
                    </form>

               </div>
               <!-- /.card-body -->
          </div>
          <!-- /.card -->
     </div>
     <!-- /.login-box -->

     <!-- jQuery -->
     <script src="<?= base_url(); ?>/template/plugins/jquery/jquery.min.js"></script>
     <!-- Bootstrap 4 -->
     <script src="<?= base_url(); ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
     <!-- AdminLTE App -->
     <script src="<?= base_url(); ?>/template/dist/js/adminlte.min.js"></script>
</body>

</html>