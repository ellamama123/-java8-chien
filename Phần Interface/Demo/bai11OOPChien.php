<?php 
include_once('../Dao/bai10OOPChien.php');
include_once('../Database/bai5OOPChien.php');
class ProductDaoDemo  {
    public function insertTest()
    {
        $productDao = new ProductDao();
        $pro = new Product(1,'Chien',2);
        var_dump($productDao->insert($pro,PRODUCT));
    }
    public function updateTest()
    {
        $productDao = new ProductDao();
        $pro = new Product(1,'Cuong',2);
        var_dump($productDao->update($pro,PRODUCT));
    }
    public function deleteTest()
    {
        $productDao = new ProductDao();
        $pro = new Product(1,'Cuong',2);
        var_dump($productDao->delete($pro,PRODUCT));
    }
    public function findAllTest()
    {
        $productDao = new ProductDao();
        return $productDao->findAll(PRODUCT);
    }
    public function findByIdTest()
    {
        $productDao = new ProductDao();
        $id = 1;
        return $productDao->findById($id,PRODUCT);
    }
    public function findByNameTest()
    {
        $productDao = new ProductDao();
        $name = 'Chien';
        return $productDao->findByName($name);
    }
}
$db = new ProductDaoDemo();
$db->insertTest();


?>