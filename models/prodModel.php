<?php
// class ProdModel {
    

//     public function insertProduct($name, $price, $quantity, $image) {
//         // Insert the product data into the database
//         $query = "INSERT INTO products (name, quantite, prix, date, image) VALUES (:name, :quantity, :price, now(), :image)";
//         $insert = "INSERT INTO `produit`(name, quantite, prix, date, image) VALUES (:name, :quantite, :prix, now(), :image)";

//         $statement = DB::connect()->prepare($query);
//         $statement->execute(array(
//             ':name' => $name,
//             ':price' => $price,
//             ':quantity' => $quantity,
//             ':image' => $image
//         ));
//     }
// }
