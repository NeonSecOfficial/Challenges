<html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name = $_POST["username"];
	$pass = $_POST["password"];
	if($name == "admin" && $pass == "ne0ns3c" ) {
		setcookie("user", "admin", time() + (86400 * 30), "/"); 
		header("Location:admin.php");

	}
	else{
		setcookie("user", "notadmin", time() + (86400 * 30), "/");
		header("Location:admin.php");
 
	}
}
?>
<!--HardCore Security > HackProof > username: admin , password: ****** ha ha. -->
<body>  
<div class="wrapper">
    <form class="form-signin" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">       
      <h2 class="form-signin-heading">Please login to access the Admin Panel</h2>
      <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
  </div>
  </body>
  </html>
<!-- I love Cookies !-->
  <style type="text/css">

body {
	background: #eee !important;	
}

.wrapper {	
	margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  
}
  .form-signin-heading,
	.checkbox {
	  margin-bottom: 30px;
	}

	.checkbox {
	  font-weight: normal;
	}

	.form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		@include box-sizing(border-box);

		&:focus {
		  z-index: 2;
		}
	}

	input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	}

	input[type="password"] {
	  margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}

  </style>