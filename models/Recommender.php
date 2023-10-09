<?php
class Recommender
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    static public function dot($tags)
    {
        $tags = array_unique($tags);
        $tags = array_fill_keys($tags, 0);
        ksort($tags);
        return $tags;
    }

    static protected function dot_product($a, $b)
    {
        $products = array_map(function ($a, $b) {
            return $a * $b;
        }, $a, $b);
        return array_reduce($products, function ($a, $b) {
            return $a + $b;
        });
    }

    static protected function magnitude($point)
    {
        $squares = array_map(function ($x) {
            return pow($x, 2);
        }, $point);
        return sqrt(array_reduce($squares, function ($a, $b) {
            return $a + $b;
        }));
    }

    static public function cosine($a, $b, $base)
    {
        $a = array_fill_keys($a, 1) + $base;
        $b = array_fill_keys($b, 1) + $base;
        ksort($a);
        ksort($b);
        return self::dot_product($a, $b) / (self::magnitude($a) * self::magnitude($b));
    }

    private function getTags($product)
    {
        $category = new Category();
        $category = $category->getCategory($product->category_id);
        return array(
            "name" => $product->name,
            "tags" => array($product->name, $product->discription, $category->name)
        );
    }


    public function recommend($targetProduct)
    {
        $target = $this->getTags($targetProduct);

        $this->db->query("SELECT * FROM product");
        $products = $this->db->resultset();
        $taggedProducts = [];
        foreach ($products as $key => $product) {
            $taggedProducts[$key] = $this->getTags($product);
        }

        $score = array();
        $dot = self::dot(call_user_func_array("array_merge", array_column($taggedProducts, "tags")));

        $tags = call_user_func_array("array_merge", array_column($taggedProducts, "tags"));
        $tagCounts = array_count_values($tags);
        arsort($tagCounts);
        $targetTags = $target["tags"];
        $targetCounts = array_count_values($targetTags);
        arsort($targetCounts);
        $target = array_keys(array_slice($targetCounts, 0, 3));

        foreach ($taggedProducts as $product) {
            $score[$product["name"]] = self::cosine($product["tags"], $target, $dot);
        }

        arsort($score);
        $top2Similarities = array_slice($score, 0, 4);

        $result = array();
        foreach ($top2Similarities as $productName => $similarity) {
            foreach ($products as $product) {
                if ($product->name === $productName) {
                    if ($product->name !== $targetProduct->name) {
                        $result[] = $product;
                    }
                    break;
                }
            }
        }

        return $result;
    }
}
