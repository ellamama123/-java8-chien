<?php 
include('bai5OOPChien.php');
include('bai1OOPChien.php');
include('bai3OOPChien.php');
include('bai4OOPChien.php');

class AccessoryDao extends Database {
    public function insert(Accessotion $row)
    {
        if($this->insertTable(access,$row))
            return 1;
            return 0;
    }
    public function update(Accessotion $row)
    {
        if($this->updateTable(access,$row))
            return 1;
            return 0;
    }
    public function delete(Accessotion $row)
    {
        if($this->deleteTable(access,$row))
            return 1;
            return 0;
    }
    public function findAll()
    {
        return $this->getAccessoryTable();
    }
    public function findById($name)
    {
        foreach($this->getAccessoryTable() as $key => $item)
        {
            if($item->getID() == $name)
            {
                return $this->getAccessoryTable()[$key];
            }
        }
        return 0;
    }
    public function findByName($name)
    {
        foreach($this->getAccessoryTable() as $key => $item)
        {
            if($item->getName() == $name)
            {
                return $this->getAccessoryTable()[$key];
            }
        }
        return 0;
    }
    public function search($where)
    {

    }
}

?>