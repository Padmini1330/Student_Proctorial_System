<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  
}
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: crimson;
}

</style>
<body>
<?php $usn = $_GET['usn']; ?>

<div class="navbar" style="background-color:#001a66">
   <?php echo '<a href="home.php?usn='.$usn.'">HOME</a>'; ?>
   <?php echo '<a href="calofevents.php?usn='.$usn.'">CALENDAR OF EVENTS</a>'; ?>
   <?php echo '<a href="iamarks.php?usn='.$usn.'">IA MARKS</a>'; ?>
   <?php echo '<a href="faculty.php?usn='.$usn.'">FACULTY DETAILS</a>'; ?>
    <a href="https://dsatm.edu.in/index.php/about-dsatm">ABOUT</a>
    <a href="main.php" style="left: 30%;left:40%;position:relative"><i class="fa fa-sign-out" aria-hidden="true">SIGN-OUT</i></a>

</div>

<img src="cal.jpg" alt="Trulli" width="80%" height="1000" style="padding-left: 18%">

</body>
</html>