<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);
$sum = 0;
$max_price = 0;
$max_item = "none";
// この下にコードを書いてください
foreach($menus as $menu){
  echo $menu["name"]."は".$menu["price"]."円です"."<br>";
  $sum += $menu["price"];
  if($menu["price"]>$max_price){
    $max_price = $menu["price"];
    $max_item = $menu["name"];
  }
}

echo "合計金額は".$sum."円です";
echo "<br>";
echo $max_item."が最高価格で".$max_price."円です";
?>
