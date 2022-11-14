<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Esta es una clase de Full Stack">
    <meta name="keywords" content="html5,bootstrap,javascript,php">
    <title>Telefónica</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"><!-- link datatables -->
</head>

<body>
    <div class="container border border-dark">
        <h1 class="text-danger">Hola mundo</h1>

        <table border='3' class="table">
            <tr style="background:#009220;color:white;">
                <td>Columna 1 cuando nos fuimos a Uruguay</td>
                <td>Columna 2 Ya no me importa su desconsuelo que llore que llore</td>
                <td>Columna 3 Galatasaray le ganó al Besiktas en el clásico del Egeo</td>
            </tr>
            <tr>
                <td>Celda 1-1</td>
                <td>Celda 1-2</td>
                <td>Celda 1-3</td>
            </tr>
            <tr style="background:#009220;color:white;">
                <td>Celda 2-1</td>
                <td>Celda 2-2</td>
                <td>Celda 2-3</td>
            </tr>
            <tr>
                <td>Celda 3-1</td>
                <td>Celda 3-2</td>
                <td>Celda 3-3</td>
            </tr>
        </table>

        <form action="server.php" method="POST">
            <label for="">
                Nombre de usuario:
                <input type="text" name="nombre">
            </label>
            <input type="range" name="" id="" min="5" max="10" step="0.01" value="7">
            <input type="reset" value="Resetear">
            <input type="submit">
        </form>

    </div>

    <?php
    echo phpinfo();
    ?>


    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script><!-- script datatables -->
</body>

</html>

<!-- framework datatable -->
<!-- https://datatables.net/ -->