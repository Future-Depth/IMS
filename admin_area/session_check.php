<?php
if($_SESSION['bttadmin']=='')
{
	header("location:login.php?msg=Login_First");
}
?>