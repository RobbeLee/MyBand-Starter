<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda</title>
    <link rel="stylesheet" href="agenda.css">
</head>
<body>
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
    </div>
</body>
</html>
