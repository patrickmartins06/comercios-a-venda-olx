<?php require '/home/u446695767/domains/senae.com.br/public_html/wp-config.php';if(is_user_logged_in()){ ?>
<?php
    include '../includes/conn.php';

    $id = $_GET['id'];

    $sql = "UPDATE comercios SET status = 'publicado' WHERE id = '$id'";
    if(mysqli_query($conn, $sql)){
        header("location:https://senae.com.br/scripts/comercios/");
    } else {
        echo "Erro:" . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);  
?>
<?php }else{header("location:https://senae.com.br");} ?>