<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Get Form Data</title>
	<link rel="stylesheet" href="">
</head>
<body>
<form name="frm">
	<input type="text" name="getdata">
	<input type="button" value="click" onclick="calculate(1)">
	<input type="text" name="showresult">
</form>


<script>
function calculate(process){
	with(document.frm)
	switch(process){
		case 1:
		showresult.value = Math.min(getdata.value,10);
		break;

	}
}

</script>
</body>
</html>