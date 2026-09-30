<?php
$ROOT = "../../";

include($ROOT . "includes/_init.php");

$CURRENTDIRURL = $ROOTURL . "NDC/clinical-dashboard/";
$dataFile = __DIR__ . "/data/daily-data.json";

$dashboardData = [];

if (is_file($dataFile)) {
    $json = file_get_contents($dataFile);
    $decoded = json_decode($json, true);

    if (is_array($decoded)) {
        $dashboardData = $decoded;
    }
}

/* ---------------------------------------------------------------
   Department structure
---------------------------------------------------------------- */
$departmentSchema = [
    "Oral Medicine (excluding CPR new patients)" => [
        "Total" => null
    ],
    "Oral & Maxillofacial Radiology" => [
        "Periapical" => null,
        "Bitewing" => null,
        "Occlusal" => null,
        "Panoramic" => null,
        "Cephalograms" => null,
        "Extra-oral" => null,
        "CBCT" => null,
        "Any other imaging" => null
    ],
    "Periodontology" => [
        "Non-surgical" => null,
        "Surgical" => null,
        "Implant-related procedures" => null,
        "Any other" => null
    ],
    "Prosthodontics and Crown & Bridge" => [
        "Complete denture procedures" => null,
        "Removable partial denture procedures" => null,
        "Fixed partial denture procedures" => null,
        "Implant-related procedures" => null,
    ],
    "Pediatric & Preventive Dentistry" => [
        "Restorative procedures" => null,
        "Interceptive procedures" => null,
        "Preventive procedures" => null,
        "Endodontic procedures" => null,
        "Oral prophylaxis" => null,
        "Trauma management" => null,
        "Conscious sedation" => null,
        "Procedures under GA" => null,
        "Extraction" => null
    ],
    "Orthodontics" => [
        "Patient assessment" => null,
        "Removable orthodontics" => null,
        "Myofunctional orthodontics" => null,
        "Fixed orthodontics" => null,
        "Any other" => null
    ],
    "Oral & Maxillo-facial Surgery" => [
        "Exodontia" => null,
        "Minor surgeries" => null,
        "Major surgeries" => null,
        "Implant-related procedures" => null,
        "Any other" => null
    ],
    "Dental Public Health" => [
        "Preventive procedures" => null,
        "Oral health education" => null,
        "Outreach" => null,
        "Any other" => null
    ],
    "Conservative Dentistry & Endodontics" => [
        "Restorative procedures" => null,
        "Endodontic procedures" => null,
        "Surgical endodontic procedures" => null,
        "Any other" => null
    ],
    "Oral Pathology & Microbiology" => [
        "Blood samples received" => null,
        "Blood samples processed" => null,
        "Microbiology samples received" => null,
        "Microbiology samples processed" => null,
        "Cytology samples received" => null,
        "Cytology samples processed" => null,
        "Tissue samples received" => null,
        "Tissue samples processed" => null,
        "Any other" => null
    ]
];

/* ---------------------------------------------------------------
   Data
---------------------------------------------------------------- */
$daily = isset($dashboardData["daily"]) && is_array($dashboardData["daily"])
    ? $dashboardData["daily"]
    : [];

$monthly = isset($dashboardData["monthlyDepartments"]) && is_array($dashboardData["monthlyDepartments"])
    ? $dashboardData["monthlyDepartments"]
    : [];

$availableDates = array_keys($daily);
sort($availableDates);

$availableMonths = array_keys($monthly);
sort($availableMonths);

/* ---------------------------------------------------------------
   Helpers
---------------------------------------------------------------- */
function validDateKey($value)
{
    return is_string($value) && preg_match('/^\d{4}-\d{2}-\d{2}$/', $value);
}

function validMonthKey($value)
{
    return is_string($value) && preg_match('/^\d{4}-\d{2}$/', $value);
}

function h($value)
{
    return htmlspecialchars((string)$value, ENT_QUOTES, "UTF-8");
}

function dashboardValue($value)
{
    if ($value === null || $value === "") {
        return "—";
    }

    if (is_numeric($value)) {
        return number_format((float)$value, 0);
    }

    return h($value);
}

function countValue($value, $class = "countUp")
{
    if ($value === null || $value === "" || !is_numeric($value)) {
        return '<span class="' . h($class) . '">—</span>';
    }

    $number = (float)$value;

    return '<span class="' . h($class) . '" data-count="' . h($number) . '">0</span>';
}

