<?php 
include_once('../Database/bai5OOPChien.php');
include_once('../Dao/bai1OOPChien.php');
include_once('../Entity/bai3OOPChien.php');
include_once('../Entity/bai4OOPChien.php');

class AccessoryDao implements iDao {
    public function __construct() {
       
    }
      public function insert( $row)
     {
        $db = Database::getInstants();
        if($db->insertTable(ACCESSORY,$row))
        {
            return $db;
        }
        return 0;
     }
    public function update( $row )
    {
        $db = Database::getInstants();
        if($db->updateTable(ACCESSORY,$row))
        {
            return $db;
        }
        return 0;
    }
     public function delete($row) {
        $db = Database::getInstants();
        if($db->deleteTable(ACCESSORY,$row))
        {
            return $db;
        }
        return 0;
     }
    public function findAll(){
        $db = Database::getInstants();
        return $db->selectTable(ACCESSORY);
     }
    public function findbyId($id){
        $db = Database::getInstants();
        foreach($db->selectTable(ACCESSORY) as $key => $product)
        {
            if($product->getID() == $id)
            {
                return $product;
            }
        }
        return null;
     }
     public function findByName($name)
     {
         $db = Database::getInstants();
         foreach($db->selectTable(ACCESSORY) as $key => $product)
         {
             if($product->getName() == $name)
             {
                 return $product;
             }
         }
         return null;
     }

}

?>