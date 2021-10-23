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

    <h4>Relatorio</h4>
    <?php
        include("classes/config/Conexao.class.php");
        include("classes/dao/CondominiosDAO.class.php");
        $objDAO = new CondominiosDAO();
        $consulta = $objDAO->consultarCodigoCondominios($_GET['selectCondominio']);
    ?>
    <input type="text" name="id" value="<?php echo $consulta['id']; ?>" />

    <table id="tabela" class="table table-hover">
        <thead>
            <th style="width: 30%;">Morador</th>
            <th style="width: 15%;">Celular</th>
            <th style="width: 25%;">Grupo</th>
            <th style="width: 15%;">Alocado</th>
            <th style="width: 15%;">Ramal</th>

        </thead>
        <?php
        echo "<br>";
        echo "teste";
        echo "<br>";
        echo $consulta['nome'];
        include("classes/dao/RelatoriosDAO.class.php");
        $objDAO = new RelatoriosDAO();
        $id = $objDAO->relcondominio($consulta['id']);
        var_dump($id);
        // $id = $_POST['id'];
        // $sql =  "SELECT m.nome, m.celular, e.grupo, r.ramal, r.alocado
        // FROM endereco e, ramais r, moradores m
        // WHERE r.endereco_grupo = e.grupo AND e.condominios_id = $id and m.id = e.moradores_id";

        // echo $sql['m.nome'];

        // $query = $consulta
        // include("classes/dao/RelatoriosDAO.class.php");
        
        // $objDAO = new RelatoriosDAO();
        // var_dump($objDAO);

        // $consulta1 = $objDAO->relcondominio($consulta['id']);
        // var_dump($consulta1);


        // while ($linha = $consulta1->fetch(PDO::FETCH_ASSOC)) {
        //     echo "<tr>
        // 			<td>" . $linha["nome"] . "</td>
        // 			<td>{$linha['matricula']}</td>
        // 			<td>{$linha['cpf']}</td>
        // 			<td>{$linha['telefone']}</td>
        // 			<td>{$linha['Funcao_has_Setor_Funcao_codigo']}</td>
        // 			<td>{$linha['Funcao_has_Setor_Setor_codigo']}</td>

        // 			<td style=text-align:right>
        // 				<a href='AlterarFuncionario.php?codigo={$linha['codigo']}'>Alterar</a> |
        // 				<a href='ExcluirFuncionario.php?codigo={$linha['codigo']}'>Excluir</a>
        // 			</td>
        // 		  </tr>";
        // }

        ?>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</html>