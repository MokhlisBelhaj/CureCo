<?php
include './controller/produitController.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./views/css/style.css">

    <title>updat</title>
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
                                    <a href="dashboard">
                                        <button class="btn btn-primary btn-round"></i>Retourner</button>
                                    </a>

                                <form action="" method="post">
                                    <div class="form-group">
                                        <label class="mb-1">NOM</label>
                                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $prod->name?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1">QUANTITE</label>
                                        <input type="number" class="form-control" id="quantite" name="quantite" value="<?php echo $prod->quantite?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1"> PRIX</label>
                                        <input type="number"  class="form-control" id="prix" name="prix" value="<?php echo $prod->prix?>" required>
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $prod->id?>">
                                    <button class="btn btn-outline-light btn-lg mt-5 px-5" type="submit" name="updatProduit">updat</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>