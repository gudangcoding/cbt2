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

//Tombol tambah diklik
function form_add(){
   save_method = "add";
   $('#modal_user').modal('show');
   $('#modal_user form')[0].reset();
   $('.modal-title').text('Tambah User');
}

//Tombol edit diklik
function form_edit(id) {
   save_method = "edit";
   $('#modal_user form')[0].reset();

   $.ajax({
      url : "ajax/ajax_user.php?action=form_data&id="+id,
      type: "GET",
      dataType : "JSON",
      success : function(data) {
         $('#modal_user').modal('show');
         $('.modal-title').text('Edit User');

         $('#id').val(data.id_user);
         $('#nama').val(data.nama);
         $('#username').val(data.username);
         $('#level').val(data.level);
      },
      error : function(){
         alert("Tidak dapat menampilkan data!");
      }
   });
}