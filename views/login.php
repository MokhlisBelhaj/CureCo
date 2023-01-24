<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./views/css/style.css">

    <title>login</title>
</head>

<body class="gradient-custom">
    <section class=" h-100">
        <div class="container py-2">
            <div class="row d-flex justify-content-center align-items-center h-50">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body  text-center">

                            <div class="mb-md-5 mt-md-4 ">

                                <div class="text-center ">
                                    <img class="w-50" src="./views/image/logo 1.png" alt="logo">
                                </div>
                                <p class="text-white-50 mb-2">Please enter your login and password!</p>
                                <form method="POST" action="" id="login">
                                    <div class=" form-white mb-2">
                                        <input type="email" name="email" id="email" class="form-control form-control-lg" >
                                        <label class="form-label">user name</label>
                                    </div>

                                    <div class="form-outline form-white mb-2">
                                        <input type="password" name="password" id="password" class="form-control form-control-lg" >
                                        <label class="form-label" >Password</label>
                                    </div>
                                    <button class="btn btn-outline-light btn-lg px-5" name="login" type="submit">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        var email = document.getElementById("email");
        var password = document.getElementById("password");
        var login = document.getElementById("login");
        login.addEventListener('submit',function(e){
            if(email.value=="" || password.value==""){
                alert("dakhal ifo");
                e.preventDefault();
            
            }
        })


    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>