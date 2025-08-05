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
            DEPARTMENT OF PERIODONTOLOGY
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
                    बाह्य रुग्ण तपासणी रुग्णपत्रिका व तात्कालीक (Emergency) उपचार
                </td>
                रुग्णपत्रिका
                </td>
                <td>
                    विना विलंब
                </td>
                <td>
                    दंत शल्य चिकित्सक
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
                    दात स्वच्छ करणे (स्केलिंग)
                </td>
                <td>
                    रुह्मणपत्रिका शुल्क भरणा पावती (लागु असल्यास)
                </td>
                <td>
                    २ ते १० दिवस
                </td>
                <td>
                    दंत शल्य चिकित्सक सहाय्यक प्राध्यापक
                </td>
                <td>
                    प्राध्यापक व विभाग प्रमुख
                </td>
            </tr>
            <tr>
                <td>
                    ३.
                </td>
                <td>
                    हिरड्धांच्या विविध शस्त्रक्रिया (आवश्यक्तेनुसार)
                </td>
                <td>
                    रुग्णपत्रिका शुल्क भरणा पावती (लागु असल्यास)
                </td>
                <td>
                    दात स्वच्छ करून झाल्यानंतर ४ते आठवड्याच्या कालावधीनंतर
                </td>
                <td>
                    दंत शल्य चिकित्सक सहाय्यक प्राध्यापक
                </td>
                <td>
                    प्राध्यापक व विभाग प्रमुख
                </td>
            </tr>
            <tr>
                <td>
                    ४.
                </td>
                <td>
                    इंग्लांट रोपण
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
        </table>
    </div>


    <?php include($ROOT . "includes/_footer.php"); ?>

</body>

</html>