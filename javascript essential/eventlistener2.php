<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>sad</title>
	<link rel="stylesheet" href="">
	<style>
		.active{
			background-color: green;
		}
		.box{
			width: 400px;
		}
	</style>
</head>
<body>
<div class="box">
<h1 id="headline">This is head line</h1>
<button id="our-button">add new item</button>
  <ul id="listitems">
    <li>one</li>
    <li>two</li>
    <li>three</li>
  </ul>
</div>
  <script>

  	var listitems= document.getElementById("listitems").getElementsByTagName("li");
  	var ulist= document.getElementById("listitems");
  	var headline=document.getElementById("headline");
  	var button=document.getElementById("our-button");
  	var counter =1;




	ulist.addEventListener("click", activate);

		function activate(e)
		{
			if(e.target.nodeName == "LI")
			{
			   headline.innerHTML = e.target.innerHTML;
			   for( i=0; i< e.target.parentNode.children.length; i++)
				{
				  e.target.parentNode.children[i].classList.remove("active");
				}
			   e.target.classList.add("active");
			}
		}

		button.addEventListener("click",createNewItems);

		function createNewItems(){
				ulist.innerHTML +="<li>New items  "+counter+"</li>";
				counter++;
		}


  </script>
</body>
</html>