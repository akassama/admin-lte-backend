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
                        <h1>SEO Settings</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#./">Home</a></li>
                           <li class="breadcrumb-item active">SEO Settings</li>
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
                     <h3 class="card-title">Manage SEO Settings</h3>
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
                              <div class="mb-3 col-md-12">
                                 <label for="SendGridApiKey" class="form-label">SendGrid API Key</label>
                                 <input type="text" class="form-control count-reach" name="SendGridApiKey" id="SendGridApiKey" maxlength="100" data-chars-max="100" data-msg-color="danger">
                              </div>
                              <hr/>
                              <div class="mb-3 col-md-12">
                                 <label for="SendGridApiKey" class="form-label">MailJet API Key</label>
                                 <input type="text" class="form-control count-reach" name="SendGridApiKey" id="SendGridApiKey" maxlength="100" data-chars-max="100" data-msg-color="danger">
                              </div>
                              <div class="mb-3 col-md-12">
                              <label for="SendGridApiKey" class="form-label">MailJet Secret Key</label>
                                 <input type="text" class="form-control count-reach" name="SendGridApiKey" id="SendGridApiKey" maxlength="100" data-chars-max="100" data-msg-color="danger">
                              </div>
                              <hr/>
                              <div class="mb-3 col-md-12">
                                 <label for="SendGridApiKey" class="form-label">Mailgun Key</label>
                                 <input type="text" class="form-control count-reach" name="SendGridApiKey" id="SendGridApiKey" maxlength="100" data-chars-max="100" data-msg-color="danger">
                              </div>
                              <div class="mb-3 col-md-12">
                              <label for="SendGridApiKey" class="form-label">Mailgun Domain</label>
                                 <input type="text" class="form-control count-reach" name="SendGridApiKey" id="SendGridApiKey" maxlength="100" data-chars-max="100" data-msg-color="danger">
                              </div>
                              <hr/>
                              <div class="mb-3 col-md-12">
                                 <label for="SendGridApiKey" class="form-label">NetCore API Key</label>
                                 <input type="text" class="form-control count-reach" name="SendGridApiKey" id="SendGridApiKey" maxlength="100" data-chars-max="100" data-msg-color="danger">
                              </div>
                              <hr/>
                              <div class="mb-3 col-md-12">
                                 <label for="OtherApiKey" class="form-label">Other API Key</label>
                                 <input type="text" class="form-control count-reach" name="OtherApiKey" id="OtherApiKey" maxlength="100" data-chars-max="100" data-msg-color="danger">
                              </div>
                              <div class="mb-3 col-md-12">
                              <label for="OtherApiSecret" class="form-label">Other API Secret</label>
                                 <input type="text" class="form-control count-reach" name="OtherApiSecret" id="OtherApiSecret" maxlength="100" data-chars-max="100" data-msg-color="danger">
                              </div>
                              
                              <div class="mb-3 col-md-12">
                                 <div class="form-group">
                                    <label for="UseSendGrid" class="form-label">Select Api To Use</label>
                                    <select class="form-control" name="Author" id="Author" aria-label="Select author" required="">
                                       <option value="" selected="">Select api</option>
                                       <option value="SendGrid">SendGrid</option>
                                       <option value="MailJet">MailJet</option>
                                       <option value="Mailgun">Mailgun</option>
                                       <option value="NetCore">NetCore</option>
                                       <option value="Other">Other</option>
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