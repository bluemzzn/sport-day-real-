<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Log in</title>
</head>
<body class="login-page">
	<div class="login-all">
	<a href="index.php"><img src="http://samakkhi.ac.th/wp-content/uploads/2022/07/swk-150x150.png" width="100px" height="100px"></a>
		<div class="login-group">
			
		
		
			<h5>ลงทะเบียนกีฬาสี</h5>
           

			<form method="post" class="login-form">
				<div>
				<label for="login-user">Username </label><br>
				<input type="text" name="login_user"  id="login-user" class="box" placeholder=" Enter your username" required><br>
				</div>
				<div>
				<label for="login-pass">Password </label><br>
				<div class="password">
				<input type="password" name="login_pass"  id="login-pass" class="box" placeholder=" Enter your password" minlength="6" required ><br> 
				<i class="fa-solid fa-eye-slash" id="showpassword"></i>
				</div>
				<div style="display: flex; justify-content: center;">
				<input type="submit" name="submit"  class="btn" value="Log in">
				</div>
				
			</form>
		</div>
	</div>

	<script src="script.js"></script>
</body>
</html>
