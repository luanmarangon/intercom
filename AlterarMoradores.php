<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Moradores</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

</head>

<body>
    <?php include("nav.php"); ?>
    <br>
    <div class="container">
        <form action="classes/controller/MoradoresController.php" method="POST">
            <h3>Alterar Dados do Morador</h3>
            <?php
                include("classes/config/Conexao.class.php");
                include("classes/dao/MoradoresDAO.class.php");
                $objDAO = new MoradoresDAO();
                $consulta = $objDAO->consultarCodigoMoradores($_GET['id']);
            ?>
            <input type="hidden" name="id" value="<?php echo $consulta['id']; ?>" />
            <div class="row">
                <div class="col-sm-6">
                    <label for="nome"><b>Nome do Morador:</b></label>
                    <input type="text" id="nome" name="inputNome" class="form-control" value="<?php echo $consulta['nome']; ?>">
                </div>
                <div class="col-sm-2">
                    <label for="cpf"><b>C.P.F.:</b></label>
                    <input type="cpf" id="cpf" name="inputCpf" class="form-control" value="<?php echo $consulta['cpf'];?>">
                </div>
                <div class="col-sm-2">
                    <label for="telefone"><b>Telefone:</b></label>
                    <input type="text" id="telefone" name="inputTelefone" class="form-control" value="<?php echo $consulta['telefone']; ?>">
                </div>
                <div class="col-sm-2">
                    <label for="celular"><b>Celular:</b></label>
                    <input type="celular" id="celular" name="inputCelular" class="form-control" value="<?php echo $consulta['celular'];?>">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label for="email"><b>E-Mail:</b></label>
                    <input type="email" id="email" name="inputEmail" class="form-control" value="<?php echo $consulta['email']; ?>">
                </div>
                <div class="col-sm-4">
                    <label for="senha"><b>Senha de Acesso:</b></label>
                    <input type="text" id="password" name="inputSenha" class="form-control" value="<?php echo $consulta['senha'];?>">
                </div>
                <div class="col-sm-4">
                <br/>
                    <input type="submit" class="btn btn-primary btn-lg" value="Alterar" name="btnAltMoradores">
                    <input type="submit" class="btn btn-danger btn-lg" value="Cancelar" name="btnCancelar">
                </div>
            
            <!-- Ativar Cliente -->
                <input type="hidden" name="ativo" value="<?php echo "S"; ?>" />

            </div>
            <!-- <hr>
            <h3>Cadastro de Endereço</h3>
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
                        // include("classes/config/Conexao.class.php");
                        include("classes/dao/CondominiosDAO.class.php");
                        $objDAO = new CondominiosDAO();
                        $consulta = $objDAO->consultarCondominios();
                        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                            echo "<option value='" . $linha["codigo"] . "'>
                            {$linha['nome']}
                            </option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="cidade"><b>Cidade:</b></label>
                    <input type="text" id="cidade" name="inputCidade" class="form-control">
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-3">
                    <label for=""><b>Grupo de Ramal:</b></label>
                    <input type="text" id="grupo" name="inputGRamal" class="form-control" disabled placeholder="Gerar automatico">
                </div>
            </div>
            <hr> -->
            <!--<h3>Cadastro de Ramal</h3>
            <div class="row">
                <div class="col-sm-3">
                    <label for="ramal"><b>Ramal</b></label>
                    <input type="text" id="ramal" name="inputRamal" class="form-control" require>
                </div>
                <div class="col-sm-3">
                    <label for="senharamal"><b>Senha Ramal</b></label>
                    <input type="password" id="password" name="inputPassword" class="form-control" disabled>
                </div>
                <div class="col-sm-4">
                    <label for="alocado"><b>Alocação</b></label>
                    <input type="text" id="alocado" name="inputAlocado" class="form-control" required>
                </div>
                <div class="col-sm-2">
                <br>
                    <input type="button" class="btn btn-primary" value="+" name="btnAlocacao">
                </div>
            </div> -->
            <hr>
           
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