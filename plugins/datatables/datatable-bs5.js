///////////////////////////
//////Set dataTable///////
///////////////////////////
$( document ).ready(function() {
  $('.dataTable').DataTable();
  //disable sorting on 1st columns
  $('.dataTable_0').DataTable( {
    columnDefs: [
      { orderable: false, targets: 0 }
    ]
  } );
});
