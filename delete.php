<?php

require_once "header.php";
require_once "process.php";

    $cod = $_GET['cod'];

    deleteOrder($cod);

    if($sql && mysqli_affected_rows($con) == 0){
        echo "
            <div class=\"alert alert-danger\" role=\"alert\">
                Falha ao excluir o pedido!
            </div>
        ";
        header("refresh");
        exit;
      }elseif($sql && mysqli_affected_rows($con) > 0){
        echo "
            <div class=\"alert alert-success\" role=\"alert\">
                Pedido excluído com sucesso!
            </div>
        ";
        header("refresh");
        exit;
      }


require_once "footer.php";

?>