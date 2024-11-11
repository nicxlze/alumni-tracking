<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: loginform.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="styleform.css"> <!-- Link to your external CSS file -->
</head>

<body>
    <form method="post" action="success_mssg.php" autocomplete="on">
        <h1>CS Integrated School</h1>
        <h2>Alumni Tracking System</h2>

   <table>
            <tbody>
                <tr>      <!-- BIOGRAPHICAL PROFILE -->
       
                    <td align="left">
                        <div class="content"><b><font face="Century Gothic">Biographical Profile </font></b></div>

                        <fieldset>
                            <center>
                                <table cellspacing="5" cellpadding="4" width="100%">
                                    <tr>
                                        <td align="right" width="45%"><b><font face="Century Gothic">Full Name :</font></b></td>
                                        <td align="left" width="55%">
                                            <input name="full_name" type="text" maxlength="" required>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> <font face = "Century Gothic"> Age : </b>  </font></td>
                                        <td align="left" width="55%">
                                        <input name="age" type="text" maxlength="46" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"><b><font face="Century Gothic"> Sex :</font></b></td>
                                        <td align="left" width="55%">
                                        <select name="sex" required>
                                                <option  value="">--Select--</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td align="right" width="45%"> <b> <font face = "Century Gothic"> Date of Birth : </b>  </font></td>
                                        <td align="left" width="55%">
                                        <input type="date" placeholder="YYYY-MM-DD" name="date_of_birth" required>
                                    </td>
                                    </tr>

                               <tr>
                                        <td align="right" width="45%"> <b> <font face = "Century Gothic"> Address : </b>  </font></td>
                                        <td align="left" width="55%">
                                        <input name="address" type="text" maxlength="46" required>
                                    </td>
                                    </tr>     

                                    <tr>
                                        <td align="right"> <b> <font face = "Century Gothic"> Civil Status : </b>  </font> </td>
                                        <td align="left">
                                            <select name="civil_status" required>
                                                <option value="">--Select--</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Separated">Separated</option>
                                                <option value="Widowed">Widowed</option>
                                            </select>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right"> <b> <font face = "Century Gothic"> Religion :</b>  </font> </td>
                                        <td align="left">
                                            <select name="religion" required> 
                                                <option  value="">--Select--</option>
                                                <option value="Roman Catholic">Roman Catholic</option>
                                                <option value="Iglesia Ni Cristo">Iglesia Ni Cristo</option>
                                                <mcoption value="Jehovah's Witnesses">Jehovah's Witnesses</option>
                                                <option value="Born Again Christian">Born Again Christian</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        
                                    </td>
                                    </tr>
                                                                            
                                    <tr>
                                        <td align="right" width="45%"> <b> <font face = "Century Gothic"> Telephone or Contact Number(s) :</b>  </font> </td>
                                        <td align="left" width="55%">
                                        <input name="tele_contact_number" type="text" maxlength="46" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> <font face = "Century Gothic"> Email Address : </b>  </font> </td>
                                        <td align="left" width="55%">
                                        <input name="email_address" type="text" maxlength="46" required>
                                    </td>
                                    </tr>

                                </table>
                            </center>
                        </fieldset>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- EDUCATIONAL PROFILE -->
        <table>
            <tbody>
                <tr>
                    <td align="left">
                        <div class="content"><b><font face="Century Gothic">Educational Attainment </font></b></div>

                        <fieldset>
                            <center>
                                <table cellspacing="6" cellpadding="4" width="100%">
                                    <tr>
                                        <td align="right" width="45%"><b>Elementary :</b></td>
                                        <td align="left" width="55%">
                                            <input type="text" name="elementary">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Year Graduated : </b>  </td>
                                        <td align="left" width="55%">
                                        <input name="elemyeargraduated" type="text" maxlength="50" required>
                                    </td>
                                    </tr>


                                    <tr>
                                        <td align="right" width="45%"> <b> High School : </b>  </td>
                                        <td align="left" width="55%">
                                        <input name="highschool" type="text" maxlength="200" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Year Graduated : </b>  </td>
                                        <td align="left" width="55%">
                                        <input name="hsyeargraduated" type="text" maxlength="50" required>
                                    </td>
                                    </tr>

                                    
                                    <tr>
                                        <td align="right" width="45%"> <b> College : </b>  </td>
                                        <td align="left" width="55%">
                                        <input name="campusname" type="text" maxlength="200" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Course: </b>  </td>
                                        <td align="left" width="55%">
                                        <input name="collegecourse" type="text" maxlength="200" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Year Graduated : </b>  </td>
                                        <td align="left" width="55%">
                                        <input name="collegeyeargraduated" type="text" maxlength="50" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Post Graduate : </b>  </td>
                                        <td align="left" width="55%">
                                        <input name="postrgraduate" type="text" maxlength="200" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Course: </b>  </td>
                                        <td align="left" width="55%">
                                        <input name="course" type="text" maxlength="200" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Year Graduated : </b>  </td>
                                        <td align="left" width="55%">
                                        <input name="yeargraduated" type="text" maxlength="50" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Others : </b>  </td>
                                        <td align="left" width="55%">
                                        <input name="postrgraduate" type="text" maxlength="200" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Course: </b>  </td>
                                        <td align="left" width="55%">
                                        <input name="course" type="text" maxlength="200" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Year Graduated : </b>  </td>
                                        <td align="left" width="55%">
                                        <input name="yeargraduated" type="text" maxlength="50" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Academic Honors: </b>  </td>
                                        <td align="left" width="55%">
                                        <input name="course" type="text" maxlength="200" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Award Distinction: </b>  </td>
                                        <td align="left" width="55%">
                                        <input name="course" type="text" maxlength="200" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Civil Service/Board Exams/Bar Exams: </b>  </td>
                                        <td align="left" width="55%">
                                        <input name="course" type="text" maxlength="200" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Year Taken/Passed: </b>  </td>
                                        <td align="left" width="55%">
                                        <input name="course" type="text" maxlength="200" required>
                                    </td>
                                    </tr>

                                </table>
                            </center>
                        </fieldset>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- EMPLOYED -->
        <table>
            <tbody>
                <tr>
                    <td align="left">
                        <div class="content"><b><font face="Century Gothic">Employment Details </font></b></div>
                        <fieldset>
                            <center>
                                <table cellspacing="5" cellpadding="4" width="100%">
                                    <tr>

                                        <td align="right" width="45%"> <b> Occupation : </b>  </td>
                                        <td align="left" width="55%">
                                    <input name="occupation" type="text" maxlength="255" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Employer :  </b>  </td>
                                        <td align="left" width="55%">
                                    <input name="employer" type="text" maxlength="255" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Business Address :  </b>  </td>
                                        <td align="left" width="55%">
                                    <input name="businessaddress" type="text" maxlength="255" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Contact Number :  </b>  </td>
                                        <td align="left" width="55%">
                                    <input name="contactnumber" type="text" maxlength="255" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Length of Service :  </b>  </td>
                                        <td align="left" width="55%">
                                    <input name="lengthofservice" type="text" maxlength="255" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Position :  </b>  </td>
                                        <td align="left" width="55%">
                                    <input name="position" type="text" maxlength="255" required>
                                    </td>
                                    </tr>

                                </table>
                            </center>
                        </fieldset>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- SUBMIT BUTTON -->
        <center>
            <table cellspacing="0" width="80%" border="0">
                <tbody>
                    <tr>
                        <td align="center">
                            <input type="submit" name="submit" id="submit" class="sub_red" style="padding: 10px 20px; background-color: #7D0A0A; color: #fff; border: none; border-radius: 5px; cursor: pointer;">
                        </td>
                    </tr>
                </tbody>
            </table>
        </center>
    </form>
</body>
</html>
