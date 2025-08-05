<?php

$ROOT = "../../../";
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "departments/oral-and-maxillofacial-surgery/gallery/";

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
            DEPARTMENT OF ORAL AND MAXILLOFACIAL SURGERY GALLERY
        </h1>
    </div>
    <div class="contentContainer">
        <div>
            <div class="galleryCardContainer">
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/oral_surgery.jpeg" alt="Service Board" loading="lazy" />
                    <p>
                        Service
                    </p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/DEPARTMENT STAFF AND POST- GRADUATES PHOTOGRAPHS.png" alt="Department Image" loading="lazy" />
                    <p>
                        DEPARTMENT STAFF AND POST- GRADUATES PHOTOGRAPHS
                    </p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/OPD.png" alt="Department Image" loading="lazy" />
                    <p>
                        OPD
                    </p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/MINOR OPERATION THEATRE.png" alt="Department Image" loading="lazy" />
                    <p>
                        MINOR OPERATION THEATRE
                    </p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/MAJOR OPERATION THEATRE.png" alt="Department Image" loading="lazy" />
                    <p>
                        MAJOR OPERATION THEATRE
                    </p>
                </div>
            </div>
        </div>

        <div>
            <h2>
                MINOR SURGICAL PROCEDURES ALVEOLOPLASTY , DISIMPACTION, BIOPSY , ENUCLEATION & CURRETTAGE
            </h2>
            <div class="galleryCardContainer">
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/MINOR SURGICAL PROCEDURES1.png" alt="Department Image" loading="lazy" />
                    <p>
                    </p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/MINOR SURGICAL PROCEDURES2.png" alt="Department Image" loading="lazy" />
                    <p>
                    </p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/MINOR SURGICAL PROCEDURES3.png" alt="Department Image" loading="lazy" />
                    <p>
                    </p>
                </div>
            </div>
        </div>

        <div>
            <h2>
                INSTRUMENTS
            </h2>
            <div class="galleryCardContainer">
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/INSTRUMENTS1.png" alt="Department Image" loading="lazy" />
                    <p>
                    </p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/INSTRUMENTS2.png" alt="Department Image" loading="lazy" />
                    <p>
                    </p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/INSTRUMENTS3.png" alt="Department Image" loading="lazy" />
                    <p>
                    </p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/INSTRUMENTS4.png" alt="Department Image" loading="lazy" />
                    <p>
                    </p>
                </div>
            </div>
        </div>

        <div>
            <h2>
                MAJOR OPERATION THEATRE :- TRAUMA CARE & CARCINOMA
            </h2>
            <div class="galleryCardContainer">
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/MAJOR OPERATION THEATRE1.png" alt="Department Image" loading="lazy" />
                    <p>
                    </p>
                </div>
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/MAJOR OPERATION THEATRE2.png" alt="Department Image" loading="lazy" />
                    <p>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . "includes/_footer.php"); ?>

</body>

</html>