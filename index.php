<?php
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,
                "http://www.checkitout.com.br/wb/pingpong");
    curl_setopt($ch, CURLOPT_URL, 1);
    curl_setopt($ch, CURLOPT_URL,
                "nome=Maikon&idade=90&sexo=Masculino");

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $resposta = curl_exec($ch);

    curl_close($ch);

    print_r($resposta);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cURL</title>
</head>
<body>
    
</body>
</html>