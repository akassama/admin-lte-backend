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
                        <h1>FAQs</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="./">Home</a></li>
                           <li class="breadcrumb-item active">Manage FAQs</li>
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
                     <h3 class="card-title">Manage FAQs</h3>
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
                        <a href="./add-faq" class="float-right mb-2">
                        <button type="button" class="btn btn-outline-primary">
                        <i class="fas fa-plus"></i> Add FAQ
                        </button>
                        </a>
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Question</th>
                              <th class="tw-20">Answer</th>
                              <th>Link</th>
                              <th>Order</th>
                              <th>Status</th>
                              <th class="d-none d-xl-table-cell">Created At</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td>What we do?</td>
                              <td>
                                 We are a non-profit organization bringing clean and safe drinking water to people in developing countries.y
                              </td>
                              <td>
                                 <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="Record1" value="/Home" readonly>
                                    <button class="btn btn-outline-secondary copy-btn" type="button" id="button-addon2" data-clipboard-target="#Record1" data-toggle="tooltip" data-placement="right" title="Copy">
                                    <i class="fas fa-copy"></i>  
                                    </button>
                                 </div>
                              </td>
                              <td>
                                 2
                              </td>
                              <td>
                                 <button class="btn btn-success"><i class="fas fa-check"></i> Published</button>
                              </td>
                              <td>June 29, 2021</td>
                              <td>
                                 <div class="row">
                                    <div class="col-md-4">
                                       <a href="./edit-navigation.php">
                                       <button type="button" class="btn btn-outline-success btn-block"><i class="fas fa-pencil-alt"></i> Edit</button>
                                       </a>
                                    </div>
                                    <div class="col-md-4">
                                       <a href="./navigation-details.php">
                                       <button type="button" class="btn btn-outline-info btn-block"><i class="fas fa-eye"></i> Details</button>
                                       </a>
                                    </div>
                                    <div class="col-md-4">
                                       <a href="./delete-navigation.php">
                                       <button type="button" class="btn btn-outline-danger btn-block"><i class="fa fa-trash"></i> Delete</button>
                                       </a>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                        <tfoot>
                           <tr>
                              <th>#</th>
                              <th>Question</th>
                              <th class="tw-20">Answer</th>
                              <th>Link</th>
                              <th>Order</th>
                              <th>Status</th>
                              <th class="d-none d-xl-table-cell">Created At</th>
                              <th>Action</th>
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