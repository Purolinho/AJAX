$.get('fazer_comentarios.php', function(data) {
    $('.comentarios-container').html(data);
  });

$("#formulario").submit(function (e) { 
    e.preventDefault(); //a função preventDefault impede que a ação normal do botao seja executada que no caso é o de submit que nao vai mais dar refreash na pagina e nos levar para outra

    var enviar_nome = $("#nome").val(); //val() é mesma coisa do .value em js
    var enviar_comentario = $("#comentario").val();

    if(enviar_nome == "" || enviar_comentario == ""){

    } else {
        $.ajax({
            url: 'enviar_dados.php', //para onde as informações da data serão enviadas
            method: 'POST', //O metodo usado para pegar os dados em php
            data: {nome: enviar_nome, comentario: enviar_comentario}, //o primeiro parametro é o nome da variavel e o segundo parametro é o valor que esta atribuido a ela, usaremos o primeiro parametro para pegar as informações contida dentro da variavel, no php usando o comando "$_POST" ou "$_GET"
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown) //Mostra o erro casa o AJAX nao tenha sido efetuado com sucesso
            }
        }).done(() => {
            $.get('fazer_comentarios.php', function(data) {
                $('.comentarios-container').html(data);
              });
        })
        
    }


});