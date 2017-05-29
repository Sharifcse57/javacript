<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Select Attribute</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="">
</head>
<body>

<div>
	<input type="text" data-id="54545" data-url="/someurl" onchange="excurtion(this)">
</div>
<script>
	function excurtion(selector){
    var tis= $(selector);
    console.log(tis.data('id'));
    }
</script>
</body>
</html>