<?php
include_once('../Entity/bai1OOPChien.php');
class ProductDemo extends Product{
    
    public function createProductTest(){
        $pro = new Product(1, 'Chien', 2);
        return $pro;
    }

    public function printProduct($product){
        var_dump($this->createProductTest());
    }
}

$pro = new ProductDemo(1, 'Hoa', 4);
$pro->printProduct($pro->createProductTest());

