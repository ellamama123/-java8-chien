<?php 
include('bai10OOPChien.php');
class ProductDaoDemo extends ProductDao {
    public function insertTest()
    {
        $pro = new Product(1,'Chien',2);
        var_dump($this->insert($pro));
    }
    public function updateTest()
    {
        $pro = new Product(1,'Cuong',2);
        var_dump($this->update($pro));
    }
    public function deleteTest()
    {
        $pro = new Product(1,'Cuong',2);
        var_dump($this->delete($pro));
    }
    public function findAllTest()
    {
        return $this->findAll();
    }
    public function findByIdTest()
    {
        $id = 1;
        return $this->findById($id);
    }
    public function findByNameTest()
    {
        $name = 'Chien';
        return $this->findByName($name);
    }
}
$db = new ProductDaoDemo();
$db->insertTest();


?>