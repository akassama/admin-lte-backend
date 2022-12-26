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
                        <h1>Documents</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="./">Home</a></li>
                           <li class="breadcrumb-item active">Manage Documents</li>
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
                     <h3 class="card-title">Manage Documents</h3>
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
                     <a href="./add-document.php" class="float-right mb-2">
                        <button type="button" class="btn btn-outline-primary">
                        <i class="fas fa-plus"></i> Add Document
                        </button>
                     </a>
                     <table id="example1" class="table table-bordered table-striped dataTable">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Type</th>
                              <th>Document</th>
                              <th>Tags</th>
                              <th>Status</th>
                              <th>Created At</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td>Don Quixote</td>
                              <td>
                                 <i class="bi bi-file-pdf-fill text-danger"></i>
                              </td>
                              <td>
                                 <a href="#" class="btn btn-primary">
                                 <i class="fas fa-download"></i>
                                 </a>
                              </td>
                              <td>
                                 <span class="badge bg-info mr-1">Novel</span>
                              </td>
                              <td>
                                 <button class="btn btn-success"><i class="fas fa-check"></i> Published</button>
                              </td>
                              <td>June 29, 2021</td>
                              <td>
                                 <div class="row">
                                    <div class="col mb-1">
                                       <a href="./add-document.php">
                                       <button type="button" class="btn btn-outline-success btn-block"><i class="fas fa-pencil-alt"></i></button>
                                       </a>
                                    </div>
                                    <div class="col mb-1">
                                       <button type="button" class="btn btn-outline-danger delete-button btn-block" data-id="f2a104cad924" data-group="Documents" data-name="Sample Documents" data-model="Documentss" data-c-model="" data-return-ct="Admin" data-return-ac="manage-documents" data-return-id="">
                                       <i class="fa fa-trash"></i>
                                       </button>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>2</td>
                              <td>2021 Economy Report</td>
                              <td>
                                 <i class="bi bi-file-earmark-excel-fill text-success"></i>
                              </td>
                              <td>
                                 <a href="#" class="btn btn-primary">
                                 <i class="fas fa-download"></i>
                                 </a>
                              </td>
                              <td>
                                 <span class="badge bg-info mr-1">Reports</span>
                              </td>
                              <td>
                                 <button class="btn btn-danger"><i class="fas fa-times"></i> Unpublished</button>
                              </td>
                              <td>June 29, 2021</td>
                              <td>
                                 <div class="row">
                                    <div class="col mb-1">
                                       <a href="./add-document.php">
                                       <button type="button" class="btn btn-outline-success btn-block"><i class="fas fa-pencil-alt"></i></button>
                                       </a>
                                    </div>
                                    <div class="col mb-1">
                                       <button type="button" class="btn btn-outline-danger delete-button btn-block" data-id="f2a104cad924" data-group="Documents" data-name="Sample Documents" data-model="Documentss" data-c-model="" data-return-ct="Admin" data-return-ac="manage-documents" data-return-id="">
                                       <i class="fa fa-trash"></i>
                                       </button>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                        <tfoot>
                           <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Type</th>
                              <th>Document</th>
                              <th>Tags</th>
                              <th>Status</th>
                              <th>Created At</th>
                              <th>Action</th>
                           </tr>
                        </tfoot>
                     </table>
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