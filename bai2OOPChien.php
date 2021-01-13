<?php 
include('bai1OOPChien.php');

class ProductDemo extends Product {
   
    public function createProductionTest()
    {
        $this->id = 0;
        $this->name = "Ten";
        $this->categoryId = 1;
    }
    public function print($product)
    {
        print("ID :" . $product->id . ", Name : " . $this->name . " , CategoryId : " . $this->categoryId);
    }
}

$p1 = new ProductDemo();
$p1->createProductionTest();
$p1->print($p1);

?>