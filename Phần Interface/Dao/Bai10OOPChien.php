<?php 
include_once('../Database/bai5OOPChien.php');
include_once('../Dao/bai1OOPChien.php');
include_once('../Entity/bai3OOPChien.php');
include_once('../Entity/bai4OOPChien.php');
include_once('../Abstract/bai15OOPChien.php');
include_once('../Abstract/bai13OOPChien.php');
class ProductDao implements iDao {
    public function __construct() {
       
    }
      public function insert( $row)
     {
        $db = Database::getInstants();
        if($db->insertTable(PRODUCT,$row))
        {
            return $db;
        }
        return 0;
     }
    public function update( $row )
    {
        $db = Database::getInstants();
        if($db->updateTable(PRODUCT,$row))
        {
            return $db;
        }
        return 0;
    }
     public function delete($row) {
        $db = Database::getInstants();
        if($db->deleteTable(PRODUCT,$row))
        {
            return $db;
        }
        return 0;
     }
    public function findAll(){
        $db = Database::getInstants();
        return $db->selectTable(PRODUCT);
     }
    public function findbyId($id){
        $db = Database::getInstants();
        foreach($db->selectTable(PRODUCT) as $key => $product)
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
         foreach($db->selectTable(PRODUCT) as $key => $product)
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