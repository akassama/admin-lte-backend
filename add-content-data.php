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
                        <h1>Add Content Data</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="./">Home</a></li>
                           <li class="breadcrumb-item"><a href="content-data.php">Content Data</a></li>
                           <li class="breadcrumb-item active">Add Content Data</li>
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
                     <h3 class="card-title">Add Content Data</h3>
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
                              <div class="form-group col-md-6">
                                 <label for="Title">Title</label>
                                 <input type="text" name="Title" class="form-control" id="Name" required>
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="Identifier">Identifier</label>
                                 <input type="text" name="Identifier" class="form-control" id="Identifier" required>
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="Value">Value</label>
                                 <textarea name="Value" id="Value" rows="1" class="form-control" required></textarea>
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="Status">Status</label>
                                 <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                    <input type="checkbox" class="custom-control-input" name="Status" id="Status" value="1">
                                    <label class="custom-control-label" for="Status">Enable/Disable</label>
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