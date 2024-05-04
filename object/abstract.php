<?php
//抽象クラス
abstract class ProductAbstract
{
    public function echoProduct()
    {
        echo '親クラスです';
    }

    //関数の名前のみしか作れない
    abstract public function getProduct();
}

//具象クラス
class BaseProduct extends ProductAbstract
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
//子クラス
class Product extends BaseProduct
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

//継承したクラスの関数を使用
$instance->echoProduct();

$instance->addProduct('追加分');

$instance->getProduct();

//静的(static) インスタンスせずに呼び出せる　クラス名::関数名
Product::getStaticProduct('静的');
echo '<br>';
