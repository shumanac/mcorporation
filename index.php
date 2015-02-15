<?
session_start();
include 'db.php';

connect();
page_protect();
//print_r($_SESSION);
if(!isset($_GET['p'])){
	header("Location: index.php?p=1");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Images</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
<div id="main">
	<div id="header">
    	<h1>M Corporation Admin</h1>
    </div>
    <div id="box">
    	<div id="left">
        	<?php include('menu.php');?>
        </div>
        <div id="content">
        	<h3 style="color:#F00">Note: You can only upload .jpg images. And the resulation of slide image must be 650x309</h3>
        	<?php if(isset($_GET['err'])){ echo '<p style="color:#F00; font-size: 14px;">'.$_GET['err'].'</p>'; } ?>
            <?php
			switch($_GET['p']){
				case(1):{
				?>
                <form method="post" action="upload.php" enctype="multipart/form-data">
                    <h1>Insert Images for Project 1.</h1>
                    <h3>Project Type:</h3>
                    <select name="parent_folder">
                    	<option value="" selected="selected">Select Project Type</option>
                        <option value="current_project">Current Project</option>
                        <option value="recent_project">Recent Project</option>
                        <option value="under_project">Under Development Project</option>
                    </select>
                    <h3>Image type:</h3>
                    <select name="image-type">
                        <option selected="selected" value="slide">Slide</option>
                        <option value="area">Area Map</option>
                        <option value="site">Site Map</option>
                        <option value="thumb">Thumbnail</option>
                    </select><br />
                    <h3>Image file</h3>
                    <input type="file" name="image" />
                    <input type="hidden" name="folder" value="project1" /><br />
                    <input type="submit" name="action" value="Upload" />
                </form>
                <?php
					break;
				}
				case(2):{
					?>
                <form method="post" action="upload.php" enctype="multipart/form-data">
                    <h1>Insert Images for Project 2.</h1>
                     <h3>Project Type:</h3>
                    <select name="parent_folder">
                    	<option value="" selected="selected">Select Project Type</option>
                        <option value="current_project">Current Project</option>
                        <option value="recent_project">Recent Project</option>
                        <option value="under_project">Under Development Project</option>
                    </select>
                    <h3>Image type:</h3>
                    
  <select name="image-type">
    <option selected="selected" value="slide">Slide</option>
    <option value="area">Area Map</option>
    <option value="site">Site Map</option>
    <option value="thumb">Thumbnail</option>
  </select>
                      <br />
                    </h3>
                <h3>Image file</h3>
                    <input type="file" name="image" />
                    <input type="hidden" name="folder" value="project2" /><br />
                    <input type="submit" name="action" value="Upload" />
                </form>
                <?php
					break;
				}
				case(3):{
					?>
                <form method="post" action="upload.php" enctype="multipart/form-data">
                    <h1>Insert Images for Project 3.</h1>
                     <h3>Project Type:</h3>
                    <select name="parent_folder">
                    	<option value="" selected="selected">Select Project Type</option>
                        <option value="current_project">Current Project</option>
                        <option value="recent_project">Recent Project</option>
                        <option value="under_project">Under Development Project</option>
                    </select>
                    <h3>Image type:</h3>
                    
                    <select name="image-type">
                        <option selected="selected" value="slide">Slide</option>
                        <option value="area">Area Map</option>
                        <option value="site">Site Map</option>
                        <option value="thumb">Thumbnail</option>
                    </select><br />
                    <h3>Image file</h3>
                    <input type="file" name="image" />
                    <input type="hidden" name="folder" value="project3" /><br />
                    <input type="submit" name="action" value="Upload" />
                </form>
                <?php
					break;
				}
				case(4):{
					?>
                <form method="post" action="upload.php" enctype="multipart/form-data">
                    <h1>Insert Images for Project 4.</h1>
                     <h3>Project Type:</h3>
                    <select name="parent_folder">
                    	<option value="" selected="selected">Select Project Type</option>
                        <option value="current_project">Current Project</option>
                        <option value="recent_project">Recent Project</option>
                        <option value="under_project">Under Development Project</option>
                    </select>
                    <h3>Image type:</h3>
                   
                    <select name="image-type">
                        <option selected="selected" value="slide">Slide</option>
                        <option value="area">Area Map</option>
                        <option value="site">Site Map</option>
                        <option value="thumb">Thumbnail</option>
                    </select><br />
                    <h3>Image file</h3>
                    <input type="file" name="image" />
                    <input type="hidden" name="folder" value="project4" /><br />
                    <input type="submit" name="action" value="Upload" />
                </form>
                <?php
					break;
				}
				case(5):{
					?>
                <form method="post" action="upload.php" enctype="multipart/form-data">
                    <h1>Insert Images for Project 5.</h1>
                     <h3>Project Type:</h3>
                    <select name="parent_folder">
                    	<option value="" selected="selected">Select Project Type</option>
                        <option value="current_project">Current Project</option>
                        <option value="recent_project">Recent Project</option>
                        <option value="under_project">Under Development Project</option>
                    </select>
                    <h3>Image type:</h3>
                    
                    <select name="image-type">
                        <option selected="selected" value="slide">Slide</option>
                        <option value="area">Area Map</option>
                        <option value="site">Site Map</option>
                        <option value="thumb">Thumbnail</option>
                    </select><br />
                    <h3>Image file</h3>
                    <input type="file" name="image" />
                    <input type="hidden" name="folder" value="project5" /><br />
                    <input type="submit" name="action" value="Upload" />
                </form>
                <?php
					break;
				}
				case(6):{
					?>
                <form method="post" action="upload.php" enctype="multipart/form-data">
                    <h1>Insert Images for Project 6.</h1>
                     <h3>Project Type:</h3>
                    <select name="parent_folder">
                    	<option value="" selected="selected">Select Project Type</option>
                        <option value="current_project">Current Project</option>
                        <option value="recent_project">Recent Project</option>
                        <option value="under_project">Under Development Project</option>
                    </select>
                    <h3>Image type:</h3>
                    
                    <select name="image-type">
                        <option selected="selected" value="slide">Slide</option>
                        <option value="area">Area Map</option>
                        <option value="site">Site Map</option>
                        <option value="thumb">Thumbnail</option>
                    </select><br />
                    <h3>Image file</h3>
                    <input type="file" name="image" />
                    <input type="hidden" name="folder" value="project6" /><br />
                    <input type="submit" name="action" value="Upload" />
                </form>
                <?php
					break;
				}
				case(7):{
					?>
                <form method="post" action="upload.php" enctype="multipart/form-data">
                    <h1>Insert Images for Project 7.</h1>
                     <h3>Project Type:</h3>
                    <select name="parent_folder">
                    	<option value="" selected="selected">Select Project Type</option>
                        <option value="current_project">Current Project</option>
                        <option value="recent_project">Recent Project</option>
                        <option value="under_project">Under Development Project</option>
                    </select>
                    <h3>Image type:</h3>
                    
                    <select name="image-type">
                        <option selected="selected" value="slide">Slide</option>
                        <option value="area">Area Map</option>
                        <option value="site">Site Map</option>
                        <option value="thumb">Thumbnail</option>
                    </select><br />
                    <h3>Image file</h3>
                    <input type="file" name="image" />
                    <input type="hidden" name="folder" value="project7" /><br />
                    <input type="submit" name="action" value="Upload" />
                </form>
                <?php
					break;
				}
			}
					?>
        </div>
        <div class="clear"></div>
    </div>
	<div id="footer">
    
    </div>
</div>
</body>
</html>
