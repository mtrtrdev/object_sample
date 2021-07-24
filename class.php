<?php

// オブジェクト指向の簡単なデモ

class Car
{
    private $maker;        //メーカー
    private $name;         //車名
    private $model;        //型式
    private $displacement; //排気量
    private $fuelEconomy;  //燃費
    private $fuelCapacity; //燃料容量
    private $price;        //価格

    function __construct($maker, $name, $model, $displacement, $fuelEconomy, $fuelCapacity, $price)
{
    // メンバ変数を初期化
    $this->maker        = $maker;
    $this->name         = $name;
    $this->model        = $model;
    $this->displacement = $displacement;
    $this->fuelEconomy  = $fuelEconomy;
    $this->fuelCapacity = $fuelCapacity;
    $this->price        = $price;
}

    // 小さい単位のデータ取得、処理 ------------------------------------------------------
    // ゲッター（メーカー）
    public function getMaker(){ return $this->maker; }
    // ゲッター（型式）
    public function getModel(){ return $this->model; }

    // メンバ関数(メソッド)
    public function getLogicalMileage()
    {
        // 論理走行距離（燃費 * 燃料容量）
        return $this->fuelEconomy * $this->fuelCapacity;
    }
    public function getLMOfPrice()
    {
        // １万円あたりの走行距離（小数点第二で切り上げ）
        return round($this->getLogicalMileage() / $this->price, 2);
    }
    
    // クラス内で生成したデータを成形するメソッド -----------------------------------------
    /**
     * ゲッター、メンバ関数を用いて
     * 説明文の生成するメソッド
     */
    public function getDescription()
    {
        $text = "";
        $text = $this->getMaker(). "の". $this->getModel(). "は、";
        $text .= "論理走行距離が". $this->getLogicalMileage(). "km";
        $text .= "であり、";
        $text .= "車両価格対走行距離が1万円あたり".  $this->getLMOfPrice(). "km";
        $text .= "です。";
        return $text;
    }



}



