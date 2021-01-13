<?php 
include('bai5OOPChien.php');
include('bai1OOPChien.php');
include('bai3OOPChien.php');
include('bai4OOPChien.php');
class CategoryDAO extends Database {
    public function insert(Category $row)
    {
        if($this->insertTable(cate,$row))
            return 1;
            return 0;  
    
    }
    public function update(Category $row)
    {
        if($this->updateTable(cate,$row))
            return 1;
            return 0;
    }
    public function delete(Category $row)
    {
        if($this->deleteTable(cate,$row))
            return 1;
            return 0;
    }
    public function findAll()
    {
        return $this->getCategoryTable();
    }
    public function findByID($name)
    {
        foreach($this->getCategoryTable() as $key => $item)
        {
            if($item->getID() == $name)
            {
                return $this->getCategoryTable()[$key];
            }
        }
        return 0;
    }

}

?>