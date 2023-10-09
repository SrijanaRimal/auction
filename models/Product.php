<?php


class Product
{

  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }



  public function getAllProducts()
  {
    $this->db->query("SELECT * FROM product");
    $result = $this->db->resultset();
    return $result;
  }

  public function getProducts($productIdArray)
  {
    $productIds = implode(',', $productIdArray);
    $this->db->query("SELECT * FROM product WHERE id IN ($productIds)");
    $result = $this->db->resultset();
    return $result;
  }


  public function getSingleProduct($id)
  {
    $this->db->query("SELECT * FROM product WHERE id = :id");
    $this->db->bind('id', $id);
    $result = $this->db->single();
    return $result;
  }

  public function getProductsByCategory($categoryId)
  {
    $this->db->query("SELECT * FROM product WHERE category_id=:category_id");
    $this->db->bind(':category_id', $categoryId);
    $result = $this->db->resultset();
    return $result;
  }
  public function getElectronicProduct()
  {
    $this->db->query("SELECT * FROM product WHERE category_id = 4");
    // $this->db->bind(':$category_id',$category_id);
    $result = $this->db->resultset();
    return $result;
  }

  public function addProduct($categoryId, $name, $price, $discription, $image)
  {
    $userId = $_SESSION['user_id'];
    $this->db->query("INSERT INTO product (category_id, name, starting_bid_price, current_bid, discription, image, product_owner)
       VALUES(:categoryId, :name, :startingBid, :currentBid, :discription, :image, :productOwner)");

    $this->db->bind(':categoryId', $categoryId);
    $this->db->bind(':name', $name);
    $this->db->bind(':startingBid', $price);
    $this->db->bind(':currentBid', $price);
    $this->db->bind(':discription', $discription);
    $this->db->bind(':image', $image);
    $this->db->bind(':productOwner', $userId);

    if ($this->db->execute()) {
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


  public function updateCurrentBid($id, $currentBid)
  {
    $this->db->query("UPDATE product SET current_bid = :currentBid WHERE id = :id");

    $this->db->bind(':id', $id);
    $this->db->bind(':currentBid', $currentBid);


    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }


  public function getSearchResult($search)
  {
    $search = '%' . $search . '%';

    $this->db->query("SELECT * FROM product WHERE name LIKE :name");
    $this->db->bind(':name', $search);
    $result = $this->db->resultset();
    return $result;
  }


  public function getRecommendedProducts()
  {
    if (!isset($_SESSION['user_profile'])) {
      $user = new User();
      $profile = $user->getUserProfile();
      if(!$profile){
        return false;
      }
    }
    $userProfile = $_SESSION['user_profile'];
    $recommendedCategories = $userProfile['most_frequent_categories'];
    $recommendedPrice = $userProfile['average_bid_price'];

    $categoryIds = implode(',', $recommendedCategories);

    $this->db->query("SELECT * FROM product WHERE category_id IN ($categoryIds) AND current_bid BETWEEN :minPrice AND :maxPrice");

    $this->db->bind(':minPrice', $recommendedPrice * 0.7);
    $this->db->bind(':maxPrice', $recommendedPrice * 1.3);

    $result = $this->db->resultset();

    // Check if result has at least three products
  if (count($result) < 3) {
    $categoryId = $recommendedCategories[0];
    $this->db->query("SELECT * FROM product WHERE category_id = :categoryId");
    $this->db->bind(':categoryId', $categoryId);
    $additionalProducts = $this->db->resultset();
    $result = array_merge($result, $additionalProducts);
  }
  return array_slice($result, 0, 3);
  }
}
