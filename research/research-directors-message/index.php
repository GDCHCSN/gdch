<?php 

$ROOT = "../../"; 
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "research/research-directors-message/";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Dental College & Hospital Chhatrapati Sambhajinagar</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $ROOTURL ?>public/assets/gdclogo1.png">

    <script src="<?php echo $ROOTURL ?>public/js/_navbar.js" defer></script>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/global.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_navbar.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_footer.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/departments/departmentStyles.css"></link>
</head>
<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <div class="pageBanner">
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg" loading="lazy" />
        <h1>
            RESEARCH DIRECTOR'S MESSAGE
        </h1>
    </div>
    <div class="contentContainer">
        <div>
            <p>
                &emsp; The Research Committee GDCH, Chh. Sambhajinagar encourages and guides the staff members, PG/UG students for various research activities, like conducting small scientific studies, surveys and participate in the various state level research competitions held by MUHS and other research institutes.
            </p>
        </div>

        <div>
            <h2>Research Committee :</h2>
            <h3>Chairman :</h3>
            <p>Dr. Seema D Pathak</p>
            <h3>Members :</h3>
            <p>Dr. Jayanti Humbe</p>
            <p>Dr. Sonali Mahajan</p>
        </div>
    </div>

    <?php include($ROOT . "includes/_footer.php"); ?>

</body>
</html>