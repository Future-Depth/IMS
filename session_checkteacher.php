<?php
if($_SESSION['bttt']=='')
{
	header("location:login.php?msg=Login_First");
}

?>