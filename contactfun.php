<?php
echo "hello form contact form ";
?>




<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="hopertechssolutions";
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['sbmtbtn']))
{
    //print_r ($_POST);
   $name=$_POST('name');
   $email=$_POST['email'];
   $subject=$_POST['subject'];
   $message= $_POST['message'];
   
   $qr="INSERT INTO `contact`(`name`, `email`, `subject`, `message`, `date`) VALUES ('$name','$email','$subject','$message','$date')";
   $iquery=mysqli_query($conn,$qr);
   print_r($iquery);
   echo "insert successfully";
}
?>