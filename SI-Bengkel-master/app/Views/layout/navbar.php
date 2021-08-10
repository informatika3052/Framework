<!-- Site wrapper -->
<div class="wrapper">
     <!-- Navbar -->
     <nav class="main-header navbar navbar-expand navbar-dark navbar-dark bg-gradient-navy">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
               <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
               </li>
          </ul>

          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto">
               <!-- Navbar Search -->
               <li class="nav-item">
                    <div class="user-panel  d-flex">
                         <div class="image">
                              <img src="<?= base_url() ?>/template/docs/assets/img/image-6.jpg" class="img-circle elevation-2" alt="User Image">
                         </div>
                         <div class="info">
                              <a href="#" class="d-block"><?= $user; ?></a>
                         </div>
                    </div>
               </li>
               <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                         <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                         <form class="form-inline">
                              <div class="input-group input-group-sm">
                                   <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                   <div class="input-group-append">

                                        <button class="btn btn-navbar" type="submit">
                                             <i class="fas fa-search"></i>
                                        </button>
                                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                             <i class="fas fa-times"></i>
                                        </button>
                                   </div>
                              </div>
                         </form>
                    </div>
               </li>
          </ul>
     </nav>
     <!-- /.navbar -->