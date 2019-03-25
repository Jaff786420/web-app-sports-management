<?php

$event_name=$_POST['ename'];
$type=$_POST['type'];
$description=$_POST['description'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$time=$_POST['time'];
//$status=$_POST['stats'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jaff";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

/*$sql1 = "CREATE TABLE event(
  `id` int(10) NOT NULL,
  `event_name` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(15) NOT NULL
)"; //ENGINE=InnoDB DEFAULT CHARSET=latin1;
*/

$sql = "INSERT INTO event(event_name,type,description,start_date,end_date,time,status)
VALUES ('$event_name','$type','$description','$start_date','$end_date','$time','ongoing')";
if ($conn->query($sql) == TRUE) {	
 //$message = "Event Added Successfully";
 // echo "<script type='text/javascript'>alert('$message');</script>";
  //header('Location: Add Events.html'); 

echo '<script type="text/javascript">'; 
echo 'alert("Event Added Sucessfully");'; 
echo 'window.location.href = "Add Events.html";';
echo '</script>';  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>