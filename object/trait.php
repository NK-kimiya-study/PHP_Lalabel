<?php
//トレイト
/*
    子クラスに親クラスを複数呼び出せる
*/
trait ProductTrait
{
    public function getProduct()
    {
        echo 'プロダクト';
    }
}

trait NewsTrait
{
    public function getNews()
    {
        echo 'ニュース';
    }
}

class Product
{
    use ProductTrait;
    use NewsTrait;

    public function getInformation()
    {
        echo 'クラスです';
    }
}

$product = new Product();
$product->getInformation();
echo '<br>';

$product->getProduct();
echo '<br>';

$product->getNews();
echo '<br>';
