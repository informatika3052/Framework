<?= $this->extend('layout/wrapper'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
          <div class="container-fluid">
               <div class="row mb-2">
                    <div class="col-sm-6">
                         <h1>SPK Service</h1>
                    </div>

               </div>
          </div><!-- /.container-fluid -->
     </section>

     <!-- Main content -->
     <section class="content">
          <div class="container-fluid">
               <!-- SELECT2 EXAMPLE -->
               <div class="card card-default">
                    <form action="<?= base_url(); ?>/customer/createSpk" method="POST">
                         <div class="card-body">
                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-group">
                                             <label for="exampleNopol">Plat Number</label>
                                             <input type="text" name="plat_number" class="form-control" id="exampleNopol">
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="form-group">
                                             <label for="exampleCustName">Customer Name</label>
                                             <input type="text" name="cust_name" class="form-control" id="exampleCustName">
                                        </div>
                                        <div class="form-group">
                                             <label for="exampleCustAddress">Customer Address</label>
                                             <input type="text" name="cust_address" class="form-control" id="exampleCustAddress">
                                        </div>
                                        <!-- /.form-group -->
                                   </div>
                                   <!-- /.col -->
                                   <div class="col-md-6">
                                        <div class="form-group ml-4">
                                             <label for="exampleEngine">Mekanik</label>
                                             <select class="form-control" name="mekanik">
                                                  <option selected>Choose Mekanik</option>
                                                  <?= $i = 1; ?>
                                                  <?php foreach ($nameMekanik as $n) : ?>
                                                       <option value="<?= $n['name_mekanik']; ?> "><?= $n['name_mekanik']; ?></option>
                                                  <?php endforeach; ?>
                                             </select>
                                        </div>
                                        <div class="form-group ml-4">
                                             <label for="exampleEngine">Type Kendaraan</label>
                                             <input type="text" name="type_kendaraan" class="form-control" id="exampleEngine">
                                        </div>
                                        <div class="form-group ml-4">
                                             <label for="exampleSA">Service Advisor</label>
                                             <input type="text" name="ser_advisor" class="form-control" id="exampleSA">
                                        </div>
                                   </div>

                                   <table class="table table-bordered mt-3">
                                        <thead>
                                             <tr>
                                                  <!-- <th style="width: 10px">#</th> -->
                                                  <th style="width: 50%;">Description</th>
                                                  <th style="width: 50%;">Price</th>
                                                  <!-- <th style="width: 20%;">Divisi</th> -->
                                                  <!-- <th>Action</th> -->
                                             </tr>
                                        </thead>
                                        <tbody>
                                             <tr>
                                                  <td><textarea name="desc1" id="desc1" cols="70" rows="1"></textarea></td>
                                                  <td><textarea name="price1" class="price" id="price1" cols="65" rows="1"></textarea></td>
                                             </tr>
                                             <tr>
                                                  <td><textarea name="desc2" id="desc2" cols="70" rows="1"></textarea></td>
                                                  <td><textarea name="price2" class="price" id="price2" cols="65" rows="1"></textarea></td>
                                             </tr>

                                             <tr>
                                                  <td style="font-weight:bold">Total</td>
                                                  <td>
                                                       <input type="text" id="total" class="form-control" name="total">
                                                  </td>
                                             </tr>
                                             <input type="hidden" name="created_at" value="<?= date('d F Y'); ?>">
                                        </tbody>
                                   </table>
                              </div>
                              <button type="submit" class="btn btn-primary float-right">Create</button>
                         </div>
                    </form>
               </div>
          </div>
     </section>
</div>
<?= $this->endSection('content'); ?>