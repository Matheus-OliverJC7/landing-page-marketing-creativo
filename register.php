<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Bem vindo ao Newslatter</title>
    <style>
        @font-face {font-family: 'poppins-regular';src: url(poppins-regular-webfont.woff);}
    :root{--main-color: #9B06CE;}
    body{
        margin: 0px;
        font-family: 'poppins-regular';
        background-color: rgb(37, 37, 37);
        font-size: 1.1rem;
    }
    main{
        background-color: rgb(240, 240, 240);
        width: 100%;
        max-width: 420px;
        margin: 200px auto 0px auto;
        padding: 20px;
        border-radius: 15px;
    }
    main h1{margin: 0px 0px 30px 0px;font-size: 1.6rem;}
    h1 > span{color: var(--main-color);}
    main p{text-align: justify;}
    main a{
        text-decoration: none;
        text-align: center;
        background-color: var(--main-color);
        color: #fff;
        padding: 10px;
        display: block;
        margin-top: 30px;
        border-radius: 10px;
        font-size: 1.2rem;
    }
    main a:hover{background-color: #8109a8;color: rgb(240,240,240);}
    @media (max-width: 400px){
        main{
            margin: 0px;
            height: 108vh;
            display: flex;
            flex-direction: column;
            border-radius: 0px
        }
        main a{margin-top: 100px;}
    }
    </style>
</head>
<?php 
$nome = $_POST['nome-input'];
$email = $_POST['email-input'];
?>
<body>
    <main>
        <h1>Seja bem vindo <span><?php echo($nome)?>!</span></h1>
        <p>Um Email de confirmação foi enviado para <strong><?php echo($email)?></strong>. Por favor, abra e clique no botão para confirmar a sua inscrição.</p>
        <a href="index.html">Voltar</a>
    </main>
</body>
</html>