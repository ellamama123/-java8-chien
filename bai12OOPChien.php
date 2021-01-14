<?php 
include('bai5OOPChien.php');
include('bai1OOPChien.php');
include('bai3OOPChien.php');
include('bai4OOPChien.php');

class AccessoryDao extends BaseDao {
    // thêm bảng
    public function insert( $row)
    {
        $db = new Database();
        if($db->insertTable(ACCESSORY,$row))
            return $db;
            return 0;
    }
    
    // cập nhật bảng
    public function update($row)
    {
        $db = new Database();
        if($db->updateTable(ACCESSORY,$row))
            return $db;
            return 0;
    }

    // xóa
    public function delete($row)
    {
        $db = new Database();
        if($db->deleteTable(ACCESSORY,$row))
            return $db;
            return 0;
    }

    // tìm kiếm tất cả 
    public function findAll()
    {
        $db = new Database();
        return $db->getAccessoryTable();
    }


    // tìm kiếm theo id 
    public function findById($id)
    {
        $db = new Database();
        foreach($db->getAccessoryTable() as $key => $product)
        {
            if($product->getID() == $id)
            {
                return $db->getAccessoryTable()[$key];
            }
        }
        return 0;
    }


    // tìm kiếm theo tên
    public function findByName($name)
    {
        $db = new Database();
        foreach($db->getAccessoryTable() as $key => $product)
        {
            if($product->getName() == $name)
            {
                return $db->getAccessoryTable()[$key];
            }
        }
        return 0;
    }


    // tìm iếm
    public function search($where)
    {

    }
}

?>