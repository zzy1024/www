<?php
    header('content-type:text/html;charset=utf-8');
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mytest";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("连接失败：" . mysqli_connect_error());
    }
    echo "数据库连接成功<br/>";
    $sql = 'SELECT id, firstname, lastname FROM MyGuests';
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    var_dump($data);
    mysqli_close($conn);






?>