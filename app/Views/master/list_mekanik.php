<?= $this->extend('layout/wrapper'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
          <div class="container-fluid">
               <div class="row mb-2">
                    <div class="col-sm-6">
                         <h1>List Mekanik</h1>
                    </div>
                    <!-- <div class="col-sm-6"> -->
                    <!-- <ol class="breadcrumb float-sm-right">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active">Simple Tables</li>
                         </ol> -->
                    <!-- </div> -->
               </div>
          </div><!-- /.container-fluid -->
     </section>

     <!-- Main content -->
     <section class="content">
          <div class="container-fluid">
               <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#newModalMekanik">
                    Add New Mekanik
               </button>
               <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-dismissible fade show alert-success col-md-4 d-flex justify-content-between " role="alert">
                         <p>
                              <?= session()->getFlashdata('pesan'); ?>
                         </p>
                         <button type="button" class="btn-closee ml-auto" data-dismiss="alert" aria-label="Close">X</button>
                    </div>
               <?php endif; ?>
               <div class="row">
                    <div class="col-md-8">
                         <div class="card">
                              <!-- /.card-header -->
                              <div class="card-body">
                                   <table class="table table-bordered" id="list-mekanik">
                                        <thead>
                                             <tr>
                                                  <th style="width: 10px">#</th>
                                                  <th>ID Mekanik</th>
                                                  <th style="width: 30%;">Name</th>
                                                  <th style="width: 20%;">Divisi</th>
                                                  <th>Action</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <?php $i = 1 + (4 * ($currentPage - 1)); ?>
                                             <?php foreach ($dataAllMekanik as $m) : ?>
                                                  <tr>
                                                       <td><?= $i++; ?></td>
                                                       <td><?= $m['id_mekanik']; ?></td>
                                                       <td><?= $m['name_mekanik']; ?></td>
                                                       <td><?= $m['divisi']; ?></td>
                                                       <td class="d-flex justify-content-between"><a href="<?= base_url('master/editMekanik/' . $m['id_mekanik']); ?>" class=" btn btn-warning tampil" data-toggle="modal" data-target="#newModalMekanik" data-bs-id="<?= $m['id_mekanik']; ?>">Edit</a>
                                                            <a href="<?= base_url('master/deleteMekanik/' . $m['id_mekanik']); ?>" class="btn btn-danger">Delete</a>
                                                       </td>
                                                  </tr>
                                             <?php endforeach; ?>
                                        </tbody>
                                   </table>
                              </div>
                              <!-- /.card-body -->

                              <!-- Memanggil method link dengan mengisi data dari contoller method mekanik -->
                              <?= $pager->links('dataAllMekanik', 'orang_pagination') ?>
                         </div>
                    </div>
               </div>
          </div>
     </section>
</div>
<!-- /.card -->



<!-- mekanik modal -->
<div class="modal fade" id="newModalMekanik" tabindex="-1" aria-labelledby="newModalMekanikLabel" aria-hidden="true">
     <div class="modal-dialog">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="newModalMekanikLabel">Add New Mekanik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>

               <div class="modal-body" id="modal-bodi">
                    <form action="<?= base_url(); ?>/master/addMekanik" method="POST">
                         <!-- <input type="hidden" name="idMekanik" id="idMekanik"> -->
                         <div class="form-group mb-3">
                              <input type="text" class="form-control" id="mekanikId" name="id_mekanik" placeholder="ID Mekanik" autocomplete="off">
                         </div>

                         <div class="form-group mb-3">
                              <input type="text" class="form-control" id="nameMekanik" name="name_mekanik" placeholder="Name Mekanik" autocomplete="off">
                         </div>

                         <div class="form-group mb-3">
                              <input type="text" class="form-control" id="divisi" name="divisi" placeholder="Divisi" autocomplete="off">
                         </div>
               </div>

               <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
               </div>
               </form>
          </div>
     </div>
</div>
<?= $this->endSection('content'); ?>