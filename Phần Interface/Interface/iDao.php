<?php 
interface iDao {
    function insert($row);
    function update($row);
    function delete($row);
    function findAll();
    function findById($id);
    function findByName($name);
}
?>