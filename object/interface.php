<?php
//インターフェース
/* 
    メソッドの名前のみしか記述できない
*/
interface ProductInterface
{
    //関数の名前のみしか作れない
    public function getProduct();
}

interface NewsInterface
{
    //関数の名前のみしか作れない
    public function getNews();
}

//具象クラス
class BaseProduct
{
    public function echoProduct()
    {
        echo '親クラスです';
    }

    //継承した抽象クラスで定義されてる関数を定義
    public function getProduct()
    {
        echo '親の関数';
    }
}

//継承
/*
　インターフェースクラスは複数継承できる
*/
class Product implements ProductInterface, NewsInterface
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

    //継承したインターフェースクラスの関数を定義
    public function getNews()
    {
        echo 'ニュースです';
    }
}

$instance = new Product('テスト');

$instance->getProduct();
echo '<br>';

$instance->addProduct('追加分');

$instance->getProduct();

$instance->getNews();

//静的(static) インスタンスせずに呼び出せる　クラス名::関数名
Product::getStaticProduct('静的');
echo '<br>';
