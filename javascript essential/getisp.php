
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>getsip</title>
	<link rel="stylesheet" href="">
</head>
<body>

<button onclick="myFunction()">Try it</button>
<?php
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
echo "browser isp is: " . $hostname;

?>
<script>
	function getChromeVersion () {
    var raw = navigator.userAgent.match(/Chrom(e|ium)\/([0-9]+)\./);

    return raw ? parseInt(raw[2], 10) : false;
	}
	console.log(getChromeVersion ());
//The window.navigator object contains information about the visitor's browser.
 function myFunction() {
     if((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR')) != -1 )
    {
        alert('Opera');
    }
    else if(navigator.userAgent.indexOf("Chrome") != -1 )
    {
        alert('Chrome');
    }
    else if(navigator.userAgent.indexOf("Safari") != -1)
    {
        alert('Safari');
    }
    else if(navigator.userAgent.indexOf("Firefox") != -1 )
    {
         alert('Firefox');
    }
    else if((navigator.userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true )) //IF IE > 10
    {
      alert('IE');
    }
    else
    {
       alert('unknown');
    }
    }

</script>


</body>
</html>