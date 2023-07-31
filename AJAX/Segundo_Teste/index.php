<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviando Dados Com AJAX</title>
    <link rel="stylesheet" href="../Segundo_Teste/style.css">
</head>
<body>
    <header>
        <h2>Envie Seu Comentario</h2>
    </header>

    <main>
        <form id="formulario">
            <input type="text" id="nome" name="nome" placeholder="Nome">
            <textarea name="comentario" id="comentario" placeholder="Escreva Seu Comentário"></textarea>
            <input type="submit" value="Enivar" form="formulario">
        </form>
    </main>

    <div class="comentarios-container">
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> <!-- Uso obrigatório da biblioteca do jquery, é possivel fazer sem, com js puro, mas nao sei fazer, entao use o jquery!-->
    <script src="js.js"></script>
    
</body>
</html>