$(function(){
	$('#content').load('home.php');
});

function show_detail(ujian) {
	$('#content').load('detail.php?ujian='+ujian);
}

function show_petunjuk(ujian) {
	$('#content').load('petunjuk.php?ujian='+ujian);
}