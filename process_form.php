<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo '<pre>';
var_dump($_POST);
echo '</pre>';


// Replace these database connection details with your own
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "alumni_tracking_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$full_name = $_POST['full_name'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$date_of_birth = $_POST['date_of_birth'];
$civil_status = $_POST['civil_status'];
$religion = $_POST['religion'];
$tele_contact_number = $_POST['tele_contact_number'];
$email_address = $_POST['email_address'];

$year_of_enrollment = $_POST['year_of_enrollment'];
$year_of_completion = $_POST['year_of_completion'];
$shs_level= $_POST['shs_level'];
$shs_strand = $_POST['shs_strand'];
$shs_campus = $_POST['shs_campus'];
$student_classification = $_POST['student_classification'];
$college_degree= $_POST['college_degree'];
$college_program = $_POST['college_program'];
$college_campus = $_POST['college_campus'];

$employment_status = $_POST['employment_status'];

$employment_type = $_POST['employment_type'];
$employment_agency= $_POST['employment_agency'];
$company_name = $_POST['company_name'];
$average_income_salary = $_POST['average_income_salary'];

$self_employment_type = $_POST['self_employment_type'];
$business_name = $_POST['business_name'];
$job_name = $_POST['job_name'];
$average_income_salary = $_POST['average_income_salary'];

$reason_for_unemployment = $_POST['reason_for_unemployment'];
$financial_resource_support = $_POST['financial_resource_support'];
$preferred_industry_to_work_in = $_POST['preferred_industry_to_work_in'];
$preferred_average_income_salary = $_POST['preferred_average_income_salary'];

// Insert data into the database

$biographicalQuery = "INSERT INTO biographicalprofile (full_name, age, sex, date_of_birth, address, civil_status, religion, tele_contact_number, email_address) 
                          VALUES (:fullname, :age, :sex, :dob, :address, :civil_status, :religion, :tele_contact_number, :eaddress)";
    
    $biographicalParams = array(
        ':fullname' => $_POST['fullname'],
        ':age' => $_POST['age'],
        ':sex' => $_POST['sex'],
        ':dob' => $_POST['dob'],
        ':address' => $_POST['address'],
        ':civil_status' => $_POST['cs'],
        ':religion' => $_POST['religion'],
        ':tele_contact_number' => $_POST['tele_contact_number'],
        ':eaddress' => $_POST['eaddress']
    );

    $biographicalStmt = $db->prepare($biographicalQuery);
    $biographicalStmt->execute($biographicalParams);

    // Get the last inserted ID (bio_profile_id) for the foreign key in 'educationalprofile'
    $bioProfileID = $db->lastInsertId();

    // Insert data into 'educationalprofile' table
    $educationalQuery = "INSERT INTO educationalprofile (bio_profile_id, year_of_enrollment, year_of_completion, shs_level, shs_strand, shs_campus, student_classification, college_degree, college_program, college_campus) 
                         VALUES (:bio_profile_id, :enrollment, :completion, :shslevel, :shsstrand, :shscampus, :sclassification, :collegedegree, :collegeprogram, :campusname)";

    $educationalParams = array(
        ':bio_profile_id' => $bioProfileID,
        ':enrollment' => $_POST['enrollment'],
        ':completion' => $_POST['completion'],
        ':shslevel' => $_POST['shslevel'],
        ':shsstrand' => $_POST['shsstrand'],
        ':shscampus' => $_POST['shscampus'],
        ':sclassification' => $_POST['sclassification'],
        ':collegedegree' => $_POST['collegedegree'],
        ':collegeprogram' => $_POST['collegeprogram'],
        ':campusname' => $_POST['campusname']
    );

    $educationalStmt = $db->prepare($educationalQuery);
    $educationalStmt->execute($educationalParams);

    // Insert data into 'employmentprofile' table
    $employmentQuery = "INSERT INTO employmentprofile (bio_profile_id, employment_status) 
                        VALUES (:bio_profile_id, :employmentstatus)";
    
    $employmentParams = array(
        ':bio_profile_id' => $bioProfileID,
        ':employmentstatus' => $_POST['employmentstatus']
    );

    $employmentStmt = $db->prepare($employmentQuery);
    $employmentStmt->execute($employmentParams);

    // Depending on the employment status, insert data into the corresponding table
    if ($_POST['employmentstatus'] == 'Employed') {
        // Insert data into 'employedindividuals' table
        $employedQuery = "INSERT INTO employedindividuals (employ_profile_id, employment_type, employment_agency, company_name, average_income_salary) 
                          VALUES (:employ_profile_id, :employmenttype, :employmentagency, :companyname, :employedaveincome)";
        
        $employedParams = array(
            ':employ_profile_id' => $bioProfileID,
            ':employmenttype' => $_POST['employmenttype'],
            ':employmentagency' => $_POST['employmentagency'],
            ':companyname' => $_POST['companyname'],
            ':employedaveincome' => $_POST['employedaveincome']
        );

        $employedStmt = $db->prepare($employedQuery);
        $employedStmt->execute($employedParams);
    } elseif ($_POST['employmentstatus'] == 'Self-employed') {
        // Insert data into 'selfemployedindividuals' table
        $selfEmployedQuery = "INSERT INTO selfemployedindividuals (employ_profile_id, self_employment_type, business_name, job_name, selfemployedaveincome) 
                              VALUES (:employ_profile_id, :selfemploymenttype, :businessname, :jobname, :selfemployedaveincome)";
        
        $selfEmployedParams = array(
            ':employ_profile_id' => $bioProfileID,
            ':selfemploymenttype' => $_POST['selfemploymenttype'],
            ':businessname' => $_POST['businessname'],
            ':jobname' => $_POST['jobname'],
            ':selfemployedaveincome' => $_POST['selfemployedaveincome']
        );

        $selfEmployedStmt = $db->prepare($selfEmployedQuery);
        $selfEmployedStmt->execute($selfEmployedParams);
    } elseif ($_POST['employmentstatus'] == 'Unemployed') {
        // Insert data into 'unemployedindividuals' table
        $unemployedQuery = "INSERT INTO unemployedindividuals (employ_profile_id, reason_for_unemployment, financial_resource_support, preferred_industry_to_work_in, preferred_average_income_salary) 
                            VALUES (:employ_profile_id, :reason, :financialresource, :preferredinsutry, :preferredaveincome)";
        
        $unemployedParams = array(
            ':employ_profile_id' => $bioProfileID,
            ':reason' => $_POST['reason'],
            ':financialresource' => $_POST['financialresource'],
            ':preferredinsutry' => $_POST['preferredinsutry'],
            ':preferredaveincome' => $_POST['preferredaveincome']
        );

        $unemployedStmt = $db->prepare($unemployedQuery);
        $unemployedStmt->execute($unemployedParams);
    }


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("Location: success_mssg.php");
        exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
$conn->close();
?>