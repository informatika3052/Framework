<?= $this->extend('layout/wrapper'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
          <div class="container-fluid">
               <div class="row mb-2">
                    <div class="col-md-8">
                         <h1>SPK List</h1>
                    </div>
                    <div class="col-md-4 mt-5">
                         <div class="form-group col-md-6" style="margin-right:80%">
                              <label for="exampleDate">Date : <?= date('d F Y'); ?></label>
                              <!-- <select class="form-control" id="exampleDate">
                                   <option>1</option>
                                   <option>2</option>
                                   <option>3</option> -->
                         </div>
                    </div>
               </div>
          </div><!-- /.container-fluid -->
     </section>


     <!-- Main content -->
     <section class="content">
          <div class="container-fluid">
               <div class="row">
                    <div class="col-md-12">
                         <div class="card">
                              <div class="card-body">
                                   <table class="table table-bordered">
                                        <thead>
                                             <tr>
                                                  <th style="width: 5%">#</th>
                                                  <th style="width: 15%;">Plat Number</th>
                                                  <th style="width: 20%;">Task</th>
                                                  <th style="width: 10%;">Service Advisor</th>
                                                  <th style="width: 10%;">Mekanik</th>
                                                  <th style="width: 10%;">Tanggal</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <?php $i = 1 + (4 * ($currentPage - 1)); ?>
                                             <?php foreach ($dataSpk as $spk) : ?>
                                                  <tr>
                                                       <td><?= $i++; ?></td>
                                                       <td><?= $spk['plat_number']; ?></td>
                                                       <td><?= $spk['desc1'] . ' ,' . $spk['desc2']; ?></td>
                                                       <td><?= $spk['ser_advisor']; ?></td>
                                                       <td><?= $spk['mekanik']; ?></td>
                                                       <td><?= $spk['created_at']; ?></td>
                                                  </tr>
                                             <?php endforeach; ?>
                                        </tbody>
                                   </table>
                              </div>

                              <?= $pager->links('dataSpk', 'orang_pagination') ?>
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

<?= $this->endSection('content'); ?>