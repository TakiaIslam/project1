<?php 
	include "header.php";
	include "connect.php";
	$obj = new dipti;
	session_start();
    if (!isset($_SESSION['user'])) {
    	header("location: login.php");
  	}
  	$firstName = $lastName = $class = $section = $roll = $fatherName = $address = $phone = $gender = $dob = $img = "";
  	$errmsg = "";
  	if (isset($_POST['submit'])) {
  		$firstName = $_POST['firstName'];
  		$lastName = $_POST['lastName'];
  		$class = $_POST['class'];
  		$section = $_POST['section'];
  		$roll = $_POST['roll'];
  		$fatherName = $_POST['fatherName'];
  		$address = $_POST['address'];
  		$phone = $_POST['phone'];
  		$gender = $_POST['gender'];
  		$dob = $_POST['dob'];
  		$img = $_FILES['img']['name'];
  		$imgde = "img/".$img;
  		$imgtn = $_FILES['img']['tmp_name'];

  		if (empty($firstName) || empty($lastName) || $class == "select" || $section == "select" || empty($roll) || empty($fatherName) || empty($address) || empty($phone) || $gender == "select" || empty($dob) || empty($img)) {
  			$errmsg = "<span style='color: red'>Please Provide All the Data</span>";
  		}else{
  			if (getimagesize($imgtn) == false) {
  				$errmsg = "<span style='color: red'>Image File is not supported</span>";
  			}else{
  				move_uploaded_file($imgtn, $imgde);
  				$insert = $obj->db->query("INSERT INTO `students`(`img`, `firstName`, `lastName`, `class`, `section`, `roll`, `fatherName`, `address`, `phone`, `gender`, `dob`) VALUES ('$imgde','$firstName','$lastName','$class','$section','$roll','$fatherName','$address','$phone','$gender','$dob')");
  				if (!$insert) {
  					$errmsg = "<span style='color: red'>Something Went Wrong</span>";
  				}else{
  					echo "<script>alert('Registration Successfull')</script>";
  					$firstName = $lastName = $class = $section = $roll = $fatherName = $address = $phone = $gender = $dob = $img = "";
  				}
  			}
  		}
  	}
?>
<div class="container-fluid bg-white" >
	<div class="row">
		<div class="col-md-12" style="height: 100vh">
			<div class="row">
				<div class="col-md-3"></div>
					<div class="col-md-6 pt-3">
						<form action="" method="post" enctype="multipart/form-data">
							<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								<input type="text" class="form-control" placeholder="First Name" name="firstName" value="<?= $firstName; ?>">
							</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								<input type="text" class="form-control" placeholder="Last Name" name="lastName" value="<?= $lastName; ?>">
							</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								<select name="class" id="" class="form-control">
									<option value="<?php if($class == ''){echo 'select';}elseif($class == 'select'){echo 'select';}else{echo $class;}?>"><?php if($class == 'select'){echo '--Select Class--';}elseif($class == ''){echo '--Select Class--';}else{echo $class;}?></option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
							<select name="section" id="" class="form-control">
								<option value="<?php if($section == ''){echo 'select';}elseif($section == 'select'){echo 'select';}else{echo $section;}?>"><?php if($section == 'select'){echo '--Select Section--';}elseif($section == ''){echo '--Select Section--';}else{echo $section;}?></option>
								<option value="A">A</option>
								<option value="B">B</option>
							</select>
						</div>
							</div>
						</div>
						<div class="form-group">
							<input type="text" value="<?= $roll  ?>" class="form-control" placeholder="Roll Number" name="roll">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" value="<?= $fatherName ?>" placeholder="Father Name" name="fatherName">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Address" name="address" value="<?= $address ?>">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Phone Number" name="phone" value="<?= $phone ?>">
						</div>
						<div class="form-group">
							<select name="gender" id="" class="form-control">
								<option value="<?php if($gender == ''){echo 'select';}elseif($gender == 'select'){echo 'select';}else{echo $gender;}?>"><?php if($gender == 'select'){echo '--Select Gender--';}elseif($gender == ''){echo '--Select Gender--';}else{echo $gender;}?></option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="unwanted">Unwanted</option>
							</select>
						</div>
						<div class="form-group">
							<input type="date" class="form-control" name="dob" value="<?= $dob ?>">
						</div>
						<div class="form-group">
							<input type="file" name="img">
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-primary" value="Add Student "  >
						</div>

						</form>
						<?php echo $errmsg; ?>
					</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>
</div>
<?php
	include "footer.php";
 ?>