<?php require_once "header.php" ?>



      <h1>Central de Pedidos <i class="fa-solid fa-clipboard-list"></i></h1>

      <br>

      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Pedido</th>
            <th>Cliente</th>
            <th>Hora do Pedido</th>
            <th>Hora de Entrega</th>
            <th>Endereço</th>
            <th>Valor</th>
            <th>Recebimento</th>
            <th>Situação</th>
            <th>Editar</th>
          </tr>
        </thead>

        <tbody>
          <?php

            require_once "process.php";

            $sql = returnDemand();

            if (mysqli_num_rows($sql) == 0) {
              // code...
            } else {
              while ($valores = mysqli_fetch_assoc($sql)) {

                echo "
                  <tr>
                    <th>
                      #0" . $valores['id'] . "
                    </th>

                    <td>
                      " . $valores['demand'] . "
                    </td>

                    <td>
                      " . $valores['client'] . "
                    </td>

                    <td>
                      " . (new DateTime($valores['currenttime']))->format('d/m/Y H:i') . "
                    </td>

                    <td>
                      " . (new DateTime($valores['time']))->format('d/m/Y H:i') . "
                    </td>

                    <td>
                      " . $valores['address'] . "
                    </td>

                    <td>
                      R$ " . number_format($valores['price'], 2, ",", ".") . "
                    </td>

                    <td>
                      " . $valores['receipt'] . "
                    </td>

                    <td>
                      " . $valores['status'] . "
                    </td>

                    <td>
                      <form action=\"edit.php\" method=\"get\">
                        <button class=\"btn btn-primary\" type=\"submit\" name=\"cod\" value=" . $valores['id'] . "><i class=\"fa-solid fa-edit\" title=\"Editar\"></i></button>
                      </form>

                      <form action=\"delete.php\" method=\"get\">
                        <button class=\"btn btn-danger\" type=\"submit\" name=\"cod\" value=" . $valores['id'] . "><i class=\"fa-solid fa-trash-can\" title=\"Excluir\"></i></button>
                      </form>


                    </td>
                  </tr>

                ";
              }
            }



          ?>



        </tbody>
      </table>

      <a class="" href="create.php">
        <button class="btn btn-primary" type="button" name="button">Novo Pedido</button>
      </a>

<?php require_once "footer.php" ?>
