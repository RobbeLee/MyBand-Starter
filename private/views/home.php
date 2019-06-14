<?php $this->layout('layout')?>

<?php $this->start('pagetitle')?>
Home
<?php $this->stop('pagetitle')?>

<?php $this->start('css')?>
<link rel="stylesheet" href="<?php echo url('/css/home.css')?>">
<?php $this->stop('css')?>
<div class="wrapper">
    <section class="stories">
        <?php
        foreach($stories as $story): ?>
            <div class="story">
                <h2 class="story__title">
                    <?=htmlspecialchars($story["Title"])?>
                    <button class="story__btn">Read more</button>
                </h2>
                <p class="story__text" data-open="true">
                    <?=htmlspecialchars($story["Post"])?>
                </p>
            </div>
        <?php endforeach; ?>
    </section>
    <div class="sidebar">
        <h3 class="sidebar__title">Where you can find us!</h3>
        <ul class="sidebar__list">
            <li class="sidebar__li"><a href="https://twitter.com/helloMCDM" target="_blank" rel="noopener noreferrer" class="sidebar__a">Twitter</a></li>
            <li class="sidebar__li"><a href="https://www.twitch.tv/mcdm" target="_blank" rel="noopener noreferrer" class="sidebar__a">Twitch</a></li>
            <li class="sidebar__li"><a href="https://www.youtube.com/user/mcolville" target="_blank" rel="noopener noreferrer" class="sidebar__a">Youtube</a></li>
        </ul>
    </div>
</div>
<script src="js/home.js"></script>