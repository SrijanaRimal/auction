<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

class Category
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    public function getAllCategories()
    {
        $query = $this->db->query("SELECT * FROM category");
        $result = $this->db->resultset();
        return $result;
    }

    public function getCategories($categoriesIdArray)
    {
        $categoryIds = implode(',', $categoriesIdArray);
        $query = "SELECT * FROM category WHERE id IN ($categoryIds)";
        $query = $this->db->query($query);
        $result = $this->db->resultset();
        return $result;
    }


    public function getCategory($id)
    {
        $query = $this->db->query("SELECT * FROM category WHERE id=:id");
        $this->db->bind(':id', $id);
        $result = $this->db->single();
        return $result;
    }
    public function getCategoryProducts($id)
    {
        $query = $this->db->query("SELECT * FROM product WHERE category_id=:id");
        $this->db->bind(':id', $id);
        $result = $this->db->resultset();
        return $result;
    }
}
