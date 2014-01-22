<?php

include 'connection.php'; // Loads the connection script
include 'config.php';

?>

<!doctype html> 
<html>
<head>

<?php 

	if(isset($_GET['video'])) {

	$result = mysqli_query($dbc, "SELECT label FROM videos WHERE id = $_GET[video]");
			
	$video = mysqli_fetch_assoc($result);
	
	$page_title = $video['label'];
	
	} else {
		
		$page_title = ' My Video Website ';

	}

?>
	
	
	<title> <?php echo $page_title ?> </title>
	
	<link href='http://fonts.googleapis.com/css?family=Exo+2:500italic|Quando' rel='stylesheet' type='text/css'>
	
	<link href='styles.css' rel='stylesheet' type='text/css'>
	
	
</head> 

	<body>

	<header>
	<h1> My YouTube Channel Development Test Page</h1>
	</header>


<nav> 
	<ul>


<?php

		$result = mysqli_query($dbc, "SELECT * FROM nav WHERE status = 1 ORDER BY position ASC");
		
		while($nav = mysqli_fetch_assoc($result)) { ?>
			
			<li> <a href="<?php echo $nav['url']; ?>" target="<?php echo $nav['target']; ?> "><?php echo $nav['label'];?> </a> </li>   
			
				
<?php } ?> 


	</ul> 	
</nav> 

<section> 

	<h2> Our Videos</h2> 
	
	<ul>

	<?php 
	
			$result = mysqli_query($dbc, "SELECT * FROM videos");
		
			while($video = mysqli_fetch_assoc($result)) { ?>
	
			<li><a href="?video=<?php echo $video['id']; ?>"><?php echo $video['label']; ?></a></li>
			<?php } ?> 
			
	</ul>
 

	<?php
	
		if(isset($_GET['video'])) {

			$result = mysqli_query($dbc, "SELECT * FROM videos WHERE id = $_GET[video]");
			
			$video = mysqli_fetch_assoc($result);
				
			if ($video['status']  == 1)  { $status_label = 'Enabled'; } else {$status_label = 'Disabled'; }
			
	?>
			
			<h3><?php echo $video['label']; ?></h3>
			
			<p> Status: <span style="color:<?php echo $status[$video['status']]; ?>">  <?php echo  $status_label; ?></span><br>
			System ID: <?php echo $video['id']; ?><br>
			YouTube ID: <?php echo$video['youtube_id'];?></p>
			
				
				<?php if ($video['status'] == 1) { ?>   
					 
			
			<iframe width="420" height="315" src="//www.youtube.com/embed/<?php echo$video['youtube_id'];?>" frameborder="0" allowfullscreen></iframe>

	<?php } ?> 
	
	<?php } ?>






</section> 
<footer> 
<p> Copyright PATMDevelopment.com</p> 
</footer> 
</body> 
</html> 