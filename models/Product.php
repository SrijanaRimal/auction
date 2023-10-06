<?php

class Product
{

    private $db;

    public function __construct()
    {
        $this->db = new database;
    }
    
 
  
    public function getAllProducts(){
      $this->db->query("SELECT * FROM product");
       $result = $this->db->resultset();  
       return $result;
    }


    public function getSingleProduct($id){
        $this->db->query("SELECT * FROM product WHERE id = :id");
        $this ->db->bind('id',$id);
        $result = $this ->db->single();
        return $result;
    }

    public function getProductsByCategory($categoryId){
        $this->db->query("SELECT * FROM product WHERE category_id=:category_id");
        $this->db->bind(':category_id',$categoryId);
        $result = $this->db->resultset();
        return $result;
    }
  public function getElectronicProduct(){
    $this->db->query("SELECT * FROM product WHERE category_id = 4");
    // $this->db->bind(':$category_id',$category_id);
    $result = $this->db->resultset();
    return $result;


  } 

  public function addProduct($categoryId, $name, $price, $discription, $image){

    $this->db->query("INSERT INTO product(category_id, name, price, discription, image)
       VALUES(:categoryId, :name, :price, :discription, :image)");

       $this->db->bind(':categoryId', $categoryId);
       $this->db->bind(':name', $name);
       $this->db->bind(':price', $price);
       $this->db->bind(':discription', $discription);
       $this->db->bind(':image', $image);

       if ($this->db->execute()){
        $productId = $this->db->lastInsertId();
        return $productId;
    }


  }








}