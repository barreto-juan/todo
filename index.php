<?php require_once "header.php" ?>

      <h1>Central de Pedidos <i class="fa-solid fa-clipboard-list"></i></h1>

      <br>

      <a class="" href="create.php">
        <button class="btn btn-primary" type="button" name="button"><i class="fa-solid fa-plus"></i> Novo Pedido</button>
      </a>


      <table class="table table-hover mt-4">
        <thead>
          <tr>
            <th>#</th>
            <th>Cliente</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Situação</th>
            <th>Ação</th>
          </tr>
        </thead>

        <tbody>
          <?php

            require_once "process.php";

            $sql = returnOrder();

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
                      " . $valores['client'] . "
                    </td>

                    <td>
                      " . $valores['address'] . "
                    </td>

                    <td>
                      " . $valores['phone'] . "
                    </td>

                    <td>
                      " . $valores['status'] . "
                    </td>

                    <td class=\"d-flex\">
                      <form action=\"details.php\" method=\"get\">
                        <button class=\"btn btn-warning\" type=\"submit\" name=\"cod\" value=" . $valores['id'] . " title=\"Detalhes\"><i class=\"fa-solid fa-circle-info\"></i></button>
                      </form>

                      <span class=\"mx-1\"></span>

                      <form action=\"edit.php\" method=\"get\">
                        <button class=\"btn btn-success\" type=\"submit\" name=\"cod\" value=" . $valores['id'] . " title=\"Editar\"><i class=\"fa-solid fa-edit\"></i></button>
                      </form>
                      
                      <span class=\"mx-1\"></span>

                      <form action=\"delete.php\" method=\"get\">
                        <button class=\"btn btn-danger\" type=\"submit\" name=\"cod\" value=" . $valores['id'] . " title=\"Excluir\"><i class=\"fa-solid fa-trash-can\"></i></button>
                      </form>

                    </td>
                  </tr>

                ";
              }
            }



          ?>



        </tbody>
      </table>

<?php require_once "footer.php" ?>
