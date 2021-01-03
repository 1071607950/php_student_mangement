
<?php
session_start();//登录系统开启一个session内容
$serve = 'localhost:3306';
$username = 'root';
$password = '12345';
$dbname = 'php';
$con = new Mysqli($serve,$username,$password,$dbname);
if($con->connect_error){
    die('connect error:'.$mysqli->connect_errno);
}
$username=$_REQUEST["username"];//获取html中的用户名（通过post请求）
$password=$_REQUEST["password"];//获取html中的密码（通过post请求）


$check_query = mysqli_query($con,"select * from admin where username = '{$username}' and password = '{$password}'");
if($result = mysqli_fetch_row($check_query)){

    header("Location:query_stu.html");
     echo "<script>alert('登录成功');</script>";

} else {
    header("Location:login.html");
    echo "<script>alert('登录失败');</script>";

}





?>

