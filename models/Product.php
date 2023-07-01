<?php

class Product
{

    private $db;

    public function __construct()
    {
        $this->db = new database;
    }
    public function getProductsByCategory($categoryId)
    {
     $this->db->query("SELECT * FROM product WHERE category_id =:categoryId ");
     $this->db->bind(':categoryId', $categoryId);
         $result = $this->db->resultset();
         return $result;
         
    } 





    public function getAllProducts(){
      $this->db->query("SELECT * FROM product");
       $result = $this->db->resultset();  
       return $result;
    }












}
