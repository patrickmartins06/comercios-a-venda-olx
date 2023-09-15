<?php require '/home/u446695767/domains/senae.com.br/public_html/wp-config.php';if(is_user_logged_in()){ ?>
<?php
    include '../includes/conn.php';


// You can access the values posted by jQuery.ajax
// through the global variable $_POST, like this:
// $bar = isset($_POST['bar']) ? $_POST['bar'] : null;
$cod = isset($_POST['cod']) ? $_POST['cod'] : null;
$valor = isset($_POST['valor']) ? $_POST['valor'] : null;
$titulo = isset($_POST['titulo']) ? $_POST['titulo'] : null;

// add Registro Acesso
$sql = "INSERT INTO `consultores_reg_acessos` (`cod`, `valor`, `titulo`) VALUES ('$cod', '$valor', '$titulo')";

if(mysqli_query($conn, $sql)){
} else {
    echo "Erro:" . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);  
<?php }else{header("location:https://senae.com.br");} ?>