function displayDate($date)
{
    $d = DateTime::createFromFormat("Y-m-d", $date);
    return $d ? $d->format("d F Y") : $date;
}

function displayMonth($month)
{
    $d = DateTime::createFromFormat("Y-m", $month);
    return $d ? $d->format("F Y") : $month;
}

function mergeDepartmentSchema($schema, $stored)
{
    $result = [];

    foreach ($schema as $department => $fields) {
        $storedFields = isset($stored[$department]) && is_array($stored[$department])
            ? $stored[$department]
            : [];

        foreach ($fields as $field => $default) {
            $result[$department][$field] = array_key_exists($field, $storedFields)
                ? $storedFields[$field]
                : $default;
        }
    }

    /* Preserve additional JSON fields without losing them. */
    foreach ($stored as $department => $fields) {
        if (!isset($result[$department])) {
            $result[$department] = is_array($fields) ? $fields : [];
            continue;
        }

        if (is_array($fields)) {
            foreach ($fields as $field => $value) {
                if (!array_key_exists($field, $result[$department])) {
                    $result[$department][$field] = $value;
                }
            }
        }
    }

    return $result;
}

function surroundingKeys($keys, $selected)
{
    $index = array_search($selected, $keys, true);

    if ($index === false) {
        return [null, null];
    }

    $previous = $index > 0 ? $keys[$index - 1] : null;
    $next = $index < count($keys) - 1 ? $keys[$index + 1] : null;

    return [$previous, $next];
}

/* ---------------------------------------------------------------
   Current view
---------------------------------------------------------------- */
$view = isset($_GET["view"]) && $_GET["view"] === "monthly"
    ? "monthly"
    : "daily";

/* ---------------------------------------------------------------
   Daily selection
---------------------------------------------------------------- */
$selectedDate = null;

if (
    isset($_GET["date"]) &&
    validDateKey($_GET["date"]) &&
    in_array($_GET["date"], $availableDates, true)
) {
    $selectedDate = $_GET["date"];
} elseif (!empty($availableDates)) {
    $selectedDate = end($availableDates);
}

$selectedDaily = (
    $selectedDate !== null &&
    isset($daily[$selectedDate]) &&
    is_array($daily[$selectedDate])
) ? $daily[$selectedDate] : [];

[$previousDate, $nextDate] = $selectedDate
    ? surroundingKeys($availableDates, $selectedDate)
    : [null, null];

$displayDate = $selectedDate ? displayDate($selectedDate) : "No daily data";

/* ---------------------------------------------------------------
   Monthly selection
---------------------------------------------------------------- */
$selectedMonth = null;

if (
    isset($_GET["month"]) &&
    validMonthKey($_GET["month"]) &&
    in_array($_GET["month"], $availableMonths, true)
) {
    $selectedMonth = $_GET["month"];
} elseif (!empty($availableMonths)) {
    $selectedMonth = end($availableMonths);
}

$storedMonthly = (
    $selectedMonth !== null &&
    isset($monthly[$selectedMonth]) &&
    is_array($monthly[$selectedMonth])
) ? $monthly[$selectedMonth] : [];

$selectedMonthDepartments = mergeDepartmentSchema(
    $departmentSchema,
    $storedMonthly
);

[$previousMonth, $nextMonth] = $selectedMonth
    ? surroundingKeys($availableMonths, $selectedMonth)
    : [null, null];

$displayMonth = $selectedMonth ? displayMonth($selectedMonth) : "No monthly data";

/* ---------------------------------------------------------------
   Daily values
---------------------------------------------------------------- */
$cprTimings = $selectedDaily["cprTimings"] ?? null;
$newPatients = $selectedDaily["newPatients"] ?? null;
$revisitPatients = $selectedDaily["revisitPatients"] ?? null;
$inPatients = $selectedDaily["inPatients"] ?? null;
$communityOutreach = $selectedDaily["communityOutreach"] ?? null;
$mobileDentalClinic = $selectedDaily["mobileDentalClinic"] ?? null;

$totalPatients = null;

if (is_numeric($newPatients) && is_numeric($revisitPatients)) {
    $totalPatients = (float)$newPatients + (float)$revisitPatients;
}

$totalBeneficiaries = null;

