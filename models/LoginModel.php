<?php
require_once'./database/DB.php';
class LoginModel
{
   public function check($data)
   {
      $query = "SELECT * FROM admin WHERE 'email' = :email AND 'password' = :password";
      $stmt = DB::connect()->prepare($query);
      $stmt->bindParam(':email', $data['email']);
      $stmt->bindParam(':password', $data['password']);
      $stmt->execute();
      // $result = $stmt->fetch();
      if ($stmt->rowCount() > 0) {
         $_SESSION['login']=1;
         return true;
      
      } else {
         $_SESSION['login']=0;
         return false;

      }
   }
}
