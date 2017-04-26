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