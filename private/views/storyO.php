<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Story Overview</title>
        <link rel="stylesheet" href="../../public/css/storyO.css">
    </head>
    <body>
        <?php foreach ($storyO as $story): ?>
            <div class="story">
                <h2 class="story__title">
                    
                    <?=htmlspecialchars($story['historyTitle'])?>
                </h2>
                <p class="story__txt">
                    <?=htmlspecialchars($story['historyText'])?>
                </p>
            </div>
        <?php endforeach ?>
        <div class="cards">
            <div class="card">
                <div class="card__img-container">
                    <img src="../../public/images/" alt="King" class="card__img"> 
                </div>  
                <h3 class="card__title">King</h3>
                <p class="card__p"><i>Comamnder</i></p>
                <a href="" target="_blank" class="card__link">More about King</a>
            </div>
            <div class="card">
                <div class="card__img-container">
                    <img src="../../public/images/" alt="Judge" class="card__img"> 
                </div>  
                <h3 class="card__title">Judge</h3>
                <p class="card__p"><i>Senior Officer</i></p>
                <a href="" target="_blank" class="card__link">More about Judge</a>
            </div>
            <div class="card">
                <div class="card__img-container">
                    <img src="../../public/images/" alt="Slim" class="card__img"> 
                </div>  
                <h3 class="card__title">Slim</h3>
                <p class="card__p"><i>Senior officer</i></p>
                <a href="" target="_blank" class="card__link">More about Slim</a>
            </div>
            <div class="card">
                <div class="card__img-container">
                    <img src="../../public/images/" alt="Judge" class="card__img"> 
                </div>  
                <h3 class="card__title">Judge</h3>
                <p class="card__p"><i>Senior officer</i></p>
                <a href="" target="_blank" class="card__link">More about Judge</a>
            </div>
            <div class="card">
                <div class="card__img-container">
                    <img src="../../public/images/" alt="Copper" class="card__img"> 
                </div>  
                <h3 class="card__title">Copper</h3>
                <p class="card__p"><i>Senior officer</i></p>
                <a href="" target="_blank" class="card__link">More about Copper</a>
            </div>
        </div>
    </body>
</html>
