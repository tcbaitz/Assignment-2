$('#gameInsertForm').submit(function(){
	return false;
});
$('#gameInsertButton').click(function(){
	$.post(
		$('#gameInsertForm').attr('action'),
		$('#gameInsertForm :input').serializeArray(),
		function(gameInsertResult){
			$('#gameInsertResult').html(gameInsertResult);
		}
	);
});

$('#companyInsertForm').submit(function(){
	return false;
});
$('#companyInsertButton').click(function(){
	$.post(
		$('#companyInsertForm').attr('action'),
		$('#companyInsertForm :input').serializeArray(),
		function(companyInsertResult){
			$('#companyInsertResult').html(companyInsertResult);
		}
	);
});

$('#genreInsertForm').submit(function(){
	return false;
});
$('#genreInsertButton').click(function(){
	$.post(
		$('#genreInsertForm').attr('action'),
		$('#genreInsertForm :input').serializeArray(),
		function(genreInsertResult){
			$('#genreInsertResult').html(genreInsertResult);
		}
	);
});

$('#platformInsertForm').submit(function(){
	return false;
});
$('#platformInsertButton').click(function(){
	$.post(
		$('#platformInsertForm').attr('action'),
		$('#platformInsertForm :input').serializeArray(),
		function(platformInsertResult){
			$('#platformInsertResult').html(platformInsertResult);
		}
	);
});