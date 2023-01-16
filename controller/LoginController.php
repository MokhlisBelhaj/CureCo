<?php
require_once './models/LoginModel.php';
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

            // echo ($_POST['email']);
            $data = array(
                'email' => $_POST['email'],
                'password' =>$_POST['password']
            );
        $result = $loginModel->check($data);
        if ($result == true) {
          header('Location: dashbord');
        } else {
            // echo '<script>alert("Invalid email or password ") </script>';
            echo $_POST['email'];
        }
        }
    }

    public function logout()
    {
        if (isset($_POST['exit'])) {
            $_SESSION['login'] = 0;
            header('Location: home');
        }
    }
}
$logouT = new LoginController();
$logouT->logout();
