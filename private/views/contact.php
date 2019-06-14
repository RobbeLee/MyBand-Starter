<?php $this->layout('layout')?>

<?php $this->start('pagetitle')?>
Contact
<?php $this->stop('pagetitle')?>

<?php $this->start('css')?>
<link rel="stylesheet" href="<?php echo url('/css/contact.css')?>">
<?php $this->stop('css')?>
<div class="wrapper">
        <?php  foreach ($Contact as $contact): ?>
        <div class="text">
            <h2 class="text__Title">
                <?=htmlspecialchars($contact['contactTitle'])?>
            </h2>
            <p class="text__txt">
                <?=htmlspecialchars($contact['contactText'])?>
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
    </div>