<?php
	session_start();
	require_once("./included_classes/class_user.php");
    require_once("./included_classes/class_misc.php");
    require_once("./included_classes/class_sql.php");
    $misc= new miscfunctions();
    $db = new sqlfunctions();
   
    $id=$_SESSION['user'];
    $tmp_id = $_GET['id'];

    if($_GET['page']=='work_exp')
    {
    	$q="delete from experience where id = '$tmp_id'";
		$q = $db->process_query($q);
		if($q)
		{
			$misc->palert("Deleted successfully","home.php?val=work_exp");
		}
		else
		{
			$misc->palert("Some error occured","home.php?val=work_exp");
		}
    }
?>