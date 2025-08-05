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
            DEPARTMENT OF PROSTHODONTICS
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
                    प्रथम तपासणी केल्यानंतर पहिल्या मापाची तारीख (प्रायमरी इंप्रेशन)
                </td>
                <td>
                    १. रुग्ण पत्रिका
                    २. अनुक्रमांक
                    ३. ज्येष्ठ नागरिक प्रमाणपत्र
                    ४. बीपीएल कार्ड असल्यास
                    ५. शुल्क भरणा पावती
                    ६. उपचार तारीख पत्रिका
                </td>
                <td>
                    अंदाजे १५ ते २० दिवसानंतर
                </td>
                <td>
                    दंत शल्य चिकित्सक सहाय्यक प्राध्यापक सहयोगी प्राध्यापक
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
                    दुसऱ्या मापाची तारीख (फायनल इंम्प्रेशन)
                </td>
                <td>-</td>
                <td>
                    अंदाजे ४ ते ८ दिवसानंतर
                </td>
                <td>
                    दंत शल्य चिकित्सक सहाय्यक प्राध्यापक सहयोगी प्राध्यापक
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
                    तिसऱ्या मापाची तारीख (जॉ रिलेशन)
                </td>
                <td>
                    -
                </td>
                <td>
                    अंदाजे ८ ते १५ दिवसानंतर
                </td>
                <td>
                    दंत शल्य चिकित्सक सहाय्यक प्राध्यापक सहयोगी प्राध्यापक
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
                    चौथ्या मापाची तारीख (ट्रायल)
                </td>
                <td>
                    -
                </td>
                <td>
                    अंदाजे ८ ते १५ दिवसानंतर
                </td>
                <td>
                    दंत शल्य चिकित्सक सहाय्यक प्राध्यापक सहयोगी प्राध्यापक
                </td>
                <td>
                    प्राध्यापक व विभाग प्रमुख
                </td>
            </tr>
            <tr>
                <td>
                    ५.
                </td>
                <td>
                    पाचव्या मापाची तारीख (डेंचर डिलीव्हरी)
                </td>
                <td>
                    -
                </td>
                <td>
                    अंदाजे ८ ते १५ दिवसानंतर
                </td>
                <td>
                    दंत शल्य चिकित्सक सहाय्यक प्राध्यापक सहयोगी प्राध्यापक
                </td>
                <td>
                    प्राध्यापक व विभाग प्रमुख
                </td>
            </tr>
        </table>
    </div>


    <?php include($ROOT . "includes/_footer.php"); ?>

</body>

</html>