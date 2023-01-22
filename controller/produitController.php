<?php
require_once './autoload.php';  
class produitController
{
    public function getAllP()
    {
        $product = produitModel::getall();
        return $product;
    }
  public function getOne(){
     if(isset($_POST['id'])){
        $data = array(
        'id'=>$_POST['id']
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
            $product -> addProduct($data);
            header('Location: dashboard');
        }
    }
    public function updatProduct()
    {
        $prod = new produitModel();
            if (isset($_POST['updatProduit'])) {
            $data = array(
                'id'=>$_POST['id'],
                'name' => $_POST['name'],
                'quantite' => $_POST['quantite'],
                'prix' => $_POST['prix'],
                'image' => $_POST['image']
            );
          $prod -> updatProd($data);
                header('Location: dashboard');
              }
        
    }
    public function deleteProduit(){
        if(isset($_POST['id'])){
            $data = array(
            'id'=>$_POST['id']
            );
            $prod = produitModel::delete($data);
            if($prod==='ok'){
                header('Location: dashboard');
            }else{
                echo $prod;
            }
        }
    }
}



$products = new produitController;
$products->insertProduct();
$afficher= $products->getAllP();
$updat=$products->updatProduct();
$prod=$products->getOne();
// $prod=$products->deleteProduit();

// var_dump($prod);

