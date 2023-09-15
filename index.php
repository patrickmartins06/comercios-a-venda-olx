<?php require '/home/u446695767/domains/senae.com.br/public_html/wp-config.php';
if (is_user_logged_in()) { ?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <?php
    // ----------- Rotina 45 dias 
    //    include '../includes/conn.php';
    //    if ($conn->query("DELETE from comercios where created_at < now() - interval 45 DAY") === TRUE) {    echo '<script>console.log("run45d")</script>';     }else{      echo "Erro  ao deletar entradas: " . $conn->error;    }
    //    if ($conn->query("DELETE from parcerias_e_sociedades where created_at < now() - interval 45 DAY") === TRUE) {    echo '<script>console.log("run45d")</script>';     }else{      echo "Erro  ao deletar entradas: " . $conn->error;    }

    // ----------- Rotina 45 dias 

    require '/home/u446695767/domains/senae.com.br/public_html/scripts/includes/conn.php';
    ?>

    <head>
        <?php include '../includes/functions_sc.php';
        echo $favicon; ?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Comércios à Venda</title>
        <link rel="stylesheet" href="style.css">

        <style>
            .destaque {
                margin: 0
            }

            tr td img {
                height: 5em;
                width: 5em
            }
        </style>
        <style>
            /*MouseOverScroll*/
            #scL {
                position: fixed;
                left: 0;
                top: 0;
                height: 100%;
                width: 2%;
            }

            #scR {
                position: fixed;
                right: 0;
                top: 0;
                height: 100%;
                width: 2%;
            }
        </style>
        <style>
            .aprovar a span {
                transition: .3s
            }

            .aprovar a:hover span {
                box-shadow: 0 0 2em #fff5 inset
            }
        </style>

        <style>
            .importado0:nth-child(odd) {
                background: #054 !important;
            }

            .importado0:nth-child(even) {
                background: #076 !important;
            }

            /* */
            tr[data_olx=pix1]:nth-child(odd) {
                background: #700 !important;
            }

            tr[data_olx=pix1]:nth-child(even) {
                background: #a00 !important;
            }

            .aprovar .edit {
                cursor: pointer;
            }
            /* */
            body{
                padding-top: 60px
            }
            .links1{
                position: fixed!important;
                background: #036;
                width: 100%!important;
                top: 0;
                border-bottom: 2px solid #fff
            }
            /* */
        </style>

    </head>

    <body onload="a()">
        <div class="links1">
            <a href="https://senae.com.br/wp-admin">Voltar ao Painel Wordpress</a>
            <a href="index.php" style="opacity: 0.7">Listar - Comércios à Venda</a>
            <a href="adicionar.php">Adicionar - Comércios à Venda</a>
            <input onclick="listTitle()" id="listTitle" type="text" style="height: 2em;width: 34em;">

            <?php
            global $conn;
            $sql = 'SELECT * FROM logs_deleted WHERE timestamp >= curdate() - INTERVAL DAYOFWEEK(curdate())+6 DAY AND timestamp < curdate() - INTERVAL DAYOFWEEK(curdate())-1 DAY';
            $records = mysqli_query($conn, $sql);
            $delQtd = 0;
            while ($data = mysqli_fetch_array($records)) {

                $gpfa = explode(':', $data['string']);

                if ($gpfa[0] == "Comércio") {
                    $delQtd = $delQtd + 1;
                }
            }
            ?>
            <span style="background: #8f0000;padding: 3px 25px;border-radius: 5px;border: 1px solid #fff;margin-left: 15px;"><?php echo $delQtd; ?></span>
        </div>
        <script>
            window.onload = function() {
                var url_list
                for (i = 0; i < document.querySelectorAll(".title a").length; i++) {
                    url_list = url_list + " " + document.querySelectorAll(".title a")[i].getAttribute("href")
                }

                document.querySelector("#listTitle").value = url_list
            }

            function listTitle() {
                var data = document.querySelector("#listTitle").value
                navigator.clipboard.writeText(data)
                popupA(true, "Filtro copiado com sucesso.")
            }

            function popupA(status, txt) {

                if (document.querySelector("#popup") != undefined) {
                    document.querySelector("#popup").remove()
                }

                if (status == true) {
                    document.querySelector("body").insertAdjacentHTML("beforeend", `
     <div id="popup" style="position: fixed;right: 50px;bottom: 50px;z-index: 999;background: #0b7;padding: 20px;border-radius: 25px 25px 0px 25px;transition: 1s;">
            <span>✅</span>
            <span>` + txt + `</span>
    </div>
    `)
                }

                if (status == false) {
                    document.querySelector("body").insertAdjacentHTML("beforeend", `
     <div id="popup" style="position: fixed;right: 50px;bottom: 50px;z-index: 999;background: #c03;padding: 20px;border-radius: 25px 25px 0px 25px;transition: 1s;">
            <span>⚠️</span>
            <span>` + txt + `</span>
    </div>
    `)
                }

                setTimeout(function() {
                    if (document.querySelector("#popup") != undefined) {
                        document.querySelector("#popup").style.opacity = 0;
                    }
                }, 1000)

                setTimeout(function() {
                    if (document.querySelector("#popup") != undefined) {
                        document.querySelector("#popup").remove()
                    }
                }, 2000)

            }
        </script>
        <div>
            <table class="listagem">
                <tr>
                    <!--<td>Criação</td>-->
                    <td>Nº</td>
                    <td>url</td>
                    <td>Criação</td>
                    <td>Cód.</td>
                    <td>Status</td>
                    <td>Valor</td>
                    <td>Empresa</td>
                    <td>Consultor</td>
                    <td>Título</td>
                    <td>Descrição</td>
                    <td>imagem_1</td>
                    <td>imagem_2</td>
                    <td>imagem_3</td>
                    <td>imagem_4</td>
                    <td>imagem_5</td>
                    <td>imagem_6</td>
                    <td>imagem_7</td>
                    <td>imagem_8</td>
                    <td>imagem_9</td>
                    <td>imagem_10</td>
                    <td>Anunciante</td>
                    <td>Fone</td>
                    <!-- <td>Cep</td> -->
                    <td>UF</td>
                    <td>Cidade</td>
                    <td>Bairro</td>
                    <td>Rua</td>
                    <!-- <td>Nº</td>
                <td>Complemento</td> -->
                    <!--<td>Em Destaque?</td>-->
                    <td>✎</td>
                    <td>✖</td>
                </tr>
                <?php

                $sql = 'SELECT * FROM comercios ORDER BY cod DESC';
                $records = mysqli_query($conn, $sql);
                $ct_a = 1;

                while ($data = mysqli_fetch_array($records)) {
                ?>
                    <tr class="importado<?php echo $data['importado']; ?>" data_olx="<?php echo $data['pix']; ?>">
                        <!--<td><?php //echo $data['created_at']; 
                                ?></td>-->
                        <td>
                            <?php echo $ct_a;
                            $ct_a = $ct_a + 1; ?>
                        </td>
                        <td class="title" title="<?php echo $data['url']; ?>">
                            <a href="<?php echo $data['url']; ?>">LINK</a>
                        </td>
                        <td>
                            <?php echo $data['created_at']; ?>
                        </td>
                        <td>
                            <?php echo $data['cod']; ?>
                        </td>

                        <?php

                        if ($data['status'] == "aprovacao") {
                            echo '
                        <td class="aprovar" style="display: flex;flex-direction: column;align-items: center;justify-content: center;border: 2px solid #0f0;padding: 0;border-radius: 3px;background: #0f0;">
                        <span style="padding: 6px 0;/*! background: #3ae; */width: 100%;color: #050;text-shadow: 0px 1px 1px #efe;">Aprovar?</span>
                        <div style="display: flex;flex-direction: column;width: 100%;background: #0f0;">
                          <a onclick="Apro(this)" class="edit apro" data_href="aprovar.php?id=' . $data['id'] . '" style="display: contents;">
                            <span style="background: #0a0;padding: 6px 0px;border-radius: 7px;margin-bottom: 3px;">🟢 Sim</span>
                          </a>
                          <a onclick="Repro(this)" class="edit repro" data_href="reprovar.php?id=' . $data['id'] . '" style="display: contents;">
                            <span style="background: #a00;padding: 6px 0px;border-radius: 7px;margin-bottom: 3px;">🔴 Não</span>
                          </a>
                        </div>
                      </td>
                        ';
                        } else {
                            echo '<td>Publicado</td>';
                        }
                        ?>
                        <td>
                            <?php echo $data['valor']; ?>
                        </td>
                        <td>
                            <?php echo $data['nome_empresa']; ?>
                        </td>
                        <td>
                            <?php echo $data['codigo_consultor']; ?> <span> - </span> <?php echo $data['nome_consultor']; ?>
                        </td>
                        <td title="<?php echo $data['titulo']; ?>">
                            <?php echo mb_strimwidth($data['titulo'], 0, 50, "..."); ?>
                        </td>
                        <td title="<?php echo $data['descr']; ?>">
                            <?php echo mb_strimwidth($data['descr'], 0, 50, "..."); ?>
                        </td>
                        <td><img loading="lazy" src="<?php echo $data['imagem_1']; ?>" alt=""></td>
                        <td><img loading="lazy" src="<?php echo $data['imagem_2']; ?>" alt=""></td>
                        <td><img loading="lazy" src="<?php echo $data['imagem_3']; ?>" alt=""></td>
                        <td><img loading="lazy" src="<?php echo $data['imagem_4']; ?>" alt=""></td>
                        <td><img loading="lazy" src="<?php echo $data['imagem_5']; ?>" alt=""></td>
                        <td><img loading="lazy" src="<?php echo $data['imagem_6']; ?>" alt=""></td>
                        <td><img loading="lazy" src="<?php echo $data['imagem_7']; ?>" alt=""></td>
                        <td><img loading="lazy" src="<?php echo $data['imagem_8']; ?>" alt=""></td>
                        <td><img loading="lazy" src="<?php echo $data['imagem_9']; ?>" alt=""></td>
                        <td><img loading="lazy" src="<?php echo $data['imagem_10']; ?>" alt=""></td>
                        <td>
                            <?php echo $data['anunciante']; ?>
                        </td>
                        <td>
                            <?php echo $data['fone']; ?>
                        </td>
                        <!-- <td>
                    <?php //echo $data['cep']; 
                    ?>
                </td> -->
                        <td>
                            <?php echo $data['uf']; ?>
                        </td>
                        <td>
                            <?php echo $data['cidade']; ?>
                        </td>
                        <td>
                            <?php echo $data['bairro']; ?>
                        </td>
                        <td>
                            <?php echo $data['rua']; ?>
                        </td>
                        <!-- <td>
                    <?php //echo $data['numero']; 
                    ?>
                </td>
                <td>
                    <?php //echo $data['complemento']; 
                    ?> -->
                        </td>
                        <!--<td><?php //echo $data['destaque']; 
                                ?></td>-->
                        <td><a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">✎</a></td>
                        <td><a class="del" href="del.php?id=<?php echo $data['id']; ?>">✖</a></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <!--MouseOverScroll-->
        <div id="scroll">
            <div id="scL" onmouseover="scL()"></div>
            <div id="scR" onmouseover="scR()"></div>
        </div>

        <script>
            //MouseOverScroll
            //Vars
            var fator = 50
            var time = 400
            //Left
            document.querySelector("#scLs").addEventListener("mouseover", function(event) {
                document.querySelector('*').scrollLeft -= fator
                document.querySelector("#scL").style.pointerEvents = "none"
                setInterval(function() {
                    document.querySelector("#scL").style.pointerEvents = "all"
                }, time)
            }, false)
            //Right
            document.querySelector("#scRs").addEventListener("mouseover", function(event) {
                document.querySelector('*').scrollLeft += fator
                document.querySelector("#scR").style.pointerEvents = "none"
                setInterval(function() {
                    document.querySelector("#scR").style.pointerEvents = "all"
                }, time)
            }, false);
        </script>

        <script>
            function Repro(e) {
                //Criar iframe para Deletar e Salvar em Logs
                document.querySelector('body').insertAdjacentHTML('beforeend', `
                    <iframe style="display:none" id="aproR" src="https://senae.com.br/scripts/comercios/` + e.getAttribute("data_href") + `">
                `)
                //Remove div da html atual
                e.closest("tr").setAttribute("style", "background:#f00a!important;")
                setTimeout(function() {
                    e.closest("tr").remove()
                }, 500)
            }

            function Apro(e) {
                //Criar iframe para Deletar e Salvar em Logs
                document.querySelector('body').insertAdjacentHTML('beforeend', `
                    <iframe style="display:none" id="aproR" src="https://senae.com.br/scripts/comercios/` + e.getAttribute("data_href") + `">
                `)
                //Remove div da html atual
                e.closest("tr").setAttribute("style", "background:#0c9a!important;")
                setTimeout(function() {
                    e.closest("tr").setAttribute("style", "background:inherit")
                    e.closest("td").insertAdjacentHTML("afterend", `
    	<td>Publicado</td>
    `)
                    e.closest("td").remove()
                }, 500)
            }
        </script>

    </body>

    </html>
<?php } else {
    header("location:https://senae.com.br");
} ?>