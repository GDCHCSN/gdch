<?php

$ROOT = "../";
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "/services";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Dental College & Hospital Chhatrapati Sambhajinagar</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $ROOTURL ?>public/assets/gdclogo1.png">

    <script src="<?php echo $ROOTURL ?>public/js/_navbar.js" defer></script>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/global.css">
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_navbar.css">
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_footer.css">
    <style>
        .contentContainer {
            overflow-x: scroll;
        }

        table,
        th,
        td {
            border: 1px solid var(--primary-color);
            border-collapse: collapse;
            padding: 0.5rem;
            vertical-align: top;
        }
    </style>
</head>

<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <div class="pageBanner">
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg" loading="lazy" />
        <h1>
            DEPARTMENT OF ORAL AND MAXILLOFACIAL PATHOLOGY & ORAL MICROBIOLOGY
        </h1>
    </div>
    <div class="contentContainer">
        <table>
            <tr>
                <th>
                    अ. क्र
                </th>
                <th>
                    सेवेचे नाव
                </th>
                <th>
                    आवश्यक कागदपत्रे,
                </th>
                <th>
                    सेवेसाठी किती कालावधी लागेल (दिवस)
                </th>
                <th>
                    जबाबदार अधिकारी
                </th>
                <th>
                    पर्यवेक्षक अधिकारी
                </th>
            </tr>
            <tr>
                <td>
                    १.
                </td>
                <td>
                    नियमीत तपासणी रक्त तपासणी, ब्लिडींग टाईम, क्लॉटिंग टाईम हिमोग्राम
                </td>
                <td>
                    रुग्ण पत्रिका, व तपासणीचे विनंतीपत्र शुल्क भरणा पावती (लागु असल्यास)
                </td>
                <td>
                    १ दिवस (त्याच दिवशी)
                </td>
                <td>
                    सहाय्यक प्राध्यापक सहयोगी प्राध्यापक
                </td>
                <td>
                    प्राध्यापक व विभाग प्रमुख
                </td>
            </tr>
            <tr>
                <td>
                    २.
                </td>
                <td>
                    बायोप्सी प्रोसेसींग रिपोटींग
                    अ) सॉप्ट टिश्यु बायोप्सी
                    आ) हार्ड टिश्यु बायोप्सी आवश्यक्ते नुसार अती विशेष तपासण्या
                </td>
                <td>
                    -
                </td>
                <td>
                    ५-६ दिवस
                </td>
                <td>
                    -
                </td>
                <td>
                    -
                </td>
            </tr>
            <tr>
                <td>
                    ३.
                </td>
                <td>
                    स्पेशल स्टेनींग मायक्रोबियल स्टेनिंग इम्युनो हिस्टो केमिस्ट्री
                </td>
                <td>
                    -
                </td>
                <td>
                    २ दिवस ५-६ जास्तीचे दिवस
                </td>
                <td>
                    -
                </td>
                <td>
                    -
                </td>
            </tr>
        </table>
    </div>


    <?php include($ROOT . "includes/_footer.php"); ?>

</body>

</html>