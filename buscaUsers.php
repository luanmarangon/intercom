<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <?php include("nav.php"); ?>
    <br>
    <div class="container-fluid">
        <h3 style="text-align: center;">Relatórios de Usuários</h3>
        <!-- <small class="text-muted" style="text-align: center;"><strong> <em>Página de busca de Moradores cadastrados no Sistema Intercom. Cadastro de Novo Morador, Alteração de Dados ou Inativação de Cadastro.</em></strong></small> -->
        <hr>
        <div class="row">
            <div class="col">
                <a href="Users.php">
                    <input type="button" class="btn btn-outline-primary" name="btn-CadCondominio" value="+ Usuário">
                </a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <table id="tabela" class="table table-hover">
                    <thead>
                        <th style="width: 30%;">Nome</th>
                        <th style="width: 25%;">E-mail</th>
                        <th style="width: 15%;">Login</th>
                        <th style="width: 15%;">Perfil</th>
                        <th style="width: 5%;">Ativo</th>
                        <th style="width: 10%;">Ações</th>
                    </thead>
                    <?php
                    include("classes/config/Conexao.class.php");
                    include("classes/dao/UsersDAO.class.php");
                    $objDAO = new UsersDAO();
                    $consulta = $objDAO->consultarUsers();
                    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>
									<td>" . $linha["nome"] . "</td>
									<td>{$linha['email']}</td>
									<td>{$linha['login']}</td>
									<td>{$linha['perfil']}</td>
                                    <td>{$linha['ativo']}</td>
									<td style=text-align:right>
										<a href='AlterarUsers.php?id={$linha['id']}'>Alterar</a> |
										<a href='InativarUsers.php?id={$linha['id']}'>Status</a>
									</td>
								  </tr>";
                    }

                    ?>
                </table>
            </div>
        </div>
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

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</html>