<?php
    $conexao_sql = new mysqli("localhost","root","","ajax");

    if($conexao_sql->connect_error) {
        echo "Error: Não foi possivel fazer a conexao com o banco de dados"; //verifica se a conexao foi bem sucedida
    } else {
        
        $comentarios = $conexao_sql->query("SELECT * FROM comentarios");
        if(mysqli_num_rows($comentarios) != 0) {

            foreach($comentarios as $linha) {
                echo 
                "<div class='info-container'>".
                "<h3>".$linha['nome']."</h3>".
                "<h4>".$linha['texto']."</h4>".
                "<h5>".$linha['data']."</h5>".
                "</div>";
            }
        }
    }

    

?>