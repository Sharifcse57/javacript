<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>somthing</title>
	<link rel="stylesheet" href="">
</head>
<body>
		<ul id="ul">
			<li>one </li>
			<li>tow </li>
			<li>three </li>
		</ul>
</body>
</html>

<script>
var ul = document.getElementById("ul");

function hide(e){
  // e.target refers to the clicked <li> element
  // This is different than e.currentTarget which would refer to the parent <ul> in this context
  e.target.style.visibility = 'hidden';
}

// Attach the listener to the list
// It will fire when each <li> is clicked
ul.addEventListener('click', hide, false);

</script>