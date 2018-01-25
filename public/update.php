<?php
require_once "../connect.php";

$id = $_GET['id'];

$SelSql = "SELECT * FROM crud WHERE id=$id";

$res = mysqli_query($connection, $SelSql);

$r = mysqli_fetch_assoc($res);

if(isset($_POST) & !empty($_POST)){
	$fname = mysqli_real_escape_string($connection, $_POST['fname']);
	$lname = mysqli_real_escape_string($connection, $_POST['lname']);
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$gender = $_POST['gender'];
	$age = $_POST['age'];

	$UpdateSql = "UPDATE crud SET first_name='$fname', last_name='$lname', gender='$gender', age=$age, email_id='$email' WHERE id=$id";

	$res = mysqli_query($connection, $UpdateSql);

	if($res){
		header('location: read.php');
	}else{
		$fmsg = "Failed to update data.";
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD Application - UPDATE</title>
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
	<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
	<div class="row">
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
		<h2>UPDATE Operation in CRUD Application</h2>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">First Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="fname"  class="form-control" id="input1" value="<?php echo $r['first_name']; ?>" placeholder="First Name" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Last Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="lname"  class="form-control" id="input1" value="<?php echo $r['last_name']; ?>" placeholder="Last Name" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">E-Mail</label>
			    <div class="col-sm-10">
			      <input type="email" name="email"  class="form-control" id="input1" value="<?php echo $r['email_id']; ?>" placeholder="E-Mail" />
			    </div>
			</div>

			<div class="form-group" class="radio">
			<label for="input1" class="col-sm-2 control-label">Gender</label>
			<div class="col-sm-10">
			  <label>
					<input type="radio" name="gender" id="optionsRadios1" value="male" <?php if($r['gender'] == 'male'){ echo "checked";} ?>> Male
			  </label>
			  	  <label>
			    <input type="radio" name="gender" id="optionsRadios1" value="female" <?php if($r['gender'] == 'female'){ echo "checked";} ?>> Female
			  </label>
			</div>
			</div>

			<div class="form-group">
			<label for="input1" class="col-sm-2 control-label">Age</label>
			<div class="col-sm-10">
				<select name="age" class="form-control">
	<option>Select Your Age</option>
	<option value="20" <?php if($r['age'] == '20'){ echo "selected";} ?> >20's</option>
	<option value="30" <?php if($r['age'] == '30'){ echo "selected";} ?> >30's</option>
	<option value="40" <?php if($r['age'] == '40'){ echo "selected";} ?> >40's</option>
	<option value="50" <?php if($r['age'] == '50'){ echo "selected";} ?> >50's</option>
	<option value="60" <?php if($r['age'] == '60'){ echo "selected";} ?> >60's</option>
	<option value="70" <?php if($r['age'] == '70'){ echo "selected";} ?> >70's+</option>
</select>
			</div>
			</div>
			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />
		</form>
	</div>
</div>
</body>
</html>
