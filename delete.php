<?php

require_once "header.php";
require_once "process.php";

    $getIdOrder = $_GET['idOrder'];

    deleteOrder($getIdOrder);

    if($setSQL && mysqli_affected_rows($getConnection) == 0){
        echo "
            <div class=\"alert alert-danger\" role=\"alert\">
                Falha ao excluir o pedido!
            </div>
        ";
        require_once "footer.php";
        header("refresh");
        exit;
        
    } elseif($setSQL && mysqli_affected_rows($getConnection) > 0){
        echo "
            <div class=\"alert alert-success\" role=\"alert\">
                Pedido excluído com sucesso!
            </div>
        ";
        require_once "footer.php";
        header("refresh");
        exit;
      }


?>