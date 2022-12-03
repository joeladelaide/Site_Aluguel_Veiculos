<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css" />

</head>


<body>
  <header>
    <section class="topo" id="topo">
      <div class="content">
        <nav>
          <p class="brand">Joel<strong>RentCar</strong></p>
        </nav>
        <div class="header-block">
          <div class="text">
          <h2>OBRIGADO PELO CADASTRO!</h2>
          <p>Em breve você receberá diversos cupons de desconto!</p>
            </div>
          <img src="img/fusca_l.png" alt="Car" />
        </div>
      </div>
    </section>
  </header>

  
</body>
</html>


<?php

    require_once('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];

    $bancoDados = new db();

    $link = $bancoDados->conecta_mysql();

    $sql = "insert into cadastro (nome, email, whatsapp) values ('$nome', '$email', '$whatsapp')";

    mysqli_query($link, $sql);

?>