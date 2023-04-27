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
<form action="processarpedido.php" method="post">
<table>
    <tr>
        <th>Item</th>
        <th>Quantidade</th>
    </tr>
    <tr>
        <td>Pneu</td>
        <td><input type="number" name="qtdpneu" id="qtdpneu" min="0"></td>
    </tr>
    <tr>
        <td>Óleo</td>
        <td><input type="number" name="qtdoleo" id="qtdoleo" min="0"></td>
    </tr>
    <tr>
        <td>Vela</td>
        <td><input type="number" name="qtdvela" id="qtdvela" min="0"></td>
    </tr>
    <tr>
        <td>Como você nos achou?</td>
        <td><select name="propaganda"> 
        <option value="a">Cliente Regular</option>
        <option value="b">Anuncio de TV</option>     
        <option value="c">Telefone</option> 
        <option value="d">Boca a boca</option> 
        </select></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="Enviar"></td>
    </tr>
</table>
</form>
</body>
</html>