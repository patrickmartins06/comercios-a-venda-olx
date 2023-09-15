<?php require '/home/u446695767/domains/senae.com.br/public_html/wp-config.php';if(is_user_logged_in()){ ?>
<?php
    include '../includes/conn.php';

    $id = $_POST ["id"];
    $cod = $_POST ["cod"];
    $valor = $_POST ["valor"];
    $titulo = $_POST ["titulo"];
    $descr = $_POST ["descr"];
    $imagem_1 = $_POST ["imagem_1"];
    $imagem_2 = $_POST ["imagem_2"];
    $imagem_3 = $_POST ["imagem_3"];
    $imagem_4 = $_POST ["imagem_4"];
    $imagem_5 = $_POST ["imagem_5"];
    $imagem_6 = $_POST ["imagem_6"];
    $imagem_7 = $_POST ["imagem_7"];
    $imagem_8 = $_POST ["imagem_8"];
    $imagem_9 = $_POST ["imagem_9"];
    $imagem_10 = $_POST ["imagem_10"];
    $anunciante = $_POST ["anunciante"];
    $fone = $_POST ["fone"];
    $url = $_POST ["url"];
    $cep = $_POST ["cep"];
    $uf = $_POST ["uf"];
    $cidade = $_POST ["cidade"];
    $bairro = $_POST ["bairro"];
    $rua = $_POST ["rua"];
    $numero = $_POST ["numero"];
    $complemento = $_POST ["complemento"];


    $sql = "UPDATE comercios SET titulo = '$titulo', id = '$id', cod = '$cod', imagem_1 = '$imagem_1', imagem_2 = '$imagem_2', imagem_3 = '$imagem_3', imagem_4 = '$imagem_4', imagem_5 = '$imagem_5', imagem_6 = '$imagem_6', imagem_7 = '$imagem_7', imagem_8 = '$imagem_8', imagem_9 = '$imagem_9', imagem_10 = '$imagem_10', valor = '$valor', descr = '$descr', cep = '$cep', uf = '$uf', cidade = '$cidade', bairro = '$bairro', rua = '$rua', numero = '$numero', complemento = '$complemento', fone = '$fone', url = '$url', anunciante = '$anunciante' WHERE id = '$id'";
    if(mysqli_query($conn, $sql)){
        header("location:https://senae.com.br/scripts/comercios/");
    } else {
        echo "Erro:" . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);  
?>
<?php }else{header("location:https://senae.com.br");} ?>