<?php

$servername = "localhost";
$username = "root";
$password = "root";

$conn =  mysqli_connect($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

//$dbconn = mysql_connect('localhost', 'root', 'root');