<?php
session_start();
session_destroy();
header("location:index.php?m=Logged_out_successfully");
?>