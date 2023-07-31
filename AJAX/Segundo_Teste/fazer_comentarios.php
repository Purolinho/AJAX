<?php
    include "./conectarBD.php";
    $query = "SELECT * FROM comentarios";  
    $rows_query = mysqli_query($conexao_sql, $query);

    if(mysqli_num_rows($rows_query) != 0) {
        for ($i = 1; $i <= mysqli_num_rows($rows_query) ; $i++) { 
            $assoc_dados = mysqli_fetch_assoc($rows_query);
            echo
            "<div class='comentarios'>".
            "<h3>".$assoc_dados['nome']."</h3>".
            "<p>".$assoc_dados['comentario']."</p>".
            "</div>";
        }
    }
?>