<?php

	include 'connection.php'; 
	include 'config.php'; 


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en_US" xml:lang="en_US">


<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="GENERATOR" content="PHPEclipse 1.2.0" />
	<title>Example Form Page</title>
</head>


<body>

	<h1>Navigation</h1>

<form>

	<p>
	<label> Label: </label>
	<input type="text" name="label" size="50" placeholder="Enter A Label" value="">
	</p>
	<p>
	<label> URL: </label>
	<input type="text" name="url" size="50" placeholder="Enter A URL" value="">
	<p>
	<label> Target: </label>
	<input type="text" name="target" size="50" placeholder="Enter A Target" value="">
	<p>
	<label> Status: </label>
	<input type="text" name="target" size="10" value="">
	<p>
	<button type="submit" name="submit"> Add Navigation Link </button> 
	
	


</form>



</body>

</html>
