<?php
$name = $_REQUEST['names'];
$password = $_REQUEST['psw'];

// $name = 'abcd';
// $password = '12345';

$conn = mysqli_connect('localhost','root','root','jd');

$sql1 = "SELECT * FROM `user` WHERE `username`='$name'"; //查询语句
$sql2 = "INSERT INTO `user` VALUES (null,'$name','$password')";//注册语句
//先查询是否存在用户名
$res1 = mysqli_query($conn,$sql1);
$row = mysqli_fetch_assoc($res1);
if(!$row){
    $res = mysqli_query($conn,$sql2);
    echo 1;
}else{
    echo 0;
}
mysqli_close($conn);

?>