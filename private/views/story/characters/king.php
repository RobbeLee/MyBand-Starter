<?php $this->layout('layout')?>

<?php $this->start('pagetitle')?>
King
<?php $this->stop('pagetitle')?>

<?php $this->start('css')?>
<link rel="stylesheet" href="<?php echo url('/css/character.css')?>">
<?php $this->stop('css')?>

<section class="character">
        <?php
        foreach($character as $king) {
            echo '<div class="story">
                    <h2 class="story__title">
                        '.$king["Title"].'
                    </h2>
                    <p class="story__text">
                        '.$king["Post"].'
                    </p>
                </div>';
        }
        ?>