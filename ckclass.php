<?php include "header.php"; ?>
<?php include "connect.php"; 
	$obj = new dipti;
	$errmsg = "";
	session_start();
	if (isset($_POST['submit'])) {
		$class = $_POST['class'];
		$section = $_POST['section'];
		if ($class == "select" || $section == "select") {
			$errmsg = "<span style='color: red'>Please Provide All the Data</span>";
		}else{
			header("location: studentlist.php?class=$class&section=$section");
		}
	}
?>
<?php if (isset($_SESSION['user'])): ?>
	<div class="container-fluid bg-white">
		<div class="row" style="height: 100vh">
			<div class="col-md-3"></div>
			<div class="col-md-6 pt-5 mt-5">
				<form action="" method="post">
				<div class="form-group">
					<select name="class" class="form-control">
						<option value="select">--SELECT CLASS--</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</div>
				<div class="form-group">
					<select name="section" class="form-control">
						<option value="select">--SELECT SECTION--</option>
						<option value="A">A</option>
						<option value="B">B</option>
					</select>
				</div>
				<input type="submit" class="btn btn-primary" name="submit">
				</form>
				<?= $errmsg; ?>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
<?php endif ?>
<?php include "footer.php"; ?>