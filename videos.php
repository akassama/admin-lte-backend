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
                        <h1>Videos</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="./">Home</a></li>
                           <li class="breadcrumb-item active">Manage Videos</li>
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
                     <h3 class="card-title">Manage Videos</h3>
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
                        <a href="./add-video" class="float-right mb-2">
                        <button type="button" class="btn btn-outline-primary">
                        <i class="fas fa-plus"></i> Add Videos
                        </button>
                        </a>
                        <thead>
                           <tr>
                              <th>#</th>
                              <th class="tw-15">Name</th>
                              <th class="tw-25">Description</th>
                              <th class="tw-15">Video</th>
                              <th>Status</th>
                              <th>Created At</th>
                              <th class="tw-15">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td>
                                 Microsoft Flight Simulator: The entire world in a game - BBC News
                              </td>
                              <td>
                                 <p>
                                    Simulator series after more than a decade, promising gamers a replica of the entire globe to play on.

                                    It does so using new AI-driven technology - one that needs a constant fast internet connection to work at its best.

                                    The BBC's David Molloy took to the skies to find out if it lived up to its lofty promise.
                                 </p>
                              </td>
                              <td>
                                 <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" style="max-height: 12em;" src="https://www.youtube.com/embed/L95g_0WQ-8U?rel=0" allowfullscreen></iframe>
                                 </div>
                              </td>
                              <td>
                                 <button class="btn btn-success"><i class="fas fa-check"></i> Published</button>
                              </td>
                              <td>June 29, 2021</td>
                              <td>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <a href="./edit-post.php">
                                       <button type="button" class="btn btn-outline-success btn-block"><i class="fas fa-pencil-alt"></i> Edit</button>
                                       </a>
                                    </div>
                                    <div class="col-md-6">
                                       <a href="./delete-post.php">
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
                              <th class="tw-15">Name</th>
                              <th class="tw-25">Description</th>
                              <th class="tw-15">Video</th>
                              <th>Status</th>
                              <th>Created At</th>
                              <th class="tw-15">Action</th>
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