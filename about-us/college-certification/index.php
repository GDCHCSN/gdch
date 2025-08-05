<?php 

$ROOT = "../../"; 
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "about-us/college-certification/";

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
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg" loading="lazy"/>
        <h1>
            COLLEGE CERTIFICATIONS
        </h1>
    </div>
    <div>
        <div class="main">
            <div class="certificate-container">
                <h3>Affiliation</h3>
                <ul class="unOrderedList">
                    <li><a href="<?php echo $CURRENTDIRURL ?>assets/Affiliation/Affiliation Letter of BDS course for A Y 2024-25.pdf">Affiliaition Letter of BDS course for A Y 2024-25.pdf</a></li>
                    <li><a href="<?php echo $CURRENTDIRURL ?>assets/Affiliation/Affiliation Letter of  MDS course for A Y 2024 25.pdf">Affiliatiion Letter of MDS course for A Y 2024 25.pdf</a></li>
                </ul>
                <hr>
                <h3>Recognition</h3>
                <ul class="unOrderedList">
                    <li><a href="<?php echo $CURRENTDIRURL ?>assets/Recognitions/Orthodontics and Oral Surgery Recognition Letter.pdf">Orthodontics and Oral Surgery Recognition Letter.pdf</a></li>
                    <li><a href="<?php echo $CURRENTDIRURL ?>assets/Recognitions/Recognition Letter MOH & FW Oral Pathology, Conservative Dentistry, Periodontics and Prosthodontics 03 MDS Seats (1).pdf">Recognition Letter MOH & FW Oral Pathology, Conserv…riodontics and Prosthodontics 03 MDS Seats (1).pdf</a></li>
                    <li><a href="<?php echo $CURRENTDIRURL ?>assets/Recognitions/Recognition Letter for Oral Medicine.pdf">Recognition Letter for Oral Medicine.pdf</a></li>
                    <li><a href="<?php echo $CURRENTDIRURL ?>assets/Recognitions/Recognition Letter Prosthodontics 05 to 06 Seats.pdf">Recognition Letter Prosthodontics 05 to 06 Seats.pdf</a></li>
                </ul>
            </div> 
        </div>           
    </div>
    

    <?php include($ROOT . "includes/_footer.php"); ?>

</body>
</html>