<?php
    include "./conectarBD.php";
    $nome = mysqli_real_escape_string($conexao_sql, $_POST['nome']);
    $comentario = mysqli_real_escape_string($conexao_sql, $_POST['comentario']);

    $sql_enviar_dados = "INSERT INTO comentarios(nome,comentario) VALUES ('$nome','$comentario')";

    mysqli_query($conexao_sql, $sql_enviar_dados);

?>