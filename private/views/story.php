<?php $this->layout('layout')?>

<?php $this->start('pagetitle')?>
Story overview
<?php $this->stop('pagetitle')?>

<?php $this->start('css')?>
<link rel="stylesheet" href="<?php echo url('/css/story.css')?>">
<?php $this->stop('css')?>

        <?php foreach ($history as $story): ?>
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
                <a href="story/characters/king" target="_blank" class="card__link">More about King</a>
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