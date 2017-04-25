<!DOCTYPE html>
<html>
<head>
	<title>Mengirim Data Form dengan AJAX</title>
	<script type="text/javascript" src="../../jquery-2.0.2.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#myform').submit(function(){
				$.ajax({
					url : "aksi.php",
					type : "POST",
					data : $(this).serialize(),
					success : function(data){
						alert(data);
						$('[name=nis]').val("");
						$('[name=nama]').val("");
					},
					error : function(data){
						alert("Tidak dapat memproses");
					}
				});
				return false;
			});
		});
	</script>
</head>
<body>
	Masukkan dat siswa!

	<form id="myform" method="POST">
		<table>
			<tr>
				<td>NIS </td>
				<td>: <input type="text" name="nis"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>: <input type="text" name="nama"></td>
			</tr>
			<tr>
				<td colspan="2"><button>Kirim</button></td>
			</tr>
		</table>
	</form>
</body>
</html>