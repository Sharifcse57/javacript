<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Functions</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<ul id="my-list">
		<li>First</li>
		<li>Second</li>
		<li>Third</li>
	</ul>

<script>
	var newEelement = document.createElement('li');
	newEelement.textContent='New item';
	list= document.getElementById('my-list');
	list.insertBefore(newEelement,list.firstElementChild);
	//list.removeChild(newEelement);

	var replaceEelement = document.createElement('li');
	replaceEelement.textContent='Replace item';
	list.replaceChild(replaceEelement,newEelement);
</script>
</body>
</html>