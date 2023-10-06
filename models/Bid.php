<?php


class Bid
{
    private $db;



    public function __construct(){

        $this->db = new database;
    }



    public function addBid($expectedPrice, $endDate, $currentBid, $productId){

        $this->db->query("INSERT INTO bid(expected_price, end_date, current_bid, product_id)
        VALUES(:expectedPrice, :endDate, :currentBid, :productId)");

        $this->db->bind(':expectedPrice', $expectedPrice);
        $this->db->bind(':endDate', $endDate);
        $this->db->bind(':currentBid', $currentBid);
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




}