<?php 
	include "header.php";
?>
<div class="container-fluid" style="background-image: url(assets/Background.png);">
	<div class="row homepage">
		<div class="col-md-4"></div>
		<div class="col-md-4 p-5 bg-dark rounded">
			<div class="form-group">
				<select name="" class="form-control">
					<option value="select">--Select Your Class--</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Type Your Roll">
			</div>
			<input type="submit" class="btn btn-success" name="submit"><br><br>
			<a href="login.php" class="text-white"><i><b>Admin Login</b></i></a>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
<?php 
	include "footer.php";
?>