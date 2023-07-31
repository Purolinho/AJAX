<?php
    $conexao_sql = new mysqli("localhost","root","","testando_comentarios");
    if($conexao_sql->connect_error) {
        echo "Erro na conexao com o banco de dados";
    }
?>