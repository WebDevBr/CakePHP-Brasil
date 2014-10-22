$(function(){
	$('.popup').click(function(){
		window.open($(this).attr('href'), 'CakePHP Brasil', 'width=500, height=400, status=yes, toolbar=no, menubar=no, location=no');
		return false;
	});
});