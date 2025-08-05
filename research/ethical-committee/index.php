<?php 

$ROOT = "../../"; 
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "research/ethical-committee/";

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
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/ethical-committee/ethical-committee.css"></link>
</head>
<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <div class="pageBanner">
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg" loading="lazy" />
        <h1>
            ETHICAL COMMITTEE
        </h1>
    </div>
    <div>
        <div class="main">
            <div class="ethical-container">
                
                <a href="<?php echo $CURRENTDIRURL ?>assets/Ethical committee & Minutes of the meetings last 5 years.pdf" target="_blank" >
                    1. Ethical Committe and Minutes of the Meetings (Last 5 years)
                </a>
                <a href="<?php echo $CURRENTDIRURL ?>assets/Minutes Of meetings.pdf" target="_blank" >
                    2.  Minutes of meetings
                </a>
            </div> 
        </div>           
    </div>

    <?php include($ROOT . "includes/_footer.php"); ?>

</body>
</html>