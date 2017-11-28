<html>
<head>
<style type="text/css">
	ul
	{
		margin:0;
		padding:15px;
		
	}
	ul>li
	{
		margin:5px;
		padding:5px;
		
		
	}
	
	

</style>
</head>
<body bgcolor="#ffffFF">
		




<ul>
<?php

	$dir=opendir("videos");
	while (($filename=readdir($dir))!==false)
	{
		if($filename=="." || $filename=="..")
		{
			continue;
			
		}
		else
		{
		echo"<li>";
		echo"<div>";
		
		echo "<h4>" .$filename. "</h4>";
		echo "</div>";
		
		echo "</li>";
		
		}
	}










?>





</body>
</html>
