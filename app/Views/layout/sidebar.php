<aside class="main-sidebar sidebar-dark-primary elevation-4 bg-gradient-navy">
     <!-- Brand Logo -->
     <a href="../../index3.html" class="brand-link">
          <img src="<?= base_url() ?>/template/docs/assets/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
          <span class="brand-text font-weight-bold text-danger">D '</span><span class="bengkel font-weight-bold"> G a r a g e</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
          <!-- Sidebar user (optional) -->

          <!-- Sidebar Menu -->
          <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-header">Data Master</li>
                    <li class="nav-item">
                         <a href="<?= base_url(); ?>/master" class="nav-link">
                              <i class="nav-icon fas fa-fw fa-toolbox"></i>
                              <p>
                                   Spareparts
                                   <i class="right fas fa-angle-left"></i>
                              </p>
                         </a>
                         <ul class="nav nav-treeview">
                              <li class="nav-item">
                                   <a href="<?= base_url(); ?>/master" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Stock Spareparts</p>
                                   </a>
                              </li>
                         </ul>
                         <!-- <ul class="nav nav-treeview">
                              <li class="nav-item">
                                   <a href="<?= base_url(); ?>/master/addParts" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Input Spareparts</p>
                                   </a>
                              </li>
                         </ul> -->
                    </li>
                    <li class="nav-item">
                         <a href="<?= base_url(); ?>/master/mekanik" class="nav-link">
                              <i class="nav-icon fas fa-fw fa-user"></i>
                              <p>
                                   Mekanik
                                   <!-- <span class="right badge badge-danger">New</span> -->
                              </p>
                         </a>
                    </li>

                    <li class="nav-header">Data Customer</li>
                    <li class="nav-item">
                         <a href="<?= base_url(); ?>/customer" class="nav-link">
                              <i class="nav-icon fas fa-fw fa-file-invoice"></i>
                              <p>
                                   Customer SPK
                                   <!-- <span class="badge badge-info right">2</span> -->
                              </p>
                         </a>
                    </li>
                    <li class="nav-item">
                         <a href="<?= base_url(); ?>/customer/spk" class="nav-link">
                              <i class="nav-icon fas fa-fw fa-file-contract"></i>
                              <p>
                                   Create SPK
                              </p>
                         </a>
                    </li>
                    <li class="nav-item">
                         <a href="<?= base_url(); ?>/customer/request" class="nav-link">
                              <i class="nav-icon fas fa-fw fa-file-contract"></i>
                              <p>
                                   Request Order
                              </p>
                         </a>
                    </li>


                    <li class="nav-header">History</li>
                    <li class="nav-item">
                         <a href="<?= base_url(); ?>/history" class="nav-link">
                              <i class="nav-icon fas fa-chart-pie"></i>
                              <p>
                                   History Record

                              </p>
                         </a>
                    </li>
                    <li class="nav-item">
                         <a href="<?= base_url(); ?>/home/logout" class="nav-link">
                              <i class="nav-icon fas fa-sign-out-alt"></i>
                              <p>
                                   Logout
                              </p>
                         </a>
                    </li>

               </ul>
          </nav>
          <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
</aside>