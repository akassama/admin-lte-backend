  <!-- Delete Modal -->
  <div class="modal fade" id="daleteActionModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <form method="post" action="#">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Action Confirmation</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal">
              <i class="fas fa-times text-danger"></i>
            </button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            Are you sure you want to remove <span class="text-danger font-weight-bold delete-item-name"></span>?
            <div class="mb-3 mt-3">
              <label for="HiddenInputs" class="form-label d-none">Hidden Inputs</label>
              <input type="hidden" class="form-control del-modal-id" id="DItemID" value="" name="DItemID">
              <input type="hidden" class="form-control del-modal-group" id="DItemGroup" value="" name="DItemGroup">
              <input type="hidden" class="form-control del-modal-name" id="DItemName" value="" name="DItemName">
              <input type="hidden" class="form-control del-modal-model" id="DModel" value="" name="DModel">
              <input type="hidden" class="form-control del-modal-c-model" id="DChildModel" value="" name="DChildModel">
              <input type="hidden" class="form-control del-modal-return-ct" id="ReturnController" value="" name="ReturnController">
              <input type="hidden" class="form-control del-modal-return-ac" id="ReturnAction" value="" name="ReturnAction">
              <input type="hidden" class="form-control del-modal-return-id" id="ReturnId" value="" name="ReturnId">
            </div>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
            <input type="submit" class="btn btn-success" value="Yes">
          </div>
        </form>

      </div>
    </div>
  </div>

  <!-- The Modal -->
  <div class="modal" id="shortCodesModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Shortcodes List</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <p>Gallery</p>
              <div class="input-group mb-3">
                <input type="text" class="form-control" id="GalleryShortcode" value="[gallery limit='8']" readonly>
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary copy-btn" type="button" data-clipboard-target="#GalleryShortcode" data-toggle="tooltip" data-placement="right" title="Copy">
                    <i class="fas fa-copy"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <p>Posts</p>
              <div class="input-group mb-3">
                <input type="text" class="form-control" id="BlogsShortcode" value="[blog-posts limit='10']" readonly>
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary copy-btn" type="button" data-clipboard-target="#BlogsShortcode" data-toggle="tooltip" data-placement="right" title="Copy">
                    <i class="fas fa-copy"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <p>Featured Posts</p>
              <div class="input-group mb-3">
                <input type="text" class="form-control" id="FeaturedShortcode" value="[featured-posts limit='12']" readonly>
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary copy-btn" type="button" data-clipboard-target="#FeaturedShortcode" data-toggle="tooltip" data-placement="right" title="Copy">
                    <i class="fas fa-copy"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <p>Contact Form</p>
              <div class="input-group mb-3">
                <input type="text" class="form-control" id="ContactShortcode" value="[contact-form]" readonly>
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary copy-btn" type="button" data-clipboard-target="#ContactShortcode" data-toggle="tooltip" data-placement="right" title="Copy">
                    <i class="fas fa-copy"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <p>Document</p>
              <div class="input-group mb-3">
                <input type="text" class="form-control" id="DocumentShortcode" value="[document id='10']" readonly>
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary copy-btn" type="button" data-clipboard-target="#DocumentShortcode" data-toggle="tooltip" data-placement="right" title="Copy">
                    <i class="fas fa-copy"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="col-md-6">

            </div>
            <div class="col-md-6">

            </div>
            <div class="col-md-6">

            </div>

          </div>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>