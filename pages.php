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
              <h1>Pages</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item active">Manage Posts</li>
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
            <h3 class="card-title">Manage Pages</h3>

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
            <table id="example1" class="table table-bordered table-striped dataTable_0">
              <div class="btn-group mb-1">
                <button class="btn btn-light float-start dropdown-toggle" type="button" id="bulkActionButton" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                  Bulk Action
                </button>
                <ul class="dropdown-menu" aria-labelledby="bulkActionButton">
                  <li><a class="dropdown-item" href="#">Delete</a></li>
                </ul>
              </div>
              <a href="./add-page.php" class="float-right">
                <button type="button" class="btn btn-outline-primary">
                  <i class="fas fa-plus"></i> Add Page
                </button>
              </a>
              <hr />
              <thead>
                <tr>
                  <th>
                    --
                  </th>
                  <th>#</th>
                  <th class="tw-35">Title</th>
                  <th>Author</th>
                  <th>Status</th>
                  <th class="d-none d-xl-table-cell">Created At</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    --
                  </td>
                  <td> 1 </td>
                  <td>
                    <a class="text-decoration-none text-dark" href="#">
                      1 in 3 people globally do not have access to safe drinking water &#x2013; UNICEF
                    </a>

                    <div class="input-group mb-3">
                      <input type="text" class="form-control" id="Record1" value="/Post/drinking-water" readonly>
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary copy-btn" type="button" data-clipboard-target="#Record1" data-toggle="tooltip" data-placement="right" title="Copy">
                          <i class="fas fa-copy"></i>
                        </button>
                      </div>
                    </div>

                  </td>
                  <td> Admin User </td>
                  <td>
                    <button class="btn btn-success"><i class="fas fa-check"></i> Published</button>
                  </td>
                  <td class="d-none d-xl-table-cell">March 30, 2021</td>
                  <td>
                    <div class="row">
                      <div class="col-md-4">
                        <a href="./edit-page.php">
                          <button type="button" class="btn btn-outline-success btn-block"><i class="fas fa-pencil-alt"></i> Edit</button>
                        </a>
                      </div>
                      <div class="col-md-4">
                        <a href="./page-details.php">
                          <button type="button" class="btn btn-outline-info btn-block"><i class="fas fa-eye"></i> Details</button>
                        </a>
                      </div>
                      <div class="col-md-4">
                        <button type="button" class="btn btn-outline-danger delete-button btn-block" data-id="f2a104cad924" data-group="Page" data-name="Sample Page" data-model="Pages" data-c-model="GalleryImages" data-return-ct="Admin" data-return-ac="manage-posts" data-return-id="">
                          <i class="fa fa-trash"></i> Delete
                        </button>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>
                    --
                  </th>
                  <th>#</th>
                  <th class="tw-35">Title</th>
                  <th>Author</th>
                  <th>Status</th>
                  <th class="d-none d-xl-table-cell">Created At</th>
                  <th>Action</th>
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