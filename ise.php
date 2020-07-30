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
 </style>
<?php
include_once 'test.php';
echo "<div style='text-align: center;padding: 30px;font-size: xx-large'> DEPT. OF INFORMATION SCIENCE AND ENGINEERING</div>";
$sql = "SELECT * FROM faculty_details WHERE dept_no = 2";

$result = mysqli_query($con,$sql);

echo "<table border='1' style='width:80%;text-align:center;'>";
echo "<tr>
  	<th>Faculty Id</th>
  	<th>Faculty Name</th>
  	<th>Subject</th>
  	<th>Faculty Ph No.</th>
  	 </tr>";
if(mysqli_num_rows($result)>0){
  while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" .$row['faculty_id']. "</td>";
    echo "<td>" .$row['faculty_name']. "</td>";
    echo "<td>" .$row['subject']. "</td>";
    echo "<td>" .$row['faculty_phno']. "</td>";

    echo "</tr>";
  }
}
echo "</table>";
?>