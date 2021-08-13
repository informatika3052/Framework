<?= $this->extend('layout/wrapper'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content content-header header-print">
          <div class="container-fluid">
               <div class="row py-3">
                    <div class="col-sm-6">
                         <h1>History Data Service</h1>
                    </div>
               </div>

               <div class="row d-print-block">
                    <div class="col-md-3">
                         <div class="form-group row mt-1">
                              <label class="col-sm-4 col-form-label">No. SPK</label>
                              <div class="col-sm-8 ">
                                   <form action="<?= base_url(); ?>/history/historySearch" method="POST" class="d-flex ">
                                        <select class="form-control mr-2" name="id_spk">
                                             <option selected class="part">Choose id</option>
                                             <?= $i = 1; ?>
                                             <?php foreach ($dataSpk as $ds) : ?>
                                                  <option value="<?= $ds['spk_id']; ?>"><?= $ds['spk_id']; ?>
                                                  </option>
                                             <?php endforeach; ?>
                                        </select>
                                        <button class="btn btn-primary " type="submit">
                                             <i class="fas fa-search"></i>
                                        </button>
                                   </form>
                              </div>
                         </div>
                         <div class="form-group row" style="margin-top: 2%;">
                              <label class="col-sm-4 col-form-label">Date</label>
                              <div class="col-sm-8">

                                   <input type='text' class='form-control' value="<?= (!empty($query['created_at']) ? $query['created_at'] : " ")  ?>" disabled>

                              </div>
                         </div>
                    </div>
                    <div class="col-md-4">
                         <div class="form-group row mt-1">
                              <label class="col-sm-3 col-form-label">Name</label>
                              <div class="col-sm-9 ">
                                   <input type="text" class="form-control" value="<?= (!empty($query['cust_name']) ? $query['cust_name'] : " ")  ?>" disabled>
                              </div>
                         </div>
                         <div class="form-group row mt-1">
                              <label class="col-sm-3 col-form-label">Address</label>
                              <div class="col-sm-9">
                                   <input type="text" class="form-control" value="<?= (!empty($query['cust_address']) ? $query['cust_address'] : " ")  ?>" disabled>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-3">
                         <div class="form-group row mt-1">
                              <label class="col-sm-3 col-form-label">Nopol</label>
                              <div class="col-sm-8 ">
                                   <input type="text" class="form-control" value="<?= (!empty($query['plat_number']) ? $query['plat_number'] : " ")  ?>" disabled>
                              </div>
                         </div>
                         <div class="form-group row mt-1">
                              <label class="col-sm-3 col-form-label">MC</label>
                              <div class="col-sm-8">
                                   <input type="text" class="form-control" value="<?= (!empty($query['mekanik']) ? $query['mekanik'] : " ")  ?>" disabled>
                              </div>
                         </div>

                    </div>

                    <div class="col-md-2">
                         <div class="form-group row mt-1">
                              <label class="col-sm-3 col-form-label">SA</label>
                              <div class="col-sm-8">
                                   <input type="text" class="form-control" value="<?= (!empty($query['ser_advisor']) ? $query['ser_advisor'] : " ")  ?>" disabled>
                              </div>
                         </div>
                         <div class="form-group row mt-1">
                              <label class="col-sm-3 col-form-label">Type</label>
                              <div class="col-sm-8">
                                   <input type="text" class="form-control" value="<?= (!empty($query['type_kendaraan']) ? $query['type_kendaraan'] : " ")  ?>" disabled>
                              </div>
                         </div>
                    </div>
               </div>
          </div><!-- /.container-fluid -->
     </section>
     <br>
     <hr>
     <!-- Main content -->
     <section class="content">
          <div class="container-fluid">
               <!-- Description -->
               <div class="card card-default">
                    <div class="card-body">
                         <div class="row">
                              <div class="col-md-12">
                                   <table class="table table-bordered table-responsive">
                                        <thead>
                                             <tr>
                                                  <th style="width: 25%;">Replacement Parts</th>
                                                  <th style="width: 20%;">Cost</th>
                                                  <th style="width: 25%;">Description</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <tr>
                                                  <td><textarea name="" id="" cols="40" rows="5" value="" disabled><?= (!empty($query['part1']) ? $query['part1'] . " , " . $query['part2']  . " , " . $query['part3'] : "")  ?></textarea></td>


                                                  // <td><textarea name="" id="" cols="40" rows="5" disabled><?= (!empty($query['total1']) ? $query['total1'] . " , " . $query['total2']  . " , " . $query['total3'] : "")  ?></textarea></td>

                                                  <td><textarea name="" id="" cols="40" rows="5" value="" disabled><?= (!empty($query) ? $query['desc1'] . " , " . $query['desc2']  : "")  ?></textarea></td>


                                                  <!-- <td></td> -->
                                             </tr>

                                        </tbody>
                                        <tbody>
                                             <tr>
                                                  <td><label class=" col-form-label">Sub Total</label></td>
                                                  <td> <input type="text" class="form-control" value="<?= (!empty($query['akumulasi_total']) ? $query['akumulasi_total'] : "")  ?>" disabled>
                                                  </td>

                                                  <td> <input type="text" class="form-control" value="<?= (!empty($query['total']) ? $query['total'] : "")  ?>" disabled>
                                                  </td>

                                             </tr>
                                        </tbody>
                                        <tfoot>
                                             <tr>

                                                  <td> <label class=" col-form-label">Total</label></td>
                                                  <td> <input type="text" class="form-control" value="<?= (!empty($totalAkhir) ? $totalAkhir : "")  ?>" disabled></td>
                                                  <td>
                                                       <div class="col">
                                                            <button class="btn col btn-primary" target="_BLANK" onclick="window.print()">
                                                                 Cetak
                                                            </button>
                                                       </div>
                                                  </td>
                                             </tr>
                                        </tfoot>
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>




     <!-- PRINTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTT -->


     <div class="print-history">
          <div class="row mt-2">
               <div class="col-md-8 mt-5 header">
                    <h2>Bengkel D'GARAGE</h2>
                    <h4>Jalan Terbaik 3 no 77</h4>
                    <p>Telp : 08181818186</p>
               </div>
               <div class="col-md-3 me-2">
                    <img src="<?= base_url(); ?>/template/docs/assets/img/printImg.png" alt="" class=" img-none-border img-thumbnail">
               </div>
          </div>
          <hr>
          <h2 class="text-center sn">Service Note</h2>
          <div class="sn1"></div>
          <section class="printsec">
               <div class="row d-flex con-wrapper">
                    <div class="col-md-5 ">
                         <form class="rowmt-1 ">
                              <div class="col d-flex">
                                   <label for="staticEmail2" class="col-md-4">No.SPK </label>
                                   <span class="col-md-2">:</span>
                                   <p> <?= (!empty($ds['id']) ? $ds['id'] : " "); ?></p>
                              </div>
                         </form>
                         <form class="rowmt-1 ">
                              <div class="col d-flex">
                                   <label for="staticEmail2" class="col-md-4">Tgl Transaksi </label>
                                   <span class="col-md-2">:</span>
                                   <p> <?= (!empty($query['created_at']) ? $query['created_at'] : " "); ?></p>
                              </div>
                         </form>
                         <form class="rowmt-1 ">
                              <div class="col d-flex">
                                   <label for="staticEmail2" class="col-md-4">Service Advisor </label>
                                   <span class="col-md-2">:</span>
                                   <p> <?= (!empty($query['ser_advisor']) ? $query['ser_advisor'] : " "); ?></p>
                              </div>
                         </form>
                         <form class="rowmt-1 ">
                              <div class="col d-flex">
                                   <label for="staticEmail2" class="col-md-4">Mekanik </label>
                                   <span class="col-md-2">:</span>
                                   <p> <?= (!empty($query['mekanik']) ? $query['mekanik'] : " "); ?></p>
                              </div>
                         </form>
                    </div>
                    <div class="col-md-5 ms-auto con1">
                         <form class="rowmt-1 ">
                              <div class="col d-flex">
                                   <label for="staticEmail2" class="col-md-4 ">Cust Name </label>
                                   <span class="col-md-2 ">:</span>
                                   <p> <?= (!empty($query['cust_name']) ? $query['cust_name'] : " "); ?></p>
                              </div>
                         </form>
                         <form class="rowmt-1 ">
                              <div class="col d-flex">
                                   <label for="staticEmail2" class="col-md-4 ">Address </label>
                                   <span class="col-md-2 ">:</span>
                                   <p> <?= (!empty($query['cust_address']) ? $query['cust_address'] : " "); ?></p>
                              </div>
                         </form>
                         <form class="rowmt-1 ">
                              <div class="col d-flex">
                                   <label for="staticEmail2" class="col-md-4 ">Type </label>
                                   <span class="col-md-2 ">:</span>
                                   <p> <?= (!empty($query['type_kendaraan']) ? $query['type_kendaraan'] : " "); ?></p>
                              </div>
                         </form>
                         <form class="rowmt-1 ">
                              <div class="col d-flex">
                                   <label for="staticEmail2" class="col-md-4 ">Nopol </label>
                                   <span class="col-md-2 ">:</span>
                                   <p> <?= (!empty($query['plat_number']) ? $query['plat_number'] : " "); ?></p>
                              </div>
                         </form>
                    </div>
               </div>
          </section>
          <div class="row">
               <div class="col">
                    <table class="table mt-5 table-striped table-bordered">
                         <thead>
                              <tr class="active">
                                   <th scope="col" style="width: 5%">No.</th>
                                   <th scope="col" style="width: 30%;">Jasa/Part</th>
                                   <th scope="col" style="width: 35%;">qty</th>
                                   <th scope="col" style="width: 30%;">Price</th>
                              </tr>
                         </thead>
                         <tbody>
                              <tr>
                                   <td><?= (!empty(1) ? 1 : ""); ?></td>
                                   <td> <?= (!empty($query['desc1']) ? $query['desc1'] : "") ?></td>
                                   <td> <?= (!empty($query['qty1']) ? $query['qty1'] : "") ?></td>
                                   <td> <?= (!empty($query['price1']) ? $query['price1'] : "") ?></td>
                              </tr>
                              <tr>
                                   <td><?= (!empty(2) ? 2 : ""); ?></td>
                                   <td> <?= (!empty($query['desc2']) ? $query['desc2'] : "") ?></td>
                                   <td> <?= (!empty($query['qty2']) ? $query['qty2'] : "") ?></td>
                                   <td> <?= (!empty($query['price2']) ? $query['price2'] : "") ?></td>
                              </tr>
                              <tr>

                              </tr>
                         </tbody>
                    </table>
               </div>
          </div>

          <div class="row content-print">
               <div class=" offset-md-6 col-md-5">
                    <form class="rowmt-1 ">
                         <div class="col d-flex">
                              <label for="staticEmail2" class="col-md-4 ">Total Cost</label>
                              <span class="col-md-2 ">:</span>
                              <p> <?= (!empty($totalAkhir) ? $totalAkhir : " "); ?></p>
                         </div>
                    </form>
               </div>
          </div>
          <br>
          <div class="row  mt-5 d-flex justify-content-between print-tanda">
               <div class="col-md-3">
                    <h4 class="text-center">Tanda Terima</h4>
                    <br><br><br>
                    <hr class="mt-5 ">
               </div>
               <div class="col-md-3">
                    <h4 class="text-center">Hormat Kami</h4>
                    <br><br><br>
                    <hr class="mt-5 ">
               </div>
          </div>
     </div>

</div>


<?= $this->endSection('content'); ?>