<?php

$ROOT = "../../";

include($ROOT . "includes/_init.php");

$CURRENTDIRURL =
    $ROOTURL . "muhs-mandate/clinical-dashboard/";


// =====================================================
// DATA FILE
// =====================================================

$dataFile = __DIR__ . "/data/daily-data.json";


// =====================================================
// LOAD DAILY DATA
// =====================================================

$dailyData = [];

if (file_exists($dataFile)) {

    $jsonData = file_get_contents($dataFile);

    $decodedData = json_decode($jsonData, true);

    if (is_array($decodedData)) {

        $dailyData = $decodedData;

    }

}


// =====================================================
// DATE SELECTION
// =====================================================

// If a date is selected from URL
if (isset($_GET["date"]) && $_GET["date"] !== "") {

    $selectedDate = $_GET["date"];

} else {

    // Otherwise show latest available date
    if (!empty($dailyData)) {

        $dates = array_keys($dailyData);

        sort($dates);

        $selectedDate = end($dates);

    } else {

        $selectedDate = date("Y-m-d");

    }

}


// =====================================================
// CHECK SELECTED DATE
// =====================================================

if (
    !preg_match(
        "/^\d{4}-\d{2}-\d{2}$/",
        $selectedDate
    )
) {

    $selectedDate = date("Y-m-d");

}


// =====================================================
// GET SELECTED DAY DATA
// =====================================================

$selectedData = $dailyData[$selectedDate] ?? [];


// =====================================================
// VALUES
// =====================================================

$cprTimings =
    $selectedData["cprTimings"] ?? null;

$newPatients =
    $selectedData["newPatients"] ?? null;

$revisitPatients =
    $selectedData["revisitPatients"] ?? null;

$inPatients =
    $selectedData["inPatients"] ?? null;

$communityOutreach =
    $selectedData["communityOutreach"] ?? null;

$mobileDentalClinic =
    $selectedData["mobileDentalClinic"] ?? null;


// =====================================================
// CALCULATIONS
// =====================================================

$totalPatients = null;

if (
    $newPatients !== null &&
    $revisitPatients !== null
) {

    $totalPatients =
        $newPatients + $revisitPatients;

}


// =====================================================
// TOTAL BENEFICIARIES
// =====================================================

$totalBeneficiaries = null;

if (
    $communityOutreach !== null &&
    $mobileDentalClinic !== null
) {

    $totalBeneficiaries =
        $communityOutreach +
        $mobileDentalClinic;

}


// =====================================================
// PERCENTAGES
// =====================================================

$newPercentage = 0;

$revisitPercentage = 0;

if (
    $totalPatients !== null &&
    $totalPatients > 0
) {

    $newPercentage =
        round(
            ($newPatients / $totalPatients) * 100
        );

    $revisitPercentage =
        round(
            ($revisitPatients / $totalPatients) * 100
        );

}


// =====================================================
// BENEFICIARY PERCENTAGES
// =====================================================

$communityPercentage = 0;

$mobilePercentage = 0;

if (
    $totalBeneficiaries !== null &&
    $totalBeneficiaries > 0
) {

    $communityPercentage =
        round(
            ($communityOutreach /
                $totalBeneficiaries) * 100
        );

    $mobilePercentage =
        round(
            ($mobileDentalClinic /
                $totalBeneficiaries) * 100
        );

}


// =====================================================
// FORMAT DATE
// =====================================================

$dateObject =
    DateTime::createFromFormat(
        "Y-m-d",
        $selectedDate
    );

if ($dateObject) {

    $displayDate =
        $dateObject->format("d F Y");

} else {

    $displayDate =
        $selectedDate;

}


// =====================================================
// HELPER FOR EMPTY VALUES
// =====================================================

function dashboardValue($value)
{

    if ($value === null || $value === "") {

        return "—";

    }

    return number_format($value);

}


// =====================================================
// AVAILABLE DATES
// =====================================================

$availableDates =
    array_keys($dailyData);

sort($availableDates);


// =====================================================
// CURRENT DATE POSITION
// =====================================================

$currentDateIndex =
    array_search(
        $selectedDate,
        $availableDates
    );


// Previous date

$previousDate = null;

