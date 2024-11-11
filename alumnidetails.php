<?php
include 'db_connect.php';

  // Initialize an empty array

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch alumni details by ID from the database
    $query = "SELECT * FROM alumni_tracking WHERE id = :id";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $alumni_details = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the form is submitted for updating data
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve updated data from the form
        $updatedName = $_POST['full_name'];
        $updatedAge = $_POST['age'];
        $updatedSex = $_POST['sex'];
        $updateDateBirth = $_POST['date_of_birth'];
        $updatedAddress = $_POST['address'];
        $updatedCivilStatus = $_POST['civil_status'];
        $updatedReligion = $_POST['religion'];
        $updatedTelephoneorContactNumber = $_POST['tele_contact_number'];
        $updatedEmail = $_POST['email_address'];

        $updatedElementary = $_POST['elementary'];
        $updatedYearGraduatedElem = $_POST['elemyeargraduated'];
        $updatedHighschool = $_POST['highschool'];
        $updatedYearGraduatedHS = $_POST['hsyeargraduated'];
        $updatedCollegeCampus = $_POST['campusname'];
        $updatedCollegeCourse = $_POST['collegecourse'];
        $updatedYearGraduatedCollege = $_POST['collegeyeargraduated'];
        $updatedPostGraduate = $_POST['postrgraduate'];
        $updatedPostGraduateCourse = $_POST['course'];
        $updatedYearGraduatedPostGrad = $_POST['yeargraduated'];
        $updatedAcademicHonors = $_POST['academic_honors'];
        $updatedAwardsDistinction = $_POST['awards_distinction'];
        $updatedBoardExam = $_POST['board_exams'];
        $updatedYearPassedBoardExam = $_POST['year_passed'];

        $updatedOccupation = $_POST['occupation'];
        $updatedEmployer = $_POST['employer'];
        $updatedBusinessAddress = $_POST['businessaddress'];
        $updatedContactNo = $_POST['contactnumber'];
        $updatedLengthOfService = $_POST['lengthofservice'];
        $updatedPosition = $_POST['position'];

        // Update the data in the database
        $updateQuery = "UPDATE alumni_tracking SET 
            full_name = :full_name,
            age = :age,
            sex = :sex,
            date_of_birth = :date_of_birth,
            address = :address,
            civil_status = :civil_status,
            religion = :religion,
            tele_contact_number = :tele_contact_number,
            email_address = :email_address,
            elementary = :elementary,
            elemyeargraduated = :elemyeargraduated,
            highschool = :highschool,
            hsyeargraduated = :hsyeargraduated,
            campusname = :campusname,
            collegecourse = :collegecourse,
            collegeyeargraduated = :collegeyeargraduated,
            postrgraduate = :postrgraduate,
            course = :course,
            yeargraduated = :yeargraduated,
            academic_honors = :academic_honors,
            awards_distinction = :awards_distinction,
            board_exams = :board_exams,
            year_passed = :year_passed,
            occupation = :occupation,
            employer = :employer,
            businessaddress = :businessaddress,
            contactnumber = :contactnumber,
            lengthofservice = :lengthofservice,
            position = :position
            WHERE id = :id";

        $updateStmt = $db->prepare($updateQuery);
        $updateStmt->bindParam(':full_name', $updatedName, PDO::PARAM_STR);
        $updateStmt->bindParam(':age', $updatedAge, PDO::PARAM_INT);
        $updateStmt->bindParam(':sex', $updatedSex, PDO::PARAM_STR);
        $updateStmt->bindParam(':date_of_birth', $updateDateBirth, PDO::PARAM_STR);
        $updateStmt->bindParam(':address', $updatedAddress, PDO::PARAM_STR);
        $updateStmt->bindParam(':civil_status', $updatedCivilStatus, PDO::PARAM_STR);
        $updateStmt->bindParam(':religion', $updatedReligion, PDO::PARAM_STR);
        $updateStmt->bindParam(':tele_contact_number', $updatedTelephoneorContactNumber, PDO::PARAM_STR);
        $updateStmt->bindParam(':email_address', $updatedEmail, PDO::PARAM_STR);

        $updateStmt->bindParam(':elementary', $updatedElementary, PDO::PARAM_STR);
        $updateStmt->bindParam(':elemyeargraduated', $updatedYearGraduatedElem, PDO::PARAM_STR);
        $updateStmt->bindParam(':highschool', $updatedHighschool, PDO::PARAM_STR);
        $updateStmt->bindParam(':hsyeargraduated', $updatedYearGraduatedHS, PDO::PARAM_STR);
        $updateStmt->bindParam(':campusname', $updatedCollegeCampus, PDO::PARAM_STR);
        $updateStmt->bindParam(':collegecourse', $updatedCollegeCourse, PDO::PARAM_STR);
        $updateStmt->bindParam(':collegeyeargraduated', $updatedYearGraduatedCollege, PDO::PARAM_STR);
        $updateStmt->bindParam(':postrgraduate', $updatedPostGraduate, PDO::PARAM_STR);
        $updateStmt->bindParam(':yeargraduated', $updatedYearGraduatedPostGrad, PDO::PARAM_STR);
        $updateStmt->bindParam(':yeargraduated', $updatedPostGraduateCourse, PDO::PARAM_STR);
        $updateStmt->bindParam(':academic_honors', $updatedAcademicHonors, PDO::PARAM_STR);
        $updateStmt->bindParam(':awards_distinction', $updatedAwardsDistinction, PDO::PARAM_STR);
        $updateStmt->bindParam(':board_exams', $updatedBoardExam, PDO::PARAM_STR);
        $updateStmt->bindParam(':year_passed', $updatedYearPassedBoardExam, PDO::PARAM_STR);

        $updateStmt->bindParam(':occupation', $updatedOccupation, PDO::PARAM_STR);
        $updateStmt->bindParam(':employer', $updatedEmployer, PDO::PARAM_STR);
        $updateStmt->bindParam(':businessaddress', $updatedBusinessAddress, PDO::PARAM_STR);
        $updateStmt->bindParam(':contactnumber', $updatedContactNo, PDO::PARAM_STR);
        $updateStmt->bindParam(':lengthofservice', $updatedLengthOfService, PDO::PARAM_STR);
        $updateStmt->bindParam(':position', $updatedPosition, PDO::PARAM_STR);
        $updateStmt->bindParam(':id', $alumniId, PDO::PARAM_INT);

        if ($updateStmt->execute()) {
            echo "Data updated successfully!";
            // Redirect to the same page to prevent form resubmission
            header("Location: alumnidetails.php?id={$alumniId}");
            exit();
        } else {
            echo "Error updating data: " . $updateStmt->errorInfo()[2];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Alumni Information</title>
    <link rel="stylesheet" href="styleform.css">
    <!-- Add any necessary styles or scripts -->
</head>

<body>

    <h1>Update Alumni Information</h1>

    <form action="update.php?id=<?= $alumniId ?>" method="post">
        <!-- Personal Information -->
        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="full_name" value=" <?php echo htmlspecialchars($alumni_details['full_name'] ?? ''); ?>" required>


                                                                 

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="<?php echo htmlspecialchars($alumni_details['age'] ?? ''); ?>" required>


        <label for="sex">Sex:</label>
        <select id="sex" name="sex" required>
            <option value="Male" <?= ($alumni_details['sex'] == 'Male') ? 'selected' : '' ?>>Male</option>
            <option value="Female" <?= ($alumni_details['sex'] == 'Female') ? 'selected' : '' ?>>Female</option>
        </select>

        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth" value="<?php echo htmlspecialchars($alumni_details['date_of_birth'] ?? ''); ?>" required>


        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="<?= $alumni_details['address'] ?>" required>

        <label for="civil_status">Civil Status:</label>
        <input type="text" id="civil_status" name="civil_status" value="<?= $alumni_details['civil_status'] ?>" required>

        <label for="religion">Religion:</label>
        <input type="text" id="religion" name="religion" value="<?= $alumni_details['religion'] ?>" required>

        <label for="tele_contact_number">Telephone or Contact Number:</label>
        <input type="text" id="tele_contact_number" name="tele_contact_number" value="<?= $alumni_details['tele_contact_number'] ?>" required>

        <label for="email_address">Email Address:</label>
        <input type="email" id="email_address" name="email_address" value="<?= $alumni_details['email_address'] ?>" required>

        <!-- Educational Attainment -->
        <h2>Educational Attainment</h2>

        <label for="elementary">Elementary School:</label>
        <input type="text" id="elementary" name="elementary" value="<?= $alumni_details['elementary'] ?>">

        <label for="elemyeargraduated">Year Graduated (Elementary):</label>
        <input type="text" id="elemyeargraduated" name="elemyeargraduated" value="<?= $alumni_details['elemyeargraduated'] ?>">

        <label for="highschool">High School:</label>
        <input type="text" id="highschool" name="highschool" value="<?= $alumni_details['highschool'] ?>">

        <label for="hsyeargraduated">Year Graduated (High School):</label>
        <input type="text" id="hsyeargraduated" name="hsyeargraduated" value="<?= $alumni_details['hsyeargraduated'] ?>">

        <label for="campusname">College Campus:</label>
        <input type="text" id="campusname" name="campusname" value="<?= $alumni_details['campusname'] ?>">

        <label for="collegecourse">College Course:</label>
        <input type="text" id="collegecourse" name="collegecourse" value="<?= $alumni_details['collegecourse'] ?>">

        <label for="collegeyeargraduated">Year Graduated (College):</label>
        <input type="text" id="collegeyeargraduated" name="collegeyeargraduated" value="<?= $alumni_details['collegeyeargraduated'] ?>">

        <label for="postrgraduate">Post Graduate:</label>
        <input type="text" id="postrgraduate" name="postrgraduate" value="<?= $alumni_details['postrgraduate'] ?>">

        <label for="course">Course (Post Graduate):</label>
        <input type="text" id="course" name="course" value="<?= $alumni_details['course'] ?>">

        <label for="yeargraduated">Year Graduated (Post Graduate):</label>
        <input type="text" id="yeargraduated" name="yeargraduated" value="<?= $alumni_details['yeargraduated'] ?>">


        <label for="academic_honors">Academic Honors:</label>
        <input type="text" id="academic_honors" name="academic_honors" value="<?= $alumni_details['academic_honors'] ?>">

        <label for="awards_distinction">Award Distinction:</label>
        <input type="text" id="awards_distinction" name="awards_distinction" value="<?= $alumni_details['awards_distinction'] ?>">

        <label for="board_exams">Board Exams/Year Passed:</label>
        <input type="text" id="board_exams" name="board_exams" value="<?= $alumni_details['board_exams'] ?>">

        <label for="year_passed">Year Taken/Passed:</label>
        <input type="text" id="year_passed" name="year_passed" value="<?= $alumni_details['year_passed'] ?>">

        <!-- Employment Details -->
        <h2>Employment Details</h2>

        <label for="occupation">Occupation:</label>
        <input type="text" id="occupation" name="occupation" value="<?= $alumni_details['occupation'] ?>">

        <label for="employer">Employer:</label>
        <input type="text" id="employer" name="employer" value="<?= $alumni_details['employer'] ?>">

        <label for="businessaddress">Business Address:</label>
        <input type="text" id="businessaddress" name="businessaddress" value="<?= $alumni_details['businessaddress'] ?>">

        <label for="contactnumber">Contact Number (Employer):</label>
        <input type="text" id="contactnumber" name="contactnumber" value="<?= $alumni_details['contactnumber'] ?>">

        <label for="lengthofservice">Length of Service:</label>
        <input type="text" id="lengthofservice" name="lengthofservice" value="<?= $alumni_details['lengthofservice'] ?>">

        <label for="position">Position:</label>
        <input type="text" id="position" name="position" value="<?= $alumni_details['position'] ?>">

        <!-- Add other fields as per your database structure -->

        <input type="submit" value="Update Information">
    </form>

    <form action="update.php" method="get">
        <input type="hidden" name="id" value="<?= $alumniId ?>">
        <input type="submit" value="Edit Information">
    </form>

</body>

</html>
