<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Condomínios</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

</head>

<body>
    <?php include("nav.php"); ?>
    <br>
    <div class="container">
        <form action="classes/controller/CondominiosController.php" method="POST">
            <?php
            include("classes/config/Conexao.class.php");
            include("classes/dao/CondominiosDAO.class.php");
            $objDAO = new CondominiosDAO();
            $consulta = $objDAO->consultarCodigoCondominios($_GET['id']);
            ?>
            <input type="text" name="id" value="<?php echo $consulta['id']; ?>" />
            <h3>Cadastro do <?php echo $consulta['nome']; ?></h3>
            <hr>
            <div class="row">
                <div class="col">
                    <?php
                    echo "<button class='btn btn-secondary btn-lg'><a class='linkCond' href='buscaCondominio.php'>Retornar</a></button>
                      <button class='btn btn-secondary btn-lg'><a class='linkCond' href='AlterarCondominios.php?id={$consulta['id']}'>Alterar</a></button>
                      <button class='btn btn-secondary btn-lg'><a class='linkCond' href='AreasComuns.php?id={$consulta['id']}'>Area Comun</a></button>";
                    ?>
                </div>
        </form>

    </div>
    <div class="row">
        <div class="col">
            <br>
            <table id="tabela" class="table table-hover">
                <thead>
                    <th style="width: 25%;">Area Comum</th>
                    <th style="width: 25%;">Ramal</th>
                    <th style="width: 25%;">Senha</th>
                    <th style="width: 25%; text-align:right;">Ações</th>
                </thead>
                <?php
                include("classes/dao/AreaComunsDAO.class.php");
                $objDAO = new AreacomunsDAO();
                $consulta = $objDAO->areacomum($_GET['id']);
                // var_dump($_GET['id']);
                // echo "Inicio";
                // var_dump($consulta);
                
                // while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                // while ($linha = $consulta->fetch('ALL')) {
                // while ($linha = array_values($consulta)) {
                    // while ($linha = $consulta->fetch_array(MYSQLI_BOTH)) {
                        echo "Meio";
                        // $linha = mysqli_fetch_assoc($consulta);
                        $linha = $consulta['areacomum'];
                        var_dump($linha);
                        echo "Fim";
                //         while ($linha = $consulta->fetch_assoc()) {
                   
                //     echo "<tr>
                //     			<td>" . $linha["areacomum"] . "</td>
                //     			<td>{$linha['ramal']}</td>
                //     			<td>{$linha['senha']}</td>
                //     			<td style=text-align:right>
                //     				<a href='CadastroCondominios.php?id={$linha['id']}'>Cadastro</a> |
                //     				<a href='InativarCondominios.php?id={$linha['id']}'>Status</a>
                //     			</td>
                //     		  </tr>";
                //     echo "teste_2";
                // }

                ?>
            </table>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

            <script>
                $(document).ready(function() {
                    $('#tabela').DataTable({
                        "oLanguage": {
                            "sEmptyTable": "Nenhum registro encontrado",
                            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                            "sInfoPostFix": "",
                            "sInfoThousands": ".",
                            "sLengthMenu": "_MENU_ resultados por página",
                            "sLoadingRecords": "Carregando...",
                            "sProcessing": "Processando...",
                            "sZeroRecords": "Nenhum registro encontrado",
                            "sSearch": "Pesquisar",
                            "oPaginate": {
                                "sNext": "Próximo",
                                "sPrevious": "Anterior",
                                "sFirst": "Primeiro",
                                "sLast": "Último"
                            },
                            "oAria": {
                                "sSortAscending": ": Ordenar colunas de forma ascendente",
                                "sSortDescending": ": Ordenar colunas de forma descendente"
                            },
                            "select": {
                                "rows": {
                                    "_": "Selecionado %d linhas",
                                    "0": "Nenhuma linha selecionada",
                                    "1": "Selecionado 1 linha"
                                }
                            }
                        }
                    });
                });
            </script>
        </div>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</html>