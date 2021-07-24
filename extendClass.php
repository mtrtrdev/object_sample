<?php

echo phpinfo();

// クラスファイル読み込み
require 'class.php';

// 引数は可変値、設計書は使いまわすイメージ
$car1 = new Car("トヨタ", "ランドクルーザー", "4.6GX", 4608, 93, 6.9, 437.8);
$car2 = new Car("ホンダ", "ヴェゼル", "1.5 G Honda SENSING", 1496, 40, 21.2, 192.1);
$car3 = new Car("三菱", "アウトランダー", "20M", 1998, 63, 16.0, 247.8);

// 各オブジェクトから生成された説明文を出力
echo "<pre>";
var_dump($car1->getDescription());
var_dump($car2->getDescription());
var_dump($car3->getDescription());




