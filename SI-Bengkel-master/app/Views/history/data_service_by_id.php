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

                            <input type='text' class='form-control' value="<?= $dataSpkByid['created_at'];  ?>" disabled>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row mt-1">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9 ">
                            <input type="text" class="form-control" value="<?= $dataSpkByid['cust_name'] ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= $dataSpkByid['cust_address']   ?>" disabled>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group row mt-1">
                        <label class="col-sm-3 col-form-label">Nopol</label>
                        <div class="col-sm-8 ">
                            <input type="text" class="form-control" value="<?= $dataSpkByid['plat_number']  ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label class="col-sm-3 col-form-label">MC</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?= $dataSpkByid['mekanik']   ?>" disabled>
                        </div>
                    </div>

                </div>

                <div class="col-md-2">
                    <div class="form-group row mt-1">
                        <label class="col-sm-3 col-form-label">SA</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?= $dataSpkByid['ser_advisor']  ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label class="col-sm-3 col-form-label">Type</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?= $dataSpkByid['type_kendaraan']  ?>" disabled>
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
                                        <!-- <th></th> -->
                                        <th style="width: 25%;">Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td><textarea name="" id="" cols="70" rows="5" value="" disabled><?= $dataSpkByid['desc1'] . " , " . $dataSpkByid['desc2']   ?></textarea></td>

                                        <td><textarea name="" id="" cols="65" rows="5" disabled><?= $dataSpkByid['price1'] . " , " . $dataSpkByid['price2']   ?></textarea></td>
                                        <!-- <td></td> -->
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="col-md-1"> <label class=" col-form-label">Total</label></td>
                                        <td class="col d-flex justify-content-between"> <input type="text" class="form-control col-md-7" value="<?= (!empty($dataSpkByid['total']) ? $dataSpkByid['total'] : "")  ?>" disabled>
                                            <div class="col">
                                                <button class="btn col-md-5 btn-primary" onclick="window.print()">
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
</div>

<?= $this->endSection('content'); ?>