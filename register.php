<?php   
session_start();

$dbname="rtc";
$host="localhost";
$username="rutag";
$pass="Rutag@1234";
$conn= new mysqli($host,$username,$pass,$dbname);
if ($conn->connect_error) {
		die("It seems that we cannot talk to our DB right now. Please try again in a couple of minutes");
	# code...
}
else{
	echo " connection success";
}
$name = $_POST["name"];
$email = $_POST["email"];
$organisation = $_POST["org"];
$address = $_POST["add"];
$phone = $_POST["phone"];
$nature = $_POST["nature"];
$description = $_POST["desc"];
$sql = "INSERT INTO users (name,email,organisation,address,phone,nature_of_activity,description) VALUES('$name','$email','$organisation','$address','$phone','$nature','$description')";
if ($conn->query($sql)) {
	echo "<script>alert('registered Sucessfully')</script>";
  $conn->close();
  echo '<script>alert("registered Sucessfully")</script>';
  header('Location: ./request.php');
  exit;
} else {
  echo "Error: " . $conn->error;
}
?>