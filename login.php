<?php 
	include "header.php";
	include "connect.php";
	$obj = new dipti;
	session_start();
	if (isset($_SESSION['user'])) {
		header("location: adminpanel.php");
	}
	$errmsg = "";
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$pass = $_POST['pass'];
		if (empty($username) || empty($pass)) {
			$errmsg = "<span style='color:#c9c9c9'>Please provide all the info!</span>";
		}else{
			$check = $obj->db->query("SELECT * FROM users WHERE user = '$username' AND pass = '$pass'");
			if ($check->num_rows > 0) {
				while ($row = $check->fetch_assoc()) {
					$_SESSION['user'] = $row['user'];
					$_SESSION['power'] = $row['power'];
				}
				header("location: adminpanel.php");
			}else{
				$errmsg = "<span style='color:#c9c9c9'>Information didn't match</span>";
			}
		}
	}
?>
<div class="container">
	<div class="row homepage">
		<div class="col-md-4"></div>
		<div class="col-md-4 p-5 bg-dark rounded">
			<form action="" method="post">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Username" name="username">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" placeholder="Password" name="pass">
			</div>
			<input type="submit" class="btn btn-success" name="submit"><br><br>
			<a href="login.php" class="text-white"><i><b>Forget Password</b></i></a>
			</form>
			<?= $errmsg; ?>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
<?php 
	include "footer.php";
?>