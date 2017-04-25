<!DOCTYPE html>
<html>
<head>
	<title>Upload File dengan AJAX</title>
	<script type="text/javascript" src="../../jquery-2.0.2.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#gambar').change(function(){
				var formdata = new FormData();
				var file = $('#gambar')[0].files[0];
				formdata.append("gambar",file);

				$.ajax({
					url : "upload.php",
					type : "POST",
					data : formdata,
					processData : false,
					contentType : false,
					success : function(data){
						$('.tampil').append("<img src='"+data+"' width='100'>");
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
	<form enctype="multipart/form-data">
		Upload Gambar <input type="file" name="gambar" id="gambar">
	</form><br>
	<div class="tampil"></div>
</body>
</html>