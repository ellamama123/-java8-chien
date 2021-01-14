<?php 
include('bai5OOPChien.php');
include('bai1OOPChien.php');
include('bai3OOPChien.php');
include('bai4OOPChien.php');
class ProductDao{

    // hàm thêm vào product
    public function insert(Product $row)
    {
        $db = new Database();
        if($db->insertTable(PRODUCT,$row))
            return $db;
            return 0;
    }

    // hàm update product
    public function update(Product $row)
    {
        $db = new Database();
        if($db->updateTable(PRODUCT,$row))
            return $db;
            return 0;
    }

    // hàm delete product
    public function delete(Product $row)
    {
        $db = new Database();
        $db->deleteTable(PRODUCT,$row);
        return $db;
    }

    // hàm tìm kiếm product
    public function findAll()
    {
        $db = new Database();
        return $db->getProductTable();
    }

    // hàm tìm kiếm theo id 
    public function findById($id)
    {
        $db = new Database();
        foreach($db->getProductTable() as $key => $product)
        {
            if($product->getID() == $id)
            {
                return $db->getProductTable()[$key];
            }
        }
        return 0;
    }

    // hàm tìm kiếm theo tên
    public function findByName($name)
    {
        $db = new Database();
        foreach($db->getProductTable() as $key => $product)
        {
            if($product->getName() == $name)
            {
                return $db->getProductTable()[$key];
            }
        }
        return 0;
    }

    // hàm tìm kiếm
    public function search($where)
    {

    }
}


?>