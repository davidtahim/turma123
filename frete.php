<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina Mecânica</title>
    <link rel="stylesheet" href="../css/principal.css">
</head>
<body>
    <table style="border:0px; padding: 3px;">
        <tr>
        <td style="background:#ccc; text-align:center;">Distância</td>
        <td style="background:#ccc; text-align:center;">Custo</td>
        </tr>
        <?php
            $distancia = 50;
            while ($distancia <= 250) {
                echo "<tr>
                      <td style=\"text-align:right;\">".$distancia."</td>
                      <td style=\"text-align:right;\">".($distancia/10). "</td>  
                      </tr>\n";
            $distancia +=50;          
            }
        ?>
    </table>    
</body>
</html>