<?php

include('protect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

BEM VINDO AO PAINEL, <?php echo $_SESSION['email']; ?>

<a href="logout.php">Sair</a>


</body>
</html>