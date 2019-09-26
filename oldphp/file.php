<?php
    header('content-type:text/html;charset=utf-8');
    $fileName = './test.txt';
    echo '<hr/>';
    echo '<h3>文件属性相关：</h3>';
    date_default_timezone_set("Asia/Shanghai");
    echo filetype($fileName),'，文件大小：', filesize($fileName),'，文件创建时间：', date('Y-m-d H:i:s', filectime($fileName)),'<br/>';
    echo '文件最后修改时间：',date('Y-m-d H:i:s',filemtime($fileName)),'<br/>';
    echo '文件所有者：', fileowner($fileName),'<br/>';
    echo '<hr/>';
    echo '<h3>文件路径相关：</h3>';

    $path = pathinfo($fileName);
    print_r($path);

    var_dump(file_exists($fileName));

    echo '<hr/>';
    echo '<h3>文件操作相关：</h3>';
    $newName='abc.txt';

    //创建文件
    touch($newName);

    //判断要删除的文件是否存在，不存在直接删除会报错
    /*if(file_exists($newName)){
        //删除文件
        unlink($newName);
    }*/

    /*if(file_exists($newName)){
        //重命名文件
        rename($newName, 'abc2.txt');
    }*/

    $path2 = './text/abc.txt';
    if(file_exists($newName)){
        if(rename($newName, $path2)){
            echo '文件剪切成功', '<br/>';
        }else{
            echo '文件剪切失败', '<br/>';
        }
    }else{
        echo '文件不存在', '<br/>';
    }

    if(copy('https://ss0.baidu.com/6ONWsjip0QIZ8tyhnq/it/u=3309305277,211435898&fm=173&app=49&f=JPEG?w=218&h=146&s=FBBE37C02097E5C25CA02413030080D2', 'text/car.jpg')){
        echo '下载图片成功', '<br/>';
    }else{
        echo '下载图片失败', '<br/>';
    }

    echo '<hr/>';
    echo '<h3>文件内容操作相关：</h3>';

    $openName = './text/abc.txt';








?>