<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumni_tracking_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the biographicalprofile, educationalprofile, employmentprofile, employedindividuals, selfemployedindividuals, and unemployedindividuals tables
$sql = "SELECT 
            bp.full_name, bp.age, bp.sex, bp.date_of_birth, bp.address, bp.civil_status, bp.religion, bp.tele_contact_number, bp.email_address,
            ep.year_of_enrollment, ep.year_of_completion, ep.shs_level, ep.shs_strand, ep.shs_campus, ep.student_classification, ep.college_degree, ep.college_program, ep.college_campus,
            emp.employment_status,
            ei.employment_type, ei.employment_agency, ei.company_name, ei.average_income_salary,
            se.self_employment_type, se.business_name, se.job_name, se.average_income_salary,
            ui.reason_for_unemployment, ui.financial_resource_support, ui.preferred_industry_to_work_in, ui.preferred_average_income_salary
        FROM biographicalprofile bp
        LEFT JOIN educationalprofile ep ON bp.bio_profile_id = ep.bio_profile_id
        LEFT JOIN employmentprofile emp ON bp.bio_profile_id = emp.bio_profile_id
        LEFT JOIN employedindividuals ei ON emp.employ_profile_id = ei.employ_profile_id
        LEFT JOIN selfemployedindividuals se ON emp.employ_profile_id = se.employ_profile_id
        LEFT JOIN unemployedindividuals ui ON emp.employ_profile_id = ui.employ_profile_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Full Name</th>
    <th>Age</th>
    <th>Sex</th>
    <th>Date of Birth</th>
    <th>Address</th>
    <th>Civil Status</th>
    <th>Religion</th>
    <th>Contact Number</th>
    <th>Email Address</th>
    <th>Year of Enrollment</th>
    <th>Year of Completion</th>
    <th>SHS Level</th>
    <th>SHS Strand</th>
    <th>SHS Campus</th>
    <th>Student Classification</th>
    <th>College Degree</th>
    <th>College Program</th>
    <th>College Campus</th>
    <th>Employment Status</th>
    <th>Employment Type</th>
    <th>Employment Agency</th>
    <th>Company Name</th>
    <th>Average Income/Salary</th>
    <th>Self-Employment Type</th>
    <th>Business Name</th>
    <th>Job Name</th>
    <th>Self-Employed Average Income</th>
    <th>Unemployment Reason</th>
    <th>Financial Resource/Support</th>
    <th>Preferred Industry</th>
    <th>Preferred Average Income</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['full_name'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";
        echo "<td>" . $row['sex'] . "</td>";
        echo "<td>" . $row['date_of_birth'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['civil_status'] . "</td>";
        echo "<td>" . $row['religion'] . "</td>";
        echo "<td>" . $row['tele_contact_number'] . "</td>";
        echo "<td>" . $row['email_address'] . "</td>";
        echo "<td>" . $row['year_of_enrollment'] . "</td>";
        echo "<td>" . $row['year_of_completion'] . "</td>";
        echo "<td>" . $row['shs_level'] . "</td>";
        echo "<td>" . $row['shs_strand'] . "</td>";
        echo "<td>" . $row['shs_campus'] . "</td>";
        echo "<td>" . $row['student_classification'] . "</td>";
        echo "<td>" . $row['college_degree'] . "</td>";
        echo "<td>" . $row['college_program'] . "</td>";
        echo "<td>" . $row['college_campus'] . "</td>";
        echo "<td>" . $row['employment_status'] . "</td>";
        echo "<td>" . $row['employment_type'] . "</td>";
        echo "<td>" . $row['employment_agency'] . "</td>";
        echo "<td>" . $row['company_name'] . "</td>";
        echo "<td>" . $row['average_income_salary'] . "</td>";
        echo "<td>" . $row['self_employment_type'] . "</td>";
        echo "<td>" . $row['business_name'] . "</td>";
        echo "<td>" . $row['job_name'] . "</td>";
        echo "<td>" . $row['average_income_salary'] . "</td>";
        echo "<td>" . $row['reason_for_unemployment'] . "</td>";
        echo "<td>" . $row['financial_resource_support'] . "</td>";
        echo "<td>" . $row['preferred_industry_to_work_in'] . "</td>";
        echo "<td>" . $row['preferred_average_income_salary'] . "</td>";
        echo "</tr>";
    }
  
} else {
    echo "No records found";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Data</title>
    <link rel="stylesheet" href="styleform.css"> <!-- Link to your external CSS file -->

    <style>
        body {
            font-family: "Century Gothic";
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #fff;
            text-align: center;
            font-size: 40px;
            margin: 20px auto;
            padding: 20px;

        }

        p {
            color: #666;
            text-align: center;
            margin: 20px auto;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 50px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 400%;
			background-color: #7D0A0A;
            
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
            
        }

        th {
            background-color: #7D0A0A;
            color: #fff;
        }
    </style>
</head>

<body>
    <h1>Alumni Data</h1>
    <p><b>Below is the data retrieved from the Alumni Tracking System: </b></p>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "alumni_tracking_system";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $conn->close();
    ?>
    
</body>
</html>