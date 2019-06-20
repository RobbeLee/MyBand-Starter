<?php $this->layout('layout')?>

<?php $this->start('pagetitle')?>
Search Results
<?php $this->stop('pagetitle')?>

<?php $this->start('css')?>
<link rel="stylesheet" href="<?php echo url('/css/story.css')?>">
<?php $this->stop('css')?>
<div class="wrapper">
    <!--Search bar-->
    <div class="search-bar">
        <form action="<?php echo url ('/search') ?>" method="GET" class="form">
            <input type="hidden" name="page" value="search"/>
            <input type="text" name="term" value="<?php if(isset($searchterm)): echo $searchterm; endif; ?>" placeholder="Vul hier de zoekopdracht in..." class="form__input"/>
            <button type="submit" class="submit" class="form__btn">Zoek</button>
        </form>
    </div>
    <!--Search Results-->
    <p>Er zijn <?php echo count( $searchResults ) ?> zoekresultaten voor "<?php echo $searchterm; ?>".</p>

    <div class="searchResults">
    <?php foreach ($searchResults as $result): ?>
        <?php print_r ($result)?>
	    <div class="results">
		    <h2><?php echo $result['Title'] ?></h2>
		    <p><?php echo $result['Post'] ?></p>
	    </div>
        <?php endforeach; ?>
    </div>
</div>