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
                        <h1>Recent Visits</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="./">Home</a></li>
                           <li class="breadcrumb-item active">Recent Visits</li>
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
                     <div class="row">
                     <div class="col-md-12">
                        <div class="card" style="min-height: 25em;">
                        <div class="card-header border-0">
                           <div class="d-flex justify-content-between">
                              <h3 class="card-title">Recent Visits</h3>
                              <a href="./recent-visits.php">
                                <i class="fas fa-download"></i> Download
                              </a>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="d-flex">
                              <p class="d-flex flex-column">
                              <span class="text-bold text-lg">820</span>
                              <span>Visitors Over Last 7 Days</span>
                              </p>
                              <p class="ml-auto d-flex flex-column text-right">
                              <span class="text-success">
                                 <i class="fas fa-arrow-up"></i> 12.5%
                              </span>
                              <span class="text-muted">Since last week</span>
                              </p>
                           </div>
                           <!-- /.d-flex -->

                           <div class="position-relative mb-4">
                              <canvas id="visitors-chart" height="200"></canvas>
                           </div>

                           <div class="d-flex flex-row justify-content-end">
                              <span class="mr-2">
                              <i class="fas fa-square text-primary"></i> This Week
                              </span>

                              <span>
                              <i class="fas fa-square text-gray"></i> Last Week
                              </span>
                           </div>
                        </div>
                        </div>
                        <!-- /.card -->
                     </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                     Footer
                  </div>
                  <!-- /.card-footer-->
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