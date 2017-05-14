$(function(){
	$('#content').load('home.php');
});

function show_detail(ujian) {
	$('#content').load('detail.php?ujian='+ujian);
}