<!DOCTYPE html>
<html>
<head>
	<title>Load</title>
	<script type="text/javascript" src="../../jquery-2.0.2.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('a').click(function(){
				$('.konten').load($(this).attr('href'),
					$(this).attr('data'),function(){
						alert("File berhasil di-load");
					});
				return false;
			});
		});
	</script>
</head>
<body>
	<a href="konten.php?tampil=halaman1">Halaman 1</a>
	<a href="konten.php" data="tampil=halaman2">Halaman 2</a>
	<div class="konten"></div>
</body>
</html>