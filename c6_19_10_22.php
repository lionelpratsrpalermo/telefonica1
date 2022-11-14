<?php
include_once 'c6_19_10_22_2.php';


$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
if (mysqli_connect_errno()) {
    echo "Error de conexión a la DDBB";
    exit();
}
mysqli_select_db($connection, DB_NAME) or die('No se encunentra la DDBB');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Esta es una clase de Full Stack">
    <meta name="keywords" content="html5,bootstrap,javascript,php">
    <title>Telefónica</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="img/escudo.png">
</head>

<body class="container">
    <div class="alert alert-danger sticky-sm-top" role="alert">
        <h3 class="text-center fst-italic h1">Esta es mi plantilla HTML</h3>
    </div>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form class="bg-warning p-4 rounded" method="POST" action="c6_19_10_22.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="surname">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary container">Submit</button>
            </form>
        </div>
        <div class="col-3"></div>
    </div>

    <wbr>

    <pre>
        <span class="text-primary">SELECT</span> * <span class="text-primary">FROM</span> partido
        <span class="text-primary">WHERE</span> id = 15;
    </pre>

    <p>Este es <em>definitivamente</em> un nuevo parrafo, y <strong>me quiero ir a <small>cenar</small></strong>.</p>
    <cite>Alfred Wash</cite>
    <br>

    <img src="img/escudo.png" alt="escudo" width="17.55%">

    <picture src="img/escudo.png"></picture>


    <br>



    <?php
    if (isset($_POST)) {
        if ((isset($_POST['name']) and $_POST['name'] != '') and (isset($_POST['surname']) and $_POST['surname'] != '')) {
            echo "Bienvenido " . $_POST['name'] . " " . $_POST['surname']  . "!!";

            echo "<br>";
            print_r($_POST);
            echo "</br>";
        } else {
            echo "Debes completar todos los campos.";
        }
    }

    echo "<pre>";
    print_r($array);
    echo "</pre>";
    ?>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>