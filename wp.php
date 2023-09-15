<?php // require '/home/u446695767/domains/senae.com.br/public_html/wp-config.php';if(is_user_logged_in()){ 
?>
<?php
include '/home/u446695767/domains/senae.com.br/public_html/scripts/includes/conn.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php //include '../includes/functions_sc.php';
    //echo $favicon; 
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comercios em Destaque</title>
    <link rel="stylesheet" href="w_style.css">

    <style>
        .cadContato div {}

        .cadContato div img {
            height: 55px;
            margin: 0 .1em;
            border-radius: 9px;
            cursor: pointer;
            transition: .3s;
            width: 55px;
        }

        .cadContato div img:hover {
            opacity: .75
        }

        body {
            font-family: 'verdana';
            color: #000b;
            /* overflow: hidden; */
        }

        .cadContato div {
            position: relative;
            border: 0px solid #eee;
            border-radius: 9px;
            scroll-behavior: smooth;
        }

        .cadContato>div>div {
            border: 0 !important;
        }

        .cadContato div .slide_left {
            position: absolute;
            left: 0;
            top: 45%;
            display: none;
        }

        .cadContato div .slide_right {
            position: absolute;
            right: 0;
            top: 45%;
            display: none;
        }

        .cadContato {
            margin: 3em 0em;
            margin-top: 0px !important;
        }

        .cadContato p {
            text-align: justify;
        }

        .slide_left,
        .slide_right {
            position: absolute;
            top: 45%;
            border: 1px inset #0005;
            border-radius: 9px;
            color: #0005;
            background: azure;
            font-weight: 999;
            box-shadow: 0 0 15px #0004 inset;
            text-shadow: 0 0 6px #fff7;
            height: 1.7em;
            width: 1.4em;
            font-size: 1.1em;
            padding: 0;
            margin: 0em 1em;
            transition: 0.3s
        }

        .slide_left:hover,
        .slide_right:hover {
            opacity: .8;
            cursor: pointer
        }

        @media only screen and (max-width: 600px) {
            .cadContato {
                margin: 3em 2em;
            }
        }
    </style>
    <style>
        .sep_post h3,
        .sep_post div {
            font-family: verdana;
            color: #333d
        }

        .sep_post div {
            width: 90%;
            margin: auto;
            text-align: justify;
        }

        .cadContato h3 {
            text-align: left;
        }

        .sep_post h3 a {
            color: #fffe;
            background: orange;
            border-radius: 9px;
            padding: 0.2em 1em;
            border: 2px inset orange;
            box-shadow: 0 0 1em #0003 inset;
            transition: 0.3s
        }

        .sep_post h3 a:hover {
            box-shadow: 0 0 3em #0003 inset;
        }

        .sep_post a b::selection {
            background: 0;
            color: 0;
        }

        .sep_post {
            border: 2px inset #3ae3;
            width: 75%;
            border-radius: 9px;
            margin: 3em auto;
            padding-bottom: 1em;
            box-shadow: 0 0 7em #0005 inset;
            background: #3ae;
        }

        .sep_post div section,
        .sep_post h3 {
            color: #fff;
            text-shadow: 0 0 1em #fff5
        }

        .cadContato a {
            color: #fff;
            background: #0f6;
            border-radius: 0.3em;
            padding: 0 0.2em;
            text-decoration: none;
            text-shadow: 0px 0 3px #000c;
            transition: .3s;
        }

        .cadContato a:hover {
            opacity: .8;
        }

        img {
            color: #0000 !important;
        }
    </style>
    <style>
        #selectImages {
            margin-top: 10px;
            background: #0000;
            padding: 7px;
            border-radius: 5px
        }

        #selectImages img {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            cursor: pointer;
            transition: .3s;
            opacity: 1;
            margin: 0 5px;
        }

        #selectImages img:hover {
            opacity: .75
        }

        #painelVisual i {
            filter: drop-shadow(0 0 2px #000);
            font-size: 40px;
            margin: 0 10px;
            color: #fff;
            cursor: pointer;
        }

        #painelVisual i:hover {
            opacity: .75
        }

        .imgActive {
            opacity: 1 !important;
            scale: 1.2
        }

        .cadContato img {
            margin-bottom: 10px !important;
        }

        @media only screen and (max-width: 600px) {
            .cadContato>div>div {
                padding: 0 !important;
                display: grid;
                grid-template-columns: auto auto auto auto;
            }
        }
    </style>
    <style>
        @media only screen and (min-width: 600px) {
            .cadContato div img {
                width: 95% !important;
                height: 160px !important;
            }

            .cadContato>div>div {
                display: grid;
                grid-template: auto / auto auto auto auto auto auto
            }
        }
    </style>
    <style>
        @media only screen and (max-width: 600px) {
            #filtro_uf_cid {
                display: flex;
                flex-direction: column;
                padding: 0 2em
            }

            #filtro_uf_cid>div {
                display: flex;
            }

            #filtro_uf_cid select {
                width: 100% !important;
                margin: 5px 5px;
            }

            #filtro_uf_cid>div>select:first-child {
                width: 7em !important;
            }

            #filtro_uf_cid input {
                margin: 5px 0px !important;
            }

            .fornecedores_pesquisa_box {
                margin-top: 25px;
            }
        }

        @media only screen and (min-width: 600px) {
            #filtro_uf_cid {
                display: flex;
                width: 100%;
                align-items: center;
                justify-content: center;
            }

            #filtro_uf_cid input {
                margin-left: 5px
            }
        }
    </style>
    <style>
        #arrowsK i {
            background: #fff7;
            padding: 10px;
            border-radius: 999px;
        }
    </style>
    <style>
        #filtro_uf_cid>a {
            display: flex;
            margin-left: 70px
        }

        #filtro_uf_cid>div {
            display: flex;
            flex-direction: row !important;
        }

        @media only screen and (max-width: 600px) {
            * {
                outline: none
            }

            #filtro_uf_cid>div {
                display: flex;
                flex-direction: column !important;
            }

            #filtro_uf_cid select {
                margin-left: 0;
                text-align: center;
                text-transform: uppercase
            }

            #filtro_uf_cid>a {
                margin-left: auto;
                margin-right: auto;
                margin-top: 20px
            }

        }

        @media only screen and (max-width: 600px) {
            .hide_mobile {
                display: none !important;
            }
        }

        @media only screen and (min-width: 600px) {
            #filtro_uf_cid>div>div {
                flex-direction: row !important;
                display: flex;
            }

            #filtro_uf_cid>div>div select {
                margin-left: 5px
            }
        }

        @media only screen and (min-width: 600px) {
            .comercio_imgs img {
                width: 200px !important
            }
        }
    </style>
