<?php

    if (isset($_POST['inputLogin']) && !empty($_POST['inputLogin']) && isset($_POST['inputSenha'])  && !empty($_POST['inputSenha'])) {

        require 'classes/config/Conexao.class.php';
        require 'classes/dao/UsersDAO.class.php';
        
        $u = new UsersDAO();

        

        $login = addslashes($_POST['inputLogin']);
        $senha = addslashes(($_POST['inputSenha']));

        if ($u->logarUsers($login, $senha == true)) {
            if (isset($_SESSION['iduser'])){
                header("Location: home.php");
            }   
            else{
                header("Location: index.php");
            }  
        }
        else{
            header("Location: index.php");
        }
    }
?>