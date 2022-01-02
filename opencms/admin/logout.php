<?php include_once("common/config.php"); 

unset($_SESSION['username']);
unset($_SESSION['id']);
header('Location: '.$baseurl);

?>