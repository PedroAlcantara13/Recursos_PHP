<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa</title>
</head>
<body>
    
<?php

function calculaImposto($imposto){
    if($imposto < 1398.98){
        return 0;
    } else if($imposto >= 1398.98 && $imposto <= 2826.65){
        return $imposto * 0.075;
    }else if($imposto >= 2826.65 && $imposto < 3751.05){
        return $imposto * 0.15;
    }else if($imposto >= 3751.05 && $imposto < 4664.68){
        return $imposto * 0.225;
    }else if($imposto >= 4664.68){
        return $imposto * 0.275;
    }
    
}

    echo calculaImposto(2200.76);

?>

</body>
</html>