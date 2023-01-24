<?php
require './controller/produitController.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="./views/css/style.css">
    <script src="https://kit.fontawesome.com/c5baaf305b.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>guests</title>
</head>

<body class="gradient-custom">
  <!-- produis info section -->
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
                  <a href="dashboard">
                    <button class="btn btn-primary btn-round"></i>Retourner</button>
                  </a>
                <div class="container px-4 px-lg-5 mt-5 mb-5">
                  <div class="row gx-4 gx-lg-5 justify-content-center">
                    <!-- <form action="" method="post"> -->
                      <div class="col-lg-8 col-xl-6 text-center w-100">
                        <h4 class="py-4">Entrer le nombre des nouveux produit :</h4>
                        <!-- count input-->
                        <div class=" mb-2">
                          <input class="form-control" type="number" id="nombre" name="count" min="1" required />
                        </div>
                        <form action="" method="post">
                        <div class="container  rounded mt-5 pb-3 mb-3">
                          <div id="donnee-produit">
                          <!-- div khawya -->
                          </div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid">
                          <!-- <button class="btn py-3 btn-danger rounded-5 btn-xl" type="submit" name="reserve">Reserver</button> -->
                          <button class="btn btn-outline-light btn-lg px-5" type="submit"
                            name="addProduct">Ajouter</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
  </section>
 <script src="./views/js/add.js"></script>
</body>

</html>