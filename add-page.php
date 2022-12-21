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
                     <h1>Add Page</h1>
                  </div>
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item"><a href="./pages.php">Manage Pages</a></li>
                        <li class="breadcrumb-item active">Add Page</li>
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
                           <div class="col-md-9">
                              <div class="row">
                                 <div class="form-group col-md-12">
                                    <label for="Name">Name</label>
                                    <input type="text" name="Name" class="form-control keywords-title" id="Name" required>
                                 </div>
                                 <div class="form-group col-md-12">
                                    <label for="Slug" data-bs-toggle="collapse" href="#collapseSlug" aria-expanded="false" aria-controls="collapseSlug">
                                       <i class="fas fa-caret-down"></i> Slug
                                    </label>
                                    <div class="input-group collapse mb-3" id="collapseSlug">
                                       <span class="input-group-text slug-url-prefix">https://example.com/</span>
                                       <input type="text" class="form-control slug-data" name="Slug" id="Slug" aria-describedby="Slug">
                                    </div>
                                 </div>
                                 <div class="form-group col-md-12">
                                    <label for="Abstract">Abstract</label>
                                    <textarea type="text" name="Abstract" class="form-control" id="Abstract"></textarea>
                                 </div>
                                 <div class="form-group col-md-12 mb-4">
                                    <label for="Content">Content</label>
                                    <a href="#" class="float-right" data-toggle="modal" data-target="#shortCodesModal">
                                       <span >Shortcodes <i class="fas fa-expand-arrows-alt"></i></span>
                                    </a>
                                    <textarea class="text-editor" id="Content" name="Content" required></textarea>
                                 </div>
                                 <div class="mb-3 col-12">
                                    <div class="input-field">
                                       <label class="active">Gallery</label>
                                       <div class="upload-images" style="padding-top: .5rem;"></div>
                                    </div>
                                 </div>
                                 <div class="mb-3 col-12">
                                    <label class="form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit SEO info">Search Engine Optimization</label>
                                    <a class="float-right" data-bs-toggle="collapse" href="#collapseSEO" role="button" aria-expanded="false" aria-controls="collapseSEO">
                                       Edit SEO Meta
                                    </a>
                                    <div class="col-12 seo-display-div d-none">
                                       <hr />
                                       <h3 class="text-primary seo-display-title">
                                       </h3>
                                       <p class="text-success seo-display-link"> </p>
                                       <p class="text-muted seo-display-date"> </p>
                                       <hr />
                                    </div>
                                 </div>
                                 <br />
                                 <div class="mb-3 col-12">
                                    <div class="collapse" id="collapseSEO">
                                       <div class="mb-3">
                                          <label class="form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit SEO title">SEO Title</label>
                                          <input type="text" class="form-control seo-title-data" placeholder="SEO Title" data-val="true" data-val-length="The field SEO Title must be a string with a maximum length of 250." data-val-length-max="250" id="SEOTitle" maxlength="250" name="SEOTitle" value="">
                                       </div>
                                       <div class="mb-3">
                                          <label class="form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit SEO description">SEO Description</label>
                                          <input type="text" class="form-control seo-description-data" placeholder="SEO Description" data-val="true" data-val-length="The field SEO Description must be a string with a maximum length of 250." data-val-length-max="250" id="SEODescription" maxlength="250" name="SEODescription" value="">
                                       </div>
                                       <div class="mb-3">
                                          <label class="form-label" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit SEO keywords">SEO Keywords</label>
                                          <input type="text" class="form-control seo-keywords-data" placeholder="SEO Keywords" data-val="true" data-val-length="The field SEO Keywords must be a string with a maximum length of 250." data-val-length-max="250" id="SEOKeywords" maxlength="250" name="SEOKeywords" value="">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="row">
                                 <div class="col-md-12">
                                    <label for="Favicon">Featured Image</label>
                                    <div class="custom-file">
                                       <input type="file" name="FeaturedImage" id="FeaturedImage" class="custom-file-input accept-imgs preview-input" data-preview-class="post-preview" required>
                                       <label class="custom-file-label" for="FeaturedImage">Choose file</label>
                                    </div>
                                    <div class="mb-3 col-12">
                                       <img src="https://via.placeholder.com/350x175" class="rounded border border-light ml-1" height="175" id="post-preview" alt="Image Preview">
                                       <textarea class="form-control mt-1 w-100" name="ImageCaption" id="ImageCaption" placeholder="Caption..." rows="1"></textarea>
                                    </div>
                                 </div>
                                 <div class="mb-3 col-12">
                                    <label for="Tags" class="form-label">Tags</label>
                                    <textarea class="tags form-control tags-input" name="Tags" id="Tags" rows="3"></textarea>
                                 </div>
                                 <div class="mb-3 col-12">
                                    <label for="Author">Author</label>
                                    <select class="form-control" name="Author" id="Author" aria-label="Select author" required>
                                       <option value="" selected>Select author</option>
                                       <option value="1">Lai</option>
                                       <option value="2">Bob</option>
                                       <option value="3">Ousman</option>
                                    </select>
                                 </div>
                                 <div class="mb-3 col-12">
                                    <label for="Status">Status</label>
                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                       <input type="checkbox" class="custom-control-input" name="Status" id="Status" value="1">
                                       <label class="custom-control-label" for="Status">Publish Page</label>
                                    </div>
                                 </div>
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