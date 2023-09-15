<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '/home/u446695767/domains/senae.com.br/public_html/scripts/includes/conn.php';



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Detalhes do comércio </title>

    <style>
        html,
        body {
            width: calc(100% - 40px);
            height: calc(100% - 30px);
            margin: 0;
            font-family: verdana;
            color: #333;
            background: #0B4E9A;
            padding: 15px 20px
        }

        #images img {
            width: 90%;
            margin: auto;
            margin-bottom: 25px;
            border-radius: 10px
        }

        #images {
            background: #f5f5f5;
            border-radius: 10px;
        }

        #images p {
            padding-left: 25px;
            padding-top: 20px !important;
            ;
        }

        #images>div {
            display: grid;
            grid-template: auto / auto auto auto auto;
        }

        p {
            background: #f5f5f5;
            padding: 10px 10px;
            border-radius: 5px
        }

        img {
            border: 2px solid #555
        }
    </style>

</head>

<body>







    <?php

    $coda = $_GET['cod'];

    if ($data = ($conn->query("SELECT * FROM comercios WHERE cod = $coda"))->fetch_assoc()) {


    ?>

        <p><b>id: </b><?php echo $data['id']; ?></p>
        <p><b>created_at: </b><?php echo $data['created_at']; ?></p>
        <p><b>titulo: </b><?php echo $data['titulo']; ?></p>
        <p><b>cod: </b><?php echo $data['cod']; ?></p>
        <p><b>ramo: </b><?php echo $data['ramo']; ?></p>

        <div id="images">
            <p>Imagens:</p>
            <div>
                <img src="https://senae.com.br/scripts/comercios/<?php echo $data['imagem_1']; ?>">
                <img src="https://senae.com.br/scripts/comercios/<?php echo $data['imagem_2']; ?>">
                <img src="https://senae.com.br/scripts/comercios/<?php echo $data['imagem_3']; ?>">
                <img src="https://senae.com.br/scripts/comercios/<?php echo $data['imagem_4']; ?>">
                <img src="https://senae.com.br/scripts/comercios/<?php echo $data['imagem_5']; ?>">
                <img src="https://senae.com.br/scripts/comercios/<?php echo $data['imagem_6']; ?>">
                <img src="https://senae.com.br/scripts/comercios/<?php echo $data['imagem_7']; ?>">
                <img src="https://senae.com.br/scripts/comercios/<?php echo $data['imagem_8']; ?>">
                <img src="https://senae.com.br/scripts/comercios/<?php echo $data['imagem_9']; ?>">
                <img src="https://senae.com.br/scripts/comercios/<?php echo $data['imagem_10']; ?>">
            </div>
        </div>

        <p><b>valor: </b><?php echo $data['valor']; ?></p>
        <p><b>descr: </b><?php echo $data['descr']; ?></p>
        <p><b>cep: </b><?php echo $data['cep']; ?></p>
        <p><b>uf: </b><?php echo $data['uf']; ?></p>
        <p><b>cidade: </b><?php echo $data['cidade']; ?></p>
        <p><b>bairro: </b><?php echo $data['bairro']; ?></p>
        <p><b>rua: </b><?php echo $data['rua']; ?></p>
        <p><b>numero: </b><?php echo $data['numero']; ?></p>
        <p><b>complemento: </b><?php echo $data['complemento']; ?></p>
        <p><b>fone: </b><?php echo $data['fone']; ?></p>
        <p><b>email: </b><?php echo $data['email']; ?></p>
        <p><b>destaque: </b><?php echo $data['destaque']; ?></p>
        <p><b>anunciante: </b><?php echo $data['anunciante']; ?></p>
        <p><b>url: </b> <a target="_blank" href="<?php echo $data['url']; ?>"><?php echo $data['url']; ?></a> </p>
        <p><b>status: </b><?php echo $data['status']; ?></p>
        <p><b>importado: </b><?php echo $data['importado']; ?></p>
        <p><b>pix: </b><?php echo $data['pix']; ?></p>
        <p><b>nome_empresa: </b><?php echo $data['nome_empresa']; ?></p>
        <p><b>codigo_consultor: </b><?php echo $data['codigo_consultor']; ?></p>
        <p><b>nome_consultor: </b><?php echo $data['nome_consultor']; ?></p>



    <?php
    }

    ?>




</body>

</html>