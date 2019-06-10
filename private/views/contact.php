<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>contact</title>
        <link rel="stylesheet" href="contact.css">
    </head>
    <body>
        <?php  foreach ($Contact as $contact): ?>
        <div class="text">
            <h2 class="text__Title">
                <?=htmlspecialchars($story['ContactTitle'])?>
            </h2>
            <p class="text__txt">
                <?=htmlspecialchars($story['ContactText'])?>
            </p>
        </div>
        <?php endforeach ?>
        <div class="form">
            <form class="contact">
                <h2 class="formTitle">Contact</h2>
                <input type="email" name="email" placeholder="Email" class="emailInput" required>
                <input type="text" name="firstName" placeholder="first name" class="FNinput" required>
                <input type="text" name="lastName" placeholder="last name" class="LNinput" required>
                <input type="text" name="subject" placeholder="Subject" class="subjectInput" required>
                <input type="textfield" name="message" placeholder="Message..." class="msgInput" required>
            </form>
        </div>
    </body>
</html>