</head>

<body style="margin: 0;">


    <div>
        <div class="fornecedores_pesquisa_box">
            <!-- <h3 style="margin-top: 0;">Pesquisar Comércios à Venda</h3> -->

            <form method="post">
                <div id="fnForm">
                    <div id="filtro_uf_cid">


                        <h3 style="margin-top: 0;font-size: 32px;margin: 0;color: #30455c !important;font-weight: 755;">Comércios à Venda em Curitiba</h3>



                        <div>
                            <div>
                                <select onchange="setCidade()" class="uf" type="text" name="uf" style="padding: 1em;min-height: 44px;display: block;display:none!important">
                                    <option value="0">ESTADO</option>

                                    <?php
                                    // global $conn;
                                    // $sql2 = "SELECT * FROM `comercios` GROUP BY uf HAVING COUNT(uf) > 1";
                                    // //$sql2 = "SELECT DISTINCT uf FROM comercios";
                                    // $records2 = mysqli_query($conn, $sql2);
                                    // while ($data = mysqli_fetch_array($records2)) {
                                    ?>
                                    <option value="<?php //echo $data['uf']; 
                                                    ?>"><?php //echo $data['uf']; 
                                                        ?></option>
                                    <?php

                                    // }
                                    // mysqli_close($conn);
                                    ?>
                                    <option value="PR">PR</option>
                                </select>
                                <select style="width: 15em;display:none!important" class="cidade1" type="text" name="cidade1" style="padding: 1em;min-height: 44px;display: block;">
                                    <option value="0">Cidade</option>
                                    <?php
                                    // global $conn;
                                    // $sql2 = "SELECT * FROM `comercios` GROUP BY cidade HAVING COUNT(cidade) > 1";
                                    // // $sql2 = "SELECT DISTINCT cidade FROM comercios";
                                    // $records2 = mysqli_query($conn, $sql2);
                                    // while ($data = mysqli_fetch_array($records2)) {
                                    ?>
                                    <!-- <option value="<?php //echo $data['cidade']; 
                                                        ?>"><?php //echo $data['cidade']; 
                                                            ?></option> -->
                                    <?php
                                    // }
                                    // mysqli_close($conn);
                                    ?>
                                    <option value="Curitiba">Curitiba</option>
                                </select>
                            </div>
                            <!-- <input class="codacesso" type="text" name="codacesso" placeholder="Código de Acesso"> -->
                            <input onclick="parent.resizeIframe(this)" type="submit" name="button1" class="button1 on1 pesquisarC1" value="Pesquisar" style="padding: 1em;min-height: 44px;display: block;display:none!important" />
                        </div>


                        <!-- <a target="_blank" href="https://senae.com.br/sebrae/formulario/" style="text-decoration:none" class=""> -->
                        <a target="_blank" href="https://senae.com.br/sebrae/escolher-consultor/?pg=consultoria-de-negocios/ideias-de-negocios/comercios-a-venda/anunciar/" style="text-decoration:none" class="">
                            <span class="" id="show_form_aDesk" onclick="show_form_a()" style="font-size: 23px;color: #fff;background: orange;padding: 1em;font-weight: 555;border-radius: 12px;box-shadow: 0 0 1em #0003 inset;transition: .3s;color:#fff;">Quero Anunciar</span>
                        </a>



                    </div>
                    <br>
                    <div id="sep_result">
                        <?php

                        if (array_key_exists('button1', $_POST)) {
                            button1();
                        }
                        function button1()
                        {
                            include '/home/u446695767/domains/senae.com.br/public_html/scripts/includes/conn.php';
                            // global $conn;


                            if (isset($_POST["uf"])) {

                                $uf = $_POST["uf"];
                                $cidade = $_POST["cidade1"];
                            } else {

                                $uf = "PR";
                                $cidade = "Curitiba";
                            }

                            //$cidade = "Curitiba";
                            //$sql2 = "SELECT * FROM `comercios` WHERE `uf` = '$uf' AND `cidade` = '$cidade' ORDER BY created_at DESC";
                            // $sql2 = "SELECT * FROM `comercios` WHERE `uf` = '$uf' AND `cidade` = '$cidade' AND `status` = 'publicado' ORDER BY created_at DESC";
                            //$sql2 = "SELECT * FROM `comercios` WHERE `uf` = '$uf' AND `cidade` = '$cidade' `status` = 'publicado' ORDER BY cod DESC";
                            // $records2 = mysqli_query($conn, $sql2);

                            global $actual_logon;


                            $sql22 = "SELECT * FROM `comercios` WHERE `uf` = '$uf' AND `cidade` = '$cidade' AND `status` = 'publicado' ORDER BY created_at DESC";

                            // echo $sql22;
                            $result22 = $conn->query($sql22);

                            if ($result22->num_rows > 0) {
                                //Mostra os dados de cada linha
                                while ($data = $result22->fetch_assoc()) {
                                    // echo "Coluna 1: " . $row["coluna1"] . " - Coluna 2: " . $row["coluna2"] . " - Coluna 3: " . $row["coluna3"] . "<br>";
                            //     }
                            // } else {
                            //     echo "Nenhum resultado encontrado";
                            // }


                            // while ($data = mysqli_fetch_array($records2)) {

                        ?>
                                <!-- <div class="cadContato">

                                    <?php if (isset($_COOKIE["userLogedin"])) {
                                        // echo '
                                        //     <a style="background:#3aecc" target="_blank" href="https://senae.com.br/scripts/comercios/edit.php?id=' . $data['id'] . '">Editar</a>
                                        //     <a style="background:orangered" target="_blank" href="https://senae.com.br/scripts/comercios/del.php?id=' . $data['id'] . '">Excluir</a>
                                        // ';
                                    } ?>

                                    <div class="headr_">
                                        <div>
                                            <span><?php echo $data['cod']; ?> -
                                                R$ <?php echo $data['valor']; ?></span>
                                        </div>

                                        <div>
                                            <h3><?php echo $data['titulo']; ?></h3>
                                        </div>

                                        <span><?php echo $data['bairro']; ?> - <?php echo $data['rua']; ?></span>

                                        <button type="button" cod="<?php echo $data['cod']; ?>" valor="<?php echo $data['valor']; ?>" titulo="<?php echo $data['titulo']; ?>" onclick="i_entrar_em_contato(this)" style="color: #fff;background: #0f6;border-radius: 0.3em;padding: 0 0.2em;text-decoration: none;text-shadow: 0px 0 3px #000c;transition: .3s;font-weight: 777;font-size: 19px;border: 0;padding: 1px 5px;cursor: pointer;">Entrar em Contato</button>

                                    </div>

                                    <div>
                                        <p><?php echo $data['descr']; ?></p>
                                    </div>

                                    <div>
                                        <div>

                                            <?php

                                            //if ($data['imagem_1'] != "") {
                                            if (strlen($data['imagem_1']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_1'] . '">';
                                            }
                                            if (strlen($data['imagem_2']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_2'] . '">';
                                            }
                                            if (strlen($data['imagem_3']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_3'] . '">';
                                            }
                                            if (strlen($data['imagem_4']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_4'] . '">';
                                            }
                                            if (strlen($data['imagem_5']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_5'] . '">';
                                            }
                                            if (strlen($data['imagem_6']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_6'] . '">';
                                            }
                                            if (strlen($data['imagem_7']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_7'] . '">';
                                            }
                                            if (strlen($data['imagem_8']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_8'] . '">';
                                            }
                                            if (strlen($data['imagem_9']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_9'] . '">';
                                            }
                                            if (strlen($data['imagem_10']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_10'] . '">';
                                            }

                                            ?>
                                        </div>
                                        <div style="display: contents;">
                                            <button type="button" onclick="slide_left(this)" class="slide_left">
                                                <i class="fas fa-angle-double-left"></i></button>
                                            <button type="button" onclick="slide_right(this)" class="slide_right">
                                                <i class="fas fa-angle-double-right"></i></button>
                                        </div>
                                    </div>
                                </div> -->

                                <!--##############################-->
                                <div class="cadContato" style="box-shadow: 0 0 9px -5px;border-radius: 10px;color: #fff;padding: 0 !important;background: none !important;border: 3px solid #3167C7 !important;">
                                    <div class="headr_" style="display: flex;flex-direction: column;background: #f5f5f5;color: #036;padding: 15px 15px;border-radius: 10px 10px 0 0;border-bottom: 2px solid #03c2;">

                                        <div style="display: block;">
                                            <h3 style="text-align: center;width: 100%;margin-top: 0;margin-bottom: 15px;"><?php echo $data['titulo']; ?></h3>
                                        </div>
                                        <div style="width: 100%;display: block;font-size: 15px;display: flex;flex-direction: row;padding-left:0">

                                            <span style="font-size: inherit;text-align: center;width: 100%;display: block;background: #fff;border: 1px solid #0002;border-radius: 5px;padding: 5px 0;font-weight: 777;display: flex;align-items: center;justify-content: center;">COD: <?php echo $data['cod']; ?></span>


                                            <span style="font-size: inherit;text-align: center;width: 100%;display: block;background: #fff;border: 1px solid #0002;border-radius: 5px;padding: 5px 0;font-weight: 777;display: flex;align-items: center;justify-content: center;margin-left: 15px;">R$ <?php echo $data['valor']; ?></span>



                                        </div>
                                        <span style="margin-bottom: 10px;background: #fff;border: 1px solid #0002;border-radius: 5px;padding: 5px 0;font-weight: 777;margin-top: 10px;text-align:center"><?php echo $data['bairro']; ?> - <?php echo $data['rua']; ?></span>
                                        <button class="entrar_contato_btn" type="button" cod="<?php echo $data['cod']; ?>" valor="<?php echo $data['valor']; ?>" titulo="<?php echo $data['titulo']; ?>" onclick="//i_entrar_em_contato(this)" style="color: #fff;border-radius: 0.3em;text-decoration: none;text-shadow: 0px 0 3px #333c;transition: .3s;font-weight: 777;font-size: 19px;border: 0;padding: 1px 5px;cursor: pointer;height: 49px;background: #3167C7;outline: none;"><a href="https://senae.com.br/sebrae/escolher-consultor/?pg=consultoria-de-negocios/ideias-de-negocios/comercios-a-venda/?entrar-em-contato&cod=<?=$data['cod']?>" style="width: 100%;height: 100%;display: flex;flex-direction: column;align-items: center;justify-content: center;background: transparent;" target="_blank">Entrar em Contato</a></button>
                                    </div>
                                    <div style="background: #f5f5f5;border-bottom: 2px solid #03c2;background: #f5f5f5;border-radius: 0;">
                                        <p style="background: #f5f5f5;color: #333;border-radius: 0;padding: 15px 16px;margin-bottom: 0;margin-top: 0;"><?php echo $data['descr']; ?></p>
                                    </div>
                                    <div style="border-radius: 0 0 10px 10px;background: #0000;display: flex;">
                                        <div class="comercio_imgs" style="display: flex;flex-direction: row;flex-wrap: wrap;align-items: center;justify-content: space-evenly;margin-top: 0;background: #f5f5f5;padding-top: 10px !important;border-radius: 0 0 10px 10px;padding: 12px 3px !important;width:100%">

                                            <?php

                                            //if ($data['imagem_1'] != "") {
                                            if (strlen($data['imagem_1']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_1'] . '">';
                                            }
                                            if (strlen($data['imagem_2']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_2'] . '">';
                                            }
                                            if (strlen($data['imagem_3']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_3'] . '">';
                                            }
                                            if (strlen($data['imagem_4']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_4'] . '">';
                                            }
                                            if (strlen($data['imagem_5']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_5'] . '">';
                                            }
                                            if (strlen($data['imagem_6']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_6'] . '">';
                                            }
                                            if (strlen($data['imagem_7']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_7'] . '">';
                                            }
                                            if (strlen($data['imagem_8']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_8'] . '">';
                                            }
                                            if (strlen($data['imagem_9']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_9'] . '">';
                                            }
                                            if (strlen($data['imagem_10']) > 15) {
                                                echo '<img onclick="p_see_images_comercios(this)" loading="lazy" alt="' . $data['titulo'] . '" title="' . $data['titulo'] . '" src="https://senae.com.br/scripts/comercios/' . $data['imagem_10'] . '">';
                                            }

                                            ?>

                                        </div>
                                        <div style="display: contents;">
                                            <button type="button" onclick="slide_left(this)" class="slide_left">
                                                <i class="fas fa-angle-double-left" aria-hidden="true"></i></button>
                                            <button type="button" onclick="slide_right(this)" class="slide_right">
                                                <i class="fas fa-angle-double-right" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <!--##############################-->
                        <?php
                            }
                            // mysqli_close($conn);
                        }}
                        button1()
                        //FimPesquisa
                        ?>
                    </div>
                </div>


            </form>
        </div>
    </div>

    <script>
        function p_see_images_comercios(el) {

            var targetImage = el.getAttribute("src")

            console.log("x: " + targetImage)

            var imagesList = [];

            var selectImagesHTML = "";

            for (i = 0; i < el.parentElement.childElementCount; i++) {

                let img_url = el.parentElement.children[i].getAttribute("src");

                if (img_url != "") {
                    imagesList.push(img_url)

                    if (img_url == targetImage) {
                        selectImagesHTML = selectImagesHTML + `<img class="imgActive" loading="lazy" onclick="change_image_comercio_view(this)" src="https://senae.com.br/scripts/comercios/` + img_url + `">`
                    } else {
                        selectImagesHTML = selectImagesHTML + `<img loading="lazy" onclick="change_image_comercio_view(this)" src="https://senae.com.br/scripts/comercios/` + img_url + `">`
                    }

                }
            }
            //console.log(targetImage);console.log(imagesList);console.log(selectImagesHTML)
            parent.see_images_comercios(targetImage, imagesList, selectImagesHTML)

        }
    </script>

    <script src="https://kit.fontawesome.com/e70d5ce241.js" crossorigin="anonymous"></script>
    <script>
        window.onload = function() {
            if (document.querySelectorAll('a[rel="noopener noreferrer"]').length > 1) {
                document.querySelector(".acessarC1").style.display = "inline"
                document.querySelector(".acessarC1").style.pointerEvents = "none"
                document.querySelector(".pesquisarC1").style.display = "none"
                document.querySelector("#dSubmit a").setAttribute('href', document.querySelector("#dP p a").getAttribute('href'))
            }
        }
    </script>
    <script>
        function showContat() {
            for (i = 0; i < document.querySelectorAll(".hidd").length; i++) {
                document.querySelectorAll(".hidd")[i].classList.add("show")
            }
        }
    </script>

    <script>
        function slide_right(obj) {
            obj.parentElement.parentElement.children[0].scrollLeft = 2000;
        }

        p_see_images_comercios

        function slide_left(obj) {
            obj.parentElement.parentElement.children[0].scrollLeft = 000;
        }
    </script>



    <script>
        function saiba_mais(id) {
            parent.saiba_mais(id)
        }
    </script>
    <script>
        function i_entrar_em_contato(elem) {
            var cod = elem.getAttribute("cod")
            var valor = elem.getAttribute("valor")
            var titulo = elem.getAttribute("titulo")
            console.log(elem)
            localStorage.setItem("comercio_a_venda", cod + " - R$ " + valor + " - " + titulo)

            function reloadPage() {
                parent.document.querySelector('body').insertAdjacentHTML('beforeend', `
          <a target="_blank" href="` + "https://senae.com.br/entrar-em-contato/" + `" id="reloadPage">Reload</a>
      `)
                parent.document.querySelector("#reloadPage").click()
            };
            setTimeout(function() {
                reloadPage()
            }, 50)
        }
    </script>

    <script>
        function change_image_comercio_view(el) {

            if (document.querySelector(".imgActive") != undefined) {
                document.querySelector(".imgActive").classList.remove("imgActive")
            }

            el.classList.add("imgActive")
            var targetImage = el.getAttribute("src")
            document.querySelector("#painelVisual img").setAttribute("src", targetImage)
        }

        function see_images_comercios(el) {

            var targetImage = el.getAttribute("src")

            var imagesList = [];

            var selectImagesHTML = "";

            for (i = 0; i < 10; i++) {

                let img_url = el.parentElement.children[i].getAttribute("src");

                if (img_url != "") {
                    imagesList.push(img_url)

                    if (img_url == targetImage) {
                        selectImagesHTML = selectImagesHTML + `<img class="imgActive" loading="lazy" onclick="change_image_comercio_view(this)" src="` + img_url + `">`
                    } else {
                        selectImagesHTML = selectImagesHTML + `<img loading="lazy" onclick="change_image_comercio_view(this)" src="` + img_url + `">`
                    }

                }
            }
            if (document.querySelector("#painelVisual") != undefined) {
                document.querySelector("#painelVisual").remove()
            }

            document.querySelector("body").insertAdjacentHTML("beforeend", `

<div id="painelVisual" style="position: fixed;left: 0;top: 0;width: 100%;height: 100%;display: flex;align-items: center;justify-content: center;flex-direction: column;">

    <div onclick="blackQuit()" style="background: #000c;width: 100%;height: 100%;position: absolute;z-index: 6;"></div>
<div style="width: 100%;height: 80%;display: flex;align-items: center;justify-content: center;flex-direction: column;position: relative;">

          <div style="width: 80%;height: 100%;z-index: 7;">
                <img style="width: 100%;height: 100%;border-radius: 10px;" src="` + targetImage + `">
          </div>

          <div id="arrowsK" style="position: absolute;width: 50%;display: flex;justify-content: space-between;z-index: 8;">
          <i onclick="visual_left_arrow()" class="fa fa-angle-double-left" aria-hidden="true" style="rotate: 0deg;"></i>

<i onclick="visual_right_arrow()" class="fa fa-angle-double-right" aria-hidden="true" style=""></i>
          </div>
    </div>

    <div id="selectImages" style="z-index: 8;">  

              ` + selectImagesHTML + `

    </div>

</div>

`)

        }

        function blackQuit() {
            if (document.querySelector("#painelVisual") != undefined) {
                document.querySelector("#painelVisual").remove()
            }
        }

        function visual_left_arrow() {
            if (document.querySelector(".imgActive").previousElementSibling != null) {
                var prevImg = document.querySelector(".imgActive").previousElementSibling.getAttribute("src")
                document.querySelector("#painelVisual img").setAttribute("src", prevImg)

                document.querySelector(".imgActive").previousElementSibling.classList.add("imgActive")

                if (document.querySelectorAll(".imgActive")[1] != undefined) {
                    document.querySelectorAll(".imgActive")[1].classList.remove("imgActive")
                }
            }
        }

        function visual_right_arrow() {
            if (document.querySelector(".imgActive").nextElementSibling != null) {
                var prevImg = document.querySelector(".imgActive").nextElementSibling.getAttribute("src")
                document.querySelector("#painelVisual img").setAttribute("src", prevImg)

                document.querySelector(".imgActive").nextElementSibling.classList.add("imgActive")

                if (document.querySelectorAll(".imgActive")[0] != undefined) {
                    document.querySelectorAll(".imgActive")[0].classList.remove("imgActive")
                }
            }
        }
    </script>

    <style>
        .comercio_imgs img {
            border: 3px solid #fff;
            outline: 1px solid #03a3;
        }

        @media only screen and (min-width: 600px) {
            .comercio_imgs {
                display: flex;
                flex-direction: row !important;
                flex-wrap: wrap !important;
                align-items: start !important;
                justify-content: center !important;
                margin: auto;
            }

            .comercio_imgs img {
                width: 55px !important;
                max-width: 198px;
            }
        }

        .entrar_contato_btn {
            transition: .3s;
        }

        .entrar_contato_btn:hover {

            filter: saturate(1.25);
        }

        .fa.fa-angle-double-left:after {
            content: '<'
        }

        .fa.fa-angle-double-right:after {
            content: '>'
        }

        #fnForm div>a span {
            background: #fff !important;
            color: #336ACD !important;
            border: 2px solid #336ACD;
            box-shadow: none !important;
            box-shadow: 0 0 4px -2px !important
        }

        #fnForm>div>a span:hover {
            background: #336ACD !important;
            color: #fff !important;
        }
    </style>

    <script>
        function escolher_contador() {
            document.querySelector("body").insertAdjacentHTML("beforeend", `
  	<a target="_blank" id="escolher_contador_" href="https://senae.com.br/sebrae/escolher-consultor/"></a>
  `)
            document.querySelector("#escolher_contador_").click()
            document.querySelector("#escolher_contador_").remove()
        }

        function contratar() {
            escolher_contador()
        }

        function i_entrar_em_contato() {
            escolher_contador()
        }
    </script>

</html>
<?php //}else{header("location:https://senae.com.br");} 
?>