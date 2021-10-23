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
        <h2>Perfil</h2>
        <?php
            include("classes/config/Conexao.class.php");
            include("classes/dao/UsersDAO.class.php");
            $objDAO = new UsersDAO();
            $consulta = $objDAO->consultarCodigoUsers($_GET['id']);
        ?>
        <input type="hidden" name="id" value="<?php echo $consulta['id']; ?>" />
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col">
                        <label for="">Nome:</label>
                        <input type="text" class="form-control" value="<?php echo $consulta['nome']; ?>" disabled name="inputNome">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">E-Mail: </label>
                        <input type="text" class="form-control" value="<?php echo $consulta['email']; ?>" disabled name="inputEmail">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Login:</label>
                        <input type="text" class="form-control" value="<?php echo $consulta['login']; ?>" disabled name="inputLogin">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Perfil:</label>
                        <input type="text" class="form-control" value="<?php echo $consulta['perfil']; ?>" disabled name="inputPerfil">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Alterar Senha</button>
                <!-- Modal -->

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Deseja Alterar a Senha de Acesso?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="classes/controller/UsersController.php" method="POST">
                                <div class="modal-body">
                                    <label for="">Nova Senha:</label>
                                    <input type="password" class="form-control" name="newpassword">
                                    <label for="">Confirme a Senha:</label>
                                    <input type="password" class="form-control" name="confnewpassword">
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary" name="btnNewSenha">Alterar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</html>