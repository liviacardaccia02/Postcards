<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Grape Nuts' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=DM Serif Display' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/9a41f32a54.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>
        <?php echo $template_params["title"]; ?>
    </title>
</head>
<?php require ($template_params["page"]); ?>


</html>