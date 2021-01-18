<?php 
include_once('../Database/bai5OOPChien.php');
include_once('../Dao/bai1OOPChien.php');
include_once('../Entity/bai3OOPChien.php');
include_once('../Entity/bai4OOPChien.php');

class AccessoryDao extends BaseDao {
 


    // tìm kiếm theo tên
    public function findByName($name)
    {
        $db = Database::getInstants();
        foreach($db->getAccessoryTable() as $key => $product)
        {
            if($product->getName() == $name)
            {
                return $db->getAccessoryTable()[$key];
            }
        }
        return null;
    }


    // tìm iếm
    public function search($where)
    {

    }
}

?>