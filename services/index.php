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
        .department-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(5, 1fr);
            width: 100%;
            border: 2px solid var(--primary-color);
            border-radius: 1rem;
            overflow: hidden;
        }

        .department-container li {
            padding: 1rem;
            border: 1px solid var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .department-container li:nth-child(odd) {
            border-left: none;
        }

        .department-container li:nth-child(even) {
            border-right: none;
        }

        .department-container li:first-child,
        .department-container li:nth-child(2) {
            border-top: none;
        }

        .department-container li:last-child,
        .department-container li:nth-last-child(2) {
            border-bottom: none;
        }

        .contentContainer a {
            font-size: 1rem;
            font-weight: bold;
            color: var(--primary-color);
            text-transform: uppercase;
            text-align: center;
            display: block;
            width: 100%;
        }

        @media screen and (max-width: 768px) {
            .department-container {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(9, 1fr);
            }

            .department-container li {
                border-left: none;
                border-right: none;
            }

            .department-container li:first-child {
                border-top: none;
            }

            .department-container li:last-child {
                border-bottom: none;
            }

            .contentContainer a {
                font-size: 0.8rem;
                padding: 0.5rem;
            }
        }
    </style>
</head>

<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <div class="pageBanner">
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg" loading="lazy" />
        <h1>
            SERVICES
        </h1>
    </div>
    <div style="margin: 2rem;">
        <p>महाराष्ट्र राज्यातील नागरिकांना शासनामार्फत व शासनाचे अधिनस्त सर्व सार्वजनिक प्राधिकरणांमार्फत दिल्या जाणाऱ्या अधिसूचित सेवा पारदर्शक, गतिमान व निश्चित कालमर्यादेत देण्यासाठी महाराष्ट्र लोकसेवा हक्क अधिनियम 2015 पारित करण्यात आला असून तो दि. 28.04.2015 पासून अमलात आहे. नागरिकांना सुलभ व कालमर्यादेत सेवा मिळण्यात हे त्याचे उद्दिष्ट आहे.<br><br>
        वरीलप्रमाणे अधिसूचित सेवा नागरिकांना दिल्या जात आहेत किंवा नाही यावर देखरेख, समन्वय, नियंत्रण ठेवण्यासाठी व या संदर्भात सुधारणा सुचविण्यासाठी उपरोक्त कायद्यान्वये महाराष्ट्र राज्य सेवा हक्क आयोग गठीत करण्यात आला असून आयोगामध्ये एक मुख्य आयुक्त व सहा आयुक्त कार्यरत आहेत. आयोगाचे मुख्यालय नवीन प्रशासकीय भवन, मंत्रालयासमोर, मुंबई येथे असून सहा विभागातील मुख्यालयाच्या ठिकाणी आयुक्तांची कार्यालये आहेत.<br><br>
        पात्र नागरिकांना विहित वेळेत सेवा न मिळाल्यास अथवा नियमोचित कारणाशिवाय ती नाकारल्यास अशा निर्णयाविरुद्ध संबंधितांवर वरीष्ठकडे प्रथम व द्वितीय अपिल करता येते व तरीही समाधान न झाल्यास आयोगाकडे तृतीय अपिल करता येते. कसूरदार अधिकाऱ्यास प्रतिप्रकरण रु. 5000/- पर्यंत दंड होऊ शकतो. या विभागामार्फत दिल्या जाणाऱ्या अधिसूचित सेवांची यादी सोबतच्या प्रपत्रात दिली आहे.<br><br>
        महाराष्ट्र राज्य सेवा हक्क आयोगाची वेबसाईट खालीलप्रमाणे आहे :- <a href="https://aaplesarkar.mahaonline.gov.in" target="_blank">https://aaplesarkar.mahaonline.gov.in</a></p>
        <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; margin: 2rem 0;">
            <a href="<?php echo $ROOTURL ?>public/assets/RTS_act_2015.pdf" target="_blank" class="pdf-btn" style="flex:1; min-width:220px; text-align:center; background: var(--light-primary-color); color:#fff; padding:1rem; border-radius:8px; text-decoration:none; font-weight:bold;">महाराष्ट्र लोकसेवा हक्क अधिनियम, २०१५</a>
            <a href="<?php echo $ROOTURL ?>public/assets/RTS_Rules_Gazette.pdf" target="_blank" class="pdf-btn" style="flex:1; min-width:220px; text-align:center; background: var(--light-primary-color); color:#fff; padding:1rem; border-radius:8px; text-decoration:none; font-weight:bold;">महाराष्ट्र लोकसेवा हक्क अधिनियम राजपत्र</a>
            <a href="https://aaplesarkar.mahaonline.gov.in/en/CommonForm/ViewAllServices" target="_blank" class="pdf-btn" style="flex:1; min-width:220px; text-align:center; background: var(--light-primary-color); color:#fff; padding:1rem; border-radius:8px; text-decoration:none; font-weight:bold;">लोकसेवा हक्क कायद्यानुसार अधिसूचित सेवांची यादी</a>
            <a href="https://aaplesarkar.mahaonline.gov.in/en/CommonForm/SewaKendraDetails" target="_blank" class="pdf-btn" style="flex:1; min-width:220px; text-align:center; background: var(--light-primary-color); color:#fff; padding:1rem; border-radius:8px; text-decoration:none; font-weight:bold;">आपले सरकार सेवा केंद्रांची यादी</a>
        </div>
    </div>
    <button id="toggleDepartments" style="display:block; margin:2rem auto 1rem auto; padding:0.75rem 2rem; border: solid var(--primary-color) 2px; color:var(--primary-color);  border-radius:10px; font-size:1.1rem; font-weight:bold; cursor:pointer;">View Departments</button>
    <div id="departmentsList" class="contentContainer department-container" style="display:none;">
        <li><a href="<?php echo $ROOTURL ?>services/oral-medicine-and-radiology.php">Oral Medicine & Radiology</a></li>
        <li><a href="<?php echo $ROOTURL ?>services/oral-and-maxillofacial-surgery.php">Oral And Maxillofacial Surgery</a></li>
        <li><a href="<?php echo $ROOTURL ?>services/oral-and-maxillofacial-pathology-and-oral-microbiology.php">Oral And Maxillofacial Pathology & Oral Microbiology</a></li>
        <li><a href="<?php echo $ROOTURL ?>services/periodontology.php">Periodontology</a></li>
        <li><a href="<?php echo $ROOTURL ?>services/community-dentistry.php">Community Dentistry</a></li>
        <li><a href="<?php echo $ROOTURL ?>services/conservative-dentistry-and-endodontics.php">Conservative Dentistry And Endodontics</a></li>
        <li><a href="<?php echo $ROOTURL ?>services/pediatric-and-preventive-dentistry.php">Pediatric And Preventive Dentistry</a></li>
        <li><a href="<?php echo $ROOTURL ?>services/orthodontics-and-dentofacial-orthopedics.php">Orthodontics And Dentofacial Orthopedics</a></li>
        <li><a href="<?php echo $ROOTURL ?>services/prosthodontics.php">Prosthodontics</a></li>
    </div>
    <script>
        document.getElementById('toggleDepartments').addEventListener('click', function() {
            var deptList = document.getElementById('departmentsList');
            deptList.style.display = deptList.style.display === 'none' ? 'grid' : 'none';
        });
    </script>

    <?php include($ROOT . "includes/_footer.php"); ?>

</body>

</html>