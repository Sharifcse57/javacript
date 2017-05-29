<script>
	function counter(){
		var n=0;
		return {
			count:function (){return ++n},
			reset:function(){n=0}
		}
	}

	var myCounter= counter();

	var a1=5;
	var b1=4;
	var c1=3;
	if (a1>b1>c1){
		console.log("true");
	}else{
		console.log("false");
	}

</script>