if (
    $currentDateIndex !== false &&
    $currentDateIndex > 0
) {

    $previousDate =
        $availableDates[
            $currentDateIndex - 1
        ];

}


// Next date

$nextDate = null;

if (
    $currentDateIndex !== false &&
    $currentDateIndex <
        count($availableDates) - 1
) {

    $nextDate =
        $availableDates[
            $currentDateIndex + 1
        ];

}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Daily Digital Clinical Dashboard
    </title>


    <!-- FAVICON -->

    <link
        rel="icon"
        type="image/x-icon"
        href="<?php echo $ROOTURL; ?>public/assets/gdclogo1.png"
    >


    <!-- NAVBAR JS -->

    <script
        src="<?php echo $ROOTURL; ?>public/js/_navbar.js"
        defer>
    </script>


    <!-- GLOBAL CSS -->

    <link
        rel="stylesheet"
        href="<?php echo $ROOTURL; ?>public/css/global.css"
    >


    <!-- NAVBAR CSS -->

    <link
        rel="stylesheet"
        href="<?php echo $ROOTURL; ?>public/css/_navbar.css"
    >


    <!-- DASHBOARD CSS -->

    <link
        rel="stylesheet"
        href="<?php echo $CURRENTDIRURL; ?>css/style.css"
    >


    <!-- FOOTER CSS -->

    <link
        rel="stylesheet"
        href="<?php echo $ROOTURL; ?>public/css/_footer.css"
    >

</head>


<body>


<!-- =====================================================
     NAVBAR
===================================================== -->

<?php include($ROOT . "includes/_navbar.php"); ?>


<!-- =====================================================
     GOVERNMENT COLLEGE PAGE BANNER
===================================================== -->

<div class="pageBanner">

    <img
        src="<?php echo $ROOTURL; ?>public/assets/pageBanner.jpg"
        alt="Government Dental College & Hospital"
        loading="lazy"
    >

    <div class="annexureBannerContent">

        <span>
            MUHS MANDATE
        </span>

        <h1>
            Daily Digital Clinical Dashboard
        </h1>

        <p>
            Daily Clinical Activity & Patient Information
        </p>

    </div>

</div>


<!-- =====================================================
     MAIN DASHBOARD
===================================================== -->

