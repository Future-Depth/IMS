<?php
if($_SESSION['btt']=='')
{
	header("location:login.php?msg=Login_First");
}

?>