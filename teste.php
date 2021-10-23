<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="60;url=teste.php"> -->

    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <?php include("nav.php"); ?>
    <br>

    <h1>Pagina de Teste</h1>

    <?php
        $prefixo = 10;
        $grupo = 100;
        // $ = 201;
        $q = 05;    
        echo $prefixo.$grupo;
        $a =1;
        while ($a <= $q) {
            echo " | ";
            echo $prefixo.$grupo.$a;
            
            $a++;

        }
    ?>


    <h3 id="grupo" style="color: indigo;"></h3>

    <script>
        const cond=20;
        document.getElementById("grupo").innerHTML = Math.floor(Math.random()  * 10000) + 99999;
    </script>
    <!-- <input type="button" value="Refresh Page" onClick="refresh"> -->
    <br>
    <!-- <button onClick="window.location.reload();">Refresh Page</button> -->

    <button onClick="window.location.href=window.location.href">Refresh Page</button>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</html>