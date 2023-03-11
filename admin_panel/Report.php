


<!DOCTYPE html>
<html>
<head>
    <?php include 'includes/header.php'; ?>
	<?php include 'includes/navbar.php'; ?>
	<title>Report Options</title>
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
		label {
			font-size: 16px;
			font-family: Arial, sans-serif;
			margin-bottom: 10px;
		}
		select {
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
	<div class="container">
		<h2>Report Options</h2>

		<!-- Report Form -->
		<form action="#" method="POST">
			<label for="event-select">Select Event:</label>
			<select id="event-select" name="event" required>
				<option value="">Select an event</option>
				<option value="event-1">Event 1</option>
				<option value="event-2">Event 2</option>
				<option value="event-3">Event 3</option>
			</select>
			<label for="report-type-select">Select Report Type:</label>
			<select id="report-type-select" name="report-type" required>
				<option value="">Select a report type</option>
				<option value="attendees">Attendees Report</option>
				<option value="sales">Sales Report</option>
				<option value="feedback">Feedback Report</option>
			</select>
			<input type="submit" value="Generate Report">
		</form>
	</div>
</body>
</html>
