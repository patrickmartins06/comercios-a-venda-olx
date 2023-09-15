<?php require '/home/u446695767/domains/senae.com.br/public_html/wp-config.php';
if (is_user_logged_in()) { ?>
    <?php

    include '../includes/conn.php';

    //$id = $_POST ["id"];
    $cod = $_POST["cod"];
    $valor = $_POST["valor"];
    $titulo = $_POST["titulo"];
    $descr = $_POST["descr"];
    $imagem_1 = $_POST["imagem_1"];
    $imagem_2 = $_POST["imagem_2"];
    $imagem_3 = $_POST["imagem_3"];
    $imagem_4 = $_POST["imagem_4"];
    $imagem_5 = $_POST["imagem_5"];
    $imagem_6 = $_POST["imagem_6"];
    $imagem_7 = $_POST["imagem_7"];
    $imagem_8 = $_POST["imagem_8"];
    $imagem_9 = $_POST["imagem_9"];
    $imagem_10 = $_POST["imagem_10"];
    $anunciante = $_POST["anunciante"];
    $fone = $_POST["fone"];
    $url = $_POST["url"];
    $cep = $_POST["cep"];
    $uf = $_POST["uf"];
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $status = "publicado";
    $quality = 100;
    $importado = $_POST["importado"];

    //  Baixar imagens no servidor Local
    $imagem_1 = $_POST["imagem_1"];


    // function convertImageToWebP($source, $destination, $quality=80) {
    //     $extension = pathinfo($source, PATHINFO_EXTENSION);
    //     if ($extension == 'jpeg' || $extension == 'jpg') 
    //         $image = imagecreatefromjpeg($source);
    //     elseif ($extension == 'gif') 
    //         $image = imagecreatefromgif($source);
    //     elseif ($extension == 'png') 
    //         $image = imagecreatefrompng($source);
    //     return imagewebp($image, $destination, $quality);
    // }
    $codigo_gerado_aceitar;
    $codigo_gerado_rejeitar;
    $mensagem_whats_url;
    if ($importado == "1") {

        $status = "aprovacao";

        $fone_whats = str_replace(["(", ")", " ", "-"], "", $fone);

        $codigo_gerado_aceitar = $cod . rand(100, 999);

        $codigo_gerado_rejeitar = $cod . rand(100, 999);

        $mensagem_whats = '
Olá tudo bem? Deseja que seu anúncio "' . $titulo . '" seja publicado no SENAE?

Acessar senae:
www.senae.com.br

Para *aceitar* clique no link abaixo:
www.senae.com.br/aceitar-publicacao?sim=' . $codigo_gerado_aceitar . '

Para *reiejtar* clique no link abaixo:
www.senae.com.br/aceitar-publicacao?nao=' . $codigo_gerado_rejeitar . '
            ';

        $mensagem_whats_url = urlencode($mensagem_whats);
        // echo '$mensagem_whats_url'.$mensagem_whats_url;
    }



    if ($imagem_1 != "") {
        $url_nm = explode('/', $imagem_1);
        $nnome = $cod . 'x' . $url_nm[5];
        $nnome = str_replace("jpg", "webp", $nnome);
        copy($imagem_1, 'imgs/' . $nnome);
        $imagem_1 = 'imgs/' . $nnome;

        //$imgJpg = imagecreatefromjpeg($imagem_1);
        //$nnome = str_replace("jpg", "webp", $imagem_1);
        //$imagem_1 = imagewebp($imgJpg, $nnome, $quality);

        //convertImageToWebP($imagem_1, $imagem_1, 80);

    }

    if ($imagem_2 != "") {
        $url_nm = explode('/', $imagem_2);
        $nnome = $cod . 'x' . $url_nm[5];
        $nnome = str_replace("jpg", "webp", $nnome);
        copy($imagem_2, 'imgs/' . $nnome);
        $imagem_2 = 'imgs/' . $nnome;
    }

    if ($imagem_3 != "") {
        $url_nm = explode('/', $imagem_3);
        $nnome = $cod . 'x' . $url_nm[5];
        $nnome = str_replace("jpg", "webp", $nnome);
        copy($imagem_3, 'imgs/' . $nnome);
        $imagem_3 = 'imgs/' . $nnome;
    }

    if ($imagem_4 != "") {
        $url_nm = explode('/', $imagem_4);
        $nnome = $cod . 'x' . $url_nm[5];
        $nnome = str_replace("jpg", "webp", $nnome);
        copy($imagem_4, 'imgs/' . $nnome);
        $imagem_4 = 'imgs/' . $nnome;
    }

    if ($imagem_5 != "") {
        $url_nm = explode('/', $imagem_5);
        $nnome = $cod . 'x' . $url_nm[5];
        $nnome = str_replace("jpg", "webp", $nnome);
        copy($imagem_5, 'imgs/' . $nnome);
        $imagem_5 = 'imgs/' . $nnome;
    }

    if ($imagem_6 != "") {
        $url_nm = explode('/', $imagem_6);
        $nnome = $cod . 'x' . $url_nm[5];
        $nnome = str_replace("jpg", "webp", $nnome);
        copy($imagem_6, 'imgs/' . $nnome);
        $imagem_6 = 'imgs/' . $nnome;
    }

    if ($imagem_7 != "") {
        $url_nm = explode('/', $imagem_7);
        $nnome = $cod . 'x' . $url_nm[5];
        $nnome = str_replace("jpg", "webp", $nnome);
        copy($imagem_7, 'imgs/' . $nnome);
        $imagem_7 = 'imgs/' . $nnome;
    }

    if ($imagem_8 != "") {
        $url_nm = explode('/', $imagem_8);
        $nnome = $cod . 'x' . $url_nm[5];
        $nnome = str_replace("jpg", "webp", $nnome);
        copy($imagem_8, 'imgs/' . $nnome);
        $imagem_8 = 'imgs/' . $nnome;
    }

    if ($imagem_9 != "") {
        $url_nm = explode('/', $imagem_9);
        $nnome = $cod . 'x' . $url_nm[5];
        $nnome = str_replace("jpg", "webp", $nnome);
        copy($imagem_9, 'imgs/' . $nnome);
        $imagem_9 = 'imgs/' . $nnome;
    }

    if ($imagem_10 != "") {
        $url_nm = explode('/', $imagem_10);
        $nnome = $cod . 'x' . $url_nm[5];
        $nnome = str_replace("jpg", "webp", $nnome);
        copy($imagem_10, 'imgs/' . $nnome);
        $imagem_10 = 'imgs/' . $nnome;
    }


    //copy('https://static3.tcdn.com.br/img/img_prod/460977/teste_100485_1_cbc226c7d23a19c784fb4752ffe61337.png', 'flower.jpg');

    //  Baixar imagens no servidor Local

    date_default_timezone_set('America/Sao_Paulo'); // Define o fuso horário para UTC-3 (Brasília)
    $timestamp_ = time();
    $timestamp = date('Y-m-d H:i:s', $timestamp_);


    $sql = "INSERT INTO `comercios` (`created_at`, `anunciante`, `titulo`, `cod`, `imagem_1`, `imagem_2`, `imagem_3`, `imagem_4`, `imagem_5`, `imagem_6`, `imagem_7`, `imagem_8`, `imagem_9`, `imagem_10`, `valor`, `descr`, `cep`, `uf`, `cidade`, `bairro`, `rua`, `numero`, `complemento`, `fone`, `url`, `status`, `importado`, `codigo_gerado_aceitar`, `codigo_gerado_rejeitar`) VALUES ('$timestamp', '$anunciante', '$titulo', '$cod', '$imagem_1', '$imagem_2', '$imagem_3', '$imagem_4', '$imagem_5', '$imagem_6', '$imagem_7', '$imagem_8', '$imagem_9', '$imagem_10', '$valor', '$descr', '$cep', '$uf', '$cidade', '$bairro', '$rua', '$numero', '$complemento', '$fone', '$url', '$status', '$importado', '$codigo_gerado_aceitar', '$codigo_gerado_rejeitar')";

    // echo "<br>" . $sql;

    if (mysqli_query($conn, $sql)) {

        if ($importado == "1") {
            // $fone_whats = "4198127844";
            $url_whats = "https://wa.me/55$fone_whats?text=$mensagem_whats_url";
            // header("location:$url_whats");
    ?>
            <a href="<?= $url_whats ?>" target="_blank" id="goto_whats"></a>
            <script>
                document.querySelector("#goto_whats").click()
                // window.location.href = "https://senae.com.br/scripts/comercios/"
            </script>
    <?php
        } else {
            header("location:https://senae.com.br/scripts/comercios/");
        }
    } else {
        echo "Erro:" . $sql . "<br>" . mysqli_error($conn);
    }

    ?>
<?php } else {
    header("location:https://senae.com.br");
} ?>