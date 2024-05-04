<?php

class Product
{
    //アクセス修飾子、private,protected(自分と継承したクラス),public

    //変数
    private $product = [];

    //関数
    function __construct($product)
    {
        $this->product = $product;
    }

    public function getProduct()
    {
        echo $this->product;
    }

    public function addProduct($item)
    {
        $this->product .= $item;
    }

    public static function getStaticProduct($str)
    {
        echo $str;
    }
}

$instance = new Product('テスト');

$instance->getProduct();
echo '<br>';

$instance->addProduct('追加分');

$instance->getProduct();

//静的(static) インスタンスせずに呼び出せる　クラス名::関数名
Product::getStaticProduct('静的');
echo '<br>';