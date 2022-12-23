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
                        <h1>Account Info</h1>
                     </div>
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="./">Home</a></li>
                           <li class="breadcrumb-item active">Account Info</li>
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
                     <h3 class="card-title">Manage Account Info</h3>
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
                              <div class="form-group col-md-12">
                                 <label for="ProfilePicture">Profile Picture</label>
                                 <div class="custom-file">
                                    <input type="file" name="ProfilePicture" class="custom-file-input" id="ProfilePicture">
                                    <label class="custom-file-label" for="ProfilePicture">Choose file</label>
                                 </div>
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="FirstName">First Name</label>
                                 <input type="text" name="FirstName" class="form-control" id="FirstName" required>
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="LastName">Last Name</label>
                                 <input type="url" name="LastName" class="form-control" id="LastName" required>
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="Email">Email</label>
                                 <input type="email" name="Email" class="form-control" id="Email" required>
                              </div>
                              <div class="form-group col-md-2">
                                 <label for="CountryCode">Country Code</label>
                                 <input type="text" name="CountryCode" class="form-control" id="CountryCode" required>
                              </div>
                              <div class="form-group col-md-4">
                                 <label for="PhoneNumber">Phone Number</label>
                                 <input type="text" name="PhoneNumber" class="form-control" id="PhoneNumber" required>
                              </div>
                              <div class="form-group col-md-12">
                                 <label for="Address">Address</label>
                                 <textarea name="Address" class="form-control" id="Address" rows="2" required></textarea>
                              </div>
                              <div class="form-group col-md-4">
                                 <label for="DateOfBirth">Date of Birth</label>
                                 <input type="text" name="DateOfBirth" class="form-control" id="DateOfBirth">
                              </div>
                              <div class="form-group col-md-4">
                                 <label for="Country" class="form-label">Country</label>
                                 <select class="form-control" aria-label="Select Country" id="Country" name="Country">
                                    <option value="" selected>Select country</option>
                                    <option value="1">Gambia</option>
                                    <option value="2">Senegal</option>
                                    <option value="3">Germany</option>
                                 </select>
                              </div>
                              <div class="form-group col-md-4">
                                 <label for="Gender" class="form-label">Gender</label>
                                 <select class="form-control" aria-label="Select Gender" id="Gender" name="Gender">
                                    <option value="" selected>Select gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                 </select>
                              </div>
                              <div class="form-group col-md-12">
                                 <label for="ShortBio">Short Bio</label>
                                 <textarea name="ShortBio" class="form-control" id="ShortBio" rows="2"></textarea>
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