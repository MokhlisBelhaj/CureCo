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
    static public function getprod($data){
        //  $id=$data['id'];
        $query = "SELECT * FROM `produit` WHERE id=:id";
       $stmt = DB::connect()->prepare($query);
       $stmt->bindParam(':id',$data['id']);
       $stmt->execute();
       $produit = $stmt->fetch(PDO::FETCH_OBJ);
       return $produit;
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
    public function updatProd($data)
    {
       
        $updat = " UPDATE `produit` SET `name`= :name,`image`= :image,`quantite`=:quantite,`prix`=:prix WHERE id=:id;";
       $stmt = DB::connect()->prepare($updat);
       $stmt->bindParam(':id', $data['id']);
       $stmt->bindParam(':name', $data['name']);
       $stmt->bindParam(':quantite', $data['quantite']);
       $stmt->bindParam(':prix', $data['prix']);
       $stmt->bindParam(':image', $data['image']);
       $stmt->execute();
    }
    static function delete($data){
        $query = "DELETE FROM `produit` WHERE id=:id";
        $stmt = DB::connect()->prepare($query);
        $stmt->bindParam(':id',$data['id']);
        $stmt->execute();
        if ($stmt->execute()) {
              return 'ok';  
    }
}
}