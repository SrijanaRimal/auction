<?php

class Product
{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
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

  public function getUserProducts($userId)
  {
    $this->db->query("SELECT * FROM  product WHERE  product_owner = :user_id");
    $this->db->bind(':user_id', $userId);
    $result = $this->db->resultset();
    return $result;
  }


  public function updateCurrentBid($id, $currentBid){
        $this->db->query("UPDATE product SET current_bid = :currentBid WHERE id = :id");

        $this->db->bind(':id', $id);
        $this->db->bind(':currentBid', $currentBid);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

  
    public function getSearchResult($search){
      $search = '%' . $search . '%';

      $this->db->query("SELECT * FROM product WHERE name LIKE :name");
      $this->db->bind(':name',$search);
      $result = $this->db->resultset();
      return $result;
    }









  }