<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>AdminLTE 3 | Blank Page</title>
      <!--// include header resouces -->
      <?php include 'includes/header_resources.php';?>
   </head>
   <body class="hold-transition sidebar-mini">
      <!-- Site wrapper -->
      <div class="wrapper">
         <!--// include top navbar -->
         <?php include 'includes/top_navbar.php';?>
         <!-- include left sidebar -->
         <?php include 'includes/left_sidebar.php';?>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1>General Info</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="./">Home</a></li>
                           <li class="breadcrumb-item active">General Info</li>
                        </ol>
                     </div>
                  </div>
               </div>
               <!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
               <!-- Default box -->
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">Manage General Info</h3>
                     <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                        </button>
                     </div>
                  </div>
                  <div class="card-body">
                     <form class="validate-form" method="post" action="#" id="quickForm" autocomplete="off">
                        <div class="card-body">
                           <div class="row">
                              <div class="col-12">
                                 <button type="submit" class="btn btn-primary save-btn float-right">
                                    <i class="fas fa-save"></i> Save
                                 </button>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label for="AppName">App Name</label>
                                    <input type="text" name="AppName" class="form-control" id="AppName" required>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label for="PrimaryEmail">Primary Email</label>
                                    <input type="text" name="PrimaryEmail" class="form-control" id="PrimaryEmail" required>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label for="OptionalEmail">Optional Email</label>
                                    <input type="text" name="OptionalEmail" class="form-control" id="OptionalEmail">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label for="Address">Address</label>
                                    <textarea class="form-control" name="Address" id="Address" required></textarea>
                                 </div>
                              </div>
                              <div class="col-md-2">
                                 <div class="form-group">
                                    <label for="CountryCode">Phone Country Code</label>
                                    <input type="text" name="CountryCode" class="form-control" id="CountryCode" required>
                                 </div>
                              </div>
                              <div class="col-md-5">
                                 <div class="form-group">
                                    <label for="PrimaryPhone">Primary Phone</label>
                                    <input type="text" name="PrimaryPhone" class="form-control" id="PrimaryPhone" required>
                                 </div>
                              </div>
                              <div class="col-md-5">
                                 <div class="form-group">
                                    <label for="OptionalPhone">Optional Phone</label>
                                    <input type="text" name="OptionalPhone" class="form-control" id="OptionalPhone">
                                 </div>
                              </div>
                              <div class="col-md-8">
                              <label for="Logo">Logo <small>(suported formats: jpg, jpeg, png, gif)</small></label>
                                 <div class="custom-file">
                                    <input type="file" name="Logo" class="custom-file-input accept-imgs" id="Logo">
                                    <label class="custom-file-label" for="Logo">Choose file</label>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <label for="Logo">Favicon <small>(suported formats: jpg, jpeg, png, gif)</small></label>
                                 <div class="custom-file">
                                    <input type="file" name="Favicon" class="custom-file-input accept-imgs" id="Favicon">
                                    <label class="custom-file-label" for="Favicon">Choose file</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
                  <!-- /.card-body -->
               </div>
               <!-- /.card -->
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <!--// include footer -->
         <?php include 'includes/footer.php';?>
         <!-- Control Sidebar -->
         <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
         </aside>
         <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
      <!--// include footer resources -->
      <?php include 'includes/footer_resources.php';?>
   </body>
</html>