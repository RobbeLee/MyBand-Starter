<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boots</title>
    <link rel="stylesheet" href="character.css">
</head>
<body>
<?php //require 'nav.php';
        //foreach ($characters as $character): 
    ?>
        <div class="character">
           <h2 class="character__name">
                <?=htmlspecialchars($character['Title'])?>
           </h2>
           <p class="character__short">
                <?=htmlspecialchars($character['Short'])?>
           </p>
           <p class="character__long">
                <?=htmlspecialchars($character['LongD'])?>
           </p>
        </div>
    <?php //endforeach ?>
</body>
</html> 