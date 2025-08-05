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
            COMMUNITY DENTISTRY
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
                    किड रोवण्यासाठी फ्लोराईड उपचार पध्दत
                </td>
                <td>
                    रुणपत्रिका शुल्क भरणा पावती (लागू असल्यास)
                </td>
                <td>
                    त्याच दिवशी २-३ कार्यरत दिवस
                </td>
                <td>
                    दंतशल्यचिकित्सक सहाय्यकाध्यापक
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
                    अॅटोमॅटिक पध्दतीने सिमेंट भरणे
                </td>
                <td>
                    रुणपत्रिका शुल्क भरणा पावती (लागू असल्यास)
                </td>
                <td>
                    त्याच दिवशी २-३ कार्यरत दिवस
                </td>
                <td>
                    दंतशल्यचिकित्सक सहाय्यक प्राध्यापक
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
                    पिट अॅण्ड फिशर सिलॅट उपचार
                </td>
                <td>
                    रुणपत्रिका शुल्क भरणा पावती (लागू असल्यास)
                </td>
                <td>
                    त्याच दिवशी २-३ कार्यरत दिवस
                </td>
                <td>
                    दंतशल्यचिकित्सक सहाय्यक प्राध्यापक
                </td>
                <td>
                    प्राध्यापक विभाग प्रमुख
                </td>
            </tr>
            <tr>
                <td>
                    ४.
                </td>
                <td>
                    आहार व तंबाखु समुपदेशन
                </td>
                <td>
                    रुणपत्रिका शुल्क भरणा पावती (लागू असल्यास)
                </td>
                <td>
                    त्याच दिवशी २-३ कार्यरत दिवस
                </td>
                <td>
                    दंतशल्यचिकित्सक सहाय्यक प्राध्यापक
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
                    दंत शिबीर
                </td>
                <td>
                    शिबीरांसाठी अर्ज
                </td>
                <td>
                    विभागांत अर्ज स्विकारल्यास ५ ते ८ कार्यरत दिवस
                </td>
                <td>
                    दंतशल्यचिकित्सक सहाय्यक प्राध्यापक
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