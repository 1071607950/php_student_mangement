<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>管理员查找学生</title>
    <link href="style/css/foundation.min.css" rel="stylesheet">
    <link href="style/css/custom.css" rel="stylesheet" />
</head>
<body>
<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
            <h1><a href="login.html">Home</a></h1>
        </li>
    </ul>
    <section class="top-bar-section">
        <!-- Left Nav Section -->
        <ul>
            <li><a href="add_stu.html">Add Student</a></li>
            <li><a href="query_stu.html">Query Student</a></li>
            <li><a href="query_all_stu.php">Query All Student</a></li>

        </ul>
        <!-- Right Nav Section -->
        <ul class="right">
            <li><a href="https://github.com/1071607950">Fork me on GitHub</a></li>
        </ul>
    </section>
</nav>
<header>
    <div class="row">
        <div class="large-12 columns">
            <h2>查询结果</h2>
        </div>
    </div>
</header>
<div class="row">
    <table class="large-12">
        <thead>
            <tr>
        		<th>ID</th>
        		<th>名字</th>
        		<th>班级</th>
        		<th>学号</th>
        		<th>性别</th>
        		<th>爱好</th>
        		<th>年级</th>
    		</tr>
            <?php
            $name=$_POST["name"];

            $serve = 'localhost:3306';
            $username = 'root';
            $password = '12345';
            $dbname = 'php';
            $con = new Mysqli($serve,$username,$password,$dbname);
            if($con->connect_error){
                die('connect error:'.$mysqli->connect_errno);
            }
            $sql="select * from student where name= '$name'";
            $array1 = mysqli_query($con,$sql);
            
            while ($row=mysqli_fetch_assoc($array1)) {
            ?>
            <tr>
                <td align="center"><?php echo $row["id"]?></td>
                <td align="center"><?php echo $row["name"]?></td>
                <td align="center"><?php echo $row["class"]?></td>
                <td align="center"><?php echo $row["student_number"]?></td>
                <td align="center"><?php echo $row["sex"]?></td>
                <td align="center"><?php echo $row["Hobby"]?></td>
                <td align="center"><?php echo $row["Grades"]?></td>
            </tr>
            <?php }?>


        </thead>

    </table>
</div>
</body>
</html>
