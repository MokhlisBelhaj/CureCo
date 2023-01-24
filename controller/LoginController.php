<?php
require_once './autoload.php';  

if (isset($_POST['login'])) {

    $login = new LoginController;
    $login->login();
}

class LoginController
{

    public function login()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            

            $loginModel = new LoginModel();   
            $data = array(
                'email' => $_POST['email'],
                'password' =>$_POST['password']
            );
        $result = $loginModel->check($data);
        if ($result == true) {
          header('Location: dashboard');
        } else if( $result==false ) {
         echo '<script>alert("Invalid user name or password ") </script>';
        }
        }
    }

    public function logout()
    {
        if (isset($_POST['exit'])) {
            $_SESSION['login'] = 0;
            header('Location: login');
        }
    }
}
$logouT = new LoginController();
$logouT->logout();
