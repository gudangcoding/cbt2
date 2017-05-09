$(function(){
	$('#content').load('home.php');
	$('.navigation').each(function(){
		$(this).click(function(){
			var link = $(this).attr('href');
			$('#content').load(link);

			return false;
		});
	});
});

//ketika tombol edit diklik
function show_soal(ujian) {
	$('#content').load('view/view_soal.php?ujian='+ujian);
}