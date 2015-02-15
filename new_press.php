<?
include('db.php');
session_start();
connect();
page_protect();

if(isset($_POST['action']) && $_POST['action'] == 'Submit'){
	$err = '';
	
	if(isset($_POST['title']) && !empty($_POST['title'])){
		$title = $_POST['title'];
	}else {
		$err .= 'Title field empty.<br />';
	}
	
	if(isset($_POST['desc']) && !empty($_POST['desc'])){
		$desc = addslashes($_POST['desc']);
		//echo $desc;
	}else {
		$err .= 'Description Field empty.<br />';
	}
	
	if($err == ''){
		$q = "INSERT INTO `press_m_corp` (`id`, `title`, `description`) VALUES ('', '$title', '$desc')";
		$r = mysql_query($q);
		if($r){ $err .= "Data Inserted.<br />"; }else { $err .= "Something went wrong please try again later.<br />"; }
	}else {
		$err .= "Something wrong Please try again.<br />";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Press Release</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
<div id="main">
	<div id="header">
    	<h1>M Corporation Admin</h1>
    </div>
    <div id="box">
    	<div id="left">
        	<?php include'menu.php';?>
        </div>
        <div id="content">
        <h2>Insert New Press Reease:</h2>
        <?php
		if(isset($err) && !empty($err)){
        	echo '<p style="font-size:14px; color:#F00;">'.$err.'</p>';
		}
		?>
        	<form method="post" action="new_press.php">
            	<label for="title">Title:</label><br />
                <input type="text" name="title" size="50" /><br />
                <label for="desc">New Password:</label><br />
                <textarea rows="10" cols="50" name="desc"></textarea><br />
                <input type="submit" name="action" value="Submit" />
            </form>
        </div>
        <div class="clear"></div>
    </div>
	<div id="footer">
    
    </div>
</div>
</body>
</html>
