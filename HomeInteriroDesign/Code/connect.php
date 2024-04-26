<?php
$username = $_POST['username'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$password = $_POST['password'];

$con = new mysqli('localhost','root','','test');
if($con->connect_error){
    die('Connection Filed : '.$con->connect_error);
}else{
    $stmt = $con->prepare("insert into registration(username,email,tel,password)
    values(?,?,?,?)");
    $stmt->bind_param("sssi",$username,$email,$tel,$password);
    $stmt->execute();
    echo "Registration Successfully...":
    $stmt->close();
    $stmt->close();
}
?>