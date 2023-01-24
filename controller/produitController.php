<?php
require_once './autoload.php';
class produitController
{
    public function getAllP()
    {

        if (isset($_POST['descp'])) {
            $product = produitModel::desc();
            unset($_POST['descp']);
            return $product;
        } elseif (isset($_POST['ascp'])) {
            $product = produitModel::asc();
            unset($_POST['ascp']);
            return $product;
        }
        if (isset($_POST['descd'])) {
            $product = produitModel::descd();
            unset($_POST['descd']);
            return $product;
        } elseif (isset($_POST['ascd'])) {
            $product = produitModel::ascd();
            unset($_POST['ascd']);
            return $product;
        } elseif (isset($_POST['Search'])) {
                $name = $_POST['name'];
            $product = produitModel::Search($name);
            unset($_POST['Search']);
            return $product;
        } else {
            $product = produitModel::getall();
            return $product;
        }
    }
    public function Max()
    {

        $product = produitModel::getMaxPrix();
        return $product;
    }
    public function countP()
    {

        $product = produitModel::count();
        return $product;
    }
    public function getOne()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id']
            );
            $prod = produitModel::getprod($data);
            return $prod;
        }
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
            $product->addProduct($data);
            header('Location: dashboard');
        }
    }
    public function addProduct()
    {
        $product = new produitModel();
        if (isset($_POST['addProduct'])) {
            for ($i = 0; $i < count($_POST['name']); $i++) {
                // Validate the form inputs
                $data = array(
                    'name' => $_POST['name'][$i],
                    'price' => $_POST['prix'][$i],
                    'quantity' => $_POST['quantite'][$i],
                    'image' => $_POST['image'][$i]
                );
                $product->addProduct($data);
            }
            // Insert the product data into the database

            header('location: dashboard');
        }
    }

    public function updatProduct()
    {
        $prod = new produitModel();
        if (isset($_POST['updatProduit'])) {
            $data = array(
                'id' => $_POST['id'],
                'name' => $_POST['name'],
                'quantite' => $_POST['quantite'],
                'prix' => $_POST['prix'],
                
            );
            $prod->updatProd($data);
            header('Location: dashboard');
        }
    }
    public function deleteProduit()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id']
            );
            $prod = produitModel::delete($data);
            if ($prod === 'ok') {
                header('Location: dashboard');
            } else {
                echo $prod;
            }
        }
    }
    // stat
}



$products = new produitController;
$afficher = $products->getAllP();
$max = $products->Max();
$count = $products->countP();
// var_dump($count);
// var_dump($max);
$products->addProduct();
$updat = $products->updatProduct();
// $prod=$products->deleteProduit();
$prod = $products->getOne();

// var_dump($prod);
