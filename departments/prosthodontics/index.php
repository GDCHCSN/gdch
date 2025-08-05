<?php

$ROOT = "../../";
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "departments/prosthodontics/";

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
    <script src="<?php echo $ROOTURL ?>public/js/modal.js" defer></script>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/global.css">
    </link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_navbar.css">
    </link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/_footer.css">
    </link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/departments/galleryStyles.css">
    </link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/departments/departmentStyles.css">
    </link>
    <link rel="stylesheet" href="<?php echo $ROOTURL ?>public/css/modal.css"></link>
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
        <div>
            <h2>Introduction</h2>
            <p>
                This is the 1st branch of dentistry. This is a vast department with four branches in it viz.., Removable prosthodontics , Fixed prosthodontics ,Maxillofacial prosthodontics and Implants. Daily 80-85 patients are treated for complete dentures, removable and fixed partial dentures. Around 35-40 Implants are placed every month and 10-15 maxillofacial prosthesis are delivered.
            </p>
            <p>
                We have post graduation in the department since 1995 and around 60 postgraduate students are passed out. We have fellowship in oral implantology and the department is MUHS Ph.D approved center. We have state-of-art facilities like VRF system in pre-clinical laboratory, well equipped with all the latest instruments and machines in ceramic laboratory. We also have CAD-CAM machine for the welfare of postgraduate students and patients. The department is actively involved in the research activities, copyrights and have frequent research publications in various international and national scientific journals.
            </p>
        </div>

        <div class="largeContentCard">
            <h2 class="title">
                Vision
            </h2>
            <p>
                Department of Prosthodontics aims at imparting the dental students with the ability to provide excellent treatment, effectively and efficiently with knowledge and skill along with maintaining high ethical standards, empathy, and care while handling any patient needing prosthodontic rehabilitation.
            </p>
            <P>
                Our all inclusive educational programmes envision to develop and nurture our students to grow into highly talented professionals, ready to take up their responsibility towards the society at large by providing them with a plethora of innovations, concepts based on evidence based dentistry and a clear understanding of the basics of prosthodontics.
            </P>
        </div>

        <div class="largeContentCard">
            <h2 class="title">
                Mission
            </h2>
            <p>
                Our mission is to equip our students with sound clinical knowledge and skill to develop individual into dentists who are not only professionally trained, but also high in moral and ethical values, imparting profound integrity character to every endeavour, not only in our institution but in the society at large.
            </p>
            <P>
                We aim to train specialists in prosthodontics, who are skilled clinicians with a strong research background, with continued advancement of knowledge in prosthodontics through integration of basic and advanced sciences with clinical research by our undergraduate and postgraduate students and by our faculty and staff.
            </P>
        </div>

        <div class="largeContentCard">
            <h3>UG CURRICULUM</h3>

            <a style="font-weight:600;" class="list_inside" href="<?php echo $CURRENTDIRURL ?>assets/syllabus/UG CURRICULUM.pdf" target="_blank" type="application/pdf">Syllabus</a>

            <h3>PG CURRICULUM</h3>

            <a style="font-weight:600;" class="list_inside" href="<?php echo $CURRENTDIRURL ?>assets/syllabus/PG CURRICULUM PART 1.pdf" target="_blank" type="application/pdf">PG Curriculum Part 1</a>
            <a style="font-weight:600;" class="list_inside" href="<?php echo $CURRENTDIRURL ?>assets/syllabus/PG CURRICULUM PART 2.pdf" target="_blank" type="application/pdf">PG Curriculum Part 2</a>
        </div>

        <div class="largeContentCard">
            <h2>PATIENTS SERVICE</h2>
            <ol>
                <li>Removable prosthesis
                    <ul class="list_inside">
                        <li>Complete dentures</li>
                        <li>Partial dentures</li>
                        <li>Fexilble dentures</li>
                    </ul>
                </li>
                <li>Fixed prosthesis
                    <ul class="list_inside">
                        <li>Crowns and bridges</li>
                    </ul>
                </li>
                <li>Implant Prosthesis</li>
                <li>Maxillofacial prosthesis
                    <ul class="list_inside">
                        <li>Obturators</li>
                        <li>Ear prosthesis</li>
                        <li>Eye prosthesis</li>
                        <li>Finger prosthesis</li>
                        <li>Nose prosthesis</li>
                    </ul>
                </li>
            </ol>
        </div>

        <div class="facultyContainer">
            <div class="facultyToggleBtn">
                <img class="plusIcon" src="<?php echo $ROOTURL ?>public/assets/plus-icon.svg" loading="lazy" />
                <img class="minusIcon" src="<?php echo $ROOTURL ?>public/assets/minus-icon.svg" loading="lazy" />
                <h2>Our Faculty</h2>
            </div>
            <div class="facultyGallery">
                <div class="facultyCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/Kishor-Mahale/Photo.jpg" alt="faculty" width="200" height="200" loading="lazy" />
                    <a href="<?php echo $CURRENTDIRURL ?>assets/Kishor-Mahale/Kishor-Mahale.pdf" type="application/pdf" target="_blank">
                        Dr. Kishor Madhukar Mahale
                    </a>
                    <p>Professor and Head of Department, Dept. of Prosthodontics</p>
                </div>
                <div class="facultyCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/Smita-Khalikar/Photo.jpg" alt="faculty" width="200" height="200" loading="lazy" />
                    <a href="<?php echo $CURRENTDIRURL ?>assets/Smita-Khalikar/Smita-Khalikar.pdf" type="application/pdf" target="_blank">
                        Dr. Smita Arun Khalikar
                    </a>
                    <p>Profesor, Dept. of Prosthodontics</p>
                </div>
                <div class="facultyCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/Vilas-Rajguru/Photo.jpg" alt="faculty" width="200" height="200" loading="lazy" />
                    <a href="<?php echo $CURRENTDIRURL ?>assets/Vilas-Rajguru/Vilas-Rajguru.pdf" type="application/pdf" target="_blank">
                        Dr. Vilas L. Rajguru
                    </a>
                    <p>Associate Profesor, Dept. of Prosthodontics</p>
                </div>
                <div class="facultyCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/Sonali-Mahajan/Photo.jpg" alt="faculty" width="200" height="200" loading="lazy" />
                    <a href="<?php echo $CURRENTDIRURL ?>assets/Sonali-Mahajan/Sonali-Mahajan.pdf" type="application/pdf" target="_blank">
                        Dr. Sonali Vishal Mahajan
                    </a>
                    <p>Associate Profesor, Dept. of Prosthodontics</p>
                </div>
                <div class="facultyCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/Ulhas-Tandale/Photo.jpg" alt="faculty" width="200" height="200" loading="lazy" />
                    <a href="<?php echo $CURRENTDIRURL ?>assets/Ulhas-Tandale/Ulhas-Tandale.pdf" type="application/pdf" target="_blank">
                        Dr. Ulhas Eknathrao Tandale
                    </a>
                    <p>Associate Profesor, Dept. of Prosthodontics</p>
                </div>

                <div class="facultyCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/Aasmita-Kabade/Photo.jpg" alt="faculty" width="200" height="200" loading="lazy" />
                    <a href="#" type="application/pdf">
                        Dr. Aasmita Kabade
                    </a>
                    <p>Assistant Profesor, Dept. of Prosthodontics</p>
                </div>
                <div class="facultyCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/Diksha-Dhage/Photo.jpg" alt="faculty" width="200" height="200" loading="lazy" />
                    <a href="#" type="application/pdf">
                        Dr. Diksha Dhage
                    </a>
                    <p>Assistant Profesor, Dept. of Prosthodontics</p>
                </div>
                <div class="facultyCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/Nikhil-Chawala/Photo.jpg" alt="faculty" width="200" height="200" loading="lazy" />
                    <a href="#" type="application/pdf">
                        Dr. Nikhil Chawala
                    </a>
                    <p>Dental Surgeon, Dept. of Prosthodontics</p>
                </div>
                <div class="facultyCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/Priyanka-Pawar/Photo.jpg" alt="faculty" width="200" height="200" loading="lazy" />
                    <a href="#" type="application/pdf">
                        Dr. Priyankak Pawar
                    </a>
                    <p>Assistant Profesor, Dept. of Prosthodontics</p>
                </div>
                <div class="facultyCard">
                    <img src="<?php echo $CURRENTDIRURL ?>assets/Sanjivani-Mamilwad/Photo.jpg" alt="faculty" width="200" height="200" loading="lazy" />
                    <a href="#" type="application/pdf">
                        Dr. Sanjivani Mamilwad
                    </a>
                    <p>Assistant Profesor, Dept. of Prosthodontics</p>
                </div>


                <div class="facultyCard">
                    <img src="<?php echo $ROOTURL ?>public/assets/doctor.png" alt="faculty" width="200" height="200" loading="lazy" />
                    <a href="#" type="application/pdf">
                        Dr. Sharda Shelke
                    </a>
                    <p>Assistant Profesor, Dept. of Prosthodontics</p>
                </div>
            </div>
        </div>

        <div>
            <h2>Gallery</h2>
            <div class="galleryCardContainer">
                <div class="galleryCard">
                    <img src="<?php echo $CURRENTDIRURL ?>/gallery/assets/ProsthodonticsServicesBoard.jpeg" alt="Service Board" loading="lazy" />
                </div>
            </div>
        </div>
    </div>

    </div>


    <?php include($ROOT . "includes/_footer.php"); ?>

</body>

</html>