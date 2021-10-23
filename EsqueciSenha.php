<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col" style="text-align: center; background-color: rgba(0, 0, 0, 0.2);">
                <h2>Intercom - Sistema de Gerenciamento de Ramais </h2>
            </div>
        </div>
        <br>
        <br>
        <br>
        <?php
        if (isset($_GET['a'])) {
            if ($_GET['a'] == "ok")
                echo '<div class="alert alert-success" role="alert" style="text-align: center;">
                <h4 class="alert-heading" >Senha Redefinida!</h4>
                <p>Sua senha foi enviada para o email cadastrado no Sistema. Em instantes você receberá um e-mail com as orientações a ser seguidas. Obrigado!</p>
                <hr>
              </div>';
            else
                echo '<div class="alert alert-danger" role="alert" style="text-align: center;">
                <h4 class="alert-heading" >Erro ao Redefinir Senha!</h4>
                <p>E-mail não cadastrado no Sistema. Favor entrar em contato com a Portaria do Condomínio. Obrigado!</p>
                <hr>
              </div>';
        }
        ?>
        <form action="redefinir.php" method="POST">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <h4 style="text-align: center;">Esqueceu a sua Senha?</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <label for="login" class="form-label">E-mail:</label>
                    <input type="mail" class="form-control" id="login" aria-describedby="Login" name="inputEmail" required placeholder="Informe seu E-Mail">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <br />
                    <button type="submit" class="btn btn-lg btn-primary " name="btnRedefinir">
                        Entrar
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z" />
                        </svg>
                    </button>
                    <a href="../intercom">Voltar</a>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col" style="background-color: rgba(0, 0, 0, 0.2); position: absolute; bottom: 0;">
                <p style="text-align: center;">© 2021 Copyright: <a class="text-dark" href="#">Desenvolvimento</a></p>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</html>