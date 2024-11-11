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
    <title>Alumni Tracking System</title>
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
                                        <input name="eaddress" type="text" maxlength="46" required>
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
                        <div class="content"><b><font face="Century Gothic">Educational Profile </font></b></div>

                        <fieldset>
                            <center>
                                <table cellspacing="6" cellpadding="4" width="100%">
                                    <tr>
                                        <td align="right" width="45%"><b>Year of Enrollment (JHS) :</b></td>
                                        <td align="left" width="55%">
                                            <input type="text" name="enrollment">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Year of Completion (JHS) : </b>  </td>
                                        <td align="left" width="55%">
                                        <input name="completion" type="text" maxlength="50" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Senior High School Level : </b>  </td>
                                        <td align="left" width="55%">
                                        <select name="shslevel" required>
                                                <option  value="">--Select--</option>
                                                <option value="Grade 11">Grade 11</option>
                                                <option value="Grade 12">Grade 12</option>
                                            </select>
                                            </tr>
                                            </td>


                                    <tr>
                                        <td align="right" width="45%"> <b> Senior High School Strand : </b>  </td>
                                        <td align="left" width="55%">
                                        <input name="shsstrand" type="text" maxlength="50" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Senior High School Campus : </b>  </td>
                                        <td align="left" width="55%">
                                        <input name="shscampus" type="text" maxlength="100" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> College Student Classification :  </b> </td>
                                        <td align="left" width="55%">
                                        <select name="sclassification" required> 
                                                <option  value="">--Select--</option>
                                                <option value="Freshman">Freshman</option>
                                                <option value="Sophomore">Sophomore</option>
                                                <option value="Junior">Junior</option>
                                                <option value="Senior">Senior</option>
                                                <option value="Others">Others</option>
                                            </select>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> College Degree : </b>  </td>
                                        <td align="left" width="55%">
                                        <select name="collegedegree" required> 
                                                <option  value="">--Select--</option>
                                                <option value="Associate Degree">Associate Degree</option>
                                                <option value="Bachelor's Degree">Bachelor's Degree</option>
                                                <option value="Master's Degree">Master's Degree</option>
                                                <option value="Doctoral Degree">Doctoral Degree</option>
                                            </select>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> College Program : </b>  </td>
                                        <td align="left" width="55%">
                                        <input name="collegeprogram" type="text" maxlength="200" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Campus Name : </b>  </td>
                                        <td align="left" width="55%">
                                        <input name="campusname" type="text" maxlength="200" required>
                                    </td>
                                    </tr>

                                </table>
                            </center>
                        </fieldset>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- EMPLOYMENT PROFILE -->
        <table>
            <tbody>
                <tr>
                    <td align="left">
                        <div class="content"><b><font face="Century Gothic">Employment Profile </font></b></div>
                        <fieldset>
                            <center>
                                <table cellspacing="5" cellpadding="4" width="100%">
                                    <tr>
                                        <td align="right" width="45%"><b><font face="Century Gothic">Employment Status:</font></b></td>
                                        <td align="left" width="55%">
                                            <select name="employmentstatus" required>
                                                <option value="">--Select--</option>
                                                <option value="Employed">Employed</option>
                                                <option value="Self-employed">Self-employed</option>
                                                <option value="Unemployed">Unemployed</option>
                                            </select>
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
                        <div class="content"><b><font face="Century Gothic">For Employed Individuals </font></b></div>
                        <fieldset>
                            <center>
                                <table cellspacing="5" cellpadding="4" width="100%">
                                    <tr>
                                        <td align="right" width="45%"><b><font face="Century Gothic">Employment Type :</font></b></td>
                                        <td align="left" width="55%">
                                            <select name="employmenttype" required>
                                                <option value="">--Select--</option>
                                                <option value="Full time">Full time</option>
                                                <option value="Part time">Part time</option>
                                                <option value="Freelance">Freelance</option>
                                                <option value="Fixed term">Fixed term</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </td>
                                    </tr>
                             
                                  <tr>
                                       <td align="right" width="45%">
                                          <b><font face="Century Gothic"> Employment Agency : </b></font>
                                       </td>
                                       <td align="left" width="55%">
                                          <select name="employmentagency" required>
                                             <option value="">--Select--</option>
                                             <option value="Public">Public</option>
                                             <option value="Private">Private</option>
                                             <option value="Others">Others</option>
                                          </select>
                                       </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Organization/Company Name : </b>  </td>
                                        <td align="left" width="55%">
                                    <input name="companyname" type="text" maxlength="255" required>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td align="right" width="45%"> <b> Average income/salary :  </b>  </td>
                                        <td align="left" width="55%">
                                    <input name="employedaveincome" type="text" maxlength="255" required>
                                    </td>
                                    </tr>

                                </table>
                            </center>
                        </fieldset>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- SELF-EMPLOYED -->
        <table>
            <tbody>
                <tr>
                    <td align="left">
                        <div class="content"><b><font face="Century Gothic">For Self-Employed Individuals </font></b></div>
                        <fieldset>
                            <center>
                                <table cellspacing="5" cellpadding="4" width="100%">
                                    <tr>
                                        <td align="right" width="45%"><b><font face="Century Gothic">Type of Self-employment:</font></b></td>
                                        <td align="left" width="55%">
                                            <select name="selfemploymenttype" required>
                                                <option value="">--Select--</option>
                                                <option value="Business">Business</option>
                                                     <option value="Freelance">Freelance</option>
                                                     <option value="Retail">Retail</option>
                                                     <option value="Trading">Trading</option>
                                                     <option value="E-commerce">E-commerce</option>
                                                     <option value="Creative Services">Creative Services</option>
                                                     <option value="Others">Others</option>
                                                  </select>
                                               </td>
                                            </tr>

                                    <tr>
                                            <td align="right" width="45%"> <b> Business Name : </b>  </td>
                                            <td align="left" width="55%">
                                            <input name="businessname" type="text" maxlength="200" required>
                                    </td>
                                    </tr>

                                    <tr>
                                            <td align="right" width="45%"> <b> Job Name : </b>  </td>
                                            <td align="left" width="55%">
                                            <input name="jobname" type="text" maxlength="200" required>
                                    </td>
                                    </tr>

                                    <tr>
                                            <td align="right" width="45%"> <b> Average income/salary :  </b>  </td>
                                            <td align="left" width="55%">
                                    <input name="selfemployedaveincome" type="text" maxlength="255" required>
                                    </td>
                                    </tr>
                                </table>
                            </center>
                        </fieldset>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- UNEMPLOYED -->
        <table>
            <tbody>
                <tr>
                    <td align="left">
                        <div class="content"><b><font face="Century Gothic">For Unemployed Individuals </font></b></div>
                        <fieldset>
                            <center>
                                <table cellspacing="5" cellpadding="4" width="100%">
                                    <tr>
                                        <td align="right" width="45%"><b><font face="Century Gothic">Reason for being unemployed :</font></b></td>
                                        <td align="left" width="55%">
                                            <select name="reason" required>
                                                <option value="">--Select--</option>
                                                 
                                                 <option value="Student">Student</option>
                                                 <option value="No job opportunity">No job opportunity</option>
                                                 <option value="Lack of work experience">Lack of work experience</option>
                                                 <option value="Financial reasons">Financial reasons</option>
                                                 <option value="Health-related reasons">Health-related reasons</option>
                                                 <option value="Family-related reasons">Family-related reasons</option>
                                                 <option value="Others">Others</option> 
                                            </select>
                                        </td>
                                    </tr>
          
                                <tr>
                                       <td align="right" width="45%">
                                          <b><font face="Century Gothic"> Financial resource/support : </b></font>
                                       </td>
                
                                       <td align="left" width="55%">
                                          <select name="financialresource" required>
                                             <option value="">--Select--</option>
                                             <option value="Allowance from parents/relatives/guardians">Allowance from parents/relatives/guardians</option>
                                             <option value="Own savings">Own savings</option>
                                             <option value="Investment">Investment</option>
                                             <option value="Scholarship">Scholarship</option>
                                             <option value="Affliate marketing">Affliate marketing</option>
                                             <option value="Freelancing">Freelancing</option>
                                             <option value="Others">Others</option>
                                          </select>
                                       </td>
                                </tr>

                                <tr>
                                   <td align="right" width="45%">
                                      <b><font face="Century Gothic"> Preferred industry to work in : </b></font>
                                   </td>
            
                                   <td align="left" width="55%">
                                      <select name="preferredinsutry" required>
                                             <option value="">--Select--</option>
                                             <option value="Agriculture">Agriculture</option>
                                             <option value="Business">Business</option>
                                             <option value="Computer & Technology">Computer & Technology</option>
                                             <option value="Customer Marketing">Customer Marketing</option>
                                             <option value="Construction">Construction</option>
                                             <option value="Education">Education</option>
                                             <option value="Entertainment">Entertainment</option>
                                             <option value="Fashion">Fashion</option>
                                             <option value="Finance and Economic">Finance and Economic</option>
                                             <option value="Food and beverage">Food and beverage</option>
                                             <option value="Healthcare">Healthcare</option>
                                             <option value="Telecommunication">Telecommunication</option>
                                             <option value="Others">Others</option>
                                      </select>
                                   </td>
                                </tr>

                             <tr>
                                            <td align="right" width="45%"> <b> Preferred average income/salary : </b>  </td>
                                            <td align="left" width="55%">
                                            <input name="preferredaveincome" type="text" maxlength="255" required>
                                         </td>
                                            </tr>
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
