<?php

$ROOT = "../../";
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "student-portal/student-council/";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Dental College & Hospital Chhatrapati Sambhajinagar</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $ROOTURL ?>public/assets/gdclogo1.png">

    <script src="<?php echo $ROOTURL ?>public/js/_navbar.js" defer></script>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/global.css">
    </link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_navbar.css">
    </link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_footer.css">
    </link>
</head>

<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <div class="pageBanner">
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg" loading="lazy" />
        <h1>
            STUDENT COUNCIL
        </h1>
    </div>
    <div class="contentContainer">
        <div>
            <a href="<?php echo $CURRENTDIRURL ?>assets/SW Ordinance no 01_060721.pdf" target="_blank">
                SW Ordinance no 01_060721 (pdf download)
            </a>
            <a href="<?php echo $CURRENTDIRURL ?>assets/student-council-letter.pdf" target="_blank">
                College Student council Letter GDC H CSN (pdf download)
            </a>
        </div>
    </div>

    <?php include($ROOT . "includes/_footer.php"); ?>

</body>

</html>