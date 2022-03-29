<?php require_once "header.php"; ?>

      <h1>Pedido #0<?php echo $_GET['idOrder']; ?></h1>

      <br>

      <h2 class="bg-light my-4 p-3 shadow rounded">Dados do Cliente</h2>


        <?php

            require_once "process.php";

            $setSQL = searchOrder($_GET['idOrder']);

            if (mysqli_num_rows($setSQL) == 0) {
              // code...
            } else {
              while ($columnsValue = mysqli_fetch_assoc($setSQL)) {
                echo "

                    <p>Nome: <b>" . $columnsValue['client']. "</b></p>
                    <p>Telefone: <b>" . $columnsValue['phone']. "</b></p>
                    <p>Endereço: <b>" . $columnsValue['address']. "</b></p>
                    
                ";
        
        ?>

        <h2 class="bg-light my-4 p-3 shadow rounded">Dados do Pedido</h2>


        <?php
            echo "

                <p>Pedido: <b>" . $columnsValue['order']. "</b></p>
                <p>Prazo de Entrega: <b>" . (new DateTime($columnsValue['time']))->format('d/m/Y H:i'). "</b></p>
                <p>Valor: <b>R$ " . number_format($columnsValue['price'], '2', '.', ',') . "</b></p>
                <p>Recebimento: <b>" . $columnsValue['receipt']. "</b></p>
                <p>Situação do Pedido: <b>" . $columnsValue['status']. "</b></p>
                <p>Forma de Pagamento: <b>" . $columnsValue['payment']. "</b></p>
                

            ";
        }
    }



require_once "footer.php";

?>