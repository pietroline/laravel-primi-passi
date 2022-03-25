<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nome sito</title>

        <style>

            header{
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin: 0 1.5rem;
            }
            header a{
                text-decoration: none;
                color: #000;
            }

            header a:hover{
                color: #00f;
            }
            header li{
                display: inline;
                list-style: none;
            }

            
        </style>
    </head>

    <body>
        <header>
            <div>
                <a href="/">FirstPage(logo)</a>
            </div>
            <nav>
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="prodotti">Prodotti</a></li>
                    <li><a href="contatti">Contatti</a></li>
                </ul>
            </nav>
            <div>
                <a href="carrello">Carrello</a>
            </div>
        </header>