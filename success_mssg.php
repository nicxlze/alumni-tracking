<?php
include 'db_connect.php';

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $full_name = $_POST['full_name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $date_of_birth = $_POST['date_of_birth'];
    $address = $_POST['address'];
    $civil_status = $_POST['civil_status'];
    $religion = $_POST['religion'];
    $tele_contact_number = $_POST['tele_contact_number'];
    $email_address = $_POST['email_address'];
    
    // Educational Attainment
    $elementary = $_POST['elementary'];
    $elemyeargraduated = $_POST['elemyeargraduated'];
    $highschool = $_POST['highschool'];
    $hsyeargraduated = $_POST['hsyeargraduated'];
    $campusname = $_POST['campusname'];
    $collegecourse = $_POST['collegecourse'];
    $collegeyeargraduated = $_POST['collegeyeargraduated'];
    $postrgraduate = $_POST['postrgraduate'];
    $course = $_POST['course'];
    $yeargraduated = $_POST['yeargraduated'];
    $academic_honors = $_POST['academic_honors'];
    $award_distinction = $_POST['award_distinction'];
    $board_exams = $_POST['board_exams'];
    $year_passed = $_POST['year_passed'];
    
    // Employment Details
    $occupation = $_POST['occupation'];
    $employer = $_POST['employer'];
    $businessaddress = $_POST['businessaddress'];
    $contactnumber = $_POST['contactnumber'];
    $lengthofservice = $_POST['lengthofservice'];
    $position = $_POST['position'];

    // Insert data into the database
    $sql = "INSERT INTO alumni_details (full_name, age, sex, date_of_birth, address, civil_status, religion, tele_contact_number, email_address, 
            elementary, elemyeargraduated, highschool, hsyeargraduated, campusname, collegecourse, collegeyeargraduated, postrgraduate, course, yeargraduated, 
            academic_honors, award_distinction, board_exams, year_passed, 
            occupation, employer, businessaddress, contactnumber, lengthofservice, position) 
            VALUES ('$full_name', $age, '$sex', '$date_of_birth', '$address', '$civil_status', '$religion', '$tele_contact_number', '$email_address', 
            '$elementary', '$elemyeargraduated', '$highschool', '$hsyeargraduated', '$campusname', '$collegecourse', '$collegeyeargraduated', '$postrgraduate', '$course', '$yeargraduated', 
            '$academic_honors', '$award_distinction', '$board_exams', '$year_passed', 
            '$occupation', '$employer', '$businessaddress', '$contactnumber', '$lengthofservice', '$position')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Form submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header("Location: success_mssg.php");
    exit();
}

$conn->close();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record Created Successfully!</title>
    <link rel="stylesheet" href="styleform.css">

    <style>
        body {
            font-family: "Century Gothic";
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            background-color: #7D0A0A;
            font-size: 45px;
            color:#fff /* Adjusted color to match the header */
        }

        form {
            margin-top: 20px; /* Adjusted margin for spacing */
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4E9F3D;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thank you for submitting your information! <br> Your data has been successfully recorded in our system. </br></h1>
        
        <!-- Add more content or messages as needed -->

        <form action="alumnidisplay.php" method="post">
            <input type="submit" value="Show Data">
        </form>
    </div>
</body>
</html>