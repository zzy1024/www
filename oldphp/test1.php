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

define('demoTitle', 'learnPhpDemo');
echo demoTitle;

$txt = 'hello world!';
$txt[0] = 'm';
echo '<p>'.$txt.'长度是：'.strlen($txt).',wor字符所在的位置：'.strpos($txt, 'wor').'</p>';
echo date('H');

$arr = array('101', '23', '2222');
var_dump($arr);
echo '$arr数组长度by count：', count($arr), '<br/>';
/*for($i = 0; $i < count($arr); $i++){
    echo $i;
    echo '<br/>';
}*/
sort($arr);
print_r($arr);

/*$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}*/

/*CREATE TABLE IF NOT EXISTS ''*/

$name = 'zhudage';

echo '<br/>'.md5($name).'<br/>';

echo rand(10, 80).'<br/>';

echo mt_rand(10, 80).'<br/>';

echo date('Y-m-d H:i:s' ).'<br/>';

$user = [
    'name'=>'zzy',
    'age'=>'20',
    'email'=>'12345@qq.com'
];
foreach ($user as $key=>$value){
    echo $key,'----',$value,'<br/>';
}

?>
