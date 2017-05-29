<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Get Element</title>
	<link rel="stylesheet" href="">
</head>
<body>
		<div id="sharif">This is content will be retrived</div>
		<div id="sharif">This is content will be retrived</div>
		<div id="sharif">This is content will be retrived</div>
		<div id="sharif">This is content will be retrived</div>
</body>
</html>


<script>

	div1= document.getElementById('sharif').innerText;
	div2= document.querySelector('div').innerText;
	div3= document.querySelectorAll('div')[0].innerText;
	div4= document.getElementsByTagName('div')[0].innerText;

	document.write(div1+ "<br/>"+ div2 +"<br/>"+ div3 +"<br/>"+ div4);

	//console.log(print_r(div3));
</script>