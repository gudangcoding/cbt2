var save_method, table;
//Menerapkan plugin datatables
$(function(){
   table = $('.table').DataTable({
      "processing" : true,
      "ajax" : {
         "url" : "ajax/ajax_user.php?action=table_data",
         "type" : "POST"
      }
   });
   
});