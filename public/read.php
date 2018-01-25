<?php
require_once "../connect.php";

$ReadSql = "SELECT * FROM crud";

$res = mysqli_query($connection, $ReadSql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD Application - READ Operation</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<link rel="stylesheet" href="styles.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
	<h2>Read Operation in CRUD applicaiton</h2>
		<table class="table ">
		<thead>
			<tr>
				<th>#</th>
				<th>Full Name</th>
				<th>E-Mail</th>
				<th>Age</th>
				<th>Gender</th>
				<th>Extras</th>
			</tr>
		</thead>
		<tbody>
			<?php
		while($r = mysqli_fetch_assoc($res)){
		?>
		<tr>
			<th scope="row"><?php echo $r['id']; ?></th>
			<td><?php echo $r['first_name'] . " " . $r['last_name']; ?></td>
			<td><?php echo $r['email_id']; ?></td>
			<td><?php echo $r['gender']; ?></td>
			<td><?php echo $r['age']; ?></td>
			<td>
					<a href="update.php?id=<?php echo $r['id']; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
					<a href="delete.php?id=<?php echo $r['id']; ?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
				</td>
			</tr>
		<?php } ?>
		</tbody>
		</table>
	</div>
</div>
</body>
</html>
