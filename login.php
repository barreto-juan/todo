<?php

  require_once "create_db.php";
  require_once "create_tb.php";
  require_once "connection.php";

?>

<!DOCTYPE html>
<html lang="ptbr" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">

    <link rel="shotcut icon" href="assets/img/notas.png">

    <title>Pedidos - ToDo</title>
  </head>

  <body class="bg-login">

    <div class="vh-100 m-5">
        <div class="container-fluid h-custom p-3 shadow blur rounded">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="assets/img/banner-login.webp" class="img-fluid" alt="Banner Login">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="validation.php" method="post">
                        <h3>Log In</h3>
                        <hr>
                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example3" class="login-inputs form-control form-control-lg" required placeholder="Usuário" name="user"/>
                            <label class="form-label" for="form3Example3">Usuário</label>
                        </div>

                        <div class="form-outline mb-3">
                            <input type="password" id="form3Example4" class="login-inputs form-control form-control-lg" required placeholder="Senha" name="password"/>
                            <label class="form-label" for="form3Example4">Senha</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" checked/>
                                <label class="form-check-label" for="form2Example3">
                                    Lembrar-me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Esqueceu a senha?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Não tem uma conta? <a href="#!" class="link-danger disabled">Cadastrar</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>

<?php require_once 'footer.php'; ?>