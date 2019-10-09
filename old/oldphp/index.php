<?php
/*session_start();
if(isset($_SESSION['views'])) {
    $_SESSION['views']=$_SESSION['views']+1;
}
else {
    $_SESSION['views']=1;
}
echo "浏览量：". $_SESSION['views'];
*/?>
<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>learn php</title>
    <link href="/public/css/index.css" rel='stylesheet' />
</head>
<body>
<div class="header">
    <?php include "header.php"; echo "$title";?>
</div>
<?php
echo date("Y-m-d h:i:s"). "<br>";
?>
<?php
$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
echo json_encode($arr);
?>
<form action="application/controllers/home/regist.php" method="post">
    用户名: <input type="text" name="fname" value="二师兄"><br/>
    密　码: <input type="text" name="password" value="123456"><br/>
    性　别：<input type="radio" name="sex" value="1"> 男 <input type="radio" name="sex" value="2"> 女<br/>
    <select name="q">
        <option value="">选择一个站点:</option>
        <option value="baidu">Baidu</option>
        <option value="google">Google</option>
        <option value="taobao">Taobao</option>
    </select><br/>
    <input type="submit" value="提交">
</form>
<h2>上传文件：</h2>
<form action="application/controllers/home/upload_file.php" method="post" enctype="multipart/form-data">
    <label for="file">文件名：</label>
    <input type="file" name="file" id="file"><br>
    <input type="submit" name="submit" value="提交">
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mytest";
//创建链接
$conn = mysqli_connect($servername, $username, $password, $dbname);

//检测链接
if(!$conn){
    die("连接失败：" . mysqli_connect_error());
}
echo "数据库连接成功<br/>";
/*$sql = "CREATE DATABASE mytest";
if(mysqli_query($conn, $sql)){
    echo "数据库创建成功";
}else {
    echo "数据库创建失败" . mysqli_error($conn);
}*/
// 使用 sql 创建数据表
/*$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "数据表 MyGuests 创建成功";
} else {
    echo "创建数据表错误: " . mysqli_error($conn);
}*/
/*$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";
if(mysqli_multi_query($conn, $sql)){
    echo '新数据插入成功';
}else{
    echo 'Error:' . $sql . '<br/>' . mysqli_error($conn);
}*/
$sql = 'SELECT id, firstname, lastname FROM MyGuests';
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
}
mysqli_close($conn);
?>
</body>
</html>