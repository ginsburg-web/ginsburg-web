<?php
session_start();

header('location:login.php');
//database connect
$con = mysqli_connect('localhost','root','',);

mysqli_select_db($con,'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];
//table
$s = "select * from usertable where name ='$name' ";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);
//not sucess msg
if($num == 1){
    echo "username alredy taken";

}
//register sucessful msg
else{
    $reg= "insert into usertable(name,password) values ('$name','$pass')";
    mysqli_query($con,$reg);

    echo "registration sucessful";
}

?>