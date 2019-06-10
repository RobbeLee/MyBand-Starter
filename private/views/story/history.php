<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda</title>
    <link rel="stylesheet" href="agenda.css">
</head>
<body>
<?php //require 'nav.php';
        foreach ($stories as $story): 
    ?>
        <div class="story">
           <h2 class="story__title">
                <?=htmlspecialchars($story['Title'])?>
           </h2>
           <p class="story__text">
                <?=htmlspecialchars($story['Post'])?>
           </p>
        </div>
    <?php endforeach ?>
</body>
</html>