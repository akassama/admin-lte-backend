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
                        <h1>Referers</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="./">Home</a></li>
                           <li class="breadcrumb-item active">Referers</li>
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
                     <h3 class="card-title">Referers</h3>
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
                     <table id="example1" class="table table-bordered table-striped dataTable">
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
                        <tfoot>
                           <tr>
                              <th>#</th>
                              <th>Url</th>
                              <th>Views</th>
                           </tr>
                        </tfoot>
                     </table>
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