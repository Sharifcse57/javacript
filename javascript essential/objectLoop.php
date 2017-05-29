<script>


	var obj={};
	obj.name="sharif";
	obj[0]="first index";
	obj["*/*"]="special charecter";
	obj['subject']="learning";

	for(x in obj){
		console.log(obj[x]);
	}
</script>