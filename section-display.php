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
                        <h1>Section Display</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="./">Home</a></li>
                           <li class="breadcrumb-item active">Section Display</li>
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
                     <h3 class="card-title">Manage Section Display</h3>
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
                                 <div class="form-group mb-4">
                                    <button type="submit" class="btn btn-primary save-btn float-right">
                                    <i class="fas fa-save"></i> Save
                                    </button>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                       <input type="checkbox" class="custom-control-input" name="TopNavigation" id="TopNavigation" value="1">
                                       <label class="custom-control-label" for="TopNavigation">Top Navigation</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                       <input type="checkbox" class="custom-control-input" name="FooterNavigation" id="FooterNavigation" value="1">
                                       <label class="custom-control-label" for="FooterNavigation">Footer Navigation</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                       <input type="checkbox" class="custom-control-input" name="AboutSummary" id="AboutSummary" value="1">
                                       <label class="custom-control-label" for="AboutSummary">About Summary</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                       <input type="checkbox" class="custom-control-input" name="AboutVideo" id="AboutVideo" value="1">
                                       <label class="custom-control-label" for="AboutVideo">About Video</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                       <input type="checkbox" class="custom-control-input" name="Counter" id="Counter" value="1">
                                       <label class="custom-control-label" for="Counter">Counter</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                       <input type="checkbox" class="custom-control-input" name="Posts" id="Posts" value="1">
                                       <label class="custom-control-label" for="Posts">Posts</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                       <input type="checkbox" class="custom-control-input" name="Services" id="Services" value="1">
                                       <label class="custom-control-label" for="Services">Services</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                       <input type="checkbox" class="custom-control-input" name="Testimonials" id="Testimonials" value="1">
                                       <label class="custom-control-label" for="Testimonials">Testimonials</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                       <input type="checkbox" class="custom-control-input" name="Portfolios" id="Portfolios" value="1">
                                       <label class="custom-control-label" for="Portfolios">Portfolios</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                       <input type="checkbox" class="custom-control-input" name="Teams" id="Teams" value="1">
                                       <label class="custom-control-label" for="Teams">Teams</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                       <input type="checkbox" class="custom-control-input" name="CallToAction" id="CallToAction" value="1">
                                       <label class="custom-control-label" for="CallToAction">Call To Action</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                       <input type="checkbox" class="custom-control-input" name="FAQS" id="FAQS" value="1">
                                       <label class="custom-control-label" for="FAQS">FAQs</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                       <input type="checkbox" class="custom-control-input" name="Services" id="Services" value="1">
                                       <label class="custom-control-label" for="Services">Services</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                       <input type="checkbox" class="custom-control-input" name="Partners" id="Partners" value="1">
                                       <label class="custom-control-label" for="Partners">Partners</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                       <input type="checkbox" class="custom-control-input" name="ContactForm" id="ContactForm" value="1">
                                       <label class="custom-control-label" for="ContactForm">Contact Form</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                       <input type="checkbox" class="custom-control-input" name="SubscribeForm" id="SubscribeForm" value="1">
                                       <label class="custom-control-label" for="SubscribeForm">Subscribe Form</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                       <input type="checkbox" class="custom-control-input" name="FooterAddress" id="FooterAddress" value="1">
                                       <label class="custom-control-label" for="FooterAddress">Footer Address</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                       <input type="checkbox" class="custom-control-input" name="SocialLinks" id="SocialLinks" value="1">
                                       <label class="custom-control-label" for="SocialLinks">Social Links</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                       <input type="checkbox" class="custom-control-input" name="FooterCredits" id="FooterCredits" value="1">
                                       <label class="custom-control-label" for="FooterCredits">Footer Credits</label>
                                    </div>
                                 </div>
                              </div>
                              <hr/>
                              <!-- radio -->
                              <div class="col-12">
                                 <label>Home Banner</label>
                                 <div class="form-group">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" id="HomeBannerSlider" name="HomeBanner" value="Slider" checked>
                                       <label class="form-check-label" for="HomeBannerSlider">Slider</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" id="HomeBannerVideo" name="HomeBanner" value="Video">
                                       <label class="form-check-label" for="HomeBannerVideo">Video</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           </div>
                        </div>
                     </form>
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