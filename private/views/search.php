<?php $this->layout('layout')?>

<?php $this->start('pagetitle')?>
Story overview
<?php $this->stop('pagetitle')?>

<?php $this->start('css')?>
<link rel="stylesheet" href="<?php echo url('/css/story.css')?>">
<?php $this->stop('css')?>
<div class="wrapper">
    <div class="search-bar">
        <form action="search.php" method="GET" class="form">
            <input type="hidden" name="page" vlaue="zoeken"/>
            <input type="text" name="term" vlaue="" placeholder="Vul hier de zoekopdracht in..." class="form__input"/>
            <button type="submit" class="submit" class="form__btn">Zoek</button>
        </form>
    </div>
</div>