<?php
$txt = 'hello world';
echo $txt;
$eof = <<<EOF
    <h1>我的第一个标题</h1>
    <p>我的第一个段落。</p>
    <p>$txt,2019</p>
EOF;
echo $eof;
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>
