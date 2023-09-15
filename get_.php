
<?php
    function raspagem($url) {
        // Inicializar o cURL
        $ch = curl_init();

        // Configurar as opções do cURL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Executar o cURL para obter a página
        $resultado = curl_exec($ch);

        // Fechar o cURL
        curl_close($ch);

        // Exibir o resultado
        echo $resultado;
    }

    // Uso da função
    raspagem('https://senae.com.br');
?>
