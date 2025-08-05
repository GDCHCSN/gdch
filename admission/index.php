<?php

$ROOT = "../";
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "admission/";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Governmentt Dental College and Hospital, Chhatrapati Sambhajinagar (GDCH) is one of the reputed Government Dental Colleges in Maharashtra, Affiliated with the Maharashtra University of Health Sciences, Nashik.">
    <title>Government Dental College & Hospital Chhatrapati Sambhajinagar</title>
    <link rel="canonical" href="https://gdchcsn.ac.in">
    <link rel="icon" type="image/x-icon" href="<?php echo $ROOTURL ?>public/assets/gdclogo1.png">

    <script src="<?php echo $ROOTURL ?>public/js/_navbar.js" defer></script>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/global.css">
    </link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_navbar.css">
    </link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_footer.css">
    </link>
    </link>
    
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/about-us/about-us.css"></link>
</head>

<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <div class="pageBanner">
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg" loading="lazy" />
        <h1>
            ADMISSION
        </h1>
    </div>
    <div class="contentContainer">
        <div class="certificate-container">
            <h2>
                Downloads
            </h2>
            <ul class="unOrderedList">
                <li>
                    <a href="<?php echo $CURRENTDIRURL ?>assets/NEET-PG-2025..MDS Admission Process Instruction Manual for the academic year 2025-26 Final-3.pdf" target="_blank">
						NEET-PG-2025 MDS Admission Process Instruction Manual for the academic year 2025-26 Final
                    </a>
                </li>
                <li>
                    <a href="<?php echo $CURRENTDIRURL ?>assets/NEET-UG-2025 BDS Admission process Instruction manual Final.pdf" target="_blank">
                        NEET-UG-2025 BDS Admission process Instruction manual Final
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <?php include($ROOT . "includes/_footer.php"); ?>

</body>

</html>
