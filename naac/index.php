<?php 

$ROOT = "../"; 
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "";

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
</head>
<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <?php include($ROOT . "includes/_maintenance.php"); ?>

    <?php include($ROOT . "includes/_footer.php"); ?>

</body>
</html>