<?php 

$ROOT = "../../../"; 
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "departments/orthodontics-and-dentofacial-orthopedics/gallery/";

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
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/global.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_navbar.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_footer.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/departments/galleryStyles.css"></link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/modal.css"></link>
</head>
<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <div class="pageBanner">
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg" loading="lazy" />
        <h1>
            DEPARTMENT OF ORTHODONTICS AND DENTOFACIAL ORTHOPEDICS GALLERY
        </h1>
    </div>
    <div class="contentContainer">
        <div>
            <h2>
                Gallery
            </h2>
            <div class="galleryCardContainer">
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/image-1.jpeg" alt="Department Image"  loading="lazy" />
                    <!-- <p>Undergraduate Clinic</p> -->
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/image-2.jpeg" alt="Department Image"  loading="lazy" /> 
                </div>
                <div class="galleryCard">
                    <img
                        src="<?php echo $CURRENTDIRURL ?>assets/image-3.jpeg" alt="Department Image" />
                </div>
                <div class="galleryCard">
                    <img
                        src="<?php echo $CURRENTDIRURL ?>assets/image-4.jpeg" alt="Department Image" />
                </div>
                <div class="galleryCard">
                    <img
                        src="<?php echo $CURRENTDIRURL ?>assets/image-5.jpeg" alt="Department Image" />
                </div>
                <div class="galleryCard">
                    <img
                        src="<?php echo $CURRENTDIRURL ?>assets/image-6.jpeg" alt="Department Image" />
                </div>
                <div class="galleryCard">
                    <img
                        src="<?php echo $CURRENTDIRURL ?>assets/image-7.jpeg" alt="Department Image" />
                </div>
                <div class="galleryCard">
                    <img
                        src="<?php echo $CURRENTDIRURL ?>assets/image-8.jpeg" alt="Department Image" />
                </div>
                <div class="galleryCard">
                    <img
                        src="<?php echo $CURRENTDIRURL ?>assets/image-9.jpeg" alt="Department Image" />
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/orthodontics-and-dentofacial-othropedics.jpg" alt="Service Board" loading="lazy" />
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . "includes/_footer.php"); ?>

</body>
</html>