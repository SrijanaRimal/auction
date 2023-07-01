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
        $query = $this->db->query("SELECT * FROM category");
        $result = $this->db->resultset();
        return $result;
    }
}
