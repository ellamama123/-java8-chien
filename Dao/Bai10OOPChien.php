<?php 
include_once('../Database/bai5OOPChien.php');
include_once('../Dao/bai1OOPChien.php');
include_once('../Entity/bai3OOPChien.php');
include_once('../Entity/bai4OOPChien.php');
include_once('../Abstract/bai15OOPChien.php');
include_once('../Abstract/bai13OOPChien.php');
class ProductDao extends BaseDao {

    // hàm tìm kiếm theo tên
    public function findByName($name)
    {
        $db = Database::getInstants();
        foreach($db->getProductTable() as $key => $product)
        {
            if($product->getName() == $name)
            {
                return $db->getProductTable()[$key];
            }
        }
        return null;
    }

    // hàm tìm kiếm
    public function search($where)
    {

    }
}


?>