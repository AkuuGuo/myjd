<?php
// $username = 'jd';
// $password = '12345';

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$conn = mysqli_connect('localhost','root','root','jd');
$sql = "SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
echo json_encode($row);
mysqli_close($conn);
?>