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
              <h1>Top Navigation</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item active">Top Navigation</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Manage Top Navigation</h3>

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
              <a href="./add-navigation.php" class="float-right mb-2">
                <button type="button" class="btn btn-outline-primary">
                  <i class="fas fa-plus"></i> Add Navigation
                </button>
              </a>
              <thead>
                <tr>
                  <th>Name</th>
                  <th class="tw-25">Link</th>
                  <th>Parent</th>
                  <th>Status</th>
                  <th>Created At</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Home</td>
                  <td>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" id="Record1" value="/Home" readonly>
                      <button class="btn btn-outline-secondary copy-btn" type="button" id="button-addon2" data-clipboard-target="#Record1" data-toggle="tooltip" data-placement="right" title="Copy">
                        <i class="fas fa-copy"></i>
                      </button>
                    </div>
                  </td>
                  <td>
                    <span></span>
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
                        <button type="button" class="btn btn-outline-danger delete-button btn-block" data-id="f2a104cad924" data-group="Navigation" data-name="About" data-model="Navigation" data-c-model="Images" data-return-ct="Admin" data-return-ac="manage-navigation" data-return-id="c9ba8eda">
                          <i class="fa fa-trash"></i> Delete
                        </button>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>About</td>
                  <td>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" id="Record2" value="/AboutUs" readonly>
                      <button class="btn btn-outline-secondary copy-btn" type="button" id="button-addon2" data-clipboard-target="#Record2" data-toggle="tooltip" data-placement="right" title="Copy">
                        <i class="fas fa-copy"></i>
                      </button>
                    </div>
                  </td>
                  <td>
                    <span></span>
                  </td>
                  <td>
                    <button class="btn btn-danger"><i class="fas fa-times"></i> Unpublished</button>
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
                        <button type="button" class="btn btn-outline-danger delete-button btn-block" data-id="f2a104cad924" data-group="Navigation" data-name="About" data-model="Navigation" data-c-model="Images" data-return-ct="Admin" data-return-ac="manage-navigation" data-return-id="c9ba8eda">
                          <i class="fa fa-trash"></i> Delete
                        </button>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th class="tw-25">Link</th>
                  <th>Parent</th>
                  <th>Status</th>
                  <th>Created At</th>
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