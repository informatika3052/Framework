<?= $this->extend('layout/wrapper'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
          <div class="container-fluid">
               <div class="row mb-2">
                    <div class="col-sm-6">
                         <h1>Stock SparePart</h1>
                    </div>
               </div>
          </div><!-- /.container-fluid -->
     </section>

     <!-- Main content -->
     <section class="content">
          <div class="container-fluid">
               <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#newParts">
                    Add New Parts
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
                                   <table class="table table-bordered">
                                        <thead>
                                             <tr>
                                                  <th style="width: 10px">#</th>
                                                  <th>ID Kode Part</th>
                                                  <th style="width: 30%;">Name Part</th>
                                                  <th>Harga Part</th>
                                                  <th style=" width: 20%;">Total Part</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                        <tbody>
                                             <?php $i = 1 + (4 * ($currentPage - 1)); ?>
                                             <?php foreach ($dataAllPart as $p) : ?>
                                                  <tr>
                                                       <td><?= $i++; ?></td>
                                                       <td><?= $p['kd_part']; ?></td>
                                                       <td><?= $p['name_part']; ?></td>
                                                       <td><?= $p['hr_part']; ?></td>
                                                       <td><?= $p['t_part']; ?></td>
                                                  </tr>
                                             <?php endforeach; ?>
                                        </tbody>
                                   </table>
                              </div>

                              <!-- Memanggil method link dengan mengisi data dari contoller method mekanik -->
                              <?= $pager->links('dataAllPart', 'orang_pagination') ?>

                              <!-- /.card-body -->
                              <!-- <div class="card-footer clearfix">
                                   <ul class="pagination pagination-sm m-0 float-right">
                                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                   </ul>
                              </div> -->
                         </div>
                    </div>
     </section>
</div>
<!-- /.card -->



<!-- mekanik modal -->
<div class="modal fade" id="newParts" tabindex="-1" aria-labelledby="newModalMekanikLabel" aria-hidden="true">
     <div class="modal-dialog">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="newModalMekanikLabel">Add New Parts</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>

               <div class="modal-body" id="modal-bodi">
                    <form action="<?= base_url(); ?>/master/addParts" method="POST">
                         <!-- <input type="hidden" name="idMekanik" id="idMekanik"> -->
                         <div class="form-group">
                              <label for="exampleInputKode">Kode</label>
                              <input type="text" class="form-control" id="exampleInputKode" name="kd_part" placeholder="Enter kode">
                         </div>
                         <div class="form-group">
                              <label for="exampleInputName">Name</label>
                              <input type="text" class="form-control" id="exampleInputName" name="name_part" placeholder="Enter name">
                         </div>
                         <div class="form-group">
                              <label for="exampleInputPrice">Price</label>
                              <input type="text" class="form-control" id="exampleInputPrice" name="hr_part" placeholder="Enter price">
                         </div>
                         <div class="form-group">
                              <label for="exampleInputPrice">Total</label>
                              <input type="text" class="form-control" id="exampleInputPrice" name="t_part" placeholder="Enter price">
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