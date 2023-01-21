<?php
require_once './autoload.php';  
class produitController
{
    public function getAllP()
    {
        $product = produitModel::getall();
        return $product;
    }
    public function insertProduct()
    {
        $product = new produitModel();
            if (isset($_POST['addProduit'])) {
            $data = array(
                'name' => $_POST['name'],
                'quantite' => $_POST['quantite'],
                'prix' => $_POST['prix'],
                'image' => $_POST['image']
            );
            $product -> addProduct($data);
        }
    }
}


$products = new produitController;
$products->insertProduct();
$afficher= $products->getAllP();

