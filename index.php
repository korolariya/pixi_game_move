<?php header("Access-Control-Allow-Origin: http://localhost:85"); ?><!DOCTYPE HTML>
<html>
    <head>
  
        <title>pixi.js example 1</title>
        <style>
                                body {
                                    margin: 0;
                                    padding: 0;
                                    background-color: #000000;
                                }
                                .game{
                                    width: 800px;
                                    height: 800px;
                                    cursor: pointer;
                                }
        </style>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="pixi.js"></script>
        <script src="socket.io.min.js"></script>
        <script src="myminigame.js"></script>
        
    </head>
    <body>
    <div  class="game"></div>
    </body>
</html>