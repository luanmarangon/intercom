<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Áreas Comuns</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <?php include("nav.php"); ?>
    <br>
    <div class="container">
        <form action="classes/controller/AreaComunsController.php" method="POST">
            <h3>Cadastro de Áreas Comuns do Condomínio</h3>
            <?php
            include("classes/config/Conexao.class.php");
            include("classes/dao/CondominiosDAO.class.php");
            $objDAO = new CondominiosDAO();
            $consulta = $objDAO->consultarCodigoCondominios($_GET['id']);
            ?>
            <input type="hidden" name="id" value="<?php echo $consulta['id']; ?>" />
            <div class="row">
                <div class="col-sm-4">
                    <label for="condominio"><b>Condomínio:</b></label>
                    <input type="text" id="condominio" name="inputCondominio" class="form-control" value="<?php echo $consulta['nome'];?>" disabled>
                </div>
                <div class="col-sm-3">
                    <label for="local"><b>Área Comum:</b></label>
                    <input type="text" id="local" name="inputLocal" class="form-control" required>
                    <!-- <select class="form-select" aria-label="Default select example" name="inputLocal">
                        <option value="0"   selected>Selecione o Perfil</option>
                        <option value="PortariaServicos">Portaria de Serviços</option>
                        <option value="PortariaSocial">Portaria Social</option>
                        <option value="SalaoFestas">Salão de Festas</option>
                        <option value="Academia">Acadêmia</option>
                        <option value="Quiosque">Quiosque</option>
                    </select> -->
                </div>
                <div class="col-sm-2">
                    <label for="ramal"><b>Ramal:</b></label>
                    <input type="text" id="ramal" name="inputRamal" class="form-control" required>
                </div>
                <div class="col-sm-3">
                    <label for=""><b>Senha:</b></label>
                    <input type="text" id="senha" name="inputSenha" class="form-control" required>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <br>
                        <input type="submit" class="btn btn-primary" value="Cadastrar" name="btnCadAreaComun">
                        <input type="reset" class="btn btn-danger" value="Cancelar">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</html>