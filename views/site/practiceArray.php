<?php


$this->title = 'Array';
$this->params['breadcrumbs'][] = $this->title;

echo '<br/>----- 数组 -----<br/>';
$products = array('Tires', 'Oil', 'Spark Plus');
foreach($products as $prod) {
    echo $prod.'  ';
}

echo '<br/>----- 关联数组 -----<br/>';
// 定义关联数组
$productAndPrice = array('Tires'=>100, 'Oil'=>10, 'Spark Plus'=>4);

// 迭代关联数组
foreach($productAndPrice as $key => $value) {
    echo $key.' - '.$value.'<br/>';
}

// 迭代关联数组
while($element = each($productAndPrice)) {
    echo $element['key'].' - '.$element['value'].'  |  ';
}

echo '<br/>';

// 使用each()方法之后需要reset
reset($productAndPrice);

// 迭代关联数组
while(list($product, $price) = each($productAndPrice)) {
    echo $product.' - '.$price.'  ';
}

echo '<br/> ==========<br/>';
echo '[100, 10, 4, "41"] 没有排序<br/>';
$prices = array(100, 10, 4, '41');
foreach($prices as $pri) {
    echo $pri.' ';
}
echo '<br/>[100, 10, 4, "41"] 排序之后, (使用SORT_STRING)<br/>';
sort($prices, SORT_STRING);
foreach($prices as $pri) {
    echo $pri.' ';
}

echo '<br/>[100, 10, 4, "41"] 排序之后, (使用SORT_NUMERIC)<br/>';
sort($prices, SORT_NUMERIC);
foreach ($prices as $pri) {
    echo $pri . ' ';
}

//  对于关联数组, asort()方法可以按value排序, ksort方法可以按key排序
//  反向排序函数: rsort, arsort, krsort


echo '<br/><br/>----- The End -----<br/>';

?>