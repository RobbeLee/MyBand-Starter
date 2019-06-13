<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $this->section('pagetitle')?></title>
    <link rel="stylesheet" href="<?php echo url('/css/default.css')?>">
    <?php echo $this->section('css')?>

</head>
<body>

    <?php include '../private/includes/nav.php' ?>
    <?php echo $this->section('content')?>

</body>
</html>