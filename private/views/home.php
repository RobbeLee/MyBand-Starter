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
        foreach($stories as $story) {
            // print_r($story);
            echo '<div class="story">
                    <h2 class="story__title">
                        '.$story["Title"].'
                    </h2>
                    <p class="story__text">
                        '.$story["Post"].'
                    </p>
                </div>';
        }
        ?>
    </section>
    <div class="sidebar">
        <ul>
            <li><a href="https://twitter.com/helloMCDM" target="_blank" rel="noopener noreferrer">Twitter</a></li>
            <li><a href="https://www.twitch.tv/mcdm" target="_blank" rel="noopener noreferrer">Twitch</a></li>
            <li><a href="https://www.youtube.com/user/mcolville" target="_blank" rel="noopener noreferrer">Youtube</a></li>
        </ul>
    </div>
</div>