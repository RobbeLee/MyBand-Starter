<?php $this->layout('layout')?>

<?php $this->start('pagetitle')?>
Agenda
<?php $this->stop('pagetitle')?>

<?php $this->start('css')?>
<link rel="stylesheet" href="<?php echo url('/css/agenda.css')?>">
<?php $this->stop('css')?>

<div class="wrapper">
    <? foreach ($Agenda as $agenda): ?>
        <div class="text">
            <h2 class="text__title">
            <?=htmlspecialchars($agenda['CalendarTitle'])?>
            </h2>
            <p class="text__txt">
            <?=htmlspecialchars($agenda['CalenderText'])?>
            </p>
        </div>
    <?php endforeach ?>
    <div class="agenda">
        <iframe src="https://calendar.google.com/calendar/b/2/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FLos_Angeles&amp;src=dGhlY2hhaW5vZmFjaGVyb25AZ21haWwuY29t&amp;color=%23039BE5" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div>
    <? //foreach ($Agenda as $agenda): ?>
        <div class="times" id="times">
            <h2 id="times__title">
                Streaming Times
            </h2>
            <button type="button" id="loadDoc">Change Content</button>
        </div>
    <?php //endforeach ?>
</div>
<script src="js/ajax.js"></script>
