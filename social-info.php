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
                        <h1>Social Info</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#./">Home</a></li>
                           <li class="breadcrumb-item active">Social Info</li>
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
                     <h3 class="card-title">Social Media Links</h3>
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
                                 <label for="FacebookUrl">Facebook URL</label>
                                 <input type="url" name="FacebookUrl" class="form-control" id="FacebookUrl">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="TwitterUrl">Twitter URL</label>
                                 <input type="url" name="TwitterUrl" class="form-control" id="TwitterUrl">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="InstagramUrl">Instagram URL</label>
                                 <input type="url" name="InstagramUrl" class="form-control" id="InstagramUrl">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="LinkedInUrl">LinkedIn URL</label>
                                 <input type="url" name="LinkedInUrl" class="form-control" id="LinkedInUrl">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="YouTubeUrl">YouTube URL</label>
                                 <input type="url" name="YouTubeUrl" class="form-control" id="YouTubeUrl">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="TikTokUrl">TikTok URL</label>
                                 <input type="url" name="TikTokUrl" class="form-control" id="TikTokUrl">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="RedditUrl">Reddit URL</label>
                                 <input type="url" name="RedditUrl" class="form-control" id="RedditUrl">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="OtherUrl">Other URL</label>
                                 <input type="url" name="OtherUrl" class="form-control" id="OtherUrl">
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