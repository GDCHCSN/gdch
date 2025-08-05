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
            DEPARTMENT OF ORAL AND MAXILLOFACIAL SURGERY
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
                    आवश्यक कागदपत्रे
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
                    सामान्य रुग्णाचा दात काढणे
                </td>
                <td>
                    रुग्ण पत्रिका, शारिरीक सक्षमता, शुल्क भरणा पावती (लागु असल्यास)
                </td>
                <td>
                    त्याच / दुसऱ्या दिवशी
                </td>
                <td>
                    दंतशल्यचिकित्सक सहाय्यक प्राध्यापक सहयोगी प्राध्यापक
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
                    वैद्यकीय उपचार अन्य रोगग्रस्त रुग्णांचा दात काढणे
                </td>
                <td>
                    रुग्णपत्रिका, फिजीशियनचे संमतीपत्र नंतर विभागातील भुलतज्ञाद्वारे तपासणी तपासणी केल्यानंतर रुग्णपात्र असल्यास
                </td>
                <td>
                    बुधवार गुरुवार शुक्रवार
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
                    लघुशस्त्रक्रिया (स्थानिक भूल देवून)
                </td>
                <td>
                    रुग्णपत्रिका, रक्तचाचणी अन्य जिवरसायनीक चाचण्या, फिजीशियनचे संमतीपत्र नंतर विभागातील भुलतज्ञाद्वारे तपासणी केल्यानंतर रुग्ण पात्र असल्यास
                </td>
                <td>
                    रुग्ण पात्र असल्यास ७ दिवसात
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
                    ४.
                </td>
                <td>
                    शल्यक्रिया (सार्च देहीक बधिरीकरणा खाली
                </td>
                <td>
                    रुग्णपत्रिका, रक्तचाचणी अन्य जिवरसायनीक चाचण्या, फिजीशियनचे संमतीपत्र नंतर विभागातील भुलतज्ञाद्वारे तपासणी केल्यानंतर रुग्ण पात्र असल्यास
                </td>
                <td>
                    रुग्ण पात्र असल्यास ७ दिवसात
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
                    ५.
                </td>
                <td>
                    अपघातग्रस्त रुग्णांवरील अपघात विभागात उपचार
                </td>
                <td>
                    रुग्णपत्रिका, शुल्क भरणा पावती (लागु असल्यास)
                </td>
                <td>
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