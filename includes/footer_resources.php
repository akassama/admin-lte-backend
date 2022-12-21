

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- app script js -->
<script src="dist/js/app.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Ionic v4 -->
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<!-- datatables js -->
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<!-- datatable js -->
<script src="plugins/datatables/datatable-bs5.js"></script>
<!-- clipboard js cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
<!-- clipboard js -->
<script src="plugins/clipboard/clipboard.js"></script>
<!-- jquery validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<!-- codemirror -->
<script src="plugins/codemirror/codemirror.js"></script>
<script src="plugins/codemirror/mode/xml/xml.js"></script>
<script src="plugins/codemirror/addon/edit/closetag.js"></script>
<script src="plugins/codemirror/addon/edit/closebrackets.js"></script>
<script src="plugins/codemirror/addon/edit/matchbrackets.js"></script>
<!-- keywords-setter js -->
<script src="plugins/keywords/keywords-setter.js"></script>
<!-- jquery image uploader js cdn -->
<script type="text/javascript" src="plugins/jquery-image-uploader/image-uploader.min.js"></script>
<!--bootstrap datepicker js cdn -->
<script src="plugins/datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- tags input js -->
<script src="plugins/tagsinput/jquery.tagsinput.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>

<script>
  // jquery form validation 
  $(".validate-form").validate({
    errorClass: 'is-invalid text-danger',
    successClass: 'is-valid', 
    errorsWrapper: '<span class="form-text text-danger"></span>',
    errorTemplate: '<span></span>',
    trigger: 'change'
  });

  $(function () {
    // Summernote
    $('.text-editor').summernote({
      placeholder: 'Type here',
      height: 200
    });
  })

  $( document ).ready(function() {
  ///////////////////////////
  //////Set codemirror///////
  ///////////////////////////
  function qsa(sel) {
    return Array.apply(null, document.querySelectorAll(sel));
  }
  qsa(".code-editor").forEach(function (editorEl) {
    CodeMirror.fromTextArea(editorEl, {
      lineNumbers: true,
      styleActiveLine: true,
      matchBrackets: true,
      theme: 'dracula',
    });
  });
});


//Calling document ready
$( document ).ready(function() {
    ///////////////////////////
    ///////Set tags input//////
    ///////////////////////////
    $(function() {
      $('.tags-input').tagsInput({width:'auto'});
    });


    ///////////////////////////
    ////Set image uploader/////
    ///////////////////////////
    $('.upload-images').imageUploader();


    ///////////////////////////
    ////Set datepicker/////
    ///////////////////////////
    $('.datepicker').datepicker({
		format: 'mm/dd/yyyy',
		clearBtn: true,
		todayHighlight: true
	});

  // Add the following code if you want the name of the file appear on select
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
  
  ///////////////////////////
  //////Checks if string is empty//////
  ///////////////////////////
  function isEmpty(str) {
    return (!str || str.length === 0);
  }

});
</script>


<script>
///////////////////////
//Delete action lodal//
///////////////////////
$( document ).ready(function() {
  /**
* delete record click
*
*/

$('.delete-button').on('click', function (e) {
    //get clicked element key/id
    var deleteId = $(this).data("id");
    var deleteGroup = $(this).data('group');
    var deleteName = $(this).data('name');
    var deleteModel = $(this).data('model');
    var deleteChildModel = $(this).data('c-model');
    var returnController = $(this).data('return-ct');
    var returnAction = $(this).data('return-ac');
    var returnId = $(this).data('return-id');

    //check if main inputs are empty
    if (isEmpty(deleteModel) || isEmpty(deleteId)) {
      alert("missng required data values");
      return false;
    }
    
    //set hidden values
    $(".del-modal-id").val(deleteId);
    $(".del-modal-group").val(deleteGroup);
    $(".del-modal-name").val(deleteName);
    $(".delete-item-name").text(deleteGroup);
    $(".del-modal-model").val(deleteModel);
    $(".del-modal-c-model").val(deleteChildModel);
    $(".del-modal-return-ct").val(returnController);
    $(".del-modal-return-ac").val(returnAction);
    $(".del-modal-return-id").val(returnId);

    //show modal
    $('#daleteActionModal').modal('show');
  });
});

///////////////////////////
//////Checks if empty//////
///////////////////////////
function isEmpty(str) {
	return (!str || str.length === 0);
}
</script>



  <!--// include modals -->
  <?php include 'includes/modals.php'; ?>