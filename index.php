<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php
        if(isset($_GET["theme"])){
            if($_GET["theme"] == "dark"){
                ?> <link rel="stylesheet" href="dark.css" ><?php
            }
            else
            {
                ?> <link rel="stylesheet" href="white.css" ><?php
            }
        }
        else
        {
            ?> <link rel="stylesheet" href="white.css" ><?php
        }
        ?>
    </head>
    <body>
        Hello Világ!
        <?php
        if(isset($_GET["theme"]) and !empty($_GET["theme"])){
            if($_GET["theme"] == "dark"){
                ?> <a href="?theme=vilagos">Légy világos</a> <?php
            }
            else
            {
                ?> <a href="?theme=dark">Légy dárk</a> <?php
            }
        }
        else
        {
            ?> <a href="?theme=dark">Légy dárk</a> <?php
        }
        ?>
    </body>
</html>
