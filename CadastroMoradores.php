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
            <h3 style="text-align: center;">Cadastro do Morador</h3>
            <?php
            include("classes/config/Conexao.class.php");
            include("classes/dao/MoradoresDAO.class.php");
            $objDAO = new MoradoresDAO();
            $consulta = $objDAO->consultarCodigoMoradores($_GET['id']);
            ?>
            <input type="text" name="id" value="<?php echo $consulta['id']; ?>" />
            <div class="row">
                <div class="col-sm-6">
                    <label for="nome"><b>Nome do Morador:</b></label>
                    <input type="text" id="nome" name="inputNome" class="form-control" value="<?php echo $consulta['nome']; ?>" disabled>
                </div>
                <div class="col-sm-2">
                    <label for="cpf"><b>C.P.F.:</b></label>
                    <input type="cpf" id="cpf" name="inputCpf" class="form-control" value="<?php echo $consulta['cpf']; ?>" disabled>
                </div>
                <div class="col-sm-2">
                    <label for="telefone"><b>Telefone:</b></label>
                    <input type="text" id="telefone" name="inputTelefone" class="form-control" value="<?php echo $consulta['telefone']; ?>" disabled>
                </div>
                <div class="col-sm-2">
                    <label for="celular"><b>Celular:</b></label>
                    <input type="celular" id="celular" name="inputCelular" class="form-control" value="<?php echo $consulta['celular']; ?>" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label for="email"><b>E-Mail:</b></label>
                    <input type="email" id="email" name="inputEmail" class="form-control" value="<?php echo $consulta['email']; ?>" disabled>
                </div>
                <div class="col-sm-4">
                    <label for="senha"><b>Senha de Acesso:</b></label>
                    <input type="text" id="password" name="inputSenha" class="form-control" value="<?php echo $consulta['senha']; ?>" disabled>
                </div>
                <div class="col-sm-4">
                    <label for="confsenha"><b>Confirme a Senha:</b></label>
                    <input type="text" id="confpassword" name="inputConfSenha" class="form-control" value="<?php echo $consulta['senha']; ?>" disabled>
                </div>
                <!-- Ativar Cliente -->
                <input type="hidden" name="ativo" value="<?php echo "S"; ?>" />
            </div>
            <hr>
            <!-- Busca de Endereços -->
            <div class="row">
                <div class="col">
                    <h3 style="text-align: center;">Endereços do Cliente</h3>
                    <?php 
                    echo " <a href='CadMoradorEndereco.php?id={$consulta['id']}'>
                        <input type='button' class='btn btn-outline-primary' name='btn-CadCondominio' value='+ Endereço'>
                    </a>";
                    ?>
                    <hr>
                    <!-- Corrigir trazer somente o do morador -->
                    <table id="tabela" class="table table-hover">
                        <thead>
                            <th style="width: 30%;">Endereço</th>
                            <th style="width: 15%;">N°.</th>
                            <th style="width: 15%;">Condominio</th>
                            <th style="width: 15%;">Cidade</th>
                            <th style="width: 25%;">Ações</th>
                        </thead>
                        <tbody>
                            <?php
                            include("classes/dao/EnderecosDAO.class.php");
                            $objDAO = new EnderecosDAO();                            
                            $endereco = $objDAO->consultarCodigoEndereços($consulta['id']);
                            // var_dump($endereco);
                            // while ($end = $endereco->fetch(PDO::FETCH_ASSOC)) {
									$enderecoList = $endereco->fetchAll(PDO::FETCH_ASSOC);
									foreach ($enderecoList as $enderecoData){
										echo "  <tr>
                                		<td>" . $enderecoData["logradouro"] . "</td>
                                		<td>{$enderecoData['numero']}</td>
                                		<td>{$enderecoData['condominios_id']}</td>
                                		<td>{$enderecoData['cidade']}</td>
                                        <td>
                                			<a href='AlterarMoradorRamal.php?id={$enderecoData['grupo']}'>Alterar</a> |
                                			<a href='InativarUsers.php?id={$enderecoData['grupo']}'>Status</a>
                                		</td>
                                	</tr>";
									}
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Busca de Ramais -->
            <div class="row">
                <div class="col">
                    <h3 style="text-align: center;">Ramais do Cliente</h3>
                    
                    <hr>
                    <!-- corrigir o Condominio pelo Nome, esta trazendo o EndereçoGrupo-->
                    <table id="tabela2" class="table table-hover">
                        <thead>
                            <th style="width: 30%;">Ramal</th>
                            <th style="width: 15%;">Senha</th>
                            <th style="width: 15%;">Alocado</th>
                            <th style="width: 15%;">Condominio</th>
                            <th style="width: 15%;">Ações</th>
                        </thead>
                        <tbody>
                            <?php
                            
                            include("classes/dao/RamaisDAO.class.php");
                            $objDAO = new RamaisDAO();
                            $ramal = $objDAO->consultarCodigoRamais($consulta['id']);
                            //Parei aqui apresentar o Array 
                            // // echo $consulta['id'];
                            //  print_r($ramal['email']);
                            // while ($ramal == null) {
                                echo "  <tr>
                            		<td>" . $ramal["ramal"] . "</td>
                            		<td>{$ramal['senha']}</td>
                            		<td>{$ramal['alocado']}</td>
                            		<td>{$ramal['endereco_grupo']}</td>
                                    <td>
										<a href='AlterarMoradorRamal.php?id={$ramal['id']}'>Alterar</a> |
										<a href='InativarUsers.php?id={$ramal['id']}'>Status</a>
									</td>
                            	</tr>";
                            // }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <!-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script> -->

            <script>
                $(document).ready(function() {
                    $('#tabela').DataTable({
                        "lengthMenu": [ 3, 8, 20 ],
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
                                "sLast": "Último",
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
                    $('#tabela2').DataTable({
                        "lengthMenu": [ 3, 8, 20 ],
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
                                "sLast": "Último",
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