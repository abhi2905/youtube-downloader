<html>
<head>
<style type="text/css">
	ul
	{
		margin:0;
		padding:15px;
		list-style:none;
	}
	ul>li
	{
		margin:5px;
		padding:5px;
		float:left;
		
	}
	
	ul>li>div>img
	{
		width:205px;
		height:130px;
	}

</style>
</head>
<body bgcolor="#ffffFF">
		




<ul>
<?php

	$dir=opendir("popular");
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
		echo "<img alt='$filename' src='popular/$filename'/>";	
		echo "<div>";
		echo "<h4>" .$filename. "</h4>";
		echo "</div>";
		echo "</div>";
		echo "</li>";
		
		}
	}










?>





</body>
</html>
