<?php $this->layout('layout')?>

<?php $this->start('pagetitle')?>
<?=$character['Title']?>
<?php $this->stop('pagetitle')?>

<?php $this->start('css')?>
<link rel="stylesheet" href="<?php echo url('/css/character.css')?>">
<?php $this->stop('css')?>

<div class="wrapper">
    <div class="story">
            <h2 class="story__title">
                <?=$character["Title"]?>
            </h2>
            <p class="story__short">
                <b> Name: </b> <?=htmlspecialchars($character['Short'][0])?>
                <b> | Player: </b> <?=htmlspecialchars($character['Short'][1])?>
                <b> | Class: </b> <?=htmlspecialchars($character['Short'][2])?>
                <b> | Race: </b> <?=htmlspecialchars($character['Short'][3])?>
                <b> | Background: </b> <?=htmlspecialchars($character['Short'][4])?>
            </p>
            <p class="story__long">
                <?=$character["LongD"]?>
            </p>
    </div>
</div>