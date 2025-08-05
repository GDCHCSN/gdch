<?php 

$ROOT = "../../"; 
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "research/pradan/";

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
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/departments/departmentstyles.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/research/research.css"></link>
</head>
<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>
    
    <div class="pageBanner">
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg" loading="lazy" />
        <h1>
            PRADAN <div>(Post Graduate Research and Development Activity Network)</div>
        </h1>
    </div>
    <div class="contentContainer">
        <div>
            <p>
                PRADAN Activity is a distinctive initiative led by GDC&H in collaboration with CSMSS Dental College. This program engages PGs & staff in a wide array of scientific activities. It serves as a comprehensive platform for PhD candidates, PGs, UGs & fellowship students, offering a rich scientific experience. 
            </p>
            <p>
                PRADAN provides invaluable clinical-edge concept and explores new treatment modalities & innovations across various departments.
            </p>
        </div>
        
        <div>
            <h2>Committee :</h2>
            <h3>Chairman :</h3>
            <p>Dr. Seema D Pathak</p>
            <h3>Members :</h3>
            <p>Dr. Jayanti Humbe</p>
            <p>Dr. Sonali Mahajan</p>
        </div>

        <div class="research-link-container">
            <a href="<?php echo $CURRENTDIRURL ?>assets/PRADAN.pdf" target="_blank" >
                PRADAN LIST
            </a>
        </div>
    </div>

    <?php include($ROOT . "includes/_footer.php"); ?>

</body>
</html>