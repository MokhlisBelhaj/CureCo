<?php
class produitController{
    public function getAllP(){
        $ports= produitModel::getall();
        return $ports;
    }
    }
    $poduit->getAllP;
