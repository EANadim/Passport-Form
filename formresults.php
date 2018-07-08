<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>form results</title>
        <link rel="stylesheet" href="stylecss.css">
    </head>
    <body>
        <p id="p01"><b>PASSPORT APPLICATION - REVIEW ENROLMENT SUMMARY</b></p>
        <p id="p04"><b>Online application ID:<?php echo $_SESSION['id']; ?></b></p>
        <p id="p05"><b>Enrolment Date:<?php echo date("d/m/Y"); ?></b></p>
        <p id="p02"><b><i>Reminder before submitting your application.</i></b></p>

        <ul id="ul01">
            <li><span class="span03"><i>After you click submit,you are not allowed to modify your information.</i></span></li>
            <li><span class="span03"><i>Please visit <b><?php echo $_SESSION['nameofbranch']; ?></b> on working day within the next 15 days for biometric capture except government holiday.</i></span></li>
        </ul>
        <div id="div01">
            <hr>
        </div>
        <div id="div02">
            <table id="table01">
                <tr>
                    <td colspan="2"><p class="p03"><b>Personal Information Summary</b></p></td>
                    <td colspan="2"><p class="p03"><b>Passport Information Summary</b></p></td>
                </tr>
                <tr></tr>
                <tr>
                    <td><span class="span03">Name of Applicant:</span></td>
                    <td><span class="span03"><b><?php echo $_SESSION['nameofapplicant'];?></b></span></td>
                    <td><span class="span03">Applying in:</span></td>
                    <td><span class="span03"><b><?php echo $_SESSION['applyingin'];?></b></span></td>
                </tr>
                <tr>
                    <td><span class="span03">Second Part(Surname):</span></td>
                    <td><span class="span03"><b><?php echo $_SESSION['secondpart'];?></b></span></td>
                    <td><span class="span03">Passport Type:</span></td>
                    <td><span class="span03"><b><?php echo $_SESSION['passporttype'];?></b></span></td>
                </tr>
                <tr>
                    <td><span class="span03">First Part(Given name):</span></td>
                    <td><span class="span03"><b><?php echo $_SESSION['firstpart'];?></b></span></td>
                    <td><span class="span03">Application Type:</span></td>
                    <td><span class="span03"><b>NEW</b></span></td>
                </tr>
                <tr>
                    <td><span class="span03">Gender:</span></td>
                    <td><span class="span03"><b><?php echo $_SESSION['gender'];?></b></span></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><span class="span03">Nationality:</span></td>
                    <td><span class="span03"><b><?php echo $_SESSION['nationality'];?></b></span></td>
                    <td colspan="2"><p class="p03"><b>Contact Information Summary</b></p></td>
                </tr>
                <tr>
                    <td><span class="span03">Date of Birth:</span></td>
                    <td><span class="span03"><b><?php echo $_SESSION['dateofbirth'];?></b></span></td>
                    <td><span class="span03">Mobile No:</span></td>
                    <td><span class="span03"><b><?php echo $_SESSION['mobileno'];?></b></span></td>
                </tr>
                <?php
                    if(!$_SESSION['village'] && !$_SESSION['road'])
                        $presentaddress=$_SESSION['district'].",".$_SESSION['policestation'].",".$_SESSION['postoffice'];
                    else if(!$_SESSION['village'] && $_SESSION['road'])
                        $presentaddress=$_SESSION['road'].",".$_SESSION['district'].",".$_SESSION['policestation'].",".$_SESSION['postoffice'];
                    else if($_SESSION['village'] && !$_SESSION['road'])
                        $presentaddress=$_SESSION['village'].",".$_SESSION['district'].",".$_SESSION['policestation'].",".$_SESSION['postoffice'];
                    else
                        $presentaddress=$_SESSION['village'].",".$_SESSION['road'].",".$_SESSION['district'].",".$_SESSION['policestation'].",".$_SESSION['postoffice'];
                ?>
                <tr>
                    <td><span class="span03">Place of Birth:</span></td>
                    <td><span class="span03"><b><?php echo $_SESSION['birthdistrict'].",".$_SESSION['countryofbirth']; ?></b></span></td>
                    <td><span class="span03">Present Address:</span></td>
                    <td><span class="span03"><b><?php echo $presentaddress; ?></b></span></td>
                </tr>
                <?php
                    if($_SESSION['sameasabove'])
                    {
                        $permanentaddress=$presentaddress;                        
                    }
                    else
                    {
                        if(!$_SESSION['villageper'] && !$_SESSION['roadper'])
                            $permanentaddress=$_SESSION['districtper'].",".$_SESSION['policestationper'].",".$_SESSION['postofficeper'];
                        else if(!$_SESSION['villageper'] && $_SESSION['roadper'])
                            $permanentaddress=$_SESSION['roadper'].",".$_SESSION['districtper'].",".$_SESSION['policestationper'].",".$_SESSION['postofficeper'];
                        else if($_SESSION['villageper'] && !$_SESSION['roadper'])
                            $permanentaddress=$_SESSION['villageper'].",".$_SESSION['districtper'].",".$_SESSION['policestationper'].",".$_SESSION['postofficeper'];
                        else
                            $permanentaddress=$_SESSION['villageper'].",".$_SESSION['roadper'].",".$_SESSION['districtper'].",".$_SESSION['policestationper'].",".$_SESSION['postofficeper'];
                    }
                ?>
                <tr>
                    <td><span class="span03">Father's Name:</span></td>
                    <td><span class="span03"><b><?php echo $_SESSION['fathersname'];?></b></span></td>
                    <td><span class="span03">Permanent Address:</span></td>
                    <td><span class="span03"><b><?php echo $permanentaddress; ?></b></span></td>
                </tr>
                <tr>
                    <td><span class="span03">Mother's Name:</span></td>
                    <td><span class="span03"><b><?php echo $_SESSION['mothersname'];?></b></span></td>
                    <td><span class="span03">Email:</span></td>
                    <td><span class="span03"><b><?php echo $_SESSION['email'];?></b></span></td>
                </tr>
                <tr>
                    <td><span class="span03">National ID No:</span></td>
                    <td><span class="span03"><b><?php echo $_SESSION['nationalidno'];?></b></span></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><span class="span03">Birth ID No:</span></td>
                    <td><span class="span03"><b><?php echo $_SESSION['birthidno'];?></b></span></td>
                    <td colspan="2"><p class="p03"><b>Payment Information Summary</b></p></td>
                </tr>
                <tr>
                    <td><span class="span03">Old Passport No:</span></td>
                    <td><span class="span03"><b><?php echo $_SESSION['passportno'];?></b></span></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td><span class="span03">Payment Amount:</span></td>
                    <td><span class="span03"><b><?php echo "(".$_SESSION['currency'].")".$_SESSION['amount']; ?></b></span></td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td><span class="span03">Payment Date:</span></td>
                    <td><span class="span03"><b><?php echo $_SESSION['dateofpayment']; ?></b></span></td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td><span class="span03">Receipt No:</span></td>
                    <td><span class="span03"><b><?php echo $_SESSION['receiptno']; ?></b></span></td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td><span class="span03">Bank Name:</span></td>
                    <td><span class="span03"><b><?php echo $_SESSION['nameofbank']; ?></b></span></td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td><span class="span03">Bank Branch:</span></td>
                    <td><span class="span03"><b><?php echo $_SESSION['nameofbranch']; ?></b></span></td>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td colspan="4"><p id="p02"><b><i>Reminder:Bring old passport during collecting MRP;No correction after handover of delivery slip without fee.</i></b></p></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <form action="formthree.php">
                            <input type="submit" class="button01" value="PREVIOUS PAGE">
                        </form>
                    </td>
                    <td>
                        <form action="saveinfile.php">
                            <input type="submit" class="button01" value="SAVE">
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>