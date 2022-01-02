<?php 
/* function for check login */
	
function checkloginsession()
{
	//print('<pre>');
	//print_r($_GET);
	//print('</pre>');
	global $baseurl; /* call global varaiable */
	if (!isset($_SESSION['username']) )
	{
		header('Location: '.$baseurl);
	}
}

?>