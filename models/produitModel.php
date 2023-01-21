<?php
class produitModel{
    static public function getall()
    {
       $query = "SELECT * FROM `produit`";
       $stmt = DB::connect()->prepare($query);
       $stmt->execute();
       $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
       return $res;
    }
    public function addProduct($data)
    {
        $insert = "INSERT INTO `produit`(name, quantite, prix, date, image) VALUES (:name, :quantite, :prix, now(), :image)";
       $stmt = DB::connect()->prepare($insert);
       $stmt->bindParam(':name', $data['name']);
       $stmt->bindParam(':quantite', $data['quantite']);
       $stmt->bindParam(':prix', $data['prix']);
       $stmt->bindParam(':image', $data['image']);
       $stmt->execute();
    }
}
