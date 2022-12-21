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
                        <h1>Section Order</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="./">Home</a></li>
                           <li class="breadcrumb-item active">Section Order</li>
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
                     <h3 class="card-title">Manage Section Order</h3>
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
                           <div class="form-group mb-4">
                              <button type="submit" class="btn btn-primary save-btn float-right">
                                 <i class="fas fa-save"></i> Save
                              </button>
                           </div>
                           <div class="row">
                              <div class="col-sm-4 mb-3">
                                 <div class="form-group">
                                    <label>About Summary</label>
                                    <select class="custom-select" id="AboutSummary" name="AboutSummary">
                                       <!--// include top navbar -->
                                       <?php include 'includes/select_numbers.php';?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-4 mb-3">
                                 <div class="form-group">
                                    <label>About Video</label>
                                    <select class="custom-select" id="AboutVideo" name="AboutVideo">
                                       <!--// include top navbar -->
                                       <?php include 'includes/select_numbers.php';?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-4 mb-3">
                                 <div class="form-group">
                                    <label>Counter</label>
                                    <select class="custom-select" id="Counter" name="Counter">
                                       <!--// include top navbar -->
                                       <?php include 'includes/select_numbers.php';?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-4 mb-3">
                                 <div class="form-group">
                                    <label>Posts</label>
                                    <select class="custom-select" id="Posts" name="Posts">
                                       <!--// include top navbar -->
                                       <?php include 'includes/select_numbers.php';?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-4 mb-3">
                                 <div class="form-group">
                                    <label>Services</label>
                                    <select class="custom-select" id="Services" name="Services">
                                       <!--// include top navbar -->
                                       <?php include 'includes/select_numbers.php';?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-4 mb-3">
                                 <div class="form-group">
                                    <label>Testimonials</label>
                                    <select class="custom-select" id="Testimonials" name="Testimonials">
                                       <!--// include top navbar -->
                                       <?php include 'includes/select_numbers.php';?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-4 mb-3">
                                 <div class="form-group">
                                    <label>Portfolios</label>
                                    <select class="custom-select" id="Portfolios" name="Portfolios">
                                       <!--// include top navbar -->
                                       <?php include 'includes/select_numbers.php';?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-4 mb-3">
                                 <div class="form-group">
                                    <label>Teams</label>
                                    <select class="custom-select" id="Teams" name="Teams">
                                       <!--// include top navbar -->
                                       <?php include 'includes/select_numbers.php';?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-4 mb-3">
                                 <div class="form-group">
                                    <label>Call To Action</label>
                                    <select class="custom-select" id="CallToAction" name="CallToAction">
                                       <!--// include top navbar -->
                                       <?php include 'includes/select_numbers.php';?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-4 mb-3">
                                 <div class="form-group">
                                    <label>FAQs</label>
                                    <select class="custom-select" id="FAQS" name="FAQS">
                                       <!--// include top navbar -->
                                       <?php include 'includes/select_numbers.php';?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-4 mb-3">
                                 <div class="form-group">
                                    <label>Services</label>
                                    <select class="custom-select" id="Services" name="Services">
                                       <!--// include top navbar -->
                                       <?php include 'includes/select_numbers.php';?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-4 mb-3">
                                 <div class="form-group">
                                    <label>Partners</label>
                                    <select class="custom-select" id="Partners" name="Partners">
                                       <!--// include top navbar -->
                                       <?php include 'includes/select_numbers.php';?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-4 mb-3">
                                 <div class="form-group">
                                    <label>Contact Form</label>
                                    <select class="custom-select" id="ContactForm" name="ContactForm">
                                       <!--// include top navbar -->
                                       <?php include 'includes/select_numbers.php';?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-4 mb-3">
                                 <div class="form-group">
                                    <label>Subscribe Form</label>
                                    <select class="custom-select" id="SubscribeForm" name="SubscribeForm">
                                       <!--// include top navbar -->
                                       <?php include 'includes/select_numbers.php';?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-4 mb-3">
                                 <div class="form-group">
                                    <label>Footer Address</label>
                                    <select class="custom-select" id="FooterAddress" name="FooterAddress">
                                       <!--// include top navbar -->
                                       <?php include 'includes/select_numbers.php';?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-4 mb-3">
                                 <div class="form-group">
                                    <label>Social Links</label>
                                    <select class="custom-select" id="SocialLinks" name="SocialLinks">
                                       <!--// include top navbar -->
                                       <?php include 'includes/select_numbers.php';?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-4 mb-3">
                                 <div class="form-group">
                                    <label>Footer Credits</label>
                                    <select class="custom-select" id="FooterCredits" name="FooterCredits">
                                       <!--// include top navbar -->
                                       <?php include 'includes/select_numbers.php';?>
                                    </select>
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