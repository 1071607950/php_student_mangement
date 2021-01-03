<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
</head>
<body></body>
</html>
<?php
$name=$_POST['name'];
$class=$_POST['class'];
$stu_number=$_POST['stu_number'];
$sex=$_POST['sex'];
$internet=$_POST["internet"];
$grades=$_POST['grades'];


$serve = 'localhost:3306';
$username = 'root';
$password = '12345';
$dbname = 'php';
$con = new Mysqli($serve,$username,$password,$dbname);
if($con->connect_error){
    die('connect error:'.$mysqli->connect_errno);
}
//$sql="insert into student(name) values ('$name')";

$sql="insert into student(name,class,student_number,sex,Hobby,Grades) values ('$name','$class','$stu_number','$sex','$internet','$grades')";
if($array1 = mysqli_query($con,$sql))
{
    echo "<script>alert('添加学生成功!')</script>";
    header("Location: add_stu.html");
}







?>