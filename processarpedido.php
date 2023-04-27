<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina Mecânica</title>
    <link rel="stylesheet" href="/css/principal.css">
</head>
<body>
    <h1>Oficina mecânica</h1>
    <h2>Pedidos</h2>
    <?php
    //Declarando as variáveis
    $qtdpneu = $_POST['qtdpneu'];
    $qtdoleo = $_POST['qtdoleo'];
    $qtdvela = $_POST['qtdvela'];
    $propaganda = $_POST['propaganda'];
    //Declarando as constantes
    define('PRECOPNEU', 100);
    define('PRECOOLEO', 100);
    define('PRECOVELA', 4); 
       echo "<p>Pedido processado as " . date('H:i, jS F Y') . "</p>"; 
       $qtditem = $qtdpneu + $qtdoleo + $qtdvela;
       // Verificando o pedido
      if ($qtditem == 0) {
        echo "<p> Você deve preencher os valores da página anterior";
      } else {
        if ($qtdpneu > 0) {
            echo "<p>" . $qtdpneu . " unidades de pneu </p>";
        }
        if ($qtdoleo > 0) {
            echo "<p>" . $qtdoleo . " litros de óleo </p>";
        }
        if ($qtdvela) {
            echo "<p>" . $qtdvela . " unidades de vela </p>";
        }
      }
      //Calculo do desconto
      if ($qtdpneu < 10) {
        $desconto = 0;
      } elseif (($qtdpneu>=10) && ($qtdpneu<=49) ) {
        $desconto = PRECOPNEU * 0.05;
      } elseif (($qtdpneu>=50) && ($qtdpneu<=99)) {
        $desconto = PRECOPNEU * 0.10;
      } elseif (($qtdpneu>=100)) {
        $desconto = PRECOPNEU * 0.15;
      }
      echo $desconto;  
      

       echo "<p> Quantidade total de itens: " . $qtditem . "</p>"; 
       echo "<p>" . $qtdpneu . " unidades de pneu </p>";
       echo "<p>" . $qtdoleo . " litros de óleo </p>";
       echo "<p>" . $qtdvela . " unidades de vela </p>";
       echo "<p> R$ " . PRECOPNEU . " Reais </p>";
       echo "<p> R$ " . PRECOOLEO . " Reais </p>";
       echo "<p> R$ " . PRECOVELA . " Reais </p>";
       //Cálculo das peças
       $totalservico = ($qtdpneu * PRECOPNEU) - $desconto + ($qtdoleo * PRECOOLEO) + ($qtdvela * PRECOVELA);
       echo "<p>Subtotal : R$ " . number_format($totalservico,2) . "</p>" ; 
       $taxa = 0.10; //Valor do imposto
       $totalgeral = $totalservico * (1 + $taxa);
       echo "<p> Total com os impostos : R$ " . number_format($totalgeral,2) . "</p>";
switch($propaganda) {
  case "a":
    echo "<p> Consumidor</p>";
    break;
  case "b":
    echo "<p> Televisão</p>";
    break;
  case "c":
    echo "<p> Telefone</p>";
    break;
  case "d":
    echo "<p> Boca a Boca</p>";
    break;  
  default:
    echo "<p>Método não encontrado</p>";
    break;
}

    ?>
</body>
</html>