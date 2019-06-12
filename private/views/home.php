<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <section class="stories">
        <?php
        include "../models/model.php";
        
        $stories = getStories();
        foreach($stories as $story) {
            // print_r($story);
            echo '<div class="story">
                    <h2 class="story__title">
                        '.htmlspecialchars($story["Title"]).'
                    </h2>
                    <p class="story__text">
                        '.htmlspecialchars($story["Post"]).'
                    </p>
                </div>';
        }
        ?>
        <!-- <?php //waarom werkt het niet, help
            foreach ($stories as $story): 
        ?>
            <div class="story">
               <h2 class="story__title">
                    <?=htmlspecialchars($story['Ttile'])?>
               </h2>
               <p class="story__text">
                    <?=htmlspecialchars($story['Post'])?>
               </p>
            </div>
        <?php endforeach ?> -->
    </section>
    <div class="sidebar">
        <ul>
            <li><a href="https://twitter.com/helloMCDM" target="_blank" rel="noopener noreferrer">Twitter</a></li>
            <li><a href="https://www.twitch.tv/mcdm" target="_blank" rel="noopener noreferrer">Twitch</a></li>
            <li><a href="https://www.youtube.com/user/mcolville" target="_blank" rel="noopener noreferrer">Youtube</a></li>
        </ul>
    </div>
</body>
</html>