<?php

class Bid
{
    private $db;



    public function __construct(){

        $this->db = new Database ();
    }



    public function addBid($bidPrice, $productId){
        $bidderId = $_SESSION['user_id'];
        echo($bidderId);
        $this->db->query("INSERT INTO bid(bid_price, bidder, product_id)
        VALUES(:bidPrice, :bidder, :productId)");

        $this->db->bind(':bidPrice', $bidPrice);
        $this->db->bind(':bidder', $bidderId);
        $this->db->bind(':productId', $productId);


        if($this->db->execute()){ 
            return true;
        } else{
            return false;
        }
    }


    public function getsingleBid($productId){

        $this->db->query("SELECT * FROM  bid WHERE  product_id = :product_id");
        $this->db->bind(':product_id',$productId);
         $result = $this->db->single();
         return $result;
    }

    


    public function getUserBiddings($userId)
    {
        $this->db->query("SELECT bid.*, product.* FROM  bid INNER JOIN product ON bid.product_id = product.id WHERE  bid.bidder = :user_id");
        $this->db->bind(':user_id', $userId);
        $result = $this->db->resultset();
        return $result;
    }

    public function getWiningBId($productId, $winningBidPrice){
        $this->db->query("SELECT * FROM  bid WHERE  product_id = :product_id AND bid_price = :bid_price");
        $this->db->bind(':product_id', $productId);
        $this->db->bind(':bid_price', $winningBidPrice);
        $result = $this->db->single();
        return $result;
    }


    // public function getFinalBId($productId, $bidder)
    // {
    //     $this->db->query("SELECT user.*, product.* FROM  user INNER JOIN product ON bid.product_id = product.id WHERE  bid.bidder = :user_id");
    //     $this->db->bind(':user_id', $userId);
    //     $result = $this->db->resultset();
    //     return $result;
    // }




}