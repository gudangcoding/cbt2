var table;

//Menampilkan data dengan plugin dataTable
$(function() {
	table = $('.table').DataTable({
		"ajax" : {
			"url" : "ajax/ajax_siswa_operator.php?action=table_data",
			"type": "POST"
		}
	});
});
//ketika tombol refresh diklik
function refresh_data() {
	table.ajax.reload();
}
//ketika tombol Reset Login diklik
function reset_login(id) {
	if(confirm("Apakah yakin akan mereset login siswa dengan nis "+id+" ?")) {
		$.ajax({
			url : "ajax/ajax_siswa_operator.php?action=reset_login&nis="+id,
			type: "GET",
			success : function(data) {
				table.ajax.reload();
			},
			error : function() {
				alert("Tidak ada mereset login!");
			}
		});
	}
}