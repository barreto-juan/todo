<?php

  require_once "create_db.php";
  require_once "create_tb.php";
  require_once "connection.php";

?>

<!DOCTYPE html>
<html lang="ptbr" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">

    <link rel="icon" href="">

    <title>TODO</title>
  </head>
  <body>

    <div class="container">

      <h1>Pedidos <i class="fa-solid fa-clipboard-list"></i></h1>

      <br>

      <form class="" action="proccess.php" method="post">

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Pedido</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" name="demand" rows="3" placeholder="Pedido" required></textarea>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="exampleFormControlInput1">Nome</label>
            <input class="form-control" id="exampleFormControlInput1" type="text" name="name" value="" placeholder="Nome" required>
          </div>

          <div class="form-group col-md-6">
            <label for="exampleFormControlDate1">Prazo</label>
            <input class="form-control" id="exampleFormControlDate1" type="datetime-local" name="time" value="" required>
          </div>

        </div>

        <div class="form-group">
          <label for="exampleFormControlInput3">Endereço</label>
          <input class="form-control" id="exampleFormControlInput3" type="text" name="address" value="" placeholder="Endereço" required>
        </div>

        <div class="form-row">

          <div class="form-group col-md-4">
            <label for="exampleFormControlInput2">Valor</label>
            <input class="form-control" id="exampleFormControlInput2" type="text" name="price" value="24.99" required>
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

        </div>

        <button class="btn btn-success" type="submit" name="button">Salvar</button>

      </form>

    </div>

  </body>
</html>

<?php

if (isset($_POST['button'])) {

  require_once "process.php";

  $nome = $_POST['name'];
  $desc = $_POST['demand'];
  $prazo = $_POST['time'];
  $end = $_POST['address'];
  $valor = $_POST['price'];
  $receb = $_POST['receipt'];
  $situacao = $_POST['state'];

  createDemand($nome, $desc, $prazo, $end, $valor, $receb, $situacao);

  if($sql && mysqli_affected_rows($con) == 0){
    echo "<script> alert(\"falha!!!\") </script>";
    header("refresh");
    exit;
  }elseif($sql && mysqli_affected_rows($con) > 0){
    echo "<script> alert(\"sucesso!!!\") </script>";
    header("refresh");
    exit;
  }

}

?>
