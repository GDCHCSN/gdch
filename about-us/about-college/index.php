<?php

$ROOT = "../../";
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "about-us/about-college/";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Dental College & Hospital Chhatrapati Sambhajinagar</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $ROOTURL ?>public/assets/gdclogo1.png">

    <script src="<?php echo $ROOTURL ?>public/js/_navbar.js" defer></script>
    <script src="<?php echo $ROOTURL ?>public/js/departments/departmentMain.js" defer></script>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/global.css">
    </link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_navbar.css">
    </link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_footer.css">
    </link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/about-us/about-us.css">
    </link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/departments/departmentStyles.css">
    </link>
</head>

<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <div class="pageBanner">
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg" loading="lazy" />
        <h1>
            ABOUT COLLEGE
        </h1>

    </div>
    <div>
        <div class="main">
            <div class="about-us-container">
                <h3 class="college-title">Government Dental College & Hospital Chhatrapati Sambhajinagar</h3>
                <img class="about-img" src="<?php echo $ROOTURL ?>assets/Carousel8.jpg" alt="" style="border-radius:10px; width:95%;" height="500" loading="lazy"></img>
                <p class="college-desc">
                    Govt Dental College and Hospital, Chhatrapati Sambhajinagar is one of the reputed Govt. Dental Colleges in Maharashtra. The college is popularly known as GDCH Chhatrapati Sambhajinagar and was founded in the year 1982-83. The college was established to fortify the weakest section of the Nation, i.e. Rural population. It was started to serve students with the best dental care and Oral and Maxillofacial Surgery. The college is affiliated with the Maharashtra University of Health Sciences, Nashik, and is approved by the Dental Council of India, Govt. of India.
                </p>


                <h3 class="dept-title">Departments</h3>

                <div class="departmentsList">
                    <ul>
                        <li>Oral Medicine and Radiology</li>
                        <li>Oral and Maxillofacial Surgery</li>
                        <li>Oral and Maxillofacial Pathology & Oral Microbiology</li>
                        <li>Periodontology</li>
                        <li>Community Dentistry </li>


                    </ul>
                    <ul>
                        <li>Conservative Dentistry and Endodontics</li>
                        <li>Pediatric and Preventive Dentistry</li>
                        <li>Orthodontics and Dentofacial Orthopedics</li>
                        <li>Prosthodontics</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="opdMaindiv">
    <div class="facultyContainer marginTop">
        <div class="facultyToggleBtn">
            <img class="plusIcon" src="<?php echo $ROOTURL ?>public/assets/plus-icon.svg" loading="lazy" />
            <img class="minusIcon" src="<?php echo $ROOTURL ?>public/assets/minus-icon.svg" loading="lazy" />
            <h2>College OPD</h2>
        </div>

        <div class="accordionContent">

            <!-- College OPD Data -->
            <div class="opdTableBox">
                <table>
                    <tr>
                        <th>Year</th>
                        <th>Month</th>
                        <th>College OPD</th>
                    </tr>
                    <tr>
                        <td>2026</td>
                        <td>April</td>
                        <td>6756</td>
                    </tr>
                </table>
            </div>

            <!-- Inner IPD Tab -->
            <div class="subOpdContainer">
                <div class="facultyToggleBtn">
                    <img class="plusIcon" src="<?php echo $ROOTURL ?>public/assets/plus-icon.svg" loading="lazy" />
                    <img class="minusIcon" src="<?php echo $ROOTURL ?>public/assets/minus-icon.svg" loading="lazy" />
                    <h3>IPD</h3>
                </div>

                <div class="subOpdContent">
                    <div class="opdTableBox">
                        <table>
                            <tr>
                                <th>Year</th>
                                <th>Month</th>
                                <th>Department</th>
                                <th>Major Case</th>
                                <th>Implants</th>
                                <th>Total</th>
                                <th>IPD No.</th>
                            </tr>
                            <tr>
                                <td>2026</td>
                                <td>April</td>
                                <td>Oral Surgery</td>
                                <td>14</td>
                                <td>30</td>
                                <td>44</td>
                                <td>16</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Inner PDF Tab -->
            <div class="subOpdContainer">
                <div class="facultyToggleBtn">
                    <img class="plusIcon" src="<?php echo $ROOTURL ?>public/assets/plus-icon.svg" loading="lazy" />
                    <img class="minusIcon" src="<?php echo $ROOTURL ?>public/assets/minus-icon.svg" loading="lazy" />
                    <h3>OFSAMS</h3>
                </div>

                <div class="subOpdContent">
                    <ul class="pdfList">
                        <li>
                            <span class="pdfMonth">April</span>
                            <span class="pdfYear">2026</span>

                            <!-- <a href="<?php echo $CURRENTDIRURL ?>assets/" target="_blank" rel="noopener noreferrer">
                                PG Attendance Details
                            </a>

                            <a href="<?php echo $CURRENTDIRURL ?>assets/" target="_blank" rel="noopener noreferrer">
                                Staff Attendance Details
                            </a> -->
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>


    <?php include($ROOT . "includes/_footer.php"); ?>

</body>

</html>