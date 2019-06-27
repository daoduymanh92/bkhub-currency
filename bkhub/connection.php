<?php

$conn = mysqli_connect("localhost","root","","currency");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
// $sql = "SELECT * FROM bang_gia";
// $result = $conn -> query($sql);
// var_dump($result);
// $data = $result-> fetch_assoc();
// var_dump($data);
// die();
// -----

?>
