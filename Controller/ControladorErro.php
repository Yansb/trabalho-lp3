<?php 
 session_start();
if(isset($_POST['Pagina'])){

    $_SESSION["Alerta"]= false; 
            echo $_POST['Pagina'];
    if($_POST['Pagina']==="Login"){
        header("Location: ../View/login.php");
    }else{
        if($_POST['Pagina']==="Atual"){
            header("Location: ../View/chamadoAtual.php");
        }
    }
       

}








?>