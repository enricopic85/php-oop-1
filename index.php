<?php
require_once __DIR__ . './Movie.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <?php foreach ($arrayFilm as $film) { ?>
                    <div class="col-lg-5 d-flex mt-5">
                        <div class="cards">
                            <?php echo $film ?>
                        </div>
                    </div>
                <?php  } ?>
            </div>
        </div>
    </div>
</body>

</html>