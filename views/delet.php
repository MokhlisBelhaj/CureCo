<?php
if(isset($_POST['id'])){
    $deletee= new produitController();
    $deletee->deleteProduit();
}