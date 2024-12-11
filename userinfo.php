<?php 

$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'php_project';

$conn = mysqli_connect($hostname, $username, $password, $db_name);

if(isset($_POST['submit'])) {
     $user = $_POST['user'];
     $email = $_POST['email'];
     $message = $_POST['message'];

     $query = "INSERT INTO project_info(user, email, message) VALUES('$user', '$email', '$message')";
     $sql = mysqli_query($conn, $query);

     if($sql == true) {
          echo 'data inserted successfully';
     } else {
          echo 'data not inserted successfully';
     }
}


?>