<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Ramais</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <?php include("nav.php"); ?>
    <br>
    <div class="container">
        <hr>
        <?php
        include("classes/config/Conexao.class.php");
        include("classes/dao/RamaisDAO.class.php");
        $objDAO = new RamaisDAO();
        $consulta = $objDAO->consultarCodigoRamais($_GET['id']);

        include("classes/dao/EnderecosDAO.class.php");
        $objDAO = new EnderecosDAO();
        $endereco = $objDAO->consultarMoradorEndereco($consulta['endereco_grupo']);

        include("classes/dao/CondominiosDAO.class.php");
        $objDAO = new CondominiosDAO();
        $condominio = $objDAO->consultarCodigoCondominios($endereco['condominios_id']);

        include("classes/dao/MoradoresDAO.class.php");
        $objDAO = new MoradoresDAO();
        $morador = $objDAO->consultarCodigoMoradores($endereco['moradores_id']);
        ?>
        <form action="classes/controller/RamaisController.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $consulta['id']; ?>" />
            <h3>Cadastro de Ramal do Morador: <strong> <?php echo $morador['nome']; ?> </strong> </h3>
            <h4>Endereço: <strong> <?php echo $endereco['logradouro'] . ', ' . $endereco['numero'] . ' - ' . $condominio['nome']; ?> </strong></h4>
            <!-- Salvar em cima do Grupo -->
            <div class="row">
                <div class="col-sm-4">
                    <label for="ramal"><b>Ramal:</b></label>
                    <input type="text" id="ramal" name="inputRamal" class="form-control" require value="<?php echo $consulta['ramal']; ?>">
                </div>
                <div class="col-sm-4">
                    <label for="senha"><b>Senha</b></label>
                    <input type="text" id="senha" name="inputSenha" class="form-control" require value="<?php echo $consulta['senha']; ?>">
                </div>
                <div class="col-sm-4">
                    <label for="alocado"><b>Identificação:</b></label>
                    <input type="text" id="alocado" name="inputAlocado" class="form-control" value="<?php echo $consulta['alocado']; ?>">
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <input type="submit" class="btn btn-primary btn-lg" value="Cadastrar" name="btnAlterarRamalMorador">
                    <input type="reset" class="btn btn-danger btn-lg" value="Cancelar">
                </div>
            </div>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</html>