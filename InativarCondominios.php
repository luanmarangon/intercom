<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Condomínios</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

</head>

<body>
    <?php include("nav.php"); ?>
    <br>
    <div class="container">
        <form action="classes/controller/CondominiosController.php" method="POST">
            <h3>Cadastro de Condomínio</h3>
            <?php
                include("classes/config/Conexao.class.php");
                include("classes/dao/CondominiosDAO.class.php");
                $objDAO = new CondominiosDAO();
                $consulta = $objDAO->consultarCodigoCondominios($_GET['id']);
            ?>
            <input type="text" name="id" value="<?php echo $consulta['id']; ?>" />
            <div class="row">
                <div class="col-sm-2">
                    <label for="prefixo"><b>Prefixo:</b></label>
                    <input type="text" id="prefixo" name="inputPrefixo" class="form-control" value="<?php echo $consulta['prefixo'];  ?>" disabled>
                </div>
                <div class="col-sm-7">
                    <label for="condominio"><b>Condomínio:</b></label>
                    <input type="text" id="condominio" name="inputCondominio" class="form-control" value="<?php echo $consulta['nome']; ?>" disabled>
                </div>
                <div class="col-sm-3">
                    <label for="contato"><b>Contato:</b></label>
                    <input type="text" id="contato" name="inputContato" class="form-control" value="<?php echo $consulta['contato']; ?>" disabled>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <label for="telefone"><b>Telefone</b></label>
                    <input type="telefone" id="telefone" name="inputTelefone" class="form-control" value="<?php echo $consulta['telefone']; ?>" disabled>
                </div>
                <div class="col-sm-3">
                    <label for="celular"><b>Celular</b></label>
                    <input type="celular" id="celular" name="inputCelular" class="form-control" value="<?php echo $consulta['celular']; ?>" disabled>
                </div>
                <div class="col-sm-6">
                    <label for="anexo"><b>Anexo:</b></label>
                    <input type="text" id="anexo" name="inputAnexo" class="form-control" placeholder="Trazer a Imagem" disabled>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                <input type="submit" class="btn btn-secondary" value="Cancelar" name="btnCancelar" style="width: 30% ;">
                        <input type="submit" class="btn btn-danger" value="Inativar" name="btnInativarCondominios" style="width: 30% ;">
                        <input type="submit" class="btn btn-success" value="Ativar" name="btnAtivarCondominios" style="width: 30% ;">
                </div>

            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

<script type="text/javascript">
    $("#telefone").mask("(00) 0000-0000");
    $("#celular").mask("(00) 00000-0000");
    $("#cpf").mask("000.000.000-00");
</script>

</html>