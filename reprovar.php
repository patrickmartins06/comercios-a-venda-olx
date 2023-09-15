<?php require '/home/u446695767/domains/senae.com.br/public_html/wp-config.php';
if (is_user_logged_in()) { ?>
<?php
    include '../includes/conn.php';

    $id = $_GET['id'];


    //
    $sql2 = "SELECT * FROM `comercios` WHERE id = $id";
    $records2 = mysqli_query($conn, $sql2);

    while ($data = mysqli_fetch_array($records2)) {

        //  Vars
        $id          = $data['id'];
        $created_at  = $data['created_at'];
        $cod         = $data['cod'];
        $titulo      = $data['titulo'];
        $descr       = $data['descr'];
        $uf          = $data['uf'];
        $cidade      = $data['cidade'];
        $cep         = $data['cep'];
        $bairro      = $data['bairro'];
        $rua         = $data['rua'];
        $numero      = $data['numero'];
        $complemento = $data['complemento'];
        $fone        = $data['fone'];
        $email       = $data['email'];
        $url         = $data['url'];

        $imagem_1 = $data['imagem_1'];
        $imagem_2 = $data['imagem_2'];
        $imagem_3 = $data['imagem_3'];
        $imagem_4 = $data['imagem_4'];
        $imagem_5 = $data['imagem_5'];
        $imagem_6 = $data['imagem_6'];
        $imagem_7 = $data['imagem_7'];
        $imagem_8 = $data['imagem_8'];
        $imagem_9 = $data['imagem_9'];
        $imagem_10 = $data['imagem_10'];
    }


    //  Salvar entrada deletada nos logs
    $string = "Comércio: $id - $created_at - $cod - $titulo - $descr - $uf - $cidade - $cep - $bairro - $rua - $numero - $complemento - $fone - $email - $url";
    $sql = "INSERT INTO `logs_deleted` (`id`, `string`) VALUES (NULL, '$string')";
    if (mysqli_query($conn, $sql)) {

        //Deleta entrada
        $del = mysqli_query($conn, "DELETE FROM comercios WHERE ID = '$id'");
        if ($del) {
            // mysqli_close($conn);

            global $imagem_1;
            global $imagem_2;
            global $imagem_3;
            global $imagem_4;
            global $imagem_5;
            global $imagem_6;
            global $imagem_7;
            global $imagem_8;
            global $imagem_9;
            global $imagem_10;

            $images = array($imagem_1, $imagem_2, $imagem_3, $imagem_4, $imagem_5, $imagem_6, $imagem_7, $imagem_8, $imagem_9, $imagem_10);

            foreach ($images as $image) {
                $filepath = '/home/u446695767/domains/senae.com.br/public_html/scripts/comercios/' . $image;
                if (file_exists($filepath)) {
                    unlink($filepath);
                    echo "Arquivo '$filepath' foi deletado com sucesso!<br />";
                } else {
                    echo "O arquivo '$filepath' não foi encontrado.<br />";
                }
            }

            header("location:https://senae.com.br/scripts/comercios/");
            exit;
        } else {
            echo "Erro ao deletar entrada.";
        }
    } else {
        echo "Erro ao deletar entrada².";
    }


?>
<?php } else {
    header("location:https://senae.com.br");
} ?>