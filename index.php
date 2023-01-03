<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>AdminLTE 3 | Dashboard</title>
      <!-- <page-tab>t-dashboard</page-tab> -->
      <!--// include header resouces -->
      <?php include 'includes/header_resources.php';?>
   </head>
   <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
         <!-- Preloader -->
         <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
         </div>
         <!--// include top navbar -->
         <?php include 'includes/top_navbar.php';?>
         <!--// include left sidebar -->
         <?php include 'includes/left_sidebar.php';?>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                     </div>
                     <!-- /.col -->
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                     </div>
                     <!-- /.col -->
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
               <div class="container-fluid">
                  <!--// include dashboard cards -->
                  <?php include 'includes/dashboard_cards.php';?>
                  <!-- Main row -->
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="card" style="min-height: 25em;">
                           <div class="card-header border-0">
                              <div class="d-flex justify-content-between">
                                 <h3 class="card-title">Recent Visits</h3>
                                 <a href="./recent-visits.php">View Report</a>
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
                        <div class="card" style="min-height: 25em;">
                           <div class="card-header border-0">
                              <h3 class="card-title">Recent Posts</h3>
                              <div class="card-tools">
                                 <a href="#" class="btn btn-tool btn-sm">
                                 <i class="fas fa-download"></i>
                                 </a>
                                 <a href="./posts.php" class="btn btn-tool btn-sm">
                                 <i class="fas fa-bars"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="card-body table-responsive p-0">
                              <table class="table table-striped table-valign-middle">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Title</th>
                                       <th>Created At</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td>
                                          <img src="dist/img/default-150x150.png" alt="Product 1" class="img-rounded img-size-32 mr-2">
                                          1 in 3 people globally do not have access to safe drinking water – UNICEF
                                       </td>
                                       <td>18-10-2021</td>
                                    </tr>
                                    <tr>
                                       <td>2</td>
                                       <td>
                                          <img src="dist/img/default-150x150.png" alt="Product 1" class="img-rounded img-size-32 mr-2">
                                          Scrutiny and Doubt Over Rape Victim's Testimony Sparks Outrage in Spain
                                       </td>
                                       <td>18-10-2021</td>
                                    </tr>
                                    <tr>
                                       <td>3</td>
                                       <td>
                                          <img src="dist/img/default-150x150.png" alt="Product 1" class="img-rounded img-size-32 mr-2">
                                          All children deserve a fair chance in life
                                       </td>
                                       <td>18-10-2021</td>
                                    </tr>
                                    <tr>
                                       <td>4</td>
                                       <td>
                                          <img src="dist/img/default-150x150.png" alt="Product 1" class="img-rounded img-size-32 mr-2">
                                          Russians Are Unimpressed With the 2018 Presidential Election Logo
                                       </td>
                                       <td>18-10-2021</td>
                                    </tr>
                                    <tr>
                                       <td>5</td>
                                       <td>
                                          <img src="dist/img/default-150x150.png" alt="Product 1" class="img-rounded img-size-32 mr-2">
                                          1 in 3 people globally do not have access to safe drinking water – UNICEF
                                       </td>
                                       <td>18-10-2021</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <!-- /.card -->
                        <div class="card" style="min-height: 25em;">
                           <div class="card-header border-0">
                              <h3 class="card-title">Request Errors</h3>
                              <div class="card-tools">
                                 <a href="#" class="btn btn-tool btn-sm">
                                 <i class="fas fa-download"></i>
                                 </a>
                                 <a href="./request-errors.php" class="btn btn-tool btn-sm">
                                 <i class="fas fa-bars"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="card-body table-responsive p-0">
                              <table class="table table-striped table-valign-middle">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Url</th>
                                       <th>Status Code</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td>
                                          <a href="#">
                                          https://gexpotech.net/SignIns
                                          </a>
                                       </td>
                                       <td>404</td>
                                    </tr>
                                    <tr>
                                       <td>2</td>
                                       <td>
                                          <a href="#">
                                          https://gexpotech.net/About-WHO
                                          </a>
                                       </td>
                                       <td>403</td>
                                    </tr>
                                    <tr>
                                       <td>3</td>
                                       <td>
                                          <a href="#">
                                          https://lara-mag.botble.com/galleries/selfie
                                          </a>
                                       </td>
                                       <td>404</td>
                                    </tr>
                                    <tr>
                                       <td>4</td>
                                       <td>
                                          <a href="#">
                                          https://lara-mag.botble.com/galleries/check
                                          </a>
                                       </td>
                                       <td>503</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <!-- /.card -->
                        <div class="card" style="min-height: 25em;">
                           <div class="card-header border-0">
                              <h3 class="card-title">Activity Logs</h3>
                              <div class="card-tools">
                                 <a href="#" class="btn btn-tool btn-sm">
                                 <i class="fas fa-download"></i>
                                 </a>
                                 <a href="./activity-logs.php" class="btn btn-tool btn-sm">
                                 <i class="fas fa-bars"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="card-body table-responsive p-0">
                              <table class="table table-striped table-valign-middle">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Activity</th>
                                       <th>Date</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td>
                                          <a href="https://lara-mag.botble.com/admin/system/users/profile/1" class="d-inline-block">System Admin</a>
                                          Logged in to the system
                                       </td>
                                       <td>7 seconds ago (172.69.15.139)</td>
                                    </tr>
                                    <tr>
                                       <td>2</td>
                                       <td>
                                          System restored backup 
                                       </td>
                                       <td>1 hour ago (127.0.0.1)</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <!-- /.card -->
                     </div>
                     <!-- /.col-md-6 -->
                     <div class="col-lg-6">
                        <div class="card" style="min-height: 25em;">
                           <div class="card-header border-0">
                              <div class="d-flex justify-content-between">
                                 <h3 class="card-title">Monthly Visits</h3>
                                 <a href="./monthly-visits.php">View Report</a>
                              </div>
                           </div>
                           <div class="card-body">
                              <div class="d-flex">
                                 <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">118,230.00</span>
                                    <span>Visits Over The Past 6 Months</span>
                                 </p>
                                 <p class="ml-auto d-flex flex-column text-right">
                                    <span class="text-success">
                                    <i class="fas fa-arrow-up"></i> 33.1%
                                    </span>
                                    <span class="text-muted">Since last month</span>
                                 </p>
                              </div>
                              <!-- /.d-flex -->
                              <div class="position-relative mb-4">
                                 <canvas id="sales-chart" height="200"></canvas>
                              </div>
                              <div class="d-flex flex-row justify-content-end">
                                 <span class="mr-2">
                                 <i class="fas fa-square text-primary"></i> This year
                                 </span>
                                 <span>
                                 <i class="fas fa-square text-gray"></i> Last year
                                 </span>
                              </div>
                           </div>
                        </div>
                        <!-- /.card -->
                        <div class="card" style="min-height: 25em;">
                           <div class="card-header border-0">
                              <h3 class="card-title">Most Visited Pages</h3>
                              <div class="card-tools">
                                 <a href="#" class="btn btn-tool btn-sm">
                                 <i class="fas fa-download"></i>
                                 </a>
                                 <a href="./page-visits.php" class="btn btn-tool btn-sm">
                                 <i class="fas fa-bars"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="card-body table-responsive p-0">
                              <table class="table table-striped table-valign-middle">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Name</th>
                                       <th>Views</th>
                                       <th>Created At</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td>
                                          1 in 3 people globally do not have access to safe drinking water – UNICEF
                                       </td>
                                       <td>588</td>
                                       <td>18-10-2021</td>
                                    </tr>
                                    <tr>
                                       <td>2</td>
                                       <td>
                                          Scrutiny and Doubt Over Rape Victim's Testimony Sparks Outrage in Spain
                                       </td>
                                       <td>1,821</td>
                                       <td>18-10-2021</td>
                                    </tr>
                                    <tr>
                                       <td>3</td>
                                       <td>
                                          All children deserve a fair chance in life
                                       </td>
                                       <td>874</td>
                                       <td>18-10-2021</td>
                                    </tr>
                                    <tr>
                                       <td>4</td>
                                       <td>
                                          Russians Are Unimpressed With the 2018 Presidential Election Logo
                                       </td>
                                       <td>2,601</td>
                                       <td>18-10-2021</td>
                                    </tr>
                                    <tr>
                                       <td>5</td>
                                       <td>
                                          1 in 3 people globally do not have access to safe drinking water – UNICEF
                                       </td>
                                       <td>1,411</td>
                                       <td>18-10-2021</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <!-- /.card -->
                        <div class="card" style="min-height: 25em;">
                           <div class="card-header border-0">
                              <h3 class="card-title">Browser Usage</h3>
                              <div class="card-tools">
                                 <a href="#" class="btn btn-tool btn-sm">
                                 <i class="fas fa-download"></i>
                                 </a>
                                 <a href="./browser-usage.php" class="btn btn-tool btn-sm">
                                 <i class="fas fa-bars"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="card-body table-responsive p-0">
                              <table class="table table-striped table-valign-middle">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Browser</th>
                                       <th>Session</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td>Chrome</td>
                                       <td>1,658</td>
                                    </tr>
                                    <tr>
                                       <td>2</td>
                                       <td>Firefox</td>
                                       <td>1,821</td>
                                    </tr>
                                    <tr>
                                       <td>3</td>
                                       <td>Opera</td>
                                       <td>721</td>
                                    </tr>
                                    <tr>
                                       <td>4</td>
                                       <td>Edge</td>
                                       <td>212</td>
                                    </tr>
                                    <tr>
                                       <td>5</td>
                                       <td>Safari</td>
                                       <td>182</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <!-- /.card -->
                        <div class="card" style="min-height: 25em;">
                           <div class="card-header border-0">
                              <h3 class="card-title">Top Referrers</h3>
                              <div class="card-tools">
                                 <a href="#" class="btn btn-tool btn-sm">
                                 <i class="fas fa-download"></i>
                                 </a>
                                 <a href="./referers.php" class="btn btn-tool btn-sm">
                                 <i class="fas fa-bars"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="card-body table-responsive p-0">
                              <table class="table table-striped table-valign-middle">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Url</th>
                                       <th>Views</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td>google.com</td>
                                       <td>1,658</td>
                                    </tr>
                                    <tr>
                                       <td>2</td>
                                       <td>(Direct)</td>
                                       <td>1,821</td>
                                    </tr>
                                    <tr>
                                       <td>3</td>
                                       <td>akassama.com</td>
                                       <td>721</td>
                                    </tr>
                                    <tr>
                                       <td>4</td>
                                       <td>codecanyon.net</td>
                                       <td>212</td>
                                    </tr>
                                    <tr>
                                       <td>5</td>
                                       <td>bing.com</td>
                                       <td>182</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <!-- / card -->
                     </div>
                     <!-- /.col-md-6 -->
                  </div>
                  <!-- /.row -->
                  <!-- /.row (main row) -->
               </div>
               <!-- /.container-fluid -->
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