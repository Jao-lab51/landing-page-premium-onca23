<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário com segurança
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $pessoas = htmlspecialchars($_POST['pessoas']);
    $data = htmlspecialchars($_POST['data']);
    $horario = htmlspecialchars($_POST['horario']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Aqui você pode processar os dados (enviar e-mail ou salvar no banco)
    
    // Tela de Sucesso
    echo "<!DOCTYPE html>
    <html lang='pt-BR'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Reserva Recebida | Onça 23</title>
        <link href='https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=DM+Sans:wght@400&display=swap' rel='stylesheet'>
        <style>
            body { background: #080706; color: #d4cfc8; font-family: 'DM Sans', sans-serif; display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0; text-align: center; }
            .card { border: 1px solid rgba(201,151,58,0.3 ); padding: 3rem; max-width: 500px; background: #111009; }
            h1 { font-family: 'Playfair Display', serif; color: #c9973a; font-size: 2.5rem; margin-bottom: 1rem; }
            p { margin-bottom: 2rem; line-height: 1.6; }
            .btn { display: inline-block; padding: 1rem 2rem; background: #c9973a; color: #080706; text-decoration: none; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; }
        </style>
    </head>
    <body>
        <div class='card'>
            <h1>Reserva Solicitada!</h1>
            <p>Olá, <strong>$nome</strong>! Recebemos seu pedido para <strong>$pessoas pessoas</strong> no dia <strong>$data</strong> às <strong>$horario</strong>.  
  
Em breve entraremos em contato pelo telefone $telefone para confirmar.</p>
            <a href='index.html' class='btn'>Voltar ao Site</a>
        </div>
    </body>
    </html>";
} else {
    header("Location: index.html");
    exit();
}
?>
