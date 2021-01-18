<?php 
include_once('../Database/bai5OOPChien.php');
include_once('../Entity/bai1OOPChien.php');
include_once('../Entity/bai3OOPChien.php');
include_once('../Entity/bai4OOPChien.php');
include_once('../Interface/iDao.php');
class CategoryDAO implements iDao{
    
      public function insert( $row)
     {
        $db = Database::getInstants();
        if($db->insertTable(CATEGORY,$row))
        {
            return $db;
        }
        return 0;
     }
    public function update( $row )
    {
        $db = Database::getInstants();
        if($db->updateTable(CATEGORY,$row))
        {
            return $db;
        }
        return 0;
    }
     public function delete($row) {
        $db = Database::getInstants();
        if($db->deleteTable(CATEGORY,$row))
        {
            return $db;
        }
        return 0;
     }
    public function findAll(){
        $db = Database::getInstants();
        return $db->selectTable(CATEGORY);
     }
    public function findbyId($id){
        $db = Database::getInstants();
        foreach($db->selectTable(CATEGORY) as $key => $product)
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
         foreach($db->selectTable(CATEGORY) as $key => $product)
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