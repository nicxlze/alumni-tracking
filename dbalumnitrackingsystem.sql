-- Create Database
CREATE DATABASE IF NOT EXISTS alumni_tracking_system;

-- Use Database
USE alumni_tracking_system;

-- Create Biographical Profile Table
CREATE TABLE IF NOT EXISTS biographicalprofile (
    bio_profile_id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    sex ENUM('Male', 'Female') NOT NULL,
    date_of_birth DATE NOT NULL,
    address VARCHAR(500) NOT NULL,
    civil_status VARCHAR(50) NOT NULL,
    religion VARCHAR(50) NOT NULL,
    tele_contact_number VARCHAR(20) NOT NULL,
    email_address VARCHAR(255) NOT NULL
);

-- Create Educational Profile Table
CREATE TABLE IF NOT EXISTS educationalprofile (
    educ_profile_id INT AUTO_INCREMENT PRIMARY KEY,
    bio_profile_id INT NOT NULL,
    year_of_enrollment INT,
    year_of_completion INT NOT NULL,
    shs_level ENUM('Grade 11', 'Grade 12') NOT NULL,
    shs_strand VARCHAR(50) NOT NULL,
    shs_campus VARCHAR(100) NOT NULL,
    student_classification ENUM('Freshman', 'Sophomore', 'Junior', 'Senior', 'Others') NOT NULL,
    college_degree VARCHAR(50) NOT NULL,
    college_program VARCHAR(200) NOT NULL,
    college_campus VARCHAR(200) NOT NULL,
    FOREIGN KEY (bio_profile_id) REFERENCES biographicalprofile (bio_profile_id)
);

-- Create Employment Profile Table
CREATE TABLE IF NOT EXISTS employmentprofile (
    employ_profile_id INT AUTO_INCREMENT PRIMARY KEY,
    bio_profile_id INT NOT NULL,
    employment_status ENUM('Employed', 'Self-employed', 'Unemployed') NOT NULL,
    FOREIGN KEY (bio_profile_id) REFERENCES biographicalprofile (bio_profile_id)
);

-- Create Employed Individuals Table
CREATE TABLE IF NOT EXISTS employedindividuals (
    employed_id INT AUTO_INCREMENT PRIMARY KEY,
    employ_profile_id INT NOT NULL,
    employment_type VARCHAR(50) NOT NULL,
    employment_agency ENUM('Public', 'Private', 'Others') NOT NULL,
    company_name VARCHAR(255) NOT NULL,
    average_income_salary VARCHAR(255) NOT NULL,
    FOREIGN KEY (employ_profile_id) REFERENCES employmentprofile (employ_profile_id)
);

-- Create Self-Employed Individuals Table
CREATE TABLE IF NOT EXISTS selfemployedindividuals (
    self_employed_id INT AUTO_INCREMENT PRIMARY KEY,
    employ_profile_id INT NOT NULL,
    self_employment_type VARCHAR(50) NOT NULL,
    business_name VARCHAR(200) NOT NULL,
    job_name VARCHAR(200) NOT NULL,
    average_income_salary VARCHAR(255) NOT NULL,
    FOREIGN KEY (employ_profile_id) REFERENCES employmentprofile (employ_profile_id)
);

-- Create Unemployed Individuals Table
CREATE TABLE IF NOT EXISTS unemployedindividuals (
    unemployed_id INT AUTO_INCREMENT PRIMARY KEY,
    employ_profile_id INT NOT NULL,
    reason_for_unemployment VARCHAR(200) NOT NULL,
    financial_resource_support VARCHAR(200) NOT NULL,
    preferred_industry_to_work_in VARCHAR(200) NOT NULL,
    preferred_average_income_salary VARCHAR(255) NOT NULL,
    FOREIGN KEY (employ_profile_id) REFERENCES employmentprofile (employ_profile_id)
);
