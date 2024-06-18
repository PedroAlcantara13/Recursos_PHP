<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa</title>
</head>
<body>
    
<?php
$mega = array();

for($cont = 0; $cont <5; $cont++){
    $num = rand(1,60);
    $mega[$cont] = $num;

}

for($cont1 = 0; $cont1 <5; $cont1++){
    echo $mega[$cont1].'</br>';
}

?>

</body>
</html>