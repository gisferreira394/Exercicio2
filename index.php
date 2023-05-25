<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
</head>
<body>
     <form method="POST">
        Idade 
        <input type="int" name ="Idade">

        <button type="submit" name="Verificar">Verificar</button>
    </form>

    <?php
    if(isset($_POST["Verificar"])){
        $idade = $_POST["Idade"];

    }

        if ($idade >=18){
        echo "Você é maior de idade";
        }

        else {
            echo "Você é menor de idade";
        }
    ?>

    
</body>
</html>