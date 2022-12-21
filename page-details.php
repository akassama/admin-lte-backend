<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>AdminLTE 3 | Blank Page</title>
   <!--// include header resouces -->
   <?php include 'includes/header_resources.php'; ?>
</head>

<body class="hold-transition sidebar-mini">
   <!-- Site wrapper -->
   <div class="wrapper">
      <!--// include top navbar -->
      <?php include 'includes/top_navbar.php'; ?>
      <!-- include left sidebar -->
      <?php include 'includes/left_sidebar.php'; ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1>Details</h1>
                  </div>
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item"><a href="./posts.php">Manage Posts</a></li>
                        <li class="breadcrumb-item active">Page Details</li>
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
                  <h3 class="card-title">Page Details</h3>
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
                  <table class="table table-bordered">
                     <tbody>
                        <tr>
                           <td class="tw-15 bg-light font-weight-bold">Name</td>
                           <td>How it works</td> 
                        </tr>
                        <tr>
                           <td class="tw-15 bg-light font-weight-bold">Featured Image</td>
                           <td>
                              <img src="https://via.placeholder.com/200x150/000000/FFFFFF/?text=Page+Image" class="img-fluid" alt="Featured Image" height="150">
                           </td>
                        </tr>
                        <tr>
                           <td class="tw-15 bg-light font-weight-bold">Image Caption</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td class="tw-15 bg-light font-weight-bold">Slug</td>
                           <td>/the-slug</td>
                        </tr>
                        <tr>
                           <td class="tw-15 bg-light font-weight-bold">Abstract</td>
                           <td></td>
                        </tr>
                        <tr>
                           <td class="tw-15 bg-light font-weight-bold">Content</td>
                           <td>
                              <div class="fixed-content-h-20 pt-1 pb-1 bg-light p-1">
                                 <div id="post-content">
                                 <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                                 </div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td class="tw-15 bg-light font-weight-bold">Gallery</td>
                           <td>
                              <div class="fixed-content-h-20 pt-1 pb-1 bg-light p-1">
                                 <div class="row">
                                    <img src="https://via.placeholder.com/150x125/F5F5DC/800000/?text=Gallery" class="img-thumbnail m-2" alt="Gallery" height="125">
                                    <img src="https://via.placeholder.com/150x125/F5F5DC/800000/?text=Gallery" class="img-thumbnail m-2" alt="Gallery" height="125">
                                    <img src="https://via.placeholder.com/150x125/F5F5DC/800000/?text=Gallery" class="img-thumbnail m-2" alt="Gallery" height="125">
                                 </div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td class="tw-15 bg-light font-weight-bold">Tags</td>
                           <td>
                              <div class="bd-list">
                                 <span class='badge bg-black text-light'>Blog</span>
                                 <span class='badge bg-black text-light'>Tag</span>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td class="tw-15 bg-light font-weight-bold">SEO Title</td>
                           <td>
                              How it works
                           </td>
                        </tr>
                        <tr>
                           <td class="tw-15 bg-light font-weight-bold">SEO Description</td>
                           <td>
                              A post about How it works
                           </td>
                        </tr>
                        <tr>
                           <td class="tw-15 bg-light font-weight-bold">SEO Keywords</td>
                           <td>
                              <div class="bd-list">
                                 <span class='badge bg-danger text-light'>Blog</span>
                                 <span class='badge bg-danger text-light'>News</span>
                                 <span class='badge bg-danger text-light'>Event</span>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td class="tw-15 bg-light font-weight-bold">Status</td>
                           <td>
                              <button class="btn btn-success"><i class="fas fa-check"></i> Published</button>
                           </td>
                        </tr>
                        <tr>
                           <td class="tw-15 bg-light font-weight-bold">Created At</td>
                           <td>June 29, 2021 10:27</td>
                        </tr>
                        <tr>
                           <td class="tw-15 bg-light font-weight-bold">Updated At</td>
                           <td>June 29, 2021 10:27</td>
                        </tr>
                     </tbody>
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
      <?php include 'includes/footer.php'; ?>
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
         <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
   </div>
   <!-- ./wrapper -->
   <!--// include footer resources -->
   <?php include 'includes/footer_resources.php'; ?>
</body>

</html>