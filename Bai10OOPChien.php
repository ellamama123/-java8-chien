<?php 
include('bai5OOPChien.php');
include('bai1OOPChien.php');
include('bai3OOPChien.php');
include('bai4OOPChien.php');
class ProductDao extends Database{
    public function insert(Product $row)
    {
        if($this->insertTable(pro,$row))
            return 1;
            return 0;
    }
    public function update(Product $row)
    {
        if($this->updateTable(pro,$row))
            return 1;
            return 0;
    }
    public function delete(Product $row)
    {
        if($this->deleteTable(pro,$row))
            return 1;
            return 0;
    }
    public function findAll()
    {
        return $this->getProductTable();
    }
    public function findById($name)
    {
        foreach($this->getProductTable() as $key => $item)
        {
            if($item->getID() == $name)
            {
                return $this->getProductTable()[$key];
            }
        }
        return 0;
    }
    public function findByName($name)
    {
        foreach($this->getProductTable() as $key => $item)
        {
            if($item->getID() == $name)
            {
                return $this->getProductTable()[$key];
            }
        }
        return 0;
    }
    public function search($where)
    {

    }
}


?>