if (is_numeric($communityOutreach) && is_numeric($mobileDentalClinic)) {
    $totalBeneficiaries = (float)$communityOutreach + (float)$mobileDentalClinic;
}

function percentage($part, $total)
{
    if (!is_numeric($part) || !is_numeric($total) || (float)$total <= 0) {
        return null;
    }

    return min(100, max(0, round(((float)$part / (float)$total) * 100)));
}

$newPercentage = percentage($newPatients, $totalPatients);
$revisitPercentage = percentage($revisitPatients, $totalPatients);
$communityPercentage = percentage($communityOutreach, $totalBeneficiaries);
$mobilePercentage = percentage($mobileDentalClinic, $totalBeneficiaries);

$departmentIcons = [
    "Oral Medicine (excluding CPR new patients)" => "OM",
    "Oral & Maxillofacial Radiology" => "XR",
    "Periodontology" => "PD",
    "Prosthodontics and Crown & Bridge" => "PB",
    "Pediatric & Preventive Dentistry" => "PP",
    "Orthodontics" => "OR",
    "Oral & Maxillo-facial Surgery" => "OS",
    "Dental Public Health" => "DP",
    "Conservative Dentistry & Endodontics" => "CE",
    "Oral Pathology & Microbiology" => "OP"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Clinical Dashboard | Government Dental College & Hospital
    </title>

    <link
        rel="icon"
        type="image/x-icon"
        href="<?php echo $ROOTURL; ?>public/assets/gdclogo1.png"
    >

    <script
        src="<?php echo $ROOTURL; ?>public/js/_navbar.js"
        defer>
    </script>

    <link
        rel="stylesheet"
        href="<?php echo $ROOTURL; ?>public/css/global.css"
    >

    <link
        rel="stylesheet"
        href="<?php echo $ROOTURL; ?>public/css/_navbar.css"
    >

    <link
        rel="stylesheet"
        href="<?php echo $CURRENTDIRURL; ?>css/style.css"
    >

    <link
        rel="stylesheet"
        href="<?php echo $ROOTURL; ?>public/css/_footer.css"
    >
</head>

<body>

<?php include($ROOT . "includes/_navbar.php"); ?>

<!-- =========================================================
     GOVERNMENT COLLEGE BANNER
========================================================== -->
<div class="pageBanner">
    <img
        src="<?php echo $ROOTURL; ?>public/assets/pageBanner.jpg"
        alt="Government Dental College & Hospital"
        loading="lazy"
    >

    <div class="pageBannerOverlay"></div>

    <div class="annexureBannerContent">
        <span>MUHS MANDATE</span>

        <h1>DAILY DIGITAL CLINICAL DASHBOARD</h1>
    </div>
</div>


<main class="clinicalDashboard">

    <!-- =====================================================
         DASHBOARD INTRO
    ====================================================== -->
    <section class="dashboardIntro">
        <div class="introCopy">
            <h2>Clinical Dashboard</h2>
        </div>
    </section>

    <!-- =====================================================
         DAILY / MONTHLY MODE SWITCH
    ====================================================== -->
    <nav
        class="dashboardModeSwitch"
        aria-label="Dashboard report type"
    >
        <a
            href="?view=daily<?php
                echo $selectedDate
                    ? '&date=' . urlencode($selectedDate)
                    : '';
            ?>"
            class="<?php echo $view === "daily" ? "active" : ""; ?>"
        >
            <span class="modeIcon">01</span>

            <span class="modeText">
                <strong>Daily Data</strong>
            </span>

            <span class="modeArrow">→</span>
        </a>

        <a
            href="?view=monthly<?php
                echo $selectedMonth
                    ? '&month=' . urlencode($selectedMonth)
                    : '';
            ?>"
            class="<?php echo $view === "monthly" ? "active" : ""; ?>"
        >
            <span class="modeIcon">02</span>

            <span class="modeText">
                <strong>Monthly Data</strong>
            </span>

            <span class="modeArrow">→</span>
        </a>
    </nav>

<?php if ($view === "daily"): ?>

    <!-- =====================================================
         DAILY DASHBOARD
    ====================================================== -->
    <section class="reportSection">

        <!-- DATE NAVIGATION -->
        <div class="periodNavigation">
            <?php if ($previousDate): ?>
                <a
                    class="periodButton"
                    href="?view=daily&date=<?php echo urlencode($previousDate); ?>"
                    aria-label="Previous day"
                    title="View previous available date"
                >←</a>
            <?php else: ?>
                <span class="periodButton disabled">←</span>
            <?php endif; ?>

            <div class="currentPeriod">
                <span>DAILY</span>
                <strong><?php echo h($displayDate); ?></strong>
            </div>

            <?php if ($nextDate): ?>
                <a
                    class="periodButton"
                    href="?view=daily&date=<?php echo urlencode($nextDate); ?>"
                    aria-label="Next day"
                    title="View next available date"
                >→</a>
            <?php else: ?>
                <span class="periodButton disabled">→</span>
            <?php endif; ?>
        </div>

        <!-- DAILY KPI -->
        <div class="kpiGrid">

            <article
                class="kpiCard kpiCardPrimary"
                data-tooltip="New patients + revisit patients"
            >
                <div class="kpiTop">
                    <span class="kpiIcon">01</span>
                    <span class="kpiTag">TOTAL</span>
                </div>

                <strong class="kpiValue">
                    <?php echo countValue($totalPatients, "countUp"); ?>
                </strong>

                <h3>Patients</h3>
            </article>

            <article
                class="kpiCard"
                data-tooltip="Patients registered as new cases"
            >
                <div class="kpiTop">
                    <span class="kpiIcon">02</span>
                    <span class="kpiTag">NEW</span>
                </div>

                <strong class="kpiValue">
                    <?php echo countValue($newPatients, "countUp"); ?>
                </strong>

                <h3>New Patients</h3>
            </article>

            <article
                class="kpiCard"
                data-tooltip="Patients returning for follow-up or further care"
            >
                <div class="kpiTop">
                    <span class="kpiIcon">03</span>
                    <span class="kpiTag">REVISIT</span>
                </div>

                <strong class="kpiValue">
                    <?php echo countValue($revisitPatients, "countUp"); ?>
                </strong>

                <h3>Revisit Patients</h3>
            </article>

            <article
                class="kpiCard"
                data-tooltip="Patients recorded as in-patients"
            >
                <div class="kpiTop">
                    <span class="kpiIcon">04</span>
                    <span class="kpiTag">IN-PATIENT</span>
                </div>

                <strong class="kpiValue">
                    <?php echo countValue($inPatients, "countUp"); ?>
                </strong>

                <h3>In-Patients</h3>
            </article>

            <article
                class="kpiCard"
                data-tooltip="Community outreach beneficiaries"
            >
                <div class="kpiTop">
                    <span class="kpiIcon">05</span>
                    <span class="kpiTag">OUTREACH</span>
                </div>

                <strong class="kpiValue">
                    <?php echo countValue($communityOutreach, "countUp"); ?>
                </strong>

                <h3>Community Outreach</h3>
            </article>

            <article
                class="kpiCard"
                data-tooltip="Mobile dental clinic beneficiaries"
            >
                <div class="kpiTop">
                    <span class="kpiIcon">06</span>
                    <span class="kpiTag">MOBILE</span>
                </div>

                <strong class="kpiValue">
                    <?php echo countValue($mobileDentalClinic, "countUp"); ?>
                </strong>

                <h3>Mobile Dental Clinic</h3>
            </article>

        </div>

        <!-- DAILY DETAIL CARDS -->
        <div class="detailGrid">

            <article class="detailCard">
                <div class="detailCardHeader">
                    <div>
                        <span class="sectionLabel">SERVICE</span>
                        <h3>CPR Timings</h3>
                    </div>

                </div>

                <div class="serviceValue">
                    <?php echo dashboardValue($cprTimings); ?>
                </div>


            </article>

            <article class="detailCard">
                <div class="detailCardHeader">
                    <div>
                        <span class="sectionLabel">PATIENTS</span>
                        <h3>New &amp; Revisit</h3>
                    </div>

                </div>

                <div class="metricRows">

                    <div class="metricRow">
                        <div class="metricLabel">
                            <span>New patients</span>
                            <strong><?php echo dashboardValue($newPatients); ?></strong>
                        </div>

                        <?php if ($newPercentage !== null): ?>
                            <div class="metricTrack">
                                <span style="width: <?php echo $newPercentage; ?>%"></span>
                            </div>

                            <small><?php echo $newPercentage; ?>%</small>
                        <?php endif; ?>
                    </div>

                    <div class="metricRow">
                        <div class="metricLabel">
                            <span>Revisit patients</span>
                            <strong><?php echo dashboardValue($revisitPatients); ?></strong>
                        </div>

                        <?php if ($revisitPercentage !== null): ?>
                            <div class="metricTrack">
                                <span style="width: <?php echo $revisitPercentage; ?>%"></span>
                            </div>

                            <small><?php echo $revisitPercentage; ?>%</small>
                        <?php endif; ?>
                    </div>

                </div>
            </article>

            <article class="detailCard">
                <div class="detailCardHeader">
                    <div>
                        <span class="sectionLabel">COMMUNITY</span>
                        <h3>Outreach &amp; Mobile</h3>
                    </div>

                </div>

                <div class="metricRows">

                    <div class="metricRow">
                        <div class="metricLabel">
                            <span>Community outreach</span>
                            <strong><?php echo dashboardValue($communityOutreach); ?></strong>
                        </div>

                        <?php if ($communityPercentage !== null): ?>
                            <div class="metricTrack">
                                <span style="width: <?php echo $communityPercentage; ?>%"></span>
                            </div>

                            <small><?php echo $communityPercentage; ?>%</small>
                        <?php endif; ?>
                    </div>

                    <div class="metricRow">
                        <div class="metricLabel">
                            <span>Mobile dental clinic</span>
                            <strong><?php echo dashboardValue($mobileDentalClinic); ?></strong>
                        </div>

                        <?php if ($mobilePercentage !== null): ?>
                            <div class="metricTrack">
                                <span style="width: <?php echo $mobilePercentage; ?>%"></span>
                            </div>

                            <small><?php echo $mobilePercentage; ?>%</small>
                        <?php endif; ?>
                    </div>

                </div>

                <div class="miniTotal">
                    <span>Total beneficiaries</span>
                    <strong><?php echo dashboardValue($totalBeneficiaries); ?></strong>
                </div>
            </article>

        </div>

        <?php if (empty($selectedDaily)): ?>
            <div class="emptyState">
                <span class="emptyIcon">!</span>
                <div>
                    <strong>No daily data available</strong>
                </div>
            </div>
        <?php endif; ?>

    </section>

<?php else: ?>

    <!-- =====================================================
         MONTHLY DASHBOARD
    ====================================================== -->
    <section
        class="reportSection"
        id="monthly-report"
    >

        <!-- MONTH NAVIGATION -->
        <div class="periodNavigation">
            <?php if ($previousMonth): ?>
                <a
                    class="periodButton"
                    href="?view=monthly&month=<?php echo urlencode($previousMonth); ?>#monthly-report"
                    aria-label="Previous month"
                    title="View previous available month"
                >←</a>
            <?php else: ?>
                <span class="periodButton disabled">←</span>
            <?php endif; ?>

            <div class="currentPeriod">
                <span>MONTHLY</span>
                <strong><?php echo h($displayMonth); ?></strong>
            </div>

            <?php if ($nextMonth): ?>
                <a
                    class="periodButton"
                    href="?view=monthly&month=<?php echo urlencode($nextMonth); ?>#monthly-report"
                    aria-label="Next month"
                    title="View next available month"
                >→</a>
            <?php else: ?>
                <span class="periodButton disabled">→</span>
            <?php endif; ?>
        </div>

        <!-- DEPARTMENTS -->
        <div class="departmentGrid">

            <?php $departmentNumber = 0; ?>

            <?php foreach ($selectedMonthDepartments as $departmentName => $procedures): ?>

                <?php
                $departmentNumber++;
                $departmentIcon = $departmentIcons[$departmentName] ?? "DG";

                $numericDepartmentTotal = 0;
                $hasDepartmentNumber = false;

                foreach ($procedures as $procedureValue) {
                    if (is_numeric($procedureValue)) {
                        $numericDepartmentTotal += (float)$procedureValue;
                        $hasDepartmentNumber = true;
                    }
                }
                ?>

                <details
                    class="departmentCard"
                    <?php echo $departmentNumber === 1 ? "open" : ""; ?>
                >

                    <summary>
                        <div class="departmentTitle">

                            <span class="departmentNumber">
                                <?php echo str_pad($departmentNumber, 2, "0", STR_PAD_LEFT); ?>
                            </span>

                            <span class="departmentIcon">
                                <?php echo h($departmentIcon); ?>
                            </span>

                            <span class="departmentNameBlock">
                                <strong><?php echo h($departmentName); ?></strong>
                            </span>

                        </div>

                        <span class="departmentSummaryRight">
                            <?php if ($hasDepartmentNumber): ?>
                                <span class="departmentTotal">
                                    <?php echo number_format($numericDepartmentTotal, 0); ?>
                                </span>
                            <?php endif; ?>

                            <span class="departmentArrow">+</span>
                        </span>
                    </summary>

                    <div class="departmentContent">

                        <div class="departmentTableWrapper">

                            <table class="departmentTable">

                                <thead>
                                    <tr>
                                        <th>Procedure</th>
                                        <th>Count</th>
                                    </tr>
                                </thead>

                                <tbody>

                                <?php if (!empty($procedures)): ?>

                                    <?php foreach ($procedures as $procedureName => $procedureValue): ?>

                                        <tr>
                                            <td>
                                                <span class="activityName">
                                                    <?php echo h($procedureName); ?>
                                                </span>
                                            </td>

                                            <td>
                                                <span
                                                    class="countBadge <?php echo is_numeric($procedureValue) ? 'countUpTable' : ''; ?>"
                                                    <?php if (is_numeric($procedureValue)): ?>
                                                        data-count="<?php echo h($procedureValue); ?>"
                                                    <?php endif; ?>
                                                >
                                                    <?php echo is_numeric($procedureValue) ? '0' : '—'; ?>
                                                </span>
                                            </td>
                                        </tr>

                                    <?php endforeach; ?>

                                <?php else: ?>

                                    <tr>
                                        <td colspan="2">—</td>
                                    </tr>

                                <?php endif; ?>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </details>

            <?php endforeach; ?>

        </div>

        <?php if (empty($storedMonthly)): ?>
            <div class="emptyState">
                <span class="emptyIcon">!</span>
                <div>
                    <strong>No monthly data available</strong>
                    <p>
                        There is currently no department-wise monthly
                        clinical data recorded for the selected period.
                    </p>
                </div>
            </div>
        <?php endif; ?>

    </section>

<?php endif; ?>

</main>

<?php include($ROOT . "includes/_footer.php"); ?>

<script>
document.addEventListener("DOMContentLoaded", function () {
    /*
     * Count-up animation:
     * Values remain 0 initially and animate only when they enter
     * the viewport. This also works when a monthly department card
     * is opened.
     */
    const animatedNumbers = document.querySelectorAll(
        ".countUp[data-count], .countUpTable[data-count]"
    );

    const formatNumber = (number) => {
        return new Intl.NumberFormat("en-IN", {
            maximumFractionDigits: 0
        }).format(number);
    };

    const animateNumber = (element) => {
        if (element.dataset.animated === "true") {
            return;
        }

        element.dataset.animated = "true";

        const target = Number(element.dataset.count || 0);
        const duration = 1000;
        const startTime = performance.now();

        const step = (currentTime) => {
            const progress = Math.min(
                (currentTime - startTime) / duration,
                1
            );

            /*
             * Ease-out cubic: quick start, smooth finish.
             */
            const eased = 1 - Math.pow(1 - progress, 3);
            const current = Math.round(target * eased);

            element.textContent = formatNumber(current);

            if (progress < 1) {
                requestAnimationFrame(step);
            } else {
                element.textContent = formatNumber(target);
            }
        };

        requestAnimationFrame(step);
    };

    if ("IntersectionObserver" in window) {
        const observer = new IntersectionObserver(
            (entries, obs) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        animateNumber(entry.target);
                        obs.unobserve(entry.target);
                    }
                });
            },
            {
                threshold: 0.25
            }
        );

        animatedNumbers.forEach((number) => {
            observer.observe(number);
        });
    } else {
        animatedNumbers.forEach(animateNumber);
    }

    /*
     * Re-run count animation for a monthly department when the
     * expandable card is opened.
     */
    document.querySelectorAll(".departmentCard").forEach((card) => {
        card.addEventListener("toggle", function () {
            if (!card.open) {
                return;
            }

            card.querySelectorAll(
                ".countUpTable[data-count]"
            ).forEach((number) => {
                if (number.dataset.animated !== "true") {
                    animateNumber(number);
                }
            });
        });
    });
});
</script>

</body>
</html>
