<?= $this->extend('layout/wrapper'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h1>History Data Service</h1>
                </div>

            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group row mt-1">
                        <label class="col-sm-4 col-form-label">No. SPK</label>
                        <div class="col-sm-8 ">
                            <form action="<?= base_url(); ?>/history/historySearch" method="POST" class="d-flex ">
                                <select class="form-control mr-2" name="id_spk">
                                    <option selected class="part">Choose id</option>
                                    <?= $i = 1; ?>
                                    <?php foreach ($dataSpk as $ds) : ?>
                                        <option value="<?= $ds['id']; ?>"><?= $ds['id']; ?>
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
                            <input type='text' class='form-control' value="<?= (!empty($fakk) ? $query['created_at'] : " ")  ?>" disabled>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row mt-1">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9 ">
                            <input type="text" class="form-control" value="<?= (!empty($fakk) ?  " " : $query['cust_name'])  ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= (!empty($fakk) ? $query['cust_address'] : " ")  ?>" disabled>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group row mt-1">
                        <label class="col-sm-3 col-form-label">Nopol</label>
                        <div class="col-sm-8 ">
                            <input type="text" class="form-control" value="<?= (!empty($fakk) ? $query['plat_number'] : " ")  ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label class="col-sm-3 col-form-label">MC</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?= (!empty($fakk) ? $query['mekanik'] : " ")  ?>" disabled>
                        </div>
                    </div>

                </div>

                <div class="col-md-2">
                    <div class="form-group row mt-1">
                        <label class="col-sm-3 col-form-label">SA</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?= (!empty($fakk) ? $query['ser_advisor'] : " ")  ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label class="col-sm-3 col-form-label">Type</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?= (!empty($fakk) ? $query['type_kendaraan'] : " ")  ?>" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Description -->
            <div class="card card-default">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 25%;">Description</th>
                                        <!-- <th style="width: 10px;">Qty</th> -->
                                        <th style="width: 25%;">Replacement Parts</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td><textarea name="" id="" cols="70" rows="5" value="" disabled><?= (!empty($fakk) ? $query['desc1'] . " , " . $query['desc2']  : "")  ?></textarea></td>

                                        <td><textarea name="" id="" cols="65" rows="5" disabled><?= (!empty($fakk) ? $query['part1'] . " , " . $query['part2']  . " , " . $query['part3'] : "")  ?></textarea></td>
                                        <!-- <td></td> -->
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td> <label class=" col-form-label">Total</label></td>
                                        <td> <input type="text" class="form-control" value="<?= (!empty($fakk) ? $query['akumulasi_total'] : "")  ?>" disabled></td>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Description -->

            <!-- total price -->
            <!-- <div class="col-md-12 pb-4">
                    <div class="form-group row mt-1 ">
                         <label class="col-sm-1 col-form-label">Total</label>
                         <div class="col-sm-5 ml-auto">
                              <input type="text" class="form-control" value="">
                         </div>
                    </div>
               </div> -->
        </div>
    </section>
</div>

<?= $this->endSection('content'); ?>

<!-- Main content -->
<!-- <section class="content">
          <div class="container-fluid">
               <div class="card card-default">
                    <div class="card-body">
                         <div class="row">
                              <div class="col-md-12">
                                   <table class="table table-bordered">
                                        <thead>
                                             <tr>
                                                  <th style="width: 25%;">Description</th>
                                                  <th style="width: 25%;">Replacement Parts</th>
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <tr>

                                                  <td><textarea name="" id="" cols="70" rows="5" value="" disabled><?= (!empty($query['desc1']) ? $query['desc1'] . " , " . $query['desc2']  : "")  ?></textarea></td>

                                                  <td><textarea name="" id="" cols="65" rows="5" disabled><?= (!empty($query['part1']) ? $query['part1'] . " , " . $query['part2']  . " , " . $query['part3'] : "")  ?></textarea></td>
                                             </tr>

                                        </tbody>
                                        <tfoot>
                                             <tr>
                                                  <td> <label class=" col-form-label">Total</label></td>
                                                  <td> <input type="text" class="form-control" value="<?= (!empty($query['akumulasi_total']) ? $query['akumulasi_total'] : $dataSpk['total'])  ?>" disabled></td>

                                             </tr>
                                        </tfoot>
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section> -->


<!-- <div class="col-md-4">
                         <div class="form-group row mt-1">
                              <label class="col-sm-3 col-form-label">Name</label>
                              <div class="col-sm-9 ">
                                   <input type="text" class="form-control" value="<?= (!empty($query['cust_name']) ? $query['cust_name'] : $dataSpk['cust_name'])  ?>" disabled>
                              </div>
                         </div>
                         <div class="form-group row mt-1">
                              <label class="col-sm-3 col-form-label">Address</label>
                              <div class="col-sm-9">
                                   <input type="text" class="form-control" value="<?= (!empty($query['cust_address']) ? $query['cust_address'] : $dataSpk['cust_address'])  ?>" disabled>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-3">
                         <div class="form-group row mt-1">
                              <label class="col-sm-3 col-form-label">Nopol</label>
                              <div class="col-sm-8 ">
                                   <input type="text" class="form-control" value="<?= (!empty($query['plat_number']) ? $query['plat_number'] : $dataSpk['plat_number'])  ?>" disabled>
                              </div>
                         </div>
                         <div class="form-group row mt-1">
                              <label class="col-sm-3 col-form-label">MC</label>
                              <div class="col-sm-8">
                                   <input type="text" class="form-control" value="<?= (!empty($query['mekanik']) ? $query['mekanik'] : $dataSpk['mekanik'])  ?>" disabled>
                              </div>
                         </div>

                    </div>
                    <div class="col-md-2">
                         <div class="form-group row mt-1">
                              <label class="col-sm-3 col-form-label">SA</label>
                              <div class="col-sm-8">
                                   <input type="text" class="form-control" value="<?= (!empty($query['ser_advisor']) ? $query['ser_advisor'] : $dataSpk['ser_advisor'])  ?>" disabled>
                              </div>
                         </div>
                         <div class="form-group row mt-1">
                              <label class="col-sm-3 col-form-label">Type</label>
                              <div class="col-sm-8">
                                   <input type="text" class="form-control" value="<?= (!empty($query['type_kendaraan']) ? $query['type_kendaraan'] : $dataSpk['type_kendaraan'])  ?>" disabled>
                              </div>
                         </div>
                    </div> -->