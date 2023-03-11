<!DOCTYPE html>
<html>
<head>
	<title>User Options</title>
	<style type="text/css">
		.container {
			width: 80%;
			margin: 0 auto;
			padding-top: 30px;
		}
		h2 {
			text-align: center;
			margin-bottom: 30px;
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
		table {
			border-collapse: collapse;
			width: 100%;
			margin-bottom: 30px;
		}
		table td, table th {
			border: 1px solid #ccc;
			padding: 8px;
			text-align: center;
		}
		table th {
			background-color: #007bff;
			color: #fff;
		}
	</style>
</head>
<body>
    <?php include 'includes/header.php'; ?>
	<?php include 'includes/navbar.php'; ?>
	<div class="container">
		<h2>User Options</h2>

		<!-- User Registration Form -->
		<form action="#" method="POST">
			<h3>Register New User</h3>
			<input type="text" name="name" placeholder="Full Name" required>
			<input type="email" name="email" placeholder="Email" required>
			<input type="password" name="password" placeholder="Password" required>
			<input type="submit" value="Register">
		</form>

		<!-- User List Table -->
		<table>
			<thead>
				<tr>
					<th>User ID</th>
					<th>Full Name</th>
					<th>Email</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>John Doe</td>
					<td>johndoe@example.com</td>
					<td>
						<a href="#">Edit</a> | <a href="#">Delete</a>
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Jane Doe</td>
					<td>janedoe@example.com</td>
					<td>
						<a href="#">Edit</a> | <a href="#">Delete</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>