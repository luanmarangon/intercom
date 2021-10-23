<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Quadras</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
<?php include ("nav.php");?>
<br>
    <div class="container">
        <form action="#" method="POST">
            <h3>Cadastro de Quadras</h3>
            <div class="row">
                <div class="col-sm-2">
                    <label for="Quadra"><b>Quadra:</b></label>
                    <input type="text" id="quadra" name="inputQuadra" class="form-control">
                </div>
                <div class="col-sm-4">
                <br>
                    <input type="submit" class="btn btn-primary" value="Cadastrar" name="btnCadastrarQuadras">
                    <input type="reset" class="btn btn-danger" value="Cancelar">
                </div>

            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</html>