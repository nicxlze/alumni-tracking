<?php
session_start();

// Hardcoded credentials for demonstration purposes
$valid_username = 'username';
$valid_password = '12345';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];

    // Check if entered credentials match the hardcoded credentials
    if ($entered_username == $valid_username && $entered_password == $valid_password) {
        $_SESSION['username'] = $entered_username;
        header("Location: alumniprofile.php");
        exit();
    } else {
        $error_message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styleform.css"> <!-- Add your CSS file link here -->
    <style> 

body {
    font-family: "Century Gothic";
    background-color: #f4f4f4;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 500px;
}

h1 {
    text-align: center;
    color: white;
}

label {
    display: block;
    margin-top: 50px;
    color: #555;
}

input {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #4caf50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 48%;
}

button:hover {
    background-color: #45a049;
}

#registerBtn {
            background-color: #3498db; 
            margin-left: 2%;
        }

        #registerBtn:hover {
            background-color: #2980b9; /* Adjusted hover color for the registration button */
        }


p {
    text-align: center;
    margin-top: 10px;
}

</style>
</head>
<body>
    <form method="post" action="">
        <h1>CS Integrated School</h1>
        <h2>Alumni Tracking System</h2>

        <?php if (isset($error_message)) { ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php } ?>

        <label for="username"><b>Username:</b></label>
        <input type="text" name="username" required>

        <label for="password"><b>Password:</b></label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
    
        <button id="registerBtn" type="button" onclick="location.href='registration.php';">Register</button>
    </form>
    </form>
</body>
</html>