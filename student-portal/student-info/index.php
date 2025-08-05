<?php 

$ROOT = "../../"; 
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "student-portal/student-info/";

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
    <link rel="stylesheet" href="<?php echo $CURRENTDIRURL ?>css/styles.css"></link>
</head>
<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <div class="pageBanner">
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg" loading="lazy" />
        <h1>
            STUDENT INFO
        </h1>
    </div>
    <div class="contentContainer">
        <div>
            <h2>BDS ADMISSIONS</h2>
            <a href="<?php echo $CURRENTDIRURL ?>assets/bds-admission-2023-24.pdf">
                2023-24 (pdf download)
            </a>
        </div>
        <div>
            <h2>BDS ELIGIBLE STUDENTS LIST</h2>
            <a href="<?php echo $CURRENTDIRURL ?>assets/bds-eligible-students-list-2019-20.pdf">
                2019-20 (pdf download)
            </a>
            <a href="<?php echo $CURRENTDIRURL ?>assets/bds-eligible-students-list-2021-22.pdf">
                2021-22 (pdf download)
            </a>
            <a href="<?php echo $CURRENTDIRURL ?>assets/bds-eligible-students-list-2022-23.pdf">
                2022-23 (pdf download)
            </a>
        </div>
        <div>
            <h2>MDS ELIGIBLE STUDENTS LIST</h2>
            <a href="<?php echo $CURRENTDIRURL ?>assets/mds-eligible-students-list-2021-22.pdf">
                2021-22 (pdf download)
            </a>
            <a href="<?php echo $CURRENTDIRURL ?>assets/mds-eligible-students-list-2022-23.pdf">
                2022-23 (pdf download)
            </a>
        </div>
        <div>
            <h2>PG ADMISSIONS</h2>
            <a href="<?php echo $CURRENTDIRURL ?>assets/pg-admission-2023-24.pdf">
                2023-24 (pdf download)
            </a>
        </div>
    </div>

    <?php include($ROOT . "includes/_footer.php"); ?>

</body>
</html>