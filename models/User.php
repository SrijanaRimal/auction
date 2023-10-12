<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

class User
{

    private $db;

    public function __construct() 
    {
        $this->db = new Database();
    }
    public function login($username,$password){
        $encryptedPassword = md5($password);
        $this->db->query("SELECT * FROM user WHERE username= :username AND  password= :password");
        $this->db->bind('username',$username);
        $this->db->bind('password',$encryptedPassword);
         $result  =$this->db->single();
         return $result;
    }

   public function register($firstName, $lastName, $address, $contactNumber,$username, $password)
   {
    $password = md5($password);

    $this->db->query("INSERT INTO user(first_name, last_name, address, contact_number, username, password)
    VALUES(:firstName, :lastName, :address, :contactNumber, :username, :password)");

    $this->db->bind(':firstName',$firstName);
    $this->db->bind(':lastName',$lastName);
    $this->db->bind(':address',$address);
    $this->db->bind(':contactNumber',$contactNumber);
    $this->db->bind(':username',$username);
    $this->db->bind(':password',$password);

    if ($this->db->execute()){
        return true;
    }else{
        return false;
    }

   }

   public function getUserInfo($id){
    $this->db->query("SELECT * FROM user WHERE id = :id");
    $this->db->bind(':id',$id);
    $result = $this->db->single();
    return $result;
   }


   public function getUserProfile(){
    $userProfile = [];
    $bid = new Bid();
    $product = new Product();
    $id = $_SESSION['user_id'];
    

    $userBids = $bid->getUserBiddings($id);
    if(empty($userBids)){
        return false;
    }
    $productCounts = array_count_values(array_column($userBids, 'product_id'));
    arsort($productCounts);
    $mostFrequentProductIds = array_slice(array_keys($productCounts), 0, 2);

    $mostFrequentProducts = $product->getProducts($mostFrequentProductIds);
    $categoryCounts = array_count_values(array_column($mostFrequentProducts, 'category_id'));
    arsort($categoryCounts);
    $mostFrequentCategoryIds = array_slice(array_keys($categoryCounts), 0, 2);
    $category= new Category();
    $temp = $category->getCategories($mostFrequentCategoryIds);

    $userBidPrices = array_column($userBids, 'bid_price');
    $averagePrice = array_sum($userBidPrices) / count($userBidPrices);
    
    $userProfile['most_frequent_products'] = $mostFrequentProductIds;
    $userProfile['most_frequent_categories'] = $mostFrequentCategoryIds;
    $userProfile['average_bid_price'] = $averagePrice;
    $_SESSION['user_profile'] = $userProfile;
   }




}