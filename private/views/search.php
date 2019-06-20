<?php $this->layout('layout')?>

<?php $this->start('pagetitle')?>
Search Results
<?php $this->stop('pagetitle')?>

<?php $this->start('css')?>
<link rel="stylesheet" href="<?php echo url('/css/search.css')?>">
<?php $this->stop('css')?>
<div class="wrapper">
    <!--Search bar-->
    <div class="search-bar">
        <form action="<?php echo url ('/search') ?>" method="GET" class="form">
            <input type="hidden" name="page" value="search"/>
            <input type="text" name="term" value="<?php if(isset($searchterm)): echo $searchterm; endif; ?>" placeholder="I am looking for..." class="form__input"/>
            <button type="submit" class="submit form__btn">search</button>
            <p><b>Er zijn <?php echo count( $searchResults ) ?> zoekresultaten voor "<span class="bruh"><?=htmlspecialchars($searchterm)?></span>".</b></p>
        </form>
    </div>
    <div class="searchResults">
    <?php foreach ($searchResults as $result): ?>
        <div class="story">
                <h2 class="story__title">
                    <?=htmlspecialchars($result["Title"])?>
                    <button class="story__btn">Read more</button>
                </h2>
                <p class="story__text" data-open="true">
                    <?=htmlspecialchars($result["Story"])?>
                </p>
            </div>
    <?php endforeach; ?>
    </div>
</div>

<script src="js/home.js"></script>