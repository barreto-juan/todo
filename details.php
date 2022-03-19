<?php require_once "header.php"; ?>

      <h1>Pedido #0<?php echo $_GET['cod']; ?></h1>

      <br>

      <h2 class="bg-light my-4 p-3 shadow rounded">Dados do Cliente</h2>


        <?php

            require_once "process.php";

            $sql = searchOrder($_GET['cod']);

            if (mysqli_num_rows($sql) == 0) {
              // code...
            } else {
              while ($valores = mysqli_fetch_assoc($sql)) {
                echo "

                    <p>Nome: <b>" . $valores['client']. "</b></p>
                    <p>Telefone: <b>" . $valores['phone']. "</b></p>
                    <p>Endereço: <b>" . $valores['address']. "</b></p>
                    
                ";
        
        ?>

        <h2 class="bg-light my-4 p-3 shadow rounded">Dados do Pedido</h2>


        <?php
            echo "

                <p>Pedido: <b>" . $valores['order']. "</b></p>
                <p>Prazo de Entrega: <b>" . (new DateTime($valores['time']))->format('d/m/Y H:i'). "</b></p>
                <p>Valor: <b>R$ " . number_format($valores['price'], '2', '.', ',') . "</b></p>
                <p>Recebimento: <b>" . $valores['receipt']. "</b></p>
                <p>Situação do Pedido: <b>" . $valores['status']. "</b></p>
                <p>Forma de Pagamento: <b>" . $valores['payment']. "</b></p>
                

            ";
        }
    }



require_once "footer.php";

?>