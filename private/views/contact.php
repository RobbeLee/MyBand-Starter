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

        <form class="form">
            <h2 class="form__title">Contact</h2>
            <p class="form__txt">Please fill out this form</p>
            <div class="form__input">
                <div class="form__input__top">
                    <p class="form__input__p">Name </p> <input type="text"      name="firstName" placeholder="full name" class="input" required>
                    <p class="form__input__p">Email </p> <input type="email"     name="email"     placeholder="Email"      class="input" required>
                    <p class="form__input__p">Subject </p> <input type="text"      name="subject"   placeholder="Subject"    class="input" required>
                </div>
                <p class="form__input__p">Message:</p><textarea type="text" name="message"   placeholder="Message..." class="form__input__msg" required></textarea>
                <button type="form__submit">Submit</button>
            </div>
        </form>
    </div>