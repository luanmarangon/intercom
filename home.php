<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTERCOM</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <?php include("nav.php"); ?>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col" style="text-align: right; font-weight: bold;">
                <?php
                //Manual
                date_default_timezone_set('America/Sao_Paulo');
                echo date('d/m/Y \à\s H:i:s');
                ?>
                <hr>
            </div>
            <div class="row">
                <div class="col-2">
                    <table id="tabela" class="table table-sm">
                        <thead>
                            <th style="width: 20%;">Quantidade de Ramais</th>
                        </thead>
                        <?php
                        include("classes/config/Conexao.class.php");
                        include("classes/dao/RamaisDAO.class.php");
                        $objDAO = new RamaisDAO();
                        $consulta = $objDAO->totalRamais();
                        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>
                                        <td>" . $linha["ramais"] . "</td>
                                    </tr>";
                        }
                        ?>
                    </table>
                </div>
                <div class="col-2">
                    <table id="tabela" class="table table-sm">
                        <thead>
                            <th style="width: 20%;">Condominios Ativos</th>
                        </thead>
                        <?php
                        include("classes/dao/CondominiosDAO.class.php");
                        $objDAO = new CondominiosDAO();
                        $consulta = $objDAO->CondominiosAtivo();
                        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>
                                        <td>" . $linha["ativo"] . "</td>
                                    </tr>";
                        }
                        ?>
                    </table>
                </div>
                <div class="col-2">
                    <table id="tabela" class="table table-sm">
                        <thead>
                            <th style="width: 20%;">Condominios Inativos</th>
                        </thead>
                        <?php
                        $objDAO = new CondominiosDAO();
                        $consulta = $objDAO->CondominiosInativo();
                        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>
                                        <td>" . $linha["ativo"] . "</td>
                                    </tr>";
                        }
                        ?>
                    </table>
                </div>
                <div class="col-2">
                    <table id="tabela" class="table table-sm">
                        <thead>
                            <th style="width: 20%;">Moradores Ativos</th>
                        </thead>
                        <?php
                        include("classes/dao/MoradoresDAO.class.php");
                        $objDAO = new MoradoresDAO();
                        $consulta = $objDAO->MoradoresAtivo();
                        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>
                                        <td>" . $linha["ativo"] . "</td>
                                    </tr>";
                        }
                        ?>
                    </table>
                </div>
                <div class="col-2">
                    <table id="tabela" class="table table-sm">
                        <thead>
                            <th style="width: 20%;">Moradores Inativos</th>
                        </thead>
                        <?php
                        // include("classes/dao/MoradoresDAO.class.php");
                        $objDAO = new MoradoresDAO();
                        $consulta = $objDAO->MoradoresInativo();
                        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>
                                        <td>" . $linha["ativo"] . "</td>
                                    </tr>";
                        }
                        ?>
                    </table>
                </div>
                <div class="col-2">
                    <table id="tabela" class="table table-sm">
                        <thead>
                            <th style="width: 20%;">Pensar em Algo</th>
                        </thead>
                        <?php
                        // include("classes/dao/MoradoresDAO.class.php");
                        // $objDAO = new MoradoresDAO();
                        // $consulta = $objDAO->MoradoresInativo();
                        // while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                        //     echo "<tr>
                        //                 <td>" . $linha["ativo"] . "</td>
                        //             </tr>";
                        // }
                        ?>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <table id="tabela" class="table table-sm">
                        <thead>
                            <th style="width: 50%;">Condomínios</th>
                            <th style="width: 20%;">Quantidade de Ramais</th>
                        </thead>
                        <?php
                        // include("classes/dao/CondominiosDAO.class.php");
                        $objDAO = new CondominiosDAO();
                        $cond = $objDAO->ramaisCondominios();
                        // $consulta = $objDAO->ramaisCondominios();
                        // while ($cond = mysqli_fetch_array($consulta)){
                        // echo $consulta1['nome'];
                        // var_dump($consulta1);
                        echo "<tr>
									<td style='font-weight: bold;'>" . $cond["nome"] . "</td>
                                    <td style='font-weight: bold; text-align: center;'>" . $cond["ramais"] . "</td>
								  </tr>";
                        // }
                        ?>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table id="condominio" class="table table-hover">
                        <thead>
                            <th style="width: 30%;">Condominio</th>
                            <th style="width: 25%;">Ramal</th>
                            <th style="width: 15%;">Area Comum</th>
                        </thead>
                        <?php
                        include("classes/dao/AreacomunsDAO.class.php");
                        $objDAO = new AreacomunsDAO();
                        $consulta = $objDAO->portarias();
                        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>
									<td>" . $linha["nome"] . "</td>
									<td>{$linha['ramal']}</td>
									<td>{$linha['areacomum']}</td>
								  </tr>";
                        }
                        ?>

                    </table>

                </div>
            </div>
        </div>
    </div>

    </div>
</body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script>
        $(document).ready(function() {
            $('#condominio').DataTable({
                "lengthMenu": [ 4, 8, 12, 20 ],
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

</html>