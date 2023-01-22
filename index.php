<?php
require_once './controller/ControllerHome.php';
require './controller/logincontroller.php';
// require './controller/produitController.php';
ob_start();
require_once './autoload.php';
$home = new ControllerHome();
$pages = ['login', 'dashboard','ajouter','add','updat','delet'];
if (isset($_GET['page'])) {
    if (in_array($_GET['page'], $pages)) {
        $page = $_GET['page'];
        if ($page == 'login') {
            if ($_SESSION['login'] == 1) {
                $page = 'dashboard';
            }
        }
        if ($page == 'dashboard' or $page == 'ajouter' or $page == 'updat' or $page == 'delet' ) {
            if (!$_SESSION['login'] == 1) {
                $page = 'login';
            }
        }
        $home->index($page);
    } else {
        include('views/includes/404.php');
    }
} else {
    $home->index('login');
}

