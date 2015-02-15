<?
include('db.php');
session_start();
connect();
page_protect();

if(!isset($_GET['id']) && !is_int($_GET['id'])){
	header("Location: press_view.php");
}else {
	$id = $_GET['id'];
}

if(isset($_POST['action']) && $_POST['action'] == 'Submit' && !empty($_GET['id'])){
	$err = '';

	if(isset($_POST['title']) && !empty($_POST['title'])){
		$title = $_POST['title'];
		//echo $title;
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
		$q = "UPDATE `press_m_corp` SET title = '$title', description = '$desc' WHERE id = '$id'";
		//echo $q;
		$r = mysql_query($q);
		if($r){ $err .= "Data Updated.<br />"; }else { $err .= "Something went wrong please try again later.<br />"; }
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
        <?php
		if(isset($err) && !empty($err)){
        	echo '<p style="font-size:14px; color:#F00;">'.$err.'</p>';
		}
		$q = "select * from press_m_corp where id = '$id'";
		$r = mysql_query($q);
		if($r && mysql_num_rows($r) > 0){
			$row = mysql_fetch_array($r);
		}
		?>
        	<form method="post" action="edit_press.php?id=<?= $id;?>">
            	<label for="title">Title:</label><br />
                <input type="text" name="title" size="50" value="<?= $row['title'];?>" /><br />
                <label for="desc">New Password:</label><br />
                <textarea rows="10" cols="50" name="desc"><?= stripslashes($row['description']);?></textarea><br />
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
