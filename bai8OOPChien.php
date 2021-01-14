<?php 
include('bai5OOPChien.php');
include('bai1OOPChien.php');
include('bai3OOPChien.php');
include('bai4OOPChien.php');
class CategoryDAO extends BaseDao{
   // hàm insert vào category

    public function insert($row)
    {
        $db = new Database();
        if($db->insertTable(CATEGORY,$row))
        {
            return $db;
        }
        return 0;
    }

    // hàm update category
    public function update($row)
    {
        $db = new Database();
        if($db->updateTable(CATEGORY,$row))
        {
            return $db;
        }
        return 0;
    }

    // hàm delete category
    public function delete( $row)
    {
        $db = new Database();
        if($db->deleteTable(CATEGORY,$row))
        {
            return $db;
        }
        return 0;
    }

    // hàm in ra tất cả
    public function findAll()
    {
        $db= new Database();
        return $db->getCategoryTable();
    }

    // hàm tìm kiếm theo id
    public function findByID($name)
    {
        $db = new Database();
        foreach($db->getCategoryTable() as $key => $product)
        {
            if($product->getName() == $name)
            {
                return $db->getCategoryTable()[$key];
            }
        }
        return 0;
    }

}

?>