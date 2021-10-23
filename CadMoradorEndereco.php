<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <?php include("nav.php"); ?>
    <br>
    <div class="container">
        <hr>
        <?php
        include("classes/config/Conexao.class.php");
        include("classes/dao/MoradoresDAO.class.php");
        $objDAO = new MoradoresDAO();
        $consulta = $objDAO->consultarCodigoMoradores($_GET['id']);

        



        ?>
        <!-- <input type="text" name="morador" value="<?php echo $consulta['id']; ?>" /> -->
        <form action="classes/controller/EnderecosController.php" method="POST">
        <input type="hidden" name="morador" value="<?php echo $consulta['id']; ?>" />
            <h3>Cadastro de Endereço do Morador: <?php echo $consulta['nome'];; ?></h3>
            <div class="row">
                <div class="col-sm-7">
                    <label for="endereco"><b>Endereço:</b></label>
                    <input type="text" id="endereco" name="inputEndereco" class="form-control" require>
                </div>
                <div class="col-sm-2">
                    <label for="numero"><b>N°.</b></label>
                    <input type="text" id="numero" name="inputNumero" class="form-control" require>
                </div>
                <div class="col-sm-3">
                    <label for="complemento"><b>Complemento:</b></label>
                    <input type="text" id="complemento" name="inputComplemento" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label for="condominio"><b>Condomínio:</b></label>
                    <select class="form-select" aria-label="Default select example" name="inputCondominio">
                        <option selected>Selecionar o Condomínio</option>
                        <?php
                        include("classes/dao/CondominiosDAO.class.php");
                        $objDAO = new CondominiosDAO();
                        $consulta = $objDAO->consultarCondominios();
                        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                            echo "<option value='" . $linha["id"] . "'>{$linha['nome']}   </option>";
                        }

                        // Validar Prefixo antes de Cadastrar
                        // include("classes/config/Conexao.class.php");
                        // include("classes/dao/CondominiosDAO.class.php");
                        // $objDAO = new CondominiosDAO();
                        // $consulta = $objDAO->consultaPrefixo();
                        // $prefixo = $consulta['prefixo'] + 1;

                        ?>

                    </select>
                    
                </div>
                <div class="col-sm-4">
                    <label for="cidade"><b>Cidade:</b></label>
                    <input type="text" id="cidade" name="inputCidade" class="form-control">
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-3">
                    <?php
                        $objDAO = new CondominiosDAO();
                        // $consulta = $objDAO->consultarCodigoCondominios();
                        $prefixo = 10;
                        $end = 001;
                        $grupo = $prefixo.$end;
                        
                    ?>
                    
                    <label for=""><b>Grupo de Ramal:</b></label>
                    <input type="text" id="grupo" name="inputGRamal" class="form-control"  value="<?php echo $grupo; ?>" readonly placeholder="Gerar automatico">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <input type="submit" class="btn btn-primary btn-lg" value="Cadastrar" name="btnEnderecoMorador">
                    <input type="button" class="btn btn-danger btn-lg" value="Cancelar" onClick="history.go(-1)"> 
                    <!-- <input type="reset" class="btn btn-danger btn-lg" value="Cancelar"> -->
                </div>
            </div>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</html>