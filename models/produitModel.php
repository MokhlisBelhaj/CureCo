<?php
class produitModel{
    static public function getall()
    {
       $query = "SELECT * FROM admin";
       $stmt = DB::connect()->prepare($query);
       $stmt->execute();
       $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
       return $res;
    }
}