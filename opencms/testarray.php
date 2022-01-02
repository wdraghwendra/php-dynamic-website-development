<?php
$status = array('Enable','Disable','Pending');
//print_r($status);
$status[4]='Completed';
//print_r($status);

foreach($status as $val)
{
  echo $val."<br/>";
}

echo $_GET['id'];
?>