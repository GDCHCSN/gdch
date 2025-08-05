<?php 

$ROOT = "../"; 
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "procurement-cell/";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Dental College & Hospital Chhatrapati Sambhajinagar</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $ROOTURL ?>public/assets/gdclogo1.png">

    <script src="<?php echo $ROOTURL ?>public/js/_navbar.js" defer></script>
    <script src="<?php echo $ROOTURL ?>public/js/departments/departmentMain.js" defer></script>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/global.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_navbar.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_footer.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/about-us/about-us.css"></link>
</head>
<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <div class="pageBanner">
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg" loading="lazy" />
        <h1>
            PROCUREMENT CELL
        </h1>
    </div>
    <div>
        <div class="main">
            <div class="certificate-container">
                <h3>Rules & Regulations</h3>
                <ul class="unOrderedList">
                    <li><a href="<?php echo $CURRENTDIRURL ?>assets/1- वित्तीय अधिकार नियमपुस्तिका,1965 मधील सुधारित अधिकार शा.नि. दि.17-04-2015.pdf">वित्तीय अधिकार नियमपुस्तिका,1965 मधील सुधारित अधिकार शा.</a></li>
                    
                    <li><a href="<?php echo $CURRENTDIRURL ?>assets/2- वित्तीय प्राधिकारांमध्ये नैसर्गिक वाढ- वित्तीय अधिकार नियम पुस्तिका-1978.pdf">वित्तीय प्राधिकारांमध्ये नैसर्गिक वाढ- वित्तीय अधिकार नियम पुस्तिका-1978</a></li>
                    
                    <li><a href="<?php echo $CURRENTDIRURL ?>assets/3- उपभोग्य वस्तुंच्या खरेदीसंदर्भात प्रदान वित्तीय अधिकार नियमपुस्तिका.pdf">उपभोग्य वस्तुंच्या खरेदीसंदर्भात प्रदान वित्तीय अधिकार नियमपुस्तिका</a></li>
                    
                    <li><a href="<?php echo $CURRENTDIRURL ?>assets/20 Maharashtra Treasury Rules 1968.pdf">20 Maharashtra Treasury Rules 1968</a></li>
                    
                </ul>
                <hr>
                <h3>Financial Year</h3>
                <ul class="unOrderedList">
					<h3>2025-26</h3>
                    <li><a href="<?php echo $CURRENTDIRURL ?>assets/E-AUCTION NOTICE FOR SALE OF UNSERVICEABLEBROKENNO_REPAIRABLE MACHINERIESEQUIPMENTFURNITURE ITEMS.pdf" target="_blank">E-AUCTION NOTICE FOR SALE OF WRITTEN DOWN ITEMS</a></li>
					<h3>2024-25</h3>
                    <li><a href="<?php echo $CURRENTDIRURL ?>assets/2024-25/canteen final.pdf" target="_blank">Canteen Tender 2024-25</a></li>
                </ul>
            </div> 
        </div>             
    </div>
    
    <?php include($ROOT . "includes/_footer.php"); ?>

</body>
</html>
