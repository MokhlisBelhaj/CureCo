<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./views/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/c5baaf305b.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&family=Titillium+Web&display=swap" rel="stylesheet">
</head>

<body class="gradient-custom ">
    <nav class="navbar navbar-dark bg-dark mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="./views/image/logo 1.png" alt="CureCo logo" width="50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">CureCO</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <a href="add">
                            <button class="btn btn-sm btn-success">ajouter de produit</button>
                        </a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                filtrage
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <form action="" method="post">
                                    <li><button class="text-decoration-none border-0 bg-transparent text-light" type="submit" name="ascp">selon prix croissant</button></li>
                                    <li><button class="text-decoration-none border-0 bg-transparent text-light" type="submit" name="descp">selon prix décroissant</button></li>
                                    <li><button class="text-decoration-none border-0 bg-transparent text-light" type="submit" name="ascd">selon la date d'ajout croissant</button></li>
                                    <li><button class="text-decoration-none border-0 bg-transparent text-light" type="submit" name="descd">selon la date d'ajout décroissant</button></li>
                                </form>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" method="post">
                        <input class="form-control me-2" type="text" name="name" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" name="Search" type="submit">Search</button>
                    </form>
                    <form action="" method="post">
                        <input type="submit" name="exit" class="btn btn-sm btn-danger  mt-5" value="déconnecter">
                    </form>


                </div>
            </div>
        </div>
    </nav>
    <div class="container d-flex gap-3 mb-3">
        <?php
        include './controller/produitController.php';
        foreach ($max as $row) : ?>

            <div class="col-xl-3 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0 text-center">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">prix maximum</h5>
                                <span class="h2 font-weight-bold mb-0"> <?= $row['prix'] ?> DH</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="card card-stats mb-4 mb-xl-0 text-center">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">nombre de produit</h5>
                        <span class="h2 font-weight-bold mb-0"> <?= $count['count'] ?> </span>
                    </div>
                </div>
            </div>
        </div>

    </div>
<div class="container">
    <div class=" row ">
        
        <?php
            foreach ($afficher as $row) : ?>
                <div class="col-md-4">
                    <div class="card mb-md-3" style="width: 18rem;">
                        <img src="./views/image/<?= $row['image'] ?>" class="card-img-top cardImag " style="aspect-ratio: 3/3;object-fit: contain;" alt=" <?= $row['name'] ?>">
                        <div class="card-body">
                            <h5 class="card-title">Name: <?= $row['name'] ?></h5>
                            <h6>Prix: <?= $row['prix'] ?> DH</h6>
                            <h6>Quantite: <?= $row['quantite'] ?></h6>
                            <div class="d-flex gap-3">
                                <form action="updat" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                                    <button class="btn btn-primary"><i class="fas fa-pen"></i></button>
                                </form>
                                <form action="delet" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                                    <button class='btn btn-danger'><i class="fas fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                        </div>
                 </div>
                <?php endforeach; ?>
       
    </div>
    </div>

</body>

</html>