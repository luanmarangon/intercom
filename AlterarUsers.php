<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar de Usuários</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <?php include("nav.php"); ?>
    <br>
    <div class="container">
        <form action="classes/controller/UsersController.php" method="POST">
            <h3>Alterar dados do Usuários</h3>
            <?php
            include("classes/config/Conexao.class.php");
            include("classes/dao/UsersDAO.class.php");
            $objDAO = new UsersDAO();
            $consulta = $objDAO->consultarCodigoUsers($_GET['id']);
            ?>
            <input type="hidden" name="id" value="<?php echo $consulta['id']; ?>" />
            <div class="row">
                <div class="col-sm-5">
                    <label for="nome"><b>Nome:</b></label>
                    <input type="text" id="nome" name="inputNome" class="form-control" value="<?php echo $consulta['nome']; ?>" disabled>
                </div>
                <div class="col-sm-4">
                    <label for="email"><b>E-Mail:</b></label>
                    <input type="email" id="email" name="inputEmail" class="form-control" value="<?php echo $consulta['email']; ?>">
                </div>
                <div class="col-sm-3">
                    <label for="login"><b>Login:</b></label>
                    <input type="text" id="login" name="inputLogin" class="form-control" value="<?php echo $consulta['login']; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label for="senha"><b>Senha:</b></label>
                    <input type="password" id="senha" name="inputSenha" class="form-control" value="<?php echo $consulta['senha']; ?>">
                </div>
                <div class="col-sm-4">
                    <label for="confsenha"><b>Confirme a Senha:</b></label>
                    <input type="password" id="confsenha" name="inputConfsenha" class="form-control" value="<?php echo $consulta['senha']; ?>">
                </div>
                <div class="col-sm-4">
                    <label for="perfil"><b>Perfil:</b></label>
                    <select class="form-select" aria-label="Default select example" name="inputPerfil">
                        <?php
                        if ($consulta['perfil'] == "Portaria") { ?>
                            <option value="Portaria" selected><?php echo $consulta['perfil']; ?></option>
                            <option value="Administrador">Administrador</option>
                        <?php } elseif ($consulta['perfil'] == "Administrador") { ?>
                            <option value="Administrador" selected><?php echo $consulta['perfil']; ?></option>
                            <option value="Portaria">Portaria</option>
                        <?php } else { ?>
                            <option value="0" selected>Selecione o Perfil</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Portaria">Portaria</option>
                        <?php } ?>
                    </select>
                </div>
                <input type="hidden" name="ativo" value="<?php echo "S"; ?>" />

                <div class="row">
                    <div class="col-sm-4">
                        <br>
                        <input type="submit" class="btn btn-primary" value="Alterar" name="btnAltUsers">
                        <input type="submit" class="btn btn-danger" value="Cancelar" name="btnCancelar">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</html>