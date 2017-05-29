

<script>
//Higher Order Function means a function returns another function or get function as a parameter
var increment= function(n)
{
	return n+1;
}

function domath(number,func){
	return func(number);
}

console.log(domath(5,increment));

var ifElse= function(condition,isTrue,isFalse){
	if(condition){
		return isTrue();
	}else{
		return isFalse();
	}
}

ifElse(false,function(){console.log(true)},function(){console.log(false)})

</script>
