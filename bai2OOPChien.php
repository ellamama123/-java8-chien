<?php 
include('bai1OOPChien.php');

class ProductDemo extends Product {
   
    // hàm test tạo sản phẩm
    public function createProductionTest()
    {
        $this->id = 0;
        $this->name = "Ten";
        $this->categoryId = 1;
    }

    // hàm in
    public function print(Product $product)
    {
        print("ID :" . $product->id . ", Name : " . $product->name . " , CategoryId : " . $product->categoryId);
    }
}


?>