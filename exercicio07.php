<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
  <form method="POST" action="">

        <label for="numero">Número</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_numero">Verificar</button>

    </form>

    <?php

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            if(isset($_POST['verificar_numero'])){

                $numero = $_POST['numero'];
                $total = $numero;
                for($i = 1; $i < $numero; $i++){
                    if($numero %$i == 0){
                        $divisor = $i;
                        $total += $divisor;
                    }
                };

            };

            if($total == $numero){
                echo"O número é perfeito.";
            }else{
                echo"O número não é perfeito.";
            }
        };
    
    ?>


</body>
</html>