<?php 

$ROOT = "../../"; 
include($ROOT . "includes/_init.php");
$CURRENTDIRURL = $ROOTURL . "student-portal/mentor-mentee-and-buddy-system/";

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
    <link rel="stylesheet" href="<?php echo $CURRENTDIRURL ?>styles.css"></link>
</head>
<body>

    <?php include($ROOT . "includes/_navbar.php"); ?>

    <div class="pageBanner">
        <img src="<?php echo $ROOTURL ?>public/assets/pageBanner.jpg" loading="lazy" />
        <h1>
            MENTOR MENTEE & BUDDY SYSTEM
        </h1>
    </div>
    <div class="contentContainer">
        <div>
            <p class="mentorMenteeIntro">
                Government Dental College & Hospital, Chh. Sambhajinagar implements a Mentor-Mentee system alongside a Buddy system especially for the undergraduate students. 
            </p>
        </div>
        <div>
            <h2>mentor mentee</h2>
            <p>
                Mentoring is required for students to achieve emotional stability and to promote clarity in thinking and decision-making for overall programme. The mentor mentee system in our college fosters meaningful connection between the experienced staff members and newcomer undergraduate students. Each teacher is assigned around 10 students. They meet at regular intervals, approximately twice or thrice in a year, to discuss, clarify and share various problems which may be personal, domestic, academic etc. Mentors offer guidance, support, and advice to mentees, helping them navigate academic challenges, career decisions, and personal development. This helps the mentees benefit from the wisdom and expertise of their mentors which help in reduction of their stress, while mentors find fulfilment in sharing their knowledge and nurturing the growth of future leaders. The students are encouraged to utilize their full potential and are provided with feeling of safety and belonging in the institute. The mentor mentee system also helps in preventing ragging in the institute as the staff is easily accessible for personal interactions for the newcomers, which creates a fear among the undergraduate students to conduct such malpractices.
            </p>
            <a href="<?php echo $CURRENTDIRURL ?>assets/mentor-list.pdf" target="_blank">Mentor List 2023-24 (pdf download)</a>
            <a href="<?php echo $CURRENTDIRURL ?>assets/mentor-mentee-form.pdf" target="_blank">Mentor Mentee Form (pdf download)</a>
        </div>
        <div>
            <h2>buddy system</h2>
            <p>
                Buddy system is also implemented at college, incoming first year BDS students are paired with their immediate seniors, i.e, 2nd to 3rd year BDS students. One newcomer is allotted to each senior undergraduate student. Buddies i.e, their seniors,  offer practical advice, support, and companionship to newcomers, helping them navigate academic and social challenges. This system fosters a sense of belonging, reduces feelings of isolation, and promotes a supportive campus community where students can thrive together. As this system improves the bonding between the junior and senior students, the possibility of ragging reduces dramatically. 
            </p>
            <a href="<?php echo $CURRENTDIRURL ?>assets/buddy-list.pdf" target="_blank">Buddy List 2023-24 (pdf download)</a>
        </div>
    </div>

    <?php include($ROOT . "includes/_footer.php"); ?>

</body>
</html>