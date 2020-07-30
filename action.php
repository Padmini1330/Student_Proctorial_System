 <?php
include_once 'test.php';


	// print_r($_POST);

echo "Entered username is '".$_POST['username']."'";
echo "<br/>";
echo "Entered Password is '".$_POST['psw']."'";

$usn = $_POST['username'];
$pass = $_POST['psw'];

$sql = "SELECT * FROM login_details  WHERE USN = '".$usn."' AND password = '".$pass."' ";
// echo $sql;
$result = mysqli_query($con,$sql);
echo "<br/>";
if(mysqli_num_rows($result) > 0){
	echo "found";
	header("Location: home.php?usn=$usn");
}else{
	echo "not found";
	header('Location: main.php');
}

// print_r($result);
?>