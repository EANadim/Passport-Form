<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>index</title>
        <link rel="stylesheet" href="stylecss.css">
    </head>
    <body>
        <p id="p01"><b>PASSPORT APPLICATION - STAGE 1</b></p>
        <p id="p02"><i><b>Before filling up the onine application form read the <span id="span00"><u>guidelines</u></span> carefully.</b></i></p>
        <span id="span01">Fields marked with <span id="span02"><b><i>(*)</i></b></span> are mandatory.</span>
        <br>
        <br>
        <div id="div01">
            <hr>
        </div>
        <div id="div02">
            <form action="formoneresults.php" method="post">
                <table id="table01">
                    <tr>
                        <td colspan="2"><p class="p03"><b>Passport Application Information</b></p></td>
                        <td>
                            <span class="span03"><b>Date of Birth:<span class="span04">*</span></b></span>
                        </td>
                        <td>
                            <input type="date" class="text01" size="30" name="dateofbirth"<?php if(isset($_SESSION['dateofbirth'])) echo "value=".$_SESSION['dateofbirth'];?>>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="span03"><b>Applying in:<span class="span04">*</span></b></span>
                        </td>
                        <td>
                            <select class="select01" name="applyingin">
                                <option value="" <?php if(isset($_SESSION['applyingin'])){if($_SESSION['applyingin']=='')echo "selected";} ?> ></option>
                                <option value="Bangladesh" <?php if(isset($_SESSION['applyingin'])){if($_SESSION['applyingin']=='Bangladesh')echo "selected";} ?> >Bangladesh</option>
                                <option value="Germany" <?php if(isset($_SESSION['applyingin'])){if($_SESSION['applyingin']=='Germany')echo "selected"; }?> >Germany</option>
                                <option value="Canada" <?php if(isset($_SESSION['applyingin'])){if($_SESSION['applyingin']=='Canada')echo "selected";} ?> >Canada</option>
                                <option value="Turkey" <?php if(isset($_SESSION['applyingin'])){if($_SESSION['applyingin']=='Turkey')echo "selected";} ?> >Turkey</option>
                            </select>
                        </td>
                        <td rowspan="3">
                            <span class="span03"><b>Gender:<span class="span04">*</span></b></span>
                        </td>
                        <td rowspan="3">
                            <input type="radio" name="gender" value="male" <?php if(isset($_SESSION['gender'])){if($_SESSION['gender']=='male') echo "checked";} ?>><span class="span03"><b>Male</b></span><br>
                            <input type="radio" name="gender" value="female" <?php  if(isset($_SESSION['gender'])){if($_SESSION['gender']=='female') echo "checked";} ?>> <span class="span03"><b>Female</b></span><br>
                            <input type="radio" name="gender" value="other" <?php  if(isset($_SESSION['gender'])){if($_SESSION['gender']=='other') echo "checked";} ?>><span class="span03"><b>Others</b></span><br>    
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" rowspan="2"><span class="span03"><b>Application Type:  <span id="span05">NEW APPLICATION</b></span></span></td>
                    </tr>
                    <tr><td></td><td></td><td></td><td></td></tr>
                    <tr>
                        <td rowspan="2"><span class="span03"><b>Passport Type:<span class="span04">*</span></b></span></td>
                        <td rowspan="2">
                            <select class="select01" name="passporttype">
                                <option value="" name="passporttype" <?php  if(isset($_SESSION['passporttype'])){if($_SESSION['passporttype']=='')echo "selected";} ?> ></option>
                                <option value="Ordinary passport (Green cover)" name="passporttype" <?php  if(isset($_SESSION['passporttype'])){if($_SESSION['passporttype']=='Ordinary passport (Green cover)')echo "selected";} ?>>Ordinary passport (Green cover)</option>
                                <option value="Official passport (Blue cover)" name="passporttype" <?php  if(isset($_SESSION['passporttype'])){if($_SESSION['passporttype']=='Official passport (Blue cover)')echo "selected";} ?>>Official passport (Blue cover) </option>
                                <option value="Diplomatic passport (Red cover)" name="passporttype" <?php  if(isset($_SESSION['passporttype'])){if($_SESSION['passporttype']=='Diplomatic passport (Red cover)')echo "selected";} ?>>Diplomatic passport (Red cover) </option>
                            </select>
                        </td>
                        <td><span class="span03"><b>Birth ID No:<span class="span04">*</span></b></span></td>
                        <td>
                            <input type="text" class="text01" size="30" name="birthidno" <?php if(!empty($_SESSION['birthidno'])) echo "value=".$_SESSION['birthidno'];?> >
                        </td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>National ID No:</b></span></td>
                        <td>
                            <input type="text" class="text01" size="30" name="nationalidno" <?php if(!empty($_SESSION['nationalidno'])) echo "value=".$_SESSION['nationalidno'];?> >
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2"><span class="span03"><b>Delivery Type:</b></span></td>
                        <td rowspan="2">
                            <input type="radio" name="deliverytype" value="regular" <?php if(isset($_SESSION['deliverytype'])){if($_SESSION['deliverytype']=='regular') echo "checked";} ?>> <span class="span03"><b>Regular</b></span><br>
                            <input type="radio" name="deliverytype" value="express"<?php if(isset($_SESSION['deliverytype'])){if($_SESSION['deliverytype']=='express') echo "checked";} ?>> <span class="span03"><b>Express</b></span><br>   
                        </td>
                        <td>
                            <span class="span03"><b>Tax ID No.</b></span>
                        </td>
                        <td>
                            <input type="text" class="text01" size="30" name="taxidno" <?php if(!empty($_SESSION['taxidno'])) echo "value=".$_SESSION['taxidno'];?>>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>Height:<span class="span04">*</span></b></span></td>
                        <td>
                            <input type="text" class="text01" size="7" name="cm" <?php if(!empty($_SESSION['cm'])) echo "value=".$_SESSION['cm'];?> ><span> cm </span>
                            <input type="text" class="text01" size="7" name="inch" <?php if(!empty($_SESSION['inch'])) echo "value=".$_SESSION['inch'];?>><span> inch </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><p class="p03"><b>Personal Information</b></p></td>
                        <td><span class="span03"><b>Religion:<span class="span04">*</span></b></span></td>
                        <td>
                            <select class="select01" name="religion">
                                <option value="" <?php if(isset($_SESSION['religion'])){if($_SESSION['religion']=='')echo "selected";} ?> ></option>
                                <option value="Islam" name="religion"  <?php if(isset($_SESSION['religion'])){if($_SESSION['religion']=='Islam') echo "selected";} ?> >Islam</option>
                                <option value="Hindu" name="religion" <?php if(isset($_SESSION['religion'])){if($_SESSION['religion']=='Hindu') echo "selected";} ?> >Hindu</option>
                                <option value="Buddha" name="religion" <?php if(isset($_SESSION['religion'])){if($_SESSION['religion']=='Buddha') echo "selected";} ?> >Buddha</option>
                            </select>   
                        </td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>Name of applicant:<span class="span04">*</span></b></span></td>
                        <td>
                            <input type="text" class="text01" size="30" name="nameofapplicant" <?php if(!empty($_SESSION['nameofapplicant'])) echo "value=".$_SESSION['nameofapplicant'];?>>
                        </td>
                        <td><span class="span03"><b>Email:<span class="span04">*</span></b></span></td>
                        <td>
                            <input type="email" class="text01" size="30" name="email" <?php if(!empty($_SESSION['email'])) echo "value=".$_SESSION['email'];?>>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>First Part(Given Name):</b></span></td>
                        <td>
                            <input type="text" class="text01" size="30" name="firstpart" <?php if(!empty($_SESSION['firstpart'])) echo "value=".$_SESSION['firstpart'];?>>
                        </td>
                        <td colspan="2"><p class="p03"><b>Citizenship Information</b></p></td>
                    </tr>
                    <tr>
                        <td rowspan="2"><span class="span03"><b>Second Part(Given Name):<span class="span04">*</span></b></span></td>
                        <td rowspan="2">
                            <input type="text" class="text01" size="30" name="secondpart" <?php if(!empty($_SESSION['secondpart'])) echo "value=".$_SESSION['secondpart'];?>>
                        </td>
                        <td><span class="span03"><b>Nationality:<span class="span04">*</span></b></span></td>
                        <td>
                            <select class="select01" name="nationality">
                                <option value="" <?php if(isset($_SESSION['nationality'])){if($_SESSION['nationality']=='')echo "selected";} ?> ></option>
                                <option value="Bangladeshi" <?php if(isset($_SESSION['nationality'])){if($_SESSION['nationality']=='Bangladeshi') echo "selected";} ?> >Bangladeshi</option>
                                <option value="German" <?php if(isset($_SESSION['nationality'])){if($_SESSION['nationality']=='German') echo "selected";} ?>>German</option>
                                <option value="Canadian" <?php if(isset($_SESSION['nationality'])){if($_SESSION['nationality']=='Canadian') echo "selected";} ?> >Canadian</option>
                                <option value="Turkey" <?php if(isset($_SESSION['nationality'])){if($_SESSION['nationality']=='Turkey') echo "selected";} ?> >Turkey</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>Citizenship Status:<span class="span04">*</span></b></span></td>
                        <td>
                            <select class="select01" name="citizenshipstatus">
                                <option value="" <?php if(isset($_SESSION['citizenshipstatus'])){if($_SESSION['citizenshipstatus']=='')echo "selected";} ?> ></option>
                                <option value="birth" <?php if(isset($_SESSION['citizenshipstatus'])){if($_SESSION['citizenshipstatus']=='birth') echo "selected";} ?>>BIRTH</option>
                                <option value="work" <?php if(isset($_SESSION['citizenshipstatus'])){if($_SESSION['citizenshipstatus']=='work') echo "selected";} ?>>WORK</option>
                                <option value="decent" <?php if(isset($_SESSION['citizenshipstatus'])){if($_SESSION['citizenshipstatus']=='decent') echo "selected";} ?>>DECENT</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><span class="span03"><b>Guardian </b></span><input type="checkbox" name="guardian" value="guardian" <?php if(!empty($_SESSION['guardian'])) echo "checked"; ?>><span class="span04"><b><i>"Tick"</i></b></span><span class="span03"><b>only if Applicant is legally adapted</b></span></td>
                        <td rowspan="3"><span class="span03"><b>Duel Citizenship:<span class="span04">*</span></b></span></td>
                        <td rowspan="3">
                            <input type="radio" name="duelcitizenship" value="yes" <?php if(isset($_SESSION['duelcitizenship'])){if($_SESSION['duelcitizenship']=='yes') echo "checked";} ?>><span class="span03"><b>Yes</b></span><br>
                            <input type="radio" name="duelcitizenship" value="no" <?php if(isset($_SESSION['duelcitizenship'])){if($_SESSION['duelcitizenship']=='no') echo "checked";} ?> ><span class="span03"><b>No</b></span><br> 
                        </td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>Father's Name:<span class="span04">*</span></b></span></td>
                        <td>
                            <input type="text" class="text01" size="30" name="fathersname" <?php if(!empty($_SESSION['fathersname'])) echo "value=".$_SESSION['fathersname'];?>>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>Father's Nationality:<span class="span04">*</span></b></span></td>
                        <td>
                            <select class="select01" name="fathersnationality">
                                <option value="" <?php if(isset($_SESSION['fathersnationality'])){if($_SESSION['fathersnationality']=='')echo "selected";} ?> ></option>
                                <option value="Bangladeshi"<?php  if(isset($_SESSION['fathersnationality'])){if($_SESSION['fathersnationality']=='Bangladeshi') echo "selected";} ?> >Bangladeshi</option>
                                <option value="German" <?php  if(isset($_SESSION['fathersnationality'])){if($_SESSION['fathersnationality']=='German') echo "selected";} ?> >German</option>
                                <option value="Canadian" <?php  if(isset($_SESSION['fathersnationality'])){if($_SESSION['fathersnationality']=='Canadian') echo "selected";} ?> >Canadian</option>
                                <option value="Turkey"<?php  if(isset($_SESSION['fathersnationality'])){if($_SESSION['fathersnationality']=='Turkey') echo "selected";} ?> >Turkey</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>Father's Profession:<span class="span04">*</span></b></span></td>
                        <td>
                            <select class="select01" name="fathersprofession">
                                <option value="" <?php  if(isset($_SESSION['fathersprofession'])){if($_SESSION['fathersprofession']=='')echo "selected";} ?> ></option>
                                <option value="teacher" <?php if(isset($_SESSION['fathersprofession'])){if($_SESSION['fathersprofession']=='teacher') echo "selected";} ?> >Teacher</option>
                                <option value="doctor" <?php if(isset($_SESSION['fathersprofession'])){if($_SESSION['fathersprofession']=='doctor') echo "selected";} ?> >Doctor</option>
                                <option value="engineer" <?php if(isset($_SESSION['fathersprofession'])){if($_SESSION['fathersprofession']=='engineer') echo "selected";} ?> >Engineer</option>
                                <option value="lawyer" <?php if(isset($_SESSION['fathersprofession'])){if($_SESSION['fathersprofession']=='lawyer') echo "selected";} ?> >Lawyer</option>
                            </select>
                        </td>
                        <td colspan="2"><p class="p03"><b>Present Address</b></p></td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>Mother's Name:<span class="span04">*</span></b></span></td>
                        <td>
                            <input type="text" class="text01" size="30" name="mothersname" <?php if(!empty($_SESSION['mothersname'])) echo "value=".$_SESSION['mothersname'];?> >
                        </td>
                        <td><span class="span03"><b>Village/House:</b></span></td>
                        <td>
                            <input type="text" class="text01" size="30" name="village" <?php if(!empty($_SESSION['village'])) echo "value=".$_SESSION['village'];?>>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>Mother's Nationality:<span class="span04">*</span></b></span></td>
                        <td>
                            <select class="select01" name="mothersnationality">
                                <option value="" <?php if(isset($_SESSION['mothersnationality'])){if($_SESSION['mothersnationality']=='')echo "selected";} ?> ></option>
                                <option value="Bangladeshi" <?php if(isset($_SESSION['mothersnationality'])){if($_SESSION['mothersnationality']=='Bangladeshi') echo "selected";} ?> >Bangladeshi</option>
                                <option value="German" <?php if(isset($_SESSION['mothersnationality'])){if($_SESSION['mothersnationality']=='German') echo "selected";} ?> >German</option>
                                <option value="Canadian" <?php if(isset($_SESSION['mothersnationality'])){if($_SESSION['mothersnationality']=='Canadian') echo "selected";} ?> >Canadian</option>
                                <option value="Turkey" <?php if(isset($_SESSION['mothersnationality'])){if($_SESSION['mothersnationality']=='Turkey') echo "selected";} ?> >Turkey</option>
                            </select>
                        </td>
                        <td><span class="span03"><b>Road/Block/Sector:</b></span></td>
                        <td>
                            <input type="text" class="text01" size="30" name="road" <?php if(!empty($_SESSION['road'])) echo "value=".$_SESSION['road'];?> >
                        </td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>Mother's Profession:<span class="span04">*</span></b></span></td>
                        <td>
                            <select class="select01" name="mothersprofession">
                                <option value="" <?php if(isset($_SESSION['mothersprofession'])){if($_SESSION['mothersprofession']=='')echo "selected";} ?> ></option>
                                <option value="teacher" <?php if(isset($_SESSION['mothersprofession'])){if($_SESSION['mothersprofession']=='teacher') echo "selected";} ?> >Teacher</option>
                                <option value="doctor" <?php if(isset($_SESSION['mothersprofession'])){if($_SESSION['mothersprofession']=='doctor') echo "selected";} ?> >Doctor</option>
                                <option value="engineer" <?php if(isset($_SESSION['mothersprofession'])){if($_SESSION['mothersprofession']=='engineer') echo "selected";} ?>>Engineer</option>
                                <option value="lawyer" <?php if(isset($_SESSION['mothersprofession'])){if($_SESSION['mothersprofession']=='lawyer') echo "selected";} ?> >Lawyer</option>
                            </select>
                        </td>
                        <td><span class="span03"><b>District:<span class="span04">*</span></b></span></td>
                        <td>
                            <select class="select01" name="district">
                                <option value="" <?php if(isset($_SESSION['district'])){if($_SESSION['district']=='')echo "selected";} ?> ></option>
                                <option value="dhaka" <?php if(isset($_SESSION['district'])){if($_SESSION['district']=='dhaka') echo "selected";} ?> >Dhaka</option>
                                <option value="khulna" <?php if(isset($_SESSION['district'])){if($_SESSION['district']=='khulna') echo "selected";} ?> >Khulna</option>
                                <option value="satkhira" <?php if(isset($_SESSION['district'])){if($_SESSION['district']=='satkhira') echo "selected";} ?> >Satkhira</option>
                                <option value="sylhet" <?php if(isset($_SESSION['district'])){if($_SESSION['district']=='sylhet') echo "selected";} ?> >Sylhet</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>Spouse's name:</b></span></td>
                        <td>
                            <input type="text" class="text01" size="30" name="spousesname"  <?php if(!empty($_SESSION['spousesname'])) echo "value=".$_SESSION['spousesname'];?>  >
                        </td>
                        <td><span class="span03"><b>Police Station:<span class="span04">*</span></b></span></td>
                        <td>
                            <select class="select01" name="policestation">
                                <option value="" <?php if(isset($_SESSION['policestation'])){if($_SESSION['policestation']=='')echo "selected";} ?> ></option>
                                <option value="khilgaon" <?php if(isset($_SESSION['policestation'])){if($_SESSION['policestation']=='khilgaon') echo "selected";} ?> >Khilgaon</option>
                                <option value="kuril" <?php if(isset($_SESSION['policestation'])){if($_SESSION['policestation']=='kuril') echo "selected";} ?> >Kuril</option>
                                <option value="kaliganj" <?php if(isset($_SESSION['policestation'])){if($_SESSION['policestation']=='kaliganj') echo "selected";} ?> >Kaliganj</option>
                                <option value="khilkhet" <?php if(isset($_SESSION['policestation'])){if($_SESSION['policestation']=='khilkhet') echo "selected";} ?> >khilkhet</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>Spouse's Nationality:</b></span></td>
                        <td>
                            <select class="select01" name="spousesnationality">
                                <option value="" <?php if(isset($_SESSION['spousesnationality'])){if($_SESSION['spousesnationality']=='')echo "selected";} ?> ></option>
                                <option value="Bangladeshi" <?php if(isset($_SESSION['spousesnationality'])){if($_SESSION['spousesnationality']=='Bangladeshi') echo "selected";} ?> >Bangladeshi</option>
                                <option value="German" <?php if(isset($_SESSION['spousesnationality'])){if($_SESSION['spousesnationality']=='German') echo "selected";} ?> >German</option>
                                <option value="Canadian" <?php if(isset($_SESSION['spousesnationality'])){if($_SESSION['spousesnationality']=='Canadian') echo "selected";} ?> >Canadian</option>
                                <option value="Turkey" <?php if(isset($_SESSION['spousesnationality'])){if($_SESSION['spousesnationality']=='Turkey') echo "selected";} ?> >Turkey</option>
                            </select>
                        </td>
                        <td><span class="span03"><b>Post Office:<span class="span04">*</span></b></span></td>
                        <td>
                            <select class="select01" name="postoffice">
                                <option value="" <?php if(isset($_SESSION['postoffice'])){if($_SESSION['postoffice']=='')echo "selected";} ?> ></option>
                                <option value="khilgaon"  <?php  if(isset($_SESSION['postoffice'])){if($_SESSION['postoffice']=='khilgaon') echo "selected"; }?> >Khilgaon</option>
                                <option value="kuril"  <?php  if(isset($_SESSION['postoffice'])){if($_SESSION['postoffice']=='kuril') echo "selected";} ?> >Kuril</option>
                                <option value="kaliganj"  <?php  if(isset($_SESSION['postoffice'])){if($_SESSION['postoffice']=='kaliganj') echo "selected";} ?> >Kaliganj</option>
                                <option value="khilkhet"  <?php  if(isset($_SESSION['postoffice'])){if($_SESSION['postoffice']=='khilkhet') echo "selected";} ?> >khilkhet</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td><td></td>
                        <td colspan="2" rowspan="3"><p class="p03"><b>Permanent Address</b></p></td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>Spouse's Profession:</span></td>
                        <td>
                            <select class="select01" name="spousesprofession">
                                <option value="" <?php  if(isset($_SESSION['spousesprofession'])){if($_SESSION['spousesprofession']=='')echo "selected";} ?> ></option>
                                <option value="teacher"   <?php if(isset($_SESSION['spousesprofession'])){if($_SESSION['spousesprofession']=='teacher') echo "selected";} ?> >Teacher</option>
                                <option value="doctor"  <?php if(isset($_SESSION['spousesprofession'])){if($_SESSION['spousesprofession']=='doctor') echo "selected";} ?> >Doctor</option>
                                <option value="engineer"  <?php if(isset($_SESSION['spousesprofession'])){if($_SESSION['spousesprofession']=='engineer') echo "selected";} ?> >Engineer</option>
                                <option value="lawyer"  <?php if(isset($_SESSION['spousesprofession'])){if($_SESSION['spousesprofession']=='lawyer') echo "selected";} ?> >Lawyer</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>Marital Status:<span class="span04">*</span></b></span></td>
                        <td>
                            <select class="select01" name="maritalstatus">
                                <option value="" <?php if(isset($_SESSION['maritalstatus'])){if($_SESSION['maritalstatus']=='')echo "selected";} ?> ></option>
                                <option value="married" <?php if(isset($_SESSION['maritalstatus'])){if($_SESSION['maritalstatus']=='married') echo "selected";} ?> >Married</option>
                                <option value="single" <?php if(isset($_SESSION['maritalstatus'])){if($_SESSION['maritalstatus']=='single') echo "selected";} ?> >Single</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>Applicant's Profession:<span class="span04">*</span></b></span></td>
                        <td>
                            <select class="select01" name="applicantsprofession">
                                <option value="" <?php if(isset($_SESSION['applicantsprofession'])){if($_SESSION['applicantsprofession']=='')echo "selected";} ?> ></option>
                                <option value="teacher" <?php if(isset($_SESSION['applicantsprofession'])){if($_SESSION['applicantsprofession']=='teacher') echo "selected";} ?> >Teacher</option>
                                <option value="doctor" <?php if(isset($_SESSION['applicantsprofession'])){if($_SESSION['applicantsprofession']=='doctor') echo "selected";} ?> >Doctor</option>
                                <option value="engineer" <?php if(isset($_SESSION['applicantsprofession'])){if($_SESSION['applicantsprofession']=='engineer') echo "selected";} ?> >Engineer</option>
                                <option value="lawyer" <?php if(isset($_SESSION['applicantsprofession'])){if($_SESSION['applicantsprofession']=='lawyer') echo "selected";} ?> >Lawyer</option>
                            </select>
                        </td>
                        <td colspan="2">
                            <input type="checkbox" name="sameasabove" value="sameasabove" <?php if(!empty($_SESSION['sameasabove'])) echo "checked"; ?> ><span class="span03"> Same as above</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="span03"><b>Country of Birth:<span class="span04">*</span></b></span>
                        </td>
                        <td>
                            <select class="select01" name="countryofbirth">
                                <option value="" <?php if(isset($_SESSION['countryofbirth'])){if($_SESSION['countryofbirth']=='')echo "selected";} ?> ></option>
                                <option value="Bangladesh" <?php if(isset($_SESSION['countryofbirth'])){if($_SESSION['countryofbirth']=='Bangladesh') echo "selected";} ?> >Bangladesh</option>
                                <option value="Germany"  <?php if(isset($_SESSION['countryofbirth'])){if($_SESSION['countryofbirth']=='Germany') echo "selected";} ?> >Germany</option>
                                <option value="Canada"  <?php if(isset($_SESSION['countryofbirth'])){if($_SESSION['countryofbirth']=='Canada') echo "selected";} ?> >Canada</option>
                                <option value="Turkey"  <?php if(isset($_SESSION['countryofbirth'])){if($_SESSION['countryofbirth']=='Turkey') echo "selected";} ?> >Turkey</option>
                            </select>
                        </td>
                        <td><span class="span03"><b>Village/House:</b></span></td>
                        <td>
                            <input type="text" class="text01" size="30" name="villageper"  <?php if(!empty($_SESSION['villageper'])) echo "value=".$_SESSION['villageper'];?> >
                        </td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>Birth District:<span class="span04">*</span></b></span></td>
                        <td>
                            <select class="select01" name="birthdistrict">
                                <option value="" <?php if(isset($_SESSION['birthdistrict'])){if($_SESSION['birthdistrict']=='')echo "selected";} ?> ></option>
                                <option value="dhaka" <?php if(isset($_SESSION['birthdistrict'])){if($_SESSION['birthdistrict']=='dhaka') echo "selected";} ?> >Dhaka</option>
                                <option value="khulna" <?php if(isset($_SESSION['birthdistrict'])){if($_SESSION['birthdistrict']=='khulna') echo "selected";} ?> >Khulna</option>
                                <option value="satkhira" <?php if(isset($_SESSION['birthdistrict'])){if($_SESSION['birthdistrict']=='satkhira') echo "selected";} ?> >Satkhira</option>
                                <option value="sylhet" <?php if(isset($_SESSION['birthdistrict'])){if($_SESSION['birthdistrict']=='sylhet') echo "selected";} ?> >Sylhet</option>
                            </select>
                        </td>
                        <td><span class="span03"><b>Road/Block/Sector:</b></span></td>
                        <td>
                            <input type="text" class="text01" size="30" name="roadper" <?php if(!empty($_SESSION['roadper'])) echo "value=".$_SESSION['roadper'];?> >
                        </td>
                    </tr>
                    <tr>
                        <td></td><td></td>
                        <td><span class="span03"><b>District:<span class="span04">*</span></b></span></td>
                        <td>
                            <select class="select01" name="districtper">
                                <option value="" <?php if(isset($_SESSION['districtper'])){if($_SESSION['districtper']=='')echo "selected";} ?> ></option>
                                <option value="dhaka" <?php if(isset($_SESSION['districtper'])){if($_SESSION['districtper']=='dhaka') echo "selected";} ?> >Dhaka</option>
                                <option value="khulna" <?php if(isset($_SESSION['districtper'])){if($_SESSION['districtper']=='khulna') echo "selected";} ?> >Khulna</option>
                                <option value="satkhira" <?php if(isset($_SESSION['districtper'])){if($_SESSION['districtper']=='satkhira') echo "selected";} ?> >Satkhira</option>
                                <option value="sylhet" <?php if(isset($_SESSION['districtper'])){if($_SESSION['districtper']=='sylhet') echo "selected";} ?> >Sylhet</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td><td></td>
                        <td><span class="span03"><b>Police Station:<span class="span04">*</span></b></span></td>
                        <td>
                            <select class="select01" name="policestationper">
                                <option value="" <?php if(isset($_SESSION['policestationper'])){if($_SESSION['policestationper']=='')echo "selected";} ?> ></option>
                                <option value="khilgaon" <?php if(isset($_SESSION['policestationper'])){if($_SESSION['policestationper']=='khilgaon') echo "selected";} ?> >Khilgaon</option>
                                <option value="kuril" <?php if(isset($_SESSION['policestationper'])){if($_SESSION['policestationper']=='kuril') echo "selected";} ?> >Kuril</option>
                                <option value="kaliganj" <?php if(isset($_SESSION['policestationper'])){if($_SESSION['policestationper']=='kaliganj') echo "selected";} ?> >Kaliganj</option>
                                <option value="khilkhet" <?php if(isset($_SESSION['policestationper'])){if($_SESSION['policestationper']=='khilkhet') echo "selected";} ?> >khilkhet</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td><td></td>
                        <td><span class="span03"><b>Post Office:<span class="span04">*</span></b></span></td>
                        <td>
                            <select class="select01" name="postofficeper">
                                <option value="" <?php if(isset($_SESSION['postofficeper'])){if($_SESSION['postofficeper']=='')echo "selected";} ?> ></option>
                                <option value="khilgaon" <?php  if(isset($_SESSION['postofficeper'])){if($_SESSION['postofficeper']=='khilgaon') echo "selected";} ?> >Khilgaon</option>
                                <option value="kuril" <?php  if(isset($_SESSION['postofficeper'])){if($_SESSION['postofficeper']=='kuril') echo "selected";} ?> >Kuril</option>
                                <option value="kaliganj" <?php  if(isset($_SESSION['postofficeper'])){if($_SESSION['postofficeper']=='kaliganj') echo "selected";} ?> >Kaliganj</option>
                                <option value="khilkhet" <?php  if(isset($_SESSION['postofficeper'])){if($_SESSION['postofficeper']=='khilkhet') echo "selected";} ?> >khilkhet</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td><td></td><td></td><td></td>
                    </tr>
                    <tr>
                        <td></td><td></td><td></td><td></td>
                    </tr>
                    <tr>
                        <td></td><td></td>
                        <td>
                            <!--<input type="submit" value="SAVE NOW & CONTINUE IN THE FUTURE" class="button01">-->
                        </td>
                        <td>
                            <input type="submit" value="SAVE & NEXT" class="button01">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>