<?php
include 'content_aboutus.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech News to Watch</title>
    <link rel="stylesheet" href="./style/style_aboutus.css" href="./style/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.2/css/all.css" />
</head>

<body>

    <?php
    include '_header.php';
    ?>

    <main>

        <!-- TITRE -->
        <?php echo $first ?>

        <!-- SECTION FLORENT -->
        <?php echo $sectionFlorent ?>
        <?php echo $socialMediaFlorent ?>

        <!-- SECTION JESSICA -->
        <?php echo $sectionJessica ?>
        <?php echo $socialMediaJessica ?>

        <!-- SECTION ALEXANDRE -->
        <?php echo $sectionAlexandre ?>
        <?php echo $socialMediaAlexandre ?>

        <!-- SECTION MAXENCE -->
        <?php echo $sectionMaxence ?>
        <?php echo $socialMediaMaxence ?>

        


    </main>

    <?php
    include '_footer.php';
    ?>

</body>

</html>