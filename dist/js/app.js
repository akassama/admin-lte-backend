

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


///////////////////////////
//Image preview on change//
///////////////////////////
document.getElementsByClassName("preview-input")[0].onchange = function (e) {
    var fileName = this.value.replace('C:\\fakepath\\', '');
    var previewClass = this.getAttribute('data-preview-class');

    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementsByClassName("preview-input")[0].files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById(previewClass).src = oFREvent.target.result;
    };
};


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
