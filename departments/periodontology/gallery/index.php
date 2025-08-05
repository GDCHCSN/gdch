<?php

$ROOT = "../../../";
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "departments/periodontology/gallery/";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Dental College & Hospital Chhatrapati Sambhajinagar</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $ROOTURL ?>public/assets/gdclogo1.png">

    <script src="<?php echo $ROOTURL ?>public/js/_navbar.js" defer></script>
    <script src="<?php echo $ROOTURL ?>public/js/modal.js" defer></script>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/global.css">
    </link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_navbar.css">
    </link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_footer.css">
    </link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/departments/galleryStyles.css">
    </link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/modal.css"></link>
</head>

<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <div class="pageBanner">
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg" loading="lazy" />
        <h1>
            DEPARTMENT OF PERIODONTOLOGY GALLERY
        </h1>
    </div>
    <div class="contentContainer">
        <div>
            <h2>
                Gallery
            </h2>
            <div class="galleryCardContainer">
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/Post Graduate Clinic.jpg" alt="Department Image" loading="lazy" />
                    <p>Undergraduate Clinic</p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/Special Operatory for LASER & Implantology.jpg" alt="Department Image" loading="lazy" />
                    <p>Post Graduate Clinic</p>
                </div>
                <div class="galleryCard">
                    <img
                        src="<?php echo $CURRENTDIRURL ?>assets/Undergraduate Clinic.jpg" alt="Department Image" />
                    <p>Special Operatory for LASER & Implantology</p>
                </div>
                <div class="galleryCard">
                    <img
                        src="<?php echo $CURRENTDIRURL ?>assets/periodontology.jpeg" alt="Service Board" />
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . "includes/_footer.php"); ?>

</body>

</html>