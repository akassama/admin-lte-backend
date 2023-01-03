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
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="dist/img/user2-160x160.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Nina Mcintire</h3>

                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Blogs</b> <a class="float-right">22</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">akassama@yahoo.com</a>
                  </li>
                  <li class="list-group-item">
                    <b>Roles</b> 
                    <span class="float-right">
                        <a href="#" class="badge bg-primary mr-1 my-1">Admin</a>
                        <a href="#" class="badge bg-primary mr-1 my-1">Editor</a>
                        <a href="#" class="badge bg-primary mr-1 my-1"> Author</a>
                    </span>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Biography</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fas fa-user-alt mr-1"></i> Gender</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">Male</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                  <li class="nav-item"><a class="nav-link" href="#passwords" data-toggle="tab">Password</a></li>
                  <li class="nav-item"><a class="nav-link" href="#account-details" data-toggle="tab">Account Details</a></li>
                </ul>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="dist/img/user2-160x160.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                        </span>
                        <span class="description">7:30 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Logged in from PC.
                      </p>
                    </div>
                    <!-- /.post -->
                  </div>

                  <div class="tab-pane" id="passwords">
                     <form class="form-horizontal validate-form" method="post" action="#" id="quickForm" autocomplete="off">
                        <div class="form-group row">
                           <div class="offset-sm-2 col-sm-10">
                              <button type="submit" class="btn btn-danger float-right">
                              <i class="fas fa-save"></i> Save
                           </button>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="CurrentPassword" class="col-sm-2 col-form-label">Current Password</label>
                           <div class="col-sm-10">
                              <input type="password" class="form-control" id="CurrentPassword" placeholder="Current Password" required>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="NewPassword" class="col-sm-2 col-form-label">New Password</label>
                           <div class="col-sm-10">
                              <input type="password" class="form-control" id="NewPassword" placeholder="New Password" required>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="RepeatPassword" class="col-sm-2 col-form-label">Repeat Password</label>
                           <div class="col-sm-10">
                              <input type="password" class="form-control" id="RepeatPassword" placeholder="RepeatPassword" required>
                           </div>
                        </div>
                     </form>
                  </div>

                  <div class="tab-pane" id="account-details">
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
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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