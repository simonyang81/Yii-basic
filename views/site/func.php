<?php
use yii\helpers\Html;

$this->title = '函数';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php

// 定义一个常量
define('OILPRICE', 100);

// 点号(.)是字符串链接符, 它可以将几段文本链接成一个字符串
echo '<p>Hello World, ';
echo date('H:i, jS F Y');
echo '</p><p>OILPRICE: '.OILPRICE.'</p>';

// 恒等(===), 只有当恒等操作符两边的操作数相等, 并且具有相同的数据类型时, 其返回值才为true
$a = 1;
$b = '1';
$c = 1;
echo '<p> a==b='.($a==$b).' a===b='.($a===$c).'---</p>';

// PHP试着将反向单引号之间的命令当作服务器端的命令来执行
$out = `ls -all`;
echo '<pre> '.$out.' </pre>';

class sampleClass{};
$mySample = new sampleClass();
if ($mySample instanceof sampleClass) {
    echo 'mySample is an instance of sampleClass';
}

// gettype(): 返回变量类型
$a = 56;
echo '<br/>The a type is: '.gettype($a);
settype($a, 'string');
echo '<br/>The a type is: '.gettype($a);
echo '<br/>'.is_string($a);


?>
