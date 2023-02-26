<?php
require_once('dbconfig.php');

echo '

<!DOCTYPE html>
<html>
<head>
	<title>'.$title.'</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>
	<link rel="stylesheet" href="../css/styles.css">	
	<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine&effect=emboss">
</head>
<body>
	<header>
		<nav class="navbar navbar-fixed-top py-2" style="background:white; color:black;">
			<div class="container-fluid">
				<div class="navbar-header ">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background:black;">
        				<span class="icon-bar " style="background: white;"></span>
        				<span class="icon-bar" style="background: white;"></span>
        				<span class="icon-bar" style="background: white;"></span> 
     				 </button>
     				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#searchbar">
        				<i class="glyphicon glyphicon-search white"></i>
     				 </button>
      				<a class="navbar-brand text-dark" href="./" style="font-family: Tangerine, serif; font-size: 48px;">'.BLOG.'</a>
    			</div>
    		
    			<div class="collapse navbar-collapse  text-dark" id="myNavbar">
	    			<ul class="nav navbar-nav navbar-right">';
	    			if(isset($_SESSION['username']))
	    			{
	  
	    				echo '<li><a style="border-left:5px solid black;font-weight:800;">'.ucfirst($_SESSION['username']).'</a></li>
		    				<li><a href="index.php">Back Home</a></li>
		    				<li><a href="new-post.php">Create Post</a></li>
		    				<li><a href="categories.php">Categories</a></li>
		     				<li><a href="logout.php" class="btn btn-outline-primary">Logout</a></li>';
	    			}
				echo '</ul></div>
				</div></nav></header>
				
				
				<br />
				<br />
				<br />
				';
?>