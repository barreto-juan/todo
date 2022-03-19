<?php require_once "header.php";

    require_once "process.php";

    $cod = $_GET['cod'];

    $sql = searchOrder($cod);

    if (mysqli_num_rows($sql) == 0){

    } else {
      while($valores = mysqli_fetch_assoc($sql)){

  ?>

        <div class="container">

          <h1>Editar Pedido <i class="fa-solid fa-square-pen"></i></h1>

          <br>

          <form class="" action="" method="post">

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Pedido</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="demand" rows="3" placeholder="Pedido" required><?php echo $valores['order'] ?></textarea>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Cliente</label>
                <input class="form-control" id="exampleFormControlInput1" type="text" name="name" placeholder="Cliente" required value="<?php echo $valores['client'] ?>">
              </div>

              <div class="form-group col-md-6">
                <label for="exampleFormControlDate1">Prazo</label>
                <input class="form-control" id="exampleFormControlDate1" type="datetime-local" name="time" required value="<?php echo (new DateTime($valores['time']))->format('Y-m-d\TH:i') ?>">
              </div>

            </div>

            <div class="form-group">
              <label for="exampleFormControlInput3">Endereço</label>
              <input class="form-control" id="exampleFormControlInput3" type="text" name="address" placeholder="Endereço" value="<?php echo $valores['address'] ?>" required>
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput4">Telefone</label>
              <input class="form-control" id="exampleFormControlInput4" type="text" name="phone" placeholder="(35) 9 876-4321" value="<?php echo $valores['phone'] ?>" required>
            </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="exampleFormControlInput2">Valor</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">R$</div>
                  </div>
                  <input class="form-control" id="exampleFormControlInput2" type="text" name="price" value="<?php echo $valores['price'] ?>" required>
                </div>
              </div>

              <div class="form-group col-md-4">
                <label for="exampleFormControlSelect1">Modo de Recebimento</label>
                <select class="custom-select" id="exampleFormControlSelect1" name="receipt" required>
                  <option value="Entrega">Entrega</option>
                  <option value="Retirada">Retirada</option>
                </select>
              </div>

              <div class="form-group col-md-4">
                <label for="exampleFormControlSelect2">Situação</label>
                <select class="custom-select" id="exampleFormControlSelect2" name="state" required>
                  <option value="Preparação">Preparação</option>
                  <option value="Entregue/Retirado">Entregue/Retirado</option>
                </select>
              </div>

              <div class="form-group col-md-4">
                <label class="formRadioLabel">Forma de Pagamento</label>

                <div class="methods border rounded bg-light p-3">
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="payment" id="inlineRadio1" value="Dinheiro">
                    <label class="form-check-label" for="inlineRadio1"><i class="fa-solid fa-money-bill-wave"></i> Dinheiro</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="payment" id="inlineRadio2" value="Cartão">
                    <label class="form-check-label" for="inlineRadio2"><i class="fa-solid fa-credit-card"></i> Cartão</label>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="payment" id="inlineRadio3" value="Pix">
                    <label class="form-check-label" for="inlineRadio3"><i class="fa-brands fa-pix"></i> Pix</label>
                  </div>

                </div>
              
              </div>

            </div>

            <button class="btn btn-success" type="submit" name="button">Salvar</button>

          </form>

        </div>

        <?php
      }
    }


  require_once "footer.php";

    if (isset($_POST['button'])) {

      $nome = $_POST['name'];
      $desc = $_POST['demand'];
      $prazo = $_POST['time'];
      $end = $_POST['address'];
      $tel = $_POST['phone'];
      $valor = $_POST['price'];
      $receb = $_POST['receipt'];
      $situacao = $_POST['state'];
      $pag = $_POST['payment'];

      updateOrder($cod, $nome, $desc, $prazo, $end, $tel, $valor, $receb, $situacao, $pag);

      if ($sql && mysqli_affected_rows($con) == 0) {
        echo "<script> alert(\"Falha ao atualizar pedido!!!\") </script>";
        header("refresh");
        exit;
      } elseif ($sql && mysqli_affected_rows($con) > 0) {
        echo "<script> alert(\"Sucesso ao atualizar pedido!!!\") </script>";
        header("refresh");
        exit;
      }

    }