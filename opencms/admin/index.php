<?php include_once("common/config.php");
//print_r($_POST);

if(isset($_POST['login']))
{
	
	$user_name=$_POST['user_name'];
	$password=md5($_POST['password']); /* convert MD5 password admin */
	/* Write your own SQL  */
	
	$sql="SELECT * FROM tbl_admin WHERE username='$user_name' and password='$password'";
	
	/* Run your SQL with database connection  */

	$rs= mysqli_query($con,$sql);
	
	
	/* Get count of number of Rows excuted on database   */
	$num=mysqli_num_rows($rs);
	
	/* check if number row more then 0    */
	if($num > 0)
	{	
		/* fetch a single row in a variable    */
		$row=mysqli_fetch_assoc($rs);
		
		//echo $row['username'];
		/* create session variables    */
		 $_SESSION['username']=$row['username'];
		
		$_SESSION['id']=$row['id'];
		
		
		/* URL to Redirect  */
		$redirect_url=$baseurl."dashboard.php";
		/* Redirect browser */
		header('Location: '.$redirect_url);
		/* Make sure that code below does not get executed when we redirect. */
		exit;

	}
	else
	{
		
		/* URL to Redirect  */
		$redirect_url=$baseurl."index.php?error=yes"; /* URL with querystring    */
		/* Redirect browser */
		header('Location: '.$redirect_url);
		/* Make sure that code below does not get executed when we redirect. */
		exit;
	}
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Would you like to help students?</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet"  crossorigin="anonymous">

<link href="css/layout.css" rel="stylesheet"  >

<style>
body {color:#1b1f22;}
.row{margin-top:10px;}

</style>
</head>

<body class="bg-light">

<div class="container">
<div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://raghwendra.in/images/raghwendra-academy.png" alt="" width="240" >
        <h1>Website Custom PHP CMS</h1>
        <p class="lead">Please fill the form for login.</p>
		<?php 
		/* Check get method is GET   */
		if(isset($_GET["error"]))
		{
			echo "Your username or password is incorrect! Please enter valid details.";
		}
		?>
      </div>
<fieldset>
<legend><i class="fa fa-free-code-camp" style="color:#ff3d3d" aria-hidden="true"></i> Hello Admin!</legend>
<hr>
<form action="index.php" method="post" name="frmTrainer">
<div class="login-bg">
            <div class="col-lg-12 input-bg wd400">
                  <input type="text" name="user_name"   placeholder="Username">
            </div>
            <div class="col-lg-12 input-bg wd400">
                  <input type="password" name="password"  placeholder="Password">
            </div>
            <div class="col-lg-12 input-bg wd400">
                  <input type="submit" name="login" value="login">
            </div>
            </div>
</form>
</fieldset>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>