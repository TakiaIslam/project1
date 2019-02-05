<?php  
  include "connect.php";
  $obj = new dipti;
  session_start();
  if (!isset($_SESSION['user'])) {
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <style>
    *{
      margin: 0;
      padding: 0;
    }
    .header{
       height: 10vh;
       width: 100%;
       background: #ccc;
    }
    .logo{
      width: 25%;
      height: 100%;
      display: flex;
      align-items: center;
      padding-left: 15px;
      color: red;
      font-size: 24px;
      float: left;
    }
    .main-header{
      float: left;
      display: flex;
      align-items: center;
      height: 100%;
      justify-content: flex-end;
      width: 75%;
      padding-left: -15px;
      padding-right: 15px;
    }
    .cntainer{
      width:100%;
      height: 90vh;
    }
    .tab-name{
      width: 25%;
      float: left;
      height: 100%;
      background: #cccccc;
    }
    .tab-name div{
      padding: 15px;
    }
    .tab-name div:hover{
      background: #9c9c9c;
    }
    .active-n{
      background: #6c6c6c;
    }
    .tab-body{
      width: 75%;
      float: left;
      height: 100%;
    }
    .tab-body div{
      height: 100%;
      display: none;
    }
    .active-b{
      display: block !important;
    }
  </style>
</head>
<body>
  <div class="header">
    <div class="logo">
      <?php 
        if ($_SESSION['power'] == "admin") {
          echo "Admin Pannel";
        }else{
          echo "Co Pannel";
        }
      ?>
    </div>
    <div class="main-header">
          <div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle text-capitalize" data-toggle="dropdown">
    <?= $_SESSION['user']  ?>
  </button>
  <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item" href="logout.php">Logout</a>
  </div>
</div>
    </div>
  </div>
<div class="cntainer">
  <div class="tab-name">
    <?php if ($_SESSION['power'] == "admin") {  
    ?>
    <div id="ccn" class="<?php if($_SESSION['power'] == "admin"){ echo 'active-n'; } ?>">Check Classes</div>
    <div id="scn" class="">Search Student</div>
    <?php } ?>
    <div id="asn" class="<?php if($_SESSION['power'] == "co"){ echo 'active-n'; } ?>">Add Student</div>
    <div id="cpn" class="">Change Password</div>
  </div>
  <div class="tab-body">
    <?php if ($_SESSION['power'] == "admin") {  
    ?>
    <div id="ccb" class="<?php if($_SESSION['power'] == "admin"){echo 'active-b'; }?>">
    	<iframe src="ckclass.php" frameborder="0" style="width: 100%; height: 99.3%"></iframe>
    </div>
    <div id="scb" class="">Search Student</div>
    <?php } ?>
    <div id="asb" class="<?php if($_SESSION['power'] == "co"){echo 'active-b'; }?>"><iframe src="addstudent.php" frameborder="0" style="width: 100%; height: 99.3%"></iframe></div>
    <div id="cpb" class="">Change Password</div>
  </div>
</div>  
<script src="assets/jquery.slim.min.js"></script>
<script>
  $("document").ready(function(){
    $("#ccn").click(function(){
      $("#ccn").addClass('active-n');
      $("#ccb").addClass('active-b');
      $("#scn, #asn, #cpn").removeClass('active-n');
      $("#scb, #asb, #cpb").removeClass('active-b');
    })
    $("#scn").click(function(){
      $("#scn").addClass('active-n');
      $("#scb").addClass('active-b');
      $("#ccn, #asn, #cpn").removeClass('active-n');
      $("#ccb, #asb, #cpb").removeClass('active-b');
    })
    $("#asn").click(function(){
      $("#asn").addClass('active-n');
      $("#asb").addClass('active-b');
      $("#ccn, #scn, #cpn").removeClass('active-n');
      $("#ccb, #scb, #cpb").removeClass('active-b');
    })
    $("#cpn").click(function(){
      $("#cpn").addClass('active-n');
      $("#cpb").addClass('active-b');
      $("#ccn, #scn, #asn").removeClass('active-n');
      $("#ccb, #scb, #asb").removeClass('active-b');
    })
  })
</script>
<script src="assets/popper.min.js"></script>
<script src="assets/bootstrap.min.js"></script>
</body>
</html>