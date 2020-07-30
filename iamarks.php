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
 table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #001a66;
  color: white;
}

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
    <a href="main.php" style="left: 30%;left:40%;position:relative";><i class="fa fa-sign-out" aria-hidden="true">SIGN-OUT</i></a>

</div>



<div class="container" style="margin: 0px;padding: 50px;">
  <div class="dropdown" style="display:none;">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select dept
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">CSE</a></li>
      <li><a href="#">ISE</a></li>
      <li><a href="#">EEE</a></li>
	  <li><a href="#">ECE</a></li>
	  <li><a href="#">CIV</a></li>
	  <li><a href="#">ME</a></li>
    </ul>
  </div>



<?php
include_once 'test.php';

// echo $_GET['usn'];

$usn = $_GET['usn'];

$sql = "SELECT * FROM iamarks where USN ='".$usn."' ";

$result = mysqli_query($con,$sql);

// print_r($result);
echo "<div style='padding:25px;'><table border='1'>";
echo "<tr>
<th>USN</th>
<th>Dept no.</th>
<th>1st sem</th>
<th>2nd sem</th>
<th>3rd sem</th>
<th>4th sem</th>
<th>CGPA</th>
</tr>";
if(mysqli_num_rows($result)>0){
  while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" .$row['USN']. "</td>";
    echo "<td>" .$row['dept_no']. "</td>";
    echo "<td>" .$row['sem1']. "</td>";
    echo "<td>" .$row['sem2']. "</td>";
    echo "<td>" .$row['sem3']. "</td>";
    echo "<td>" .$row['sem4']. "</td>";
    echo "<td>" .$row['CGPA']. "</td>";

    echo "</div>";
  }
}
echo "</table>";
?>
</div>

 </body>
</html>
