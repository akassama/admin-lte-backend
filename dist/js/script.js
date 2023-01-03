 //////////////////////////////////////
 /////set input accept types/////
 /////////////////////////////////////
 $( document ).ready(function() {
    $('.accept-all-imgs').attr("accept", "image/*");
    $('.accept-imgs').attr("accept", "image/jpg,image/jpeg,image/png");
    $('.accept-jpgs').attr("accept", "image/jpg,image/jpeg");
    $('.accept-pngs').attr("accept", "image/png");
    $('.accept-docs').attr("accept", ".xlsx,.xls,.doc,.docx,.ppt,.pptx,.txt,.pdf");
    $('.accept-pdfs').attr("accept", ".pdf");
    $('.accept-word').attr("accept", ".doc,.docx");
    $('.accept-ppt').attr("accept", ".ppt,.pptx");
    $('.accept-xls').attr("accept", ".xlsx,.xls");
    $('.accept-vids').attr("accept", ".video/mp4,video/x-m4v,video/*");
    $('.accept-mp4s').attr("accept", ".mp4");
});

//checks all sub category
$('.check-all-cat').click(function(){
  //get clicked element key/id
  var check_class = $(this).data("check-class");
  if($(this).prop("checked") == true){
      //check all by class
      $("."+check_class).prop("checked", true);
  }
  else if($(this).prop("checked") == false){
      //uncheck all by class
      $("."+check_class).prop("checked", false);
  }
});

$(function () {
    // Summernote
    $('.text-editor').summernote({
      placeholder: 'Type here',
      height: 200
    });
});

  // jquery form validation 
  $(".validate-form").validate({
    errorClass: 'is-invalid text-danger',
    successClass: 'is-valid', 
    errorsWrapper: '<span class="form-text text-danger"></span>',
    errorTemplate: '<span></span>',
    trigger: 'change'
  });


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

});

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
//Image preview on change//
///////////////////////////
if ($(".preview-input")[0]){
    // if preview-input class exists
    document.getElementsByClassName("preview-input")[0].onchange = function (e) {
        var fileName = this.value.replace('C:\\fakepath\\', '');
        var previewClass = this.getAttribute('data-preview-class');
    
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementsByClassName("preview-input")[0].files[0]);
    
        oFReader.onload = function (oFREvent) {
            document.getElementById(previewClass).src = oFREvent.target.result;
        };
    };
}

///////////////////////////
////set active nav-bar/////
///////////////////////////
$( document ).ready(function() {
  var page_tab = $("page-tab").text();
  //if dashboard
  if(page_tab != ''){ 
    $("."+page_tab).addClass(" active");
  }
});

///////////////////////////
//////Checks if empty//////
///////////////////////////
function isEmpty(str) {
    return (!str || str.length === 0);
}