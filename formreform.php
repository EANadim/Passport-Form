<?php
    session_start();
    $flag=0;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>form reform</title>
        <link rel="stylesheet" href="stylecss.css">
    </head>
    <body>
        <p id="p01"><b>PASSPORT APPLICATION - RESUBMIT</b></p>
        <p id="p02"><i><b>Some fields must be filled with valid information.</b></i></p>
        <span id="span01">Fields marked with <span id="span02"><b><i>(*)</i></b></span>in the form were mandatory.</span>
        <br>
        <br>
        <div id="div01">
            <hr>
        </div>
        <div id="div02">
            <table id="table01">
                <?php
                     /*Applying in Validation*/
                    if(empty($_SESSION['applyingin']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Applying in must be filled</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                     /*Date of Birth Validation*/
                    if(empty($_SESSION['dateofbirth']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Date of Birth must be filled</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                     /*Gender Validation*/
                    if(empty($_SESSION['gender']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Gender must be filled</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                     /*Passport Type Validation*/
                    if(empty($_SESSION['passporttype']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Passport Type must be filled</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                     /*Birth Id No validation*/
                    if(empty($_SESSION['birthidno']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Birth Id No must be filled</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                    if(is_numeric($_SESSION['birthidno']) && !empty($_SESSION['birthidno']))
                    {
                        $temp=$_SESSION['birthidno'];
                        for($i=0;$i<strlen($temp);$i++)
                        {
                            if($temp[$i]=='.')
                            {
                                $flag=1;
                                echo"<tr>
                                <td><span class='span03'><b>Birth Id No must be filled with valid information.</b></span></td>
                                <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                                </tr>
                                <tr></tr>
                                <tr></tr>";
                                break;
                            }
                        }
                    }
                    if (!is_numeric($_SESSION['birthidno']) && !empty($_SESSION['birthidno']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Birth Id No must be filled with valid information</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";   
                    }
                    /*National Id No Validation*/
                    if(is_numeric($_SESSION['nationalidno']) && !empty($_SESSION['nationalidno']))
                    {
                        $temp=$_SESSION['nationalidno'];
                        for($i=0;$i<strlen($temp);$i++)
                        {
                            if($temp[$i]=='.')
                            {
                                $flag=1;
                                echo"<tr>
                                <td><span class='span03'><b>National Id No must be filled with valid information.</b></span></td>
                                <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                                </tr>
                                <tr></tr>
                                <tr></tr>";
                                break;
                            }
                        }
                    }
                    if (!is_numeric($_SESSION['nationalidno']) && !empty($_SESSION['nationalidno']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>National Id No must be filled with valid information</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";   
                    }
                    /*Tax Id No Validation*/
                    if(is_numeric($_SESSION['taxidno']) && !empty($_SESSION['taxidno']))
                    {
                        $temp=$_SESSION['taxidno'];
                        for($i=0;$i<strlen($temp);$i++)
                        {
                            if($temp[$i]=='.')
                            {
                                $flag=1;
                                echo"<tr>
                                <td><span class='span03'><b>Tax Id No must be filled with valid information.</b></span></td>
                                <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                                </tr>
                                <tr></tr>
                                <tr></tr>";
                                break;
                            }
                        }
                    }
                    if (!is_numeric($_SESSION['taxidno']) && !empty($_SESSION['taxidno']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Tax Id No must be filled with valid information</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";   
                    }
                    /*Height Validation*/
                    if(empty($_SESSION['cm']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Height in cm must be filled</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                    if (!is_numeric($_SESSION['cm']) && !empty($_SESSION['cm']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Height in cm must be filled with valid information</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";   
                    }
                    if(empty($_SESSION['inch']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Height in inch must be filled</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                    if (!is_numeric($_SESSION['inch']) && !empty($_SESSION['inch']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Height in inch must be filled with valid information</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";   
                    }
                     /*Religion Validation*/
                     if(empty($_SESSION['religion']))
                     {
                         $flag=1;
                         echo"<tr>
                             <td><span class='span03'><b>Religion must be filled</b></span></td>
                             <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                         </tr>
                         <tr></tr>
                         <tr></tr>";
                     }
                    /*Email Validation*/
                    if(empty($_SESSION['email']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Email must be filled</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                    /*Name of Applicant Validation*/
                    if(empty($_SESSION['nameofapplicant']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Name of Applicant must be filled</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                    if(!empty($_SESSION['nameofapplicant']) && !preg_match("/^[a-zA-Z ]*$/",$_SESSION['nameofapplicant']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Name of Applicant must be filled with valid information</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                    /*First Part Validation*/
                    if(!empty($_SESSION['firstpart']) && !preg_match("/^[a-zA-Z ]*$/",$_SESSION['firstpart']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>First Part must be filled with valid information</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                    /*Second Part Validation*/
                    if(empty($_SESSION['secondpart']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Second Part(Given Name) must be filled</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                    if(!empty($_SESSION['secondpart']) && !preg_match("/^[a-zA-Z ]*$/",$_SESSION['secondpart']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Second Part(Given Name) must be filled with valid information</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                    /*Nationality Validation*/
                    if(empty($_SESSION['nationality']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Nationality must be filled</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                    /*Citizenship Status Validation*/
                    if(empty($_SESSION['citizenshipstatus']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Citizenship Status must be filled</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                    /*Duel Citizenship Validation*/
                    if(empty($_SESSION['duelcitizenship']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Duel Citizenship must be filled</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                    /*Fathers Name Validation*/
                    if(empty($_SESSION['fathersname']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Father's Name must be filled</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                    if(!empty($_SESSION['fathersname']) && !preg_match("/^[a-zA-Z ]*$/",$_SESSION['fathersname']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Father's Name must be filled with valid information</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                    /*Mother's Name Validation*/
                    if(empty($_SESSION['mothersname']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Mother's Name must be filled</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                    if(!empty($_SESSION['mothersname']) && !preg_match("/^[a-zA-Z ]*$/",$_SESSION['mothersname']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Mother's Name must be filled with valid information</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                    /*Spouse's Name Validation*/
                    if(!empty($_SESSION['spousesname']) && !preg_match("/^[a-zA-Z ]*$/",$_SESSION['spousesname']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Spouse's Name must be filled with valid information</b></span></td>
                            <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                     /*Marital Status Validation*/
                     if(empty($_SESSION['maritalstatus']))
                     {
                         $flag=1;
                         echo"<tr>
                             <td><span class='span03'><b>Marital Status must be filled</b></span></td>
                             <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                         </tr>
                         <tr></tr>
                         <tr></tr>";
                     }
                     /*Applicant's Profession Validation*/
                     if(empty($_SESSION['applicantsprofession']))
                     {
                         $flag=1;
                         echo"<tr>
                             <td><span class='span03'><b>Applicant's Profession must be filled</b></span></td>
                             <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                         </tr>
                         <tr></tr>
                         <tr></tr>";
                     }
                     /*Country of Birth Validation*/
                     if(empty($_SESSION['countryofbirth']))
                     {
                         $flag=1;
                         echo"<tr>
                             <td><span class='span03'><b>Country of Birth must be filled</b></span></td>
                             <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                         </tr>
                         <tr></tr>
                         <tr></tr>";
                     }
                     /*Birth District Validation*/
                     if(empty($_SESSION['birthdistrict']))
                     {
                         $flag=1;
                         echo"<tr>
                             <td><span class='span03'><b>Birth District must be filled</b></span></td>
                             <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                         </tr>
                         <tr></tr>
                         <tr></tr>";
                     }
                     /*Present Address Validation*/
                     /*District Validation*/
                     if(empty($_SESSION['district']))
                     {
                         $flag=1;
                         echo"<tr>
                             <td><span class='span03'><b>District(Present Address) must be filled</b></span></td>
                             <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                         </tr>
                         <tr></tr>
                         <tr></tr>";
                     }
                     /*Police Station Validation*/
                     if(empty($_SESSION['policestation']))
                     {
                         $flag=1;
                         echo"<tr>
                             <td><span class='span03'><b>Police Station(Present Address) must be filled</b></span></td>
                             <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                         </tr>
                         <tr></tr>
                         <tr></tr>";
                     }
                     /*Post Office Validation*/
                     if(empty($_SESSION['postoffice']))
                     {
                         $flag=1;
                         echo"<tr>
                             <td><span class='span03'><b>Post Office(Present Address) must be filled</b></span></td>
                             <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                         </tr>
                         <tr></tr>
                         <tr></tr>";
                     }
                    /*Permanent Address Validation*/
                    if(!empty($_SESSION['sameasabove']))
                    {
                        $_SESSION['villageper']=$_SESSION['village'];
                        $_SESSION['roadper']=$_SESSION['road'];
                        $_SESSION['districtper']=$_SESSION['district'];
                        $_SESSION['policestationper']=$_SESSION['policestation'];
                        $_SESSION['postofficeper']=$_SESSION['postoffice'];
                    }
                    if(empty($_SESSION['sameasabove']))
                    {
                        /*Districtper Validation*/
                        if(empty($_SESSION['districtper']))
                        {
                            $flag=1;
                            echo"<tr>
                                <td><span class='span03'><b>District(Permanent Address) must be filled</b></span></td>
                                <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                            </tr>
                            <tr></tr>
                            <tr></tr>";
                        }
                        /*Police Stationper Validation*/
                        if(empty($_SESSION['policestationper']))
                        {
                            $flag=1;
                            echo"<tr>
                                <td><span class='span03'><b>Police Station(Permanent Address) must be filled</b></span></td>
                                <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                            </tr>
                            <tr></tr>
                            <tr></tr>";
                        }
                        /*Post Officeper Validation*/
                        if(empty($_SESSION['postofficeper']))
                        {
                            $flag=1;
                            echo"<tr>
                                <td><span class='span03'><b>Post Office(Permanent Address) must be filled</b></span></td>
                                <td><a href='index.php' class='button02'>GO TO PAGE</a></td>
                            </tr>
                            <tr></tr>
                            <tr></tr>";
                        }                        
                    }
                    /*Office No Validation*/
                    if(is_numeric($_SESSION['officeno']) && !empty($_SESSION['officeno']))
                    {
                        $temp=$_SESSION['officeno'];
                        for($i=0;$i<strlen($temp);$i++)
                        {
                            if($temp[$i]=='.')
                            {
                                $flag=1;
                                echo"<tr>
                                <td><span class='span03'><b>Office No must be filled with valid information.</b></span></td>
                                <td><a href='formtwo.php' class='button02'>GO TO PAGE</a></td>
                                </tr>
                                <tr></tr>
                                <tr></tr>";
                                break;
                            }
                        }
                    }
                    if (!is_numeric($_SESSION['officeno']) && !empty($_SESSION['officeno']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Office No must be filled with valid information</b></span></td>
                            <td><a href='formtwo.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";   
                    }
                    /*Residence No Validation*/
                    if(is_numeric($_SESSION['residenceno']) && !empty($_SESSION['residenceno']))
                    {
                        $temp=$_SESSION['residenceno'];
                        for($i=0;$i<strlen($temp);$i++)
                        {
                            if($temp[$i]=='.')
                            {
                                $flag=1;
                                echo"<tr>
                                <td><span class='span03'><b>Residence No must be filled with valid information.</b></span></td>
                                <td><a href='formtwo.php' class='button02'>GO TO PAGE</a></td>
                                </tr>
                                <tr></tr>
                                <tr></tr>";
                                break;
                            }
                        }
                    }
                    if (!is_numeric($_SESSION['residenceno']) && !empty($_SESSION['residenceno']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Residence No must be filled with valid information</b></span></td>
                            <td><a href='formtwo.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";   
                    }
                    /*Mobile No Validation*/
                    if(is_numeric($_SESSION['mobileno']) && !empty($_SESSION['mobileno']))
                    {
                        $temp=$_SESSION['mobileno'];
                        for($i=0;$i<strlen($temp);$i++)
                        {
                            if($temp[$i]=='.')
                            {
                                $flag=1;
                                echo"<tr>
                                <td><span class='span03'><b>Mobile No must be filled with valid information.</b></span></td>
                                <td><a href='formtwo.php' class='button02'>GO TO PAGE</a></td>
                                </tr>
                                <tr></tr>
                                <tr></tr>";
                                break;
                            }
                        }
                    }
                    if (!is_numeric($_SESSION['mobileno']) && !empty($_SESSION['mobileno']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Mobile No must be filled with valid information</b></span></td>
                            <td><a href='formtwo.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";   
                    }
                    /*Passport No Validation*/
                    if(is_numeric($_SESSION['passportno']) && !empty($_SESSION['passportno']))
                    {
                        $temp=$_SESSION['passportno'];
                        for($i=0;$i<strlen($temp);$i++)
                        {
                            if($temp[$i]=='.')
                            {
                                $flag=1;
                                echo"<tr>
                                <td><span class='span03'><b>Passport No must be filled with valid information.</b></span></td>
                                <td><a href='formtwo.php' class='button02'>GO TO PAGE</a></td>
                                </tr>
                                <tr></tr>
                                <tr></tr>";
                                break;
                            }
                        }
                    }
                    if (!is_numeric($_SESSION['passportno']) && !empty($_SESSION['passportno']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Passport No must be filled with valid information</b></span></td>
                            <td><a href='formtwo.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";   
                    }
                    /*Emergency Name Validation*/
                    if(empty($_SESSION['nameemer']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Name must be filled</b></span></td>
                            <td><a href='formtwo.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                    if(!empty($_SESSION['nameemer']) && !preg_match("/^[a-zA-Z ]*$/",$_SESSION['nameemer']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Name must be filled with valid information</b></span></td>
                            <td><a href='formtwo.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                    /*Country Validation*/
                    if(empty($_SESSION['countryemer']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Country(Emergency Contact No) must be filled</b></span></td>
                            <td><a href='formtwo.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                    /*Address Validation*/
                    if(!empty($_SESSION['sameaspermanentaddress']))
                    {
                        $_SESSION['villageemer']=$_SESSION['villageper'];
                        $_SESSION['roademer']=$_SESSION['roadper'];
                        $_SESSION['districtemer']=$_SESSION['districtper'];
                        $_SESSION['policestationemer']=$_SESSION['policestationper'];
                        $_SESSION['villageemer']=$_SESSION['villageper'];
                    }
                    if(!empty($_SESSION['sameaspresentaddress']))
                    {
                        $_SESSION['villageemer']=$_SESSION['village'];
                        $_SESSION['roademer']=$_SESSION['road'];
                        $_SESSION['districtemer']=$_SESSION['district'];
                        $_SESSION['policestationemer']=$_SESSION['policestation'];
                        $_SESSION['villageemer']=$_SESSION['village'];
                    }
                    if(empty($_SESSION['sameaspermanentaddress']) && empty($_SESSION['sameaspresentaddress']))
                    {
                        /*Districtemer Validation*/
                        if(empty($_SESSION['districtemer']))
                        {
                            $flag=1;
                            echo"<tr>
                                <td><span class='span03'><b>District(Emergency Address) must be filled</b></span></td>
                                <td><a href='formtwo.php' class='button02'>GO TO PAGE</a></td>
                            </tr>
                            <tr></tr>
                            <tr></tr>";
                        }
                        /*Police Stationper Validation*/
                        if(empty($_SESSION['policestationemer']))
                        {
                            $flag=1;
                            echo"<tr>
                                <td><span class='span03'><b>Police Station(Emergency Address) must be filled</b></span></td>
                                <td><a href='formtwo.php' class='button02'>GO TO PAGE</a></td>
                            </tr>
                            <tr></tr>
                            <tr></tr>";
                        }
                        /*Post Officeper Validation*/
                        if(empty($_SESSION['postofficeemer']))
                        {
                            $flag=1;
                            echo"<tr>
                                <td><span class='span03'><b>Post Office(Emergency Address) must be filled</b></span></td>
                                <td><a href='formtwo.php' class='button02'>GO TO PAGE</a></td>
                            </tr>
                            <tr></tr>
                            <tr></tr>";
                        }                            
                    }
                    /*Emergency Contact No Validation*/
                    if(empty($_SESSION['contactnoemer']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Contact No must be filled</b></span></td>
                            <td><a href='formtwo.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";
                    }
                    if(is_numeric($_SESSION['contactnoemer']) && !empty($_SESSION['contactnoemer']))
                    {
                        $temp=$_SESSION['contactnoemer'];
                        for($i=0;$i<strlen($temp);$i++)
                        {
                            if($temp[$i]=='.')
                            {
                                $flag=1;
                                echo"<tr>
                                <td><span class='span03'><b>Contact No must be filled with valid information.</b></span></td>
                                <td><a href='formtwo.php' class='button02'>GO TO PAGE</a></td>
                                </tr>
                                <tr></tr>
                                <tr></tr>";
                                break;
                            }
                        }
                    }
                    if (!is_numeric($_SESSION['contactnoemer']) && !empty($_SESSION['contactnoemer']))
                    {
                        $flag=1;
                        echo"<tr>
                            <td><span class='span03'><b>Contact No must be filled with valid information</b></span></td>
                            <td><a href='formtwo.php' class='button02'>GO TO PAGE</a></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>";   
                    }
                    /*Relationship Validation*/
                    if(empty($_SESSION['relationshipemer']))
                    {
                            $flag=1;
                            echo"<tr>
                                <td><span class='span03'><b>Relationship(Emergency Address) must be filled</b></span></td>
                                <td><a href='formtwo.php' class='button02'>GO TO PAGE</a></td>
                            </tr>
                            <tr></tr>
                            <tr></tr>";
                    }  
                    /*Payment Validation*/
                    if(empty($_SESSION['skippayment']))
                    {
                         /*Currency Validation*/
                        if(empty($_SESSION['currency']))
                        {
                            $flag=1;
                            echo"<tr>
                                <td><span class='span03'><b>Currency must be filled</b></span></td>
                                <td><a href='formthree.php' class='button02'>GO TO PAGE</a></td>
                            </tr>
                            <tr></tr>
                            <tr></tr>";
                        } 
                        /*Amount Validation*/
                        if(empty($_SESSION['amount']))
                        {
                            $flag=1;
                            echo"<tr>
                                <td><span class='span03'><b>Amount must be filled</b></span></td>
                                <td><a href='formthree.php' class='button02'>GO TO PAGE</a></td>
                            </tr>
                            <tr></tr>
                            <tr></tr>";
                        }
                        if (!is_numeric($_SESSION['amount']) && !empty($_SESSION['amount']))
                        {
                            $flag=1;
                            echo"<tr>
                                <td><span class='span03'><b>Amount must be filled with valid information</b></span></td>
                                <td><a href='formthree.php' class='button02'>GO TO PAGE</a></td>
                            </tr>
                            <tr></tr>
                            <tr></tr>";   
                        }
                        /*Date of Payment Validation*/
                        if(empty($_SESSION['dateofpayment']))
                        {
                            $flag=1;
                            echo"<tr>
                                <td><span class='span03'><b>Date of Payment must be filled</b></span></td>
                                <td><a href='formthree.php' class='button02'>GO TO PAGE</a></td>
                            </tr>
                            <tr></tr>
                            <tr></tr>";
                        }
                        /*Receipt No Validation*/
                        if(empty($_SESSION['receiptno']))
                        {
                            $flag=1;
                            echo"<tr>
                                <td><span class='span03'><b>Receipt No must be filled</b></span></td>
                                <td><a href='formthree.php' class='button02'>GO TO PAGE</a></td>
                            </tr>
                            <tr></tr>
                            <tr></tr>";
                        }
                        if(is_numeric($_SESSION['receiptno']) && !empty($_SESSION['receiptno']))
                        {
                            $temp=$_SESSION['receiptno'];
                            for($i=0;$i<strlen($temp);$i++)
                            {
                                if($temp[$i]=='.')
                                {
                                    $flag=1;
                                    echo"<tr>
                                    <td><span class='span03'><b>Receipt No must be filled with valid information.</b></span></td>
                                    <td><a href='formthree.php' class='button02'>GO TO PAGE</a></td>
                                    </tr>
                                    <tr></tr>
                                    <tr></tr>";
                                    break;
                                }
                            }
                        }
                        if (!is_numeric($_SESSION['receiptno']) && !empty($_SESSION['receiptno']))
                        {
                            $flag=1;
                            echo"<tr>
                                <td><span class='span03'><b>Receipt No must be filled with valid information</b></span></td>
                                <td><a href='formthree.php' class='button02'>GO TO PAGE</a></td>
                            </tr>
                            <tr></tr>
                            <tr></tr>";   
                        }
                        /*Name of Bank Validation*/
                        if(empty($_SESSION['nameofbank']))
                        {
                            $flag=1;
                            echo"<tr>
                                <td><span class='span03'><b>Name of Bank must be filled</b></span></td>
                                <td><a href='formthree.php' class='button02'>GO TO PAGE</a></td>
                            </tr>
                            <tr></tr>
                            <tr></tr>";
                        }
                        /*Name of Branch Validation*/
                        if(empty($_SESSION['nameofbranch']))
                        {
                            $flag=1;
                            echo"<tr>
                                <td><span class='span03'><b>Name of Branch must be filled</b></span></td>
                                <td><a href='formthree.php' class='button02'>GO TO PAGE</a></td>
                            </tr>
                            <tr></tr>
                            <tr></tr>";
                        } 
                    }
                    if(!empty($_SESSION['skippayment']))
                    {
                        $_SESSION['currency']="";
                        $_SESSION['amount']="";
                        $_SESSION['dateofpayment']="";
                        $_SESSION['receiptno']="";
                        $_SESSION['nameofbank']="";
                        $_SESSION['nameofbranch']="";
                    }
                ?>
            </table>
        </div>
    </body>
</html>
<?php
    if($flag==0)
        header('Location:formresults.php');
?>