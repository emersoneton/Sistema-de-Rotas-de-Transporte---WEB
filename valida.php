<?php
    session_start();


    if ((isset($_POST['email'])) && ((isset($_POST['senha']))) {

      

    }else{
      $_SESSION['loginErro'] = "Usuario ou Senha inválido!";
      header("Location: login.html")
    }

 ?>
