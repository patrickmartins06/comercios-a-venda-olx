<?php require '/home/u446695767/domains/senae.com.br/public_html/wp-config.php';if(is_user_logged_in()){ ?>
<?php
include '../includes/conn.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include '../includes/functions_sc.php'; echo $favicon; ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comercios em Destaque</title>
    <link rel="stylesheet" href="web_style.css">

    <style> 
        .cadContato div {
            display: grid;
            grid-template-columns: auto auto auto auto auto auto auto;
            overflow: auto;
        }

        .cadContato div img {
            height: 15em;
            margin: 0 .1em;
            border-radius: 9px;
        }

        body {
            font-family: 'verdana';
            color: #000b;
        }

        .cadContato div {
            position: relative;
            border: 1px solid #eee;
            border-radius: 9px;
            scroll-behavior: smooth;
        }

        .cadContato div .slide_left {
            position: absolute;
            left: 0;
            top: 45%;
        }

        .cadContato div .slide_right {
            position: absolute;
            right: 0;
            top: 45%;
        }

        .cadContato {
            margin: 3em 6em;
        }
        .cadContato p{
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
    </style>
</head>

<body style="margin: 0;">

    <div class="fornecedores_pesquisa_box">
        <div id="fnForm">
            <div id="fornecedores-resultado">


                <?php
            include '../includes/conn.php';
            $estado = $_POST ["estado"];
            $cidade = $_POST ["cidade"];
            $sql2 = "SELECT * FROM comercios ORDER BY created_at ASC";
            $records2 = mysqli_query($conn, $sql2);
    
     while ($data = mysqli_fetch_array($records2)) {
            ?>
                <div class="cadContato">
                    <h3>
                        <?php echo $data['cod'];?> -
                        R$<?php echo $data['valor'];?> -
                        <?php echo $data['titulo'];?>
                    </h3>
                    <p>
                        <?php echo $data['descr'];?>
                    </p>
                    <div>
                        <div>
                            <img src="<?php echo $data['imagem_1'];?>" alt="">
                            <img src="<?php echo $data['imagem_2'];?>" alt="">
                            <img src="<?php echo $data['imagem_3'];?>" alt="">
                            <img src="<?php echo $data['imagem_4'];?>" alt="">
                            <img src="<?php echo $data['imagem_5'];?>" alt="">
                            <img src="<?php echo $data['imagem_6'];?>" alt="">
                            <img src="<?php echo $data['imagem_7'];?>" alt="">
                        </div>
                        <div style="display: contents;">
                            <button onclick="slide_left(this)" class="slide_left">
                                <i class="fas fa-angle-double-left"></i></button>
                            <button onclick="slide_right(this)" class="slide_right">
                                <i class="fas fa-angle-double-right"></i></button>
                        </div>
                    </div>
                </div>
                <?php
    }?>


            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/e70d5ce241.js" crossorigin="anonymous"></script>
    <script>
        window.onload = function () {
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
            obj.parentElement.parentElement.children[0].scrollLeft = 2000
        }
        function slide_left(obj) {
            obj.parentElement.parentElement.children[0].scrollLeft = 000
        }
    </script>

</body>

</html>
<?php }else{header("location:https://senae.com.br");} ?>