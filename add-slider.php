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
                        <h1>Add Slider</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="./">Home</a></li>
                           <li class="breadcrumb-item"><a href="home-sliders.php">Manage Sliders</a></li>
                           <li class="breadcrumb-item active">Add Slider</li>
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
                     <h3 class="card-title">Add Slider</h3>
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
                                 <label for="SliderTitle">Title</label>
                                 <input type="text" name="SliderTitle" class="form-control" id="SliderTitle" required>
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="Description">Sub-Text (Description)</label>
                                 <textarea name="SubText" class="form-control" rows="1" id="Description" maxlength="250" required></textarea>
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="Image">Slider Image <small>(suported formats: jpg, jpeg, png, gif)</small></label>
                                 <input type="file" name="Image" class="form-control accept-imgs" id="Image" required>
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="Link">Link</label>
                                 <input type="text" name="Link" class="form-control" id="Link">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="Order">Order</label>
                                 <select class="form-control" aria-label="Select order" id="Order" name="Order">
											  <option value="" selected>Select order</option>
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											</select>
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