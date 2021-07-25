<?= $this->extend('layout/wrapper'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <form action="<?= base_url(); ?>/customer/addRequestOrder" method="POST">
          <section class="content-header">
               <div class="container-fluid">
                    <div class="row mb-2">
                         <div class="col-sm-6">
                              <h1>Request Order</h1>
                         </div>
                    </div>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                         <div class="alert alert-dismissible fade show alert-success col-md-4 d-flex justify-content-between " role="alert">
                              <p>
                                   <?= session()->getFlashdata('pesan'); ?>
                              </p>
                              <button type="button" class="btn-closee ml-auto" data-dismiss="alert" aria-label="Close">X</button>
                         </div>
                    <?php endif; ?>
                    <div class="row">
                         <div class="form-group col-md-4">
                              <label class="col-sm-4 col-form-label">No. SPK</label>
                              <div class="col">
                                   <select class="form-control" name="id_spk">
                                        <option selected class="part">Choose No SPK</option>
                                        <?= $i = 1; ?>
                                        <?php foreach ($dataSpk as $ds) : ?>
                                             <option value="<?= $ds['id']; ?> "><?= $ds['id']; ?></option>
                                        <?php endforeach; ?>
                                   </select>
                                   <!-- <input type="text" class="form-control" value="" name="no_spk"> -->
                              </div>
                         </div>
                         <div class="form-group col-md-4">
                              <label class="col-sm-4 col-form-label">Nopol</label>
                              <div class="col">
                                   <select class="form-control" name="nopol">
                                        <option selected class="part">Choose Nopol</option>
                                        <?= $i = 1; ?>
                                        <?php foreach ($dataSpk as $ds) : ?>
                                             <option value="<?= $ds['plat_number']; ?> "><?= $ds['plat_number']; ?></option>
                                        <?php endforeach; ?>
                                   </select>
                              </div>
                         </div>

                    </div>
               </div><!-- /.container-fluid -->
          </section>

          <!-- Main content -->
          <section class="content">
               <div class="container-fluid">
                    <!-- SELECT2 EXAMPLE -->

                    <!-- parts -->
                    <div class="row">
                         <div class="col-md-10">
                              <!-- PARTS -->
                              <div class="card">
                                   <div class="card-body">
                                        <table class="table table-bordered">
                                             <thead>
                                                  <tr>
                                                       <th style="width: 60%;">Parts</th>
                                                       <th style="width: 10px;">Qty</th>
                                                       <th style="width: 20%;">per pcs</th>
                                                       <th style="width: 50%;">Total</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <tr>
                                                       <td>
                                                            <select class="form-control part1" name="part1">
                                                                 <option selected class="part">Choose Parts</option>
                                                                 <?= $i = 1; ?>
                                                                 <?php foreach ($dataAllPart as $n) : ?>
                                                                      <option value="<?= $n['kd_part']; ?> "><?= $n['kd_part']; ?></option>
                                                                 <?php endforeach; ?>
                                                            </select>
                                                       </td>
                                                       <td><input type="text" style="width: 100%;" name="qty1" class="qty1"></td>
                                                       <td><input name="perPcs1" type="text" class="form-control perPcs1 " style="width: 100%;"></td>
                                                       <td><input class="total1 form-control" name="total1"></td>
                                                  </tr>
                                                  <tr>

                                                       <td>
                                                            <select class="form-control part2" name="part2">
                                                                 <option selected class="part">Choose Parts</option>
                                                                 <?= $i = 1; ?>
                                                                 <?php foreach ($dataAllPart as $n) : ?>
                                                                      <option value="<?= $n['kd_part']; ?> "><?= $n['kd_part']; ?></option>
                                                                 <?php endforeach; ?>
                                                            </select>
                                                       </td>
                                                       <td><input type="text" style="width: 100%;" name="qty2" class="qty2"> </td>
                                                       <td><input name="perPcs2" type="text" class="form-control perPcs2" style="width: 100%;"></td>
                                                       <td><input class="total2 form-control" name="total2"></td>
                                                  </tr>
                                                  <tr>

                                                       <td>
                                                            <select class="form-control part3" name="part3">
                                                                 <option selected class="part">Choose Parts</option>
                                                                 <?= $i = 1; ?>
                                                                 <?php foreach ($dataAllPart as $n) : ?>
                                                                      <option value="<?= $n['kd_part']; ?> "><?= $n['kd_part']; ?></option>
                                                                 <?php endforeach; ?>
                                                            </select>
                                                       </td>
                                                       <td><input type="text" style="width: 100%;" name="qty3" class="qty3"></td>
                                                       <td><input name="perPcs3" type="text" class="form-control perPcs3" style="width: 100%;"></td>
                                                       <td><input class="total3 form-control" name="total3"></td>
                                                  </tr>


                                             </tbody>
                                             <tfoot>
                                                  <tr>
                                                       <th colspan="3">Total</th>
                                                       <td><input name="akumulasi_total" class="form-control  akumulasi_total"></td>
                                                  </tr>

                                             </tfoot>
                                        </table>
                                   </div>
                              </div>
                              <input type="hidden" value="<?= date('d F Y'); ?>" name="tgl_req_order">
                              <!-- END PARTS -->
                              <button type="submit" class="btn btn-primary float-right" style="width: 10%;">Save</button>
                         </div>
                    </div>
               </div>
          </section>
     </form>
</div>


<?= $this->endSection('content'); ?>


<!-- EQUIPMENT -->
<!-- <div class="card">
                              <div class="card-body">
                                   <table class="table table-bordered">
                                        <thead>
                                             <tr>
                                                  <th style="width: 60%;">Materials</th>
                                                  <th style="width: 10px;">Qty</th>
                                                  <th style="width: 20%;">per pcs</th>
                                                  <th style="width: 50%;">Total</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <tr>

                                                  <td><input type="text" style="width: 100%;"></td>
                                                  <td><input type="text" style="width: 100%;"></td>
                                                  <td><input type="text" style="width: 100%;"></td>
                                                  <td></td>
                                             </tr>
                                             <tr>

                                                  <td><input type="text" style="width: 100%;"></td>
                                                  <td><input type="text" style="width: 100%;"></td>
                                                  <td><input type="text" style="width: 100%;"></td>
                                                  <td></td>
                                             </tr>
                                             <tr>

                                                  <td><input type="text" style="width: 100%;"></td>
                                                  <td><input type="text" style="width: 100%;"></td>
                                                  <td><input type="text" style="width: 100%;"></td>
                                                  <td></td>
                                             </tr>
                                        </tbody>
                                        <tfoot>
                                             <tr>
                                                  <th colspan="3">Total</th>
                                                  <td></td>
                                             </tr>

                                        </tfoot>
                                   </table>
                              </div>
                         </div> -->
<!-- END EQUIPMENT -->