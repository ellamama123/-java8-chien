<?php 
include('bai8OOPChien.php');
class CategoryDAODemo extends CategoryDAO {
    public function insertTest()
    {
        $row = new Category(4,"Nam");
        var_dump($this->insert($row));
    }
    public function updateTest()
    {
        $row = new Category(4,"Hoàng");
        var_dump($this->update($row));
    }
    public function deleteTest()
    {
        $row = new Category(4,"Hoàng");
        $this->deleteTest($row);
    }
    public function findAllTest()
    {
        return $this->findAll();
    }
    public function findByIDTest()
    {
        $name = "Nam";
        return $this->findByID($name);
    }


}
$db = new CategoryDAODemo();
$db->insertTest();

var_dump($db);

?>