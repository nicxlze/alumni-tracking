<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Record</title>
    <link rel="stylesheet" href="styleform.css">
    
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Alumni Information</h1>

    <?php

   $id = $_GET['id'] ?? 1; 
    
    // Fetch user information from the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "alumni_tracking";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $id = $_GET['id'] ?? 1;

    // Fetch user data
    $sql = "SELECT * FROM alumni_details WHERE id = $id";
    $result = $conn->query($sql);
    
    if ($result === false) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } elseif ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    

        // Display user information in an HTML table
        echo '<table>';
        echo '<tr><th>Field</th><th>Value</th></tr>';
        echo '<tr><td><b>Full Name:</b></td><td>' . $row['full_name'] . '</td></tr>';
        echo '<tr><td><b>Age:</b></td><td>' . $row['age'] . '</td></tr>';
        echo '<tr><td><b>Sex:</b></td><td>' . $row['sex'] . '</td></tr>';
        echo '<tr><td><b>Date of Birth:</b></td><td>' . $row['date_of_birth'] . '</td></tr>';
        echo '<tr><td><b>Address:</b></td><td>' . $row['address'] . '</td></tr>';
        echo '<tr><td><b>Civil Status:</b></td><td>' . $row['civil_status'] . '</td></tr>';
        echo '<tr><td><b>Religion:</b></td><td>' . $row['religion'] . '</td></tr>';
        echo '<tr><td><b>Contact Number:</b></td><td>' . $row['tele_contact_number'] . '</td></tr>';
        echo '<tr><td><b>Email Address:</b></td><td>' . $row['email_address'] . '</td></tr>';
        echo '<tr><td colspan="2"><b>Educational Attainment</b></td></tr>';
        echo '<tr><td><b>Elementary:</b></td><td>' . $row['elementary'] . '</td></tr>';
        echo '<tr><td><b>Year Graduated (Elementary):</b></td><td>' . $row['elemyeargraduated'] . '</td></tr>';
        echo '<tr><td><b>High School:</b></td><td>' . $row['highschool'] . '</td></tr>';
        echo '<tr><td><b>Year Graduated (High School):</b></td><td>' . $row['hsyeargraduated'] . '</td></tr>';
        echo '<tr><td><b>College Campus:</b></td><td>' . $row['campusname'] . '</td></tr>';
        echo '<tr><td><b>College Course:</b></td><td>' . $row['collegecourse'] . '</td></tr>';
        echo '<tr><td><b>Year Graduated (College):</b></td><td>' . $row['collegeyeargraduated'] . '</td></tr>';
        echo '<tr><td><b>Post Graduate:</b></td><td>' . $row['postrgraduate'] . '</td></tr>';
        echo '<tr><td><b>Course (Post Graduate):</b></td><td>' . $row['course'] . '</td></tr>';
        echo '<tr><td><b>Year Graduated (Post Graduate):</b></td><td>' . $row['yeargraduated'] . '</td></tr>';
        echo '<tr><td><b>Academic Honors:</b></td><td>' . $row['academic_honors'] . '</td></tr>';
        echo '<tr><td><b>Award Distinction:</b></td><td>' . $row['award_distinction'] . '</td></tr>';
        echo '<tr><td><b>Board Exams/Year Passed:</b></td><td>' . $row['board_exams'] . ' / ' . $row['year_passed'] . '</td></tr>';
        echo '<tr><td colspan="2"><b>Employment Details</b></td></tr>';
        echo '<tr><td><b>Occupation:</b></td><td>' . $row['occupation'] . '</td></tr>';
        echo '<tr><td><b>Employer:</b></td><td>' . $row['employer'] . '</td></tr>';
        echo '<tr><td><b>Business Address:</b></td><td>' . $row['businessaddress'] . '</td></tr>';
        echo '<tr><td><b>Contact Number (Employer):</b></td><td>' . $row['contactnumber'] . '</td></tr>';
        echo '<tr><td><b>Length of Service:</b></td><td>' . $row['lengthofservice'] . '</td></tr>';
        echo '<tr><td><b>Position:</b></td><td>' . $row['position'] . '</td></tr>';
        
        

        echo '</table>';
    } else {
        echo "User not found!";
    }

    $conn->close();
    ?>

<form action="update.php" method="get">
        <input type="hidden" name="id" value="<?= $alumniId ?>">
        <input type="submit" value="Edit Information">
    </form>


</body>

</html>