<main class="clinicalDashboard">


    <!-- =================================================
         DATE NAVIGATION
    ================================================== -->

    <section class="dateNavigation">


        <div class="dateNavigationHeader">

            <div>

                <span>
                    DAILY REPORTS
                </span>

                <h2>
                    Clinical Dashboard
                </h2>

            </div>


            <div class="selectedDateBox">

                <span>
                    SELECTED DATE
                </span>

                <strong>
                    <?php echo $displayDate; ?>
                </strong>

            </div>

        </div>


        <!-- DATE TABS -->

        <?php if (!empty($availableDates)): ?>

            <div class="dateTabs">


                <?php foreach (
                    $availableDates as $date
                ): ?>


                    <?php

                    $tabDate =
                        DateTime::createFromFormat(
                            "Y-m-d",
                            $date
                        );

                    $tabDay =
                        $tabDate
                        ? $tabDate->format("d")
                        : "";

                    $tabMonth =
                        $tabDate
                        ? $tabDate->format("M")
                        : "";

                    $activeClass =
                        ($date === $selectedDate)
                        ? "active"
                        : "";

                    ?>


                    <a
                        href="?date=<?php echo urlencode($date); ?>"
                        class="dateTab <?php echo $activeClass; ?>"
                    >

                        <strong>
                            <?php echo $tabDay; ?>
                        </strong>

                        <span>
                            <?php echo $tabMonth; ?>
                        </span>

                    </a>


                <?php endforeach; ?>


            </div>


        <?php else: ?>


            <div class="noReports">

                No daily reports have been added yet.

            </div>


        <?php endif; ?>


        <!-- PREVIOUS / NEXT -->

        <div class="dateNavigationButtons">


            <?php if ($previousDate): ?>

                <a
                    href="?date=<?php
                    echo urlencode($previousDate);
                    ?>"
                    class="dateNavButton"
                >

                    ← Previous Day

                </a>

            <?php endif; ?>


            <?php if ($nextDate): ?>

                <a
                    href="?date=<?php
                    echo urlencode($nextDate);
                    ?>"
                    class="dateNavButton"
                >

                    Next Day →

                </a>

            <?php endif; ?>


        </div>


    </section>


    <!-- =================================================
         SELECTED DATE HEADER
    ================================================== -->

    <div class="dashboardTopBar">

        <div>

            <span class="dashboardEyebrow">
                DAILY CLINICAL REPORT
            </span>

            <h2>
                <?php echo $displayDate; ?>
            </h2>

        </div>


        <div class="reportStatusBadge">

            <span class="statusDot"></span>

            Daily Report

        </div>

    </div>


    <!-- =================================================
         SIX MAIN INDICATORS
    ================================================== -->

    <section class="kpiGrid">


        <!-- CPR -->

        <div class="kpiCard">

            <div class="kpiTop">

                <div class="kpiIcon">
                    01
                </div>

                <span class="kpiTag">
                    TIMING
                </span>

            </div>


            <div class="kpiContent">

                <span>
                    Central Patient Registration
                </span>

                <h3 class="timingValue">

                    <?php
                    echo $cprTimings
                        ?: "—";
                    ?>

                </h3>

                <p>
                    CPR Timings
                </p>

            </div>

        </div>


        <!-- NEW PATIENTS -->

        <div class="kpiCard">

            <div class="kpiTop">

                <div class="kpiIcon">
                    02
                </div>

                <span class="kpiTag">
                    PATIENTS
                </span>

            </div>


            <div class="kpiContent">

                <span>
                    New Patients
                </span>

                <h3>
                    <?php
                    echo dashboardValue(
                        $newPatients
                    );
                    ?>
                </h3>

                <p>
                    Registered at CPR
                </p>

            </div>

        </div>


        <!-- REVISITS -->

        <div class="kpiCard">

            <div class="kpiTop">

                <div class="kpiIcon">
                    03
                </div>

                <span class="kpiTag">
                    PATIENTS
                </span>

            </div>


            <div class="kpiContent">

                <span>
                    Re-visits / Appointments
                </span>

                <h3>
                    <?php
                    echo dashboardValue(
                        $revisitPatients
                    );
                    ?>
                </h3>

                <p>
                    Existing patients
                </p>

            </div>

        </div>


        <!-- TOTAL -->

        <div class="kpiCard featuredCard">

            <div class="kpiTop">

                <div class="kpiIcon">
                    04
                </div>

                <span class="kpiTag">
                    TOTAL
                </span>

            </div>


            <div class="kpiContent">

                <span>
                    Total Patient Footfall
                </span>

                <h3>
                    <?php
                    echo dashboardValue(
                        $totalPatients
                    );
                    ?>
                </h3>

                <p>
                    New patients + Re-visits
                </p>

            </div>

        </div>


        <!-- IN PATIENTS -->

        <div class="kpiCard">

            <div class="kpiTop">

                <div class="kpiIcon">
                    05
                </div>

                <span class="kpiTag">
                    IN-PATIENT
                </span>

            </div>


            <div class="kpiContent">

                <span>
                    In-patients
                </span>

                <h3>
                    <?php
                    echo dashboardValue(
                        $inPatients
                    );
                    ?>
                </h3>

                <p>
                    Daily in-patient count
                </p>

            </div>

        </div>


        <!-- BENEFICIARIES -->

        <div class="kpiCard">

            <div class="kpiTop">

                <div class="kpiIcon">
                    06
                </div>

                <span class="kpiTag">
                    OUTREACH
                </span>

            </div>


            <div class="kpiContent">

                <span>
                    Patient Beneficiaries
                </span>

                <h3>
                    <?php
                    echo dashboardValue(
                        $totalBeneficiaries
                    );
                    ?>
                </h3>

                <p>
                    Outreach + Mobile Dental Clinic
                </p>

            </div>

        </div>


    </section>


    <!-- =================================================
         ANALYTICS
    ================================================== -->

    <section class="analyticsGrid">


        <!-- PATIENT REGISTRATION -->

        <div class="analyticsCard">

            <div class="cardHeader">

                <div>

                    <span>
                        PATIENT ACTIVITY
                    </span>

                    <h3>
                        Patient Registration Overview
                    </h3>

                </div>


                <div class="headerNumber">

                    <?php
                    echo dashboardValue(
                        $totalPatients
                    );
                    ?>

                    <small>
                        Total
                    </small>

                </div>

            </div>


            <div class="patientSplit">


                <!-- NEW -->

                <div class="patientType">

                    <div class="patientTypeTop">

                        <span>
                            New Patients
                        </span>

                        <strong>
                            <?php
                            echo $newPercentage;
                            ?>%
                        </strong>

                    </div>


                    <div class="progressBar">

                        <div
                            class="progressFill newPatients"
                            style="
                                width:
                                <?php
                                echo $newPercentage;
                                ?>%;
                            "
                        ></div>

                    </div>


                    <h4>

                        <?php
                        echo dashboardValue(
                            $newPatients
                        );
                        ?>

                    </h4>

                    <p>
                        Registered at CPR
                    </p>

                </div>


                <!-- REVISITS -->

                <div class="patientType">

                    <div class="patientTypeTop">

                        <span>
                            Re-visits / Appointments
                        </span>

                        <strong>
                            <?php
                            echo $revisitPercentage;
                            ?>%
                        </strong>

                    </div>


                    <div class="progressBar">

                        <div
                            class="progressFill revisitPatients"
                            style="
                                width:
                                <?php
                                echo $revisitPercentage;
                                ?>%;
                            "
                        ></div>

                    </div>


                    <h4>

                        <?php
                        echo dashboardValue(
                            $revisitPatients
                        );
                        ?>

                    </h4>

                    <p>
                        Existing patients
                    </p>

                </div>


            </div>

        </div>


        <!-- BENEFICIARIES -->

        <div class="analyticsCard">

            <div class="cardHeader">

                <div>

                    <span>
                        COMMUNITY SERVICES
                    </span>

                    <h3>
                        Patient Beneficiaries
                    </h3>

                </div>


                <div class="headerNumber">

                    <?php
                    echo dashboardValue(
                        $totalBeneficiaries
                    );
                    ?>

                    <small>
                        Total
                    </small>

                </div>

            </div>


            <div class="beneficiaryList">


                <!-- COMMUNITY -->

                <div class="beneficiaryItem">

                    <div class="beneficiaryIcon">
                        CO
                    </div>


                    <div class="beneficiaryInfo">

                        <span>
                            Community Outreach
                        </span>

                        <strong>

                            <?php
                            echo dashboardValue(
                                $communityOutreach
                            );
                            ?>

                        </strong>

                    </div>


                    <div class="beneficiaryBar">

                        <div
                            style="
                                width:
                                <?php
                                echo $communityPercentage;
                                ?>%;
                            "
                        ></div>

                    </div>

                </div>


                <!-- MOBILE -->

                <div class="beneficiaryItem">

                    <div class="beneficiaryIcon">
                        MC
                    </div>


                    <div class="beneficiaryInfo">

                        <span>
                            Mobile Dental Clinic
                        </span>

                        <strong>

                            <?php
                            echo dashboardValue(
                                $mobileDentalClinic
                            );
                            ?>

                        </strong>

                    </div>


                    <div class="beneficiaryBar">

                        <div
                            style="
                                width:
                                <?php
                                echo $mobilePercentage;
                                ?>%;
                            "
                        ></div>

                    </div>

                </div>


            </div>

        </div>


    </section>


    <!-- =================================================
         REPORT FOOTER
    ================================================== -->

    <section class="reportFooter">

        <div class="reportStatus">

            <span class="statusDot"></span>

            <div>

                <strong>
                    Daily Clinical Report
                </strong>

                <p>
                    Information displayed above represents
                    the daily clinical activity of the institution.
                </p>

            </div>

        </div>


        <div class="reportDate">

            <span>
                Report Date
            </span>

            <strong>
                <?php echo $displayDate; ?>
            </strong>

        </div>

    </section>


</main>


<!-- =====================================================
     FOOTER
===================================================== -->

<?php include($ROOT . "includes/_footer.php"); ?>


</body>

</html>