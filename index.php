<?php 
require 'classFiles/pokemon.php';
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>OOP Pokemon Fight</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>
        <audio autoplay>
            <source src="music.ogg" type="audio/ogg">
            <source src="img/music.mp3" type="audio/mpeg">
        </audio>
        <h1 class="display-3 text-center text-white">Pokemon Battle</h1>
        <div class="container-fluid">
            <div class="row">
                <div id="red" class="col-sm-2 ">
                    <h3 class="text-center">Information:</h3>
                    <hr>
                    <h3 class="text-center">Attacks:</h3>
                    <hr>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-2">
                    <br><br><br><br><br><br><br><br><br>
                    <img class="img-fluid" src="img/pokemon2.png" alt="Charmeleon" width="460" height="345">
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                    <br><br><br><br><br><br><br><br><br><br><br>
                    <img class="img-fluid" src="img/pokemon1.png" alt="Pikachu" width="460" height="345">
                </div>
                <div class="col-sm-1"></div>
                <div id="yellow" class="col-sm-2 text-right">
                    <h3 class="text-center">Information:</h3>
                    <hr>
                    <h3 class="text-center">Attacks:</h3>
                    <hr>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>