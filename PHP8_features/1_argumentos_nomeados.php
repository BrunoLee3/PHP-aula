<?php

function sendEmail($destinatarios = "", $cc = "", $assunto = "", $mensagem = ""){
    echo "Destinatários: " . $destinatarios . "<br>"; 
    echo "CC: " . $cc . "<br>"; 
    echo "Assunto: " . $assunto . "<br>"; 
    echo "Mensagem: " . $mensagem . "<br>"; 
}

// convencional -> respeitando a ordem dos parâmetros
sendEmail(
    "lee.bruno23@gmail.com",
    "teste@teste.com.br",
    "Argumentos Nomeados",
    "Dominando a feature de argumentos nomeados do PHP8"
);

echo "<hr>";

sendEmail(
    assunto: "Argumentos Nomeados",
    mensagem: "Dominando a feature de argumentos nomeados do PHP8", 
    destinatarios: "lee.bruno23@gmail.com",
);
