<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="images/icon.png"/>
    <title>Bem vindo ao Newslatter</title>
    <style>
        @font-face {font-family: 'poppins-regular';src: url(poppins-regular-webfont.woff);}
        :root{
            --main-color: #9B06CE;
            --main-color-hover: #700195;
            --soft-black: rgb(37, 37, 37);
            --almost-white: rgb(245, 245, 245);
            --almost-white-hover: rgba(245, 245, 245, .8);
            --mobile-menu-bg: rgb(27, 27, 27);
        }
        *{
            margin: 0px;
            padding: 0px;
            font-family: 'poppins-regular';
            box-sizing: border-box;
        }
        body{background-color: var(--soft-black);}
        main{
            display: block;
            position: absolute;
            width: 100%;
            max-width: 500px;
            top: 50%;
            left: 50%;
            translate: -50% -50%;
        }
        .msg{
            background-color: var(--almost-white);
            padding: 1rem;
            border-radius: 1rem;
        }
        .msg span, .msg strong{
            color: var(--main-color);
            word-wrap: break-word;
        }
        .msg p{margin: 20px 0px 50px 0px;}
        .msg a{
            display: block;
            background-color: var(--main-color);
            color: var(--almost-white);
            text-align: center;
            text-decoration: none;
            font-size: 1.2rem;
            border-radius: 8px;
            padding: 5px 0px;
            transition: all 0.3s ease-in-out;
        }
        .msg a:hover{
            background-color: var(--main-color-hover);
            color: var(--almost-white-hover);
        }
        footer{
            margin-top: 80px;
            text-align: center;
            padding-bottom: 1rem;
            color: var(--almost-white);
        }
        .dev-link{
            display: inline-block;
            color: var(--main-color);
            transition: opacity 0.2s ease-in-out;
        }
        .dev-link:hover{opacity: 70%;}
        @media (max-width: 520px){  
            main{
                background-color: var(--almost-white);
                position: relative;
                top: 0;
                left: 0;
                translate: none;
                max-width: 100vw;
                height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }
            .msg p{
                margin: 30px 0px 300px 0px;
                text-align: justify;
            }
            .msg a{
                max-width: 320px;
                margin: 0 auto;
            }
            footer{color: black;}
        }
        @media (max-height: 661px){
            main{
                background-color: var(--almost-white);
                position: relative;
                top: 0;
                left: 0;
                translate: none;
                max-width: 100vw;
                height: auto;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }
            .msg p{
                margin: 30px 0px 300px 0px;
                text-align: justify;
            }
            .msg a{
                max-width: 320px;
                margin: 0 auto;
            }
            footer{color: black;}
        }
    </style>
</head>
<?php 
$nome = $_POST['name-input'];
$email = $_POST['email-input'];
?>
<body>
    <main>
        <div class="msg">
            <h1>Olá <span><?php echo($nome)?>!</span></h1>
            <p>Um Email de confirmação foi enviado para <strong><?php echo($email)?></strong>. Por favor, abra e clique no botão para confirmar a sua inscrição.</p>
            <a href="index.html">Voltar</a>
        </div>
        <footer>
            <p>Desenvolvido por <a href="https://github.com/matheusoliveirajc" target="_blank" class="dev-link">Matheus de Oliveira</a></p>
        </footer>
    </main>
</body>
</html>