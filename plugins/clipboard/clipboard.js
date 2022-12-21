///////////////////////////
////Set copy clipboard/////
///////////////////////////
$( document ).ready(function() {
    var clipboard = new ClipboardJS('.copy-btn');
    //also set bootstrap tooltip
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    });
  });