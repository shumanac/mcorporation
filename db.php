<?php
	/*$h = 'localhost';
	$u = 'root';
	$p = '';
	$db = 'mcorporation';
	
	
	function connect(){
		if($id = mysql_connect($h, $u, $p)){
			mysql_select_db("test");
		}else {
			return false;
		}
	}*/
	
	$dbhost = 'mcorp.db.5338811.hostedresource.com';

	$dbusername = 'mcorp';

	$dbpass = 'M0189corp';

	$db = 'mcorp';



	function connect()
	{
		global $dbhost, $dbusername, $dbpass, $db;
		$link_id = mysql_connect($dbhost, $dbusername, $dbpass);
		if(!$link_id) {
			return 0;
		}
		else if(empty($db) && !mysql_select_db($db))
		{
				return 0;
		}
		else {
			mysql_select_db($db);
			return $link_id;
		}
	}
	
	function sanitize($value)
	{
		if( get_magic_quotes_gpc() )
		{
			$value = stripslashes( $value );
		}
		if( function_exists( "mysql_real_escape_string" ) )
		{
			$value = mysql_real_escape_string( $value );
		}
		else
		{
			$value = addslashes( $value );
		}
		return $value;
	}
	
	function page_protect()
	{
		session_start();
		if($_SESSION['is_logged'] == 1){
			$u = $_SESSION['username'];
			$p = $_SESSION['ses_id'];
			$q = "select * from user_m_corp where username = '$u' && password = '$p'";
			$r = mysql_query($q);
			if($r){ return true; } else{ header("Location: login.php"); }
		}else {
			header("Location: login.php");
		}
	}
?>