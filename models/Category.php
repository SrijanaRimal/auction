<?php

class Category
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    public function getAllCategories()
    {
        $this->db->query("SELECT * FROM category");
        $result = $this->db->resultset();
        return $result;
    }

    public function getCategories($categoriesIdArray)
    {
        $categoryIds = implode(',', $categoriesIdArray);
        $query = "SELECT * FROM category WHERE id IN ($categoryIds)";
        $this->db->query($query);
        $result = $this->db->resultset();
        return $result;
    }


    public function getCategory($id)
    {
        $this->db->query("SELECT * FROM category WHERE id=:id");
        $this->db->bind(':id', $id);
        $result = $this->db->single();
        return $result;
    }
    public function getCategoryProducts($id)
    {
        $this->db->query("SELECT * FROM product WHERE category_id=:id");
        $this->db->bind(':id', $id);
        $result = $this->db->resultset();
        return $result;
    }
}
