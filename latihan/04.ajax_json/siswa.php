<!DOCTYPE html>
<html>
<head>
	<title>Respon AJAX dengan JSON</title>
	<script type="text/javascript" src="../../jquery-2.0.2.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$.ajax({
				url : "json.php",
				type : "GET",
				dataType : "JSON",
				success : function(data){
					for(i=0; i < data.length; i++){
						$('tbody').append('<tr><td>'+data[i].nis+'</td><td>'+data[i].nama+'</td></tr>');
					}
				},
				error : function(data){
					alert("Tidak dapat memproses");
				}
			});
		});
	</script>
</head>
<body>
	<form id="myform">
		<table border="1" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>NIS</th>
					<th>NAMA</th>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
	</form>
</body>
</html>