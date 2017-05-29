<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Goolge street View</title>
	<link rel="stylesheet" href="">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<form id="form-container">
      <input type="text" id="street" placeholder="street...">
      <input type="text" id="city" placeholder="city...">
      <button id="submit">Submit</button>
      <div id="addressview"></div>
      <img id="photo" alt="">
  </form>
<script>
	function loadData(){
	  var addressview = $('#addressview');
	  var street = $('#street').val();
	  var city = $('#city').val();
	  var address = street+ ", " + city;
	  addressview.text(address);
	  var strtUrl ='https:maps.googleapis.com/maps/api/streetview?size=400x400&location=' + address+ '';
	  console.log(strtUrl);
	  $('#photo').attr("src",strtUrl);
	  return false;
	}
	$('#form-container').submit(loadData);


</script>
</body>
</html>