<?php 
define('PRODUCT', 'product');
define('CATEGORY', 'category');
define('ACCESSORY', 'accessory');
class Database {
    private $productTable = array();
    private $categoryTable= array();
    private $accessoryTable= array();
    protected static $instants = null;

    private function __construct()
    {
        
    }

    //  Singleton Pattern 
    public static function getInstants()
    {
        if(self::$instants == NULL)
        {
            self::$instants = new Database();
        }
        return self::$instants;
    }

    // hàm get category table
    public function getCategoryTable()
    {
        return $this->categoryTable;
    }

    // hàm get product table
    public function getProductTable()
    {
        return $this->productTable;
    }

    // hàm get accessory table
    public function getAccessoryTable()
    {
        return $this->accessoryTable;
    }

    // hàm thêm vào table
    public function insertTable($name , $row )
    {
        if($name == PRODUCT)
        {
            array_push($this->productTable,$row);
            return 1;
        }
        if($name == CATEGORY)
        {
            array_push($this->categoryTable,$row);
            return 1;
        }
        if($name ==ACCESSORY)
        {
            array_push($this->accessoryTable,$row);
            return 1;
        }
        return 0;
    }

    // hàm select table
    public function selectTable($name)
    {
        if($name == PRODUCT)
        {
            return $this->productTable;
        }
        if($name == CATEGORY)
        {
            return $this->categoryTable;
        }
        if($name == ACCESSORY)
        {
            return $this->categoryTable;
        }
        return 0;
    }

    // hàm update table
    public function updateTable($name, $row)
    {
        if($name == PRODUCT)
        {
            foreach($this->productTable as $key => $product)
                {
                    if($product->getID() == $row->getID())
                    {
                        $this->productTable[$key] = $row;
                        return 1;
                    }
                }
                return 0;
        }
        if($name == CATEGORY)
        {
            foreach($this->categoryTable as $key => $product)
                {
                    if($product->getID() == $row->getID())
                    {
                        $this->categoryTable[$key] = $row;
                        return 1;
                    }
                }
                return 0;
        }
        if($name == ACCESSORY)
        {
            foreach($this->accessoryTable as $key => $product)
                {
                    if($product->getID() == $row->getID())
                    {
                        $this->accessoryTable[$key] = $row;
                        return 1;
                    }
                }
                return 0;
        } 
        return 0;
    }

    // hàm delete table
    public function deleteTable($name,  $row)
    {
        if($name == PRODUCT)
        {
            foreach($this->productTable as $key => $product)
                {
                    if($product->getID() == $row->getID())
                    {
                        unset($this->productTable[$key]);
                        return 1;
                    }              
                }
                return 0;
        }
        if($name == CATEGORY)
        {
            foreach($this->categoryTable as $key => $product)
                {
                    if($product->getID() == $row->getID())
                    {
                        unset($this->categoryTable[$key]);
                        return 1;
                    }              
                }
                return 0;
        }
        if($name == ACCESSORY)
        {
            foreach($this->accessoryTable as $key => $product)
                {
                    if($product->getID() == $row->getID())
                    {
                        unset($this->accessoryTable[$key]);
                        return 1;
                    }              
                }
                return 0;
        } 
        return 0;
        
    }
    
    // hàm xóa table
    public function truncateTable($name)
    {
        if($name == PRODUCT)
        {
            $this->productTable = array();
            return 1;
        }
        if($name == CATEGORY)
        {
            $this->categoryTable = array();
            return 1;
        }
        if($name ==ACCESSORY)
        {
            $this->accessoryTable = array();
            return 1;
        }
        return 0;
        
    }

    // hàm update table theo id
    public function updateTable1($name,$id, $row)
    {
        if($name == PRODUCT)
        {
            foreach($this->productTable as $key => $product)
                {
                    if($product->getID() == $id)
                    {
                        $this->productTable[$key] = $row;
                        return 1;
                    }
                }
                return 0;
        }
        if($name == CATEGORY)
        {
            foreach($this->categoryTable as $key => $product)
                {
                    if($product->getID() == $id)
                    {
                        $this->categoryTable[$key] = $row;
                        return 1;
                    }
                }
                return 0;
        }
        if($name == ACCESSORY)
        {
            foreach($this->accessoryTable as $key => $product)
                {
                    if($product->getID() == $id)
                    {
                        $this->accessoryTable0[$key] = $row;
                        return 1;
                    }
                }
                return 0;
        } 
        return 0;
    }
}

?>