<?php require '/home/u446695767/domains/senae.com.br/public_html/wp-config.php';
if (is_user_logged_in()) { ?>
<?php
    include '../includes/conn.php';

    $id = $_GET['id'];



    $sql2 = "SELECT * FROM `comercios` WHERE id = $id";
    $records2 = mysqli_query($conn, $sql2);

    while ($data = mysqli_fetch_array($records2)) {
        //  Vars
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
?>
<?php } else {
    header("location:https://senae.com.br");
} ?>