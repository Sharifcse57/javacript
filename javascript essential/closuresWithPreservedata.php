<script>
	function add(num){
		var num1= num;
		function addTo(num2){
			var result = num1+num2;
			return result;
		}
		return addTo;
	}

	var add5 = add(5);


	console.log(add5(4));

</script>