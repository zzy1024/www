<?php
$user[]=['id'=>'1','name'=>'zzy', 'age'=>'18','email'=>'12345@qq.com'];
$user[]=['id'=>'2','name'=>'zzy1', 'age'=>'19','email'=>'12345@qq.com'];
$user[]=['id'=>'3','name'=>'zzy2', 'age'=>'181','email'=>'1212345@qq.com'];
echo time(),'</br>';
setcookie('name','zzy', time() + 10000);
echo time() + 10*64800;
session_start();
$_SESSION['userName'] = 'zzy';
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>用户列表</title>
</head>
<body>
<table cellpadding="0" cellspacing="0" border="1" style="background: #abcdef;">
    <tr>
        <td>编号</td>
        <td>姓名</td>
        <td>年龄</td>
        <td>邮箱</td>
    </tr>

    <?php
    foreach ($user as $val){

        ?>
        <tr>
            <td><?php echo $val['id'] ?></td>
            <td><?php echo $val['name'] ?></td>
            <td><?php echo $val['age'] ?></td>
            <td><?php echo $val['email'] ?></td>
        </tr>
        <?php
    }
    ?>

</table>
</body>
</html>