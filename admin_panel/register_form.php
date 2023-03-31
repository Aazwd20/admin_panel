<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
    <style>
        .container {
			width: 80%;
			margin: 0 auto;
			padding-top: 30px;
		}
        form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-bottom: 30px;
		}
		input[type="text"], input[type="email"], input[type="password"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border-radius: 5px;
			border: 1px solid #ccc;
			font-size: 16px;
			font-family: Arial, sans-serif;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #007bff;
			color: #fff;
			padding: 10px 20px;
			border-radius: 5px;
			border: none;
			font-size: 16px;
			font-family: Arial, sans-serif;
			cursor: pointer;
		}
    </style>
</head>
<body>
<?php include 'includes/header_nav.php'; ?>
    <!-- User Registration Form -->
<form action="#" method="POST">
			<h3>Register New User</h3>
			<input type="text" name="name" placeholder="Full Name" required>
			<input type="email" name="email" placeholder="Email" required>
			<input type="password" name="password" placeholder="Password" required>
			<input type="submit" value="Register">
		</form>
    
</body>
</html>