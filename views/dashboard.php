<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../views/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/c5baaf305b.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&family=Titillium+Web&display=swap" rel="stylesheet">
</head>

<body>
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
                        <a href="ajouter">
                            <button class="btn btn-sm btn-success">ajouter de produit</button>
                        </a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                filtrage
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">selon prix croissant</a></li>
                                <li><a class="dropdown-item" href="#">selon prix décroissant</a></li>
                                <li><a class="dropdown-item" href="#">selon la date d'ajout croissant</a></li>
                                <li><a class="dropdown-item" href="#">selon la date d'ajout décroissant</a></li>

                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" name="Search" type="submit">Search</button>
                    </form>
                    <form action="" method="post">
                        <input type="submit" name="exit" class="btn btn-sm btn-danger  mt-5" value="déconnecter">
                    </form>


                </div>
            </div>
        </div>
    </nav>
    <div class="container d-flex gap-3">

        <?php
        include './controller/produitController.php';

        foreach ($afficher as $row) : ?>
            <div class="card" style="width: 18rem;">
                <img src="./views/image/<?= $row['image'] ?>" class="card-img-top cardImag " style="aspect-ratio: 3/3;object-fit: contain;" alt="name">
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
                        <style>
                            .modal-backdrop {
                                z-index: auto !important;
                            }
                        </style>

                    </div>

                </div>

            </div>
        <?php endforeach; ?>
    </div>


</body>

</html>