<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function verificarParImpar($numero) {
  if ($numero % 2 == 0) {
    return "par";
  } else {
    return "ímpar";
  }

}

$numero = 3;
$resultado = verificarParImpar($numero);
echo "O número $numero é $resultado.";
?>