<!--< ?php

	$username = $_POST['u'];
	$password = $_POST['p'];
	$error = "";
	$success = "";

	if(isset($_POST['submit']))
	{
		if($username == 'admin')
		{
			if ($password == 'password')
			{
				$error = "";
				$success = "Welcome Admin";
			}
			else
			{
				$error = "Invalid Password";
				$success = "";
			}
		}
		else
		{
			$error = "Invalid Username";
			$success = "";
		}
	}
?>-->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</style>
<!--<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-97824898-1', 'auto');
ga('send', 'pageview');
</script>-->

</head>
<body style="background-color:#98FB98">

<header>
<img src="http://vectorlogofree.com/wp-content/uploads/2013/01/canadian-olympic-team-logo-vector-400x400.png" width="100px" height="80px">
<h1 class="liketext">NITTEPro</h1>
</header>

<div class="row">
<br><br>

<div class="col-12" style="padding-left:20%;padding-right:20%;" >
<div style="width:100%;border-style:solid; border-radius:10px;text-align:center;border-color:#0000ff">
 <h2 class="liketext">Login!</h2>

    <form action="logincheck.php" method="post">
      <input type="text" name="u" id="username" placeholder="username" class="bigtext"required /><br><br>
      <input type="password" name="p" id="password" placeholder="password" required class="bigtext" /><br><br>
      <input type="submit" value="Login"/>
    </form>
	
	</div>
</div>
  
 
</div>


</div>

</body>
</html>