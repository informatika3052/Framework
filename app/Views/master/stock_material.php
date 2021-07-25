<?= $this->extend('layout/wrapper'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
          <div class="container-fluid">
               <div class="row mb-2">
                    <div class="col-sm-6">
                         <h1>Input Materials</h1>
                    </div>
                    <div class="col-sm-6">
                         <!-- <ol class="breadcrumb float-sm-right">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active">General Form</li>
                         </ol> -->
                    </div>
               </div>
          </div><!-- /.container-fluid -->
     </section>

     <!-- Main content -->
     <section class="content">
          <div class="container-fluid">
               <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                         <!-- general form elements -->
                         <div class="card card-primary">
                              <!-- <div class="card-header">
                                   <h3 class="card-title">Quick Example</h3>
                              </div> -->
                              <!-- /.card-header -->
                              <!-- form start -->
                              <form>
                                   <div class="card-body">
                                        <div class="form-group">
                                             <label for="exampleInputKode">Kode</label>
                                             <input type="text" class="form-control" id="exampleInputKode" placeholder="Enter kode">
                                        </div>
                                        <div class="form-group">
                                             <label for="exampleInputName">Name</label>
                                             <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name">
                                        </div>
                                        <div class="form-group">
                                             <label for="exampleInputPrice">Price</label>
                                             <input type="text" class="form-control" id="exampleInputPrice" placeholder="Enter price">
                                        </div>

                                   </div>
                                   <!-- /.card-body -->

                                   <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
     </section>
</div>

<?= $this->endSection('content'); ?>