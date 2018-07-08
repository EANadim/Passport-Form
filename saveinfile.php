<?php
    session_start();

    $myfile = fopen( $_SESSION['id'].".txt", "w") or die("Unable to open file!");
    
    $txt="Date of Birth :".$_SESSION['dateofbirth'].chr(13).chr(10);
    $txt=$txt."Applying in: ".$_SESSION['applyingin'].chr(13).chr(10);
    $txt=$txt."Gender: ".$_SESSION['gender'].chr(13).chr(10);
    $txt=$txt."Passport Type: ".$_SESSION['passporttype'].chr(13).chr(10);
    $txt=$txt."Birth ID No: ".$_SESSION['birthidno'].chr(13).chr(10);
    $txt=$txt."Delivery Type: ".$_SESSION['deliverytype'].chr(13).chr(10);
    $txt=$txt."National ID No: ".$_SESSION['nationalidno'].chr(13).chr(10);
    $txt=$txt."Text ID NO: ".$_SESSION['taxidno'].chr(13).chr(10);
    $txt=$txt."Birth ID No: ".$_SESSION['birthidno'].chr(13).chr(10);
    $txt=$txt."Height in cm: ".$_SESSION['cm'].chr(13).chr(10);
    $txt=$txt."Height in inch: ".$_SESSION['inch'].chr(13).chr(10);
    $txt=$txt."Religion: ".$_SESSION['religion'].chr(13).chr(10);
    $txt=$txt."Email: ".$_SESSION['email'].chr(13).chr(10);
    $txt=$txt."Name of Applicant: ".$_SESSION['nameofapplicant'].chr(13).chr(10);
    $txt=$txt."First Part: ".$_SESSION['firstpart'].chr(13).chr(10);
    $txt=$txt."Second Part: ".$_SESSION['secondpart'].chr(13).chr(10);
    $txt=$txt."Nationality: ".$_SESSION['nationality'].chr(13).chr(10);
    $txt=$txt."Citizenship Status: ".$_SESSION['citizenshipstatus'].chr(13).chr(10);
    $txt=$txt."Duel Citizenship: ".$_SESSION['duelcitizenship'].chr(13).chr(10);
    $txt=$txt."Father's Name: ".$_SESSION['fathersname'].chr(13).chr(10);
    $txt=$txt."Father's Nationality: ".$_SESSION['fathersnationality'].chr(13).chr(10);
    $txt=$txt."Father's Profession: ".$_SESSION['fathersprofession'].chr(13).chr(10);
    $txt=$txt."Mother's Name: ".$_SESSION['mothersname'].chr(13).chr(10);
    $txt=$txt."Mother's Nationality: ".$_SESSION['mothersnationality'].chr(13).chr(10);
    $txt=$txt."Mother's Profession: ". $_SESSION['mothersprofession'].chr(13).chr(10);
    $txt=$txt."Spouse's Name: ".$_SESSION['spousesname'].chr(13).chr(10);
    $txt=$txt."Spouse's Nationality: ".$_SESSION['spousesnationality'].chr(13).chr(10);
    $txt=$txt."Spouse's Profession: ".$_SESSION['spousesprofession'].chr(13).chr(10);
    $txt=$txt."Marital Status: ".$_SESSION['maritalstatus'].chr(13).chr(10);
    $txt=$txt."Applicant's Profession: ".$_SESSION['applicantsprofession'].chr(13).chr(10);
    $txt=$txt."Country of Birth: ".$_SESSION['countryofbirth'].chr(13).chr(10);
    $txt=$txt."Birth District: ".$_SESSION['birthdistrict'].chr(13).chr(10);
    $txt=$txt."Present Address :".chr(13).chr(10);
    $txt=$txt."Village/House: ". $_SESSION['village'].chr(13).chr(10);
    $txt=$txt."Road/Block/Sector: ".$_SESSION['road'].chr(13).chr(10);
    $txt=$txt."District: ".$_SESSION['district'].chr(13).chr(10);
    $txt=$txt."Police Station: ".$_SESSION['policestation'].chr(13).chr(10);
    $txt=$txt."Post Office: ".$_SESSION['postoffice'].chr(13).chr(10);
    $txt=$txt."Permanent Address :".chr(13).chr(10);
    if(!empty($_SESSION['sameasabove']))
      $txt=$txt."Same as Present Address".chr(13).chr(10);
    else if(empty($_SESSION['sameasabove']))
    {
      $txt=$txt.": ".$_SESSION['villageper'].chr(13).chr(10);
      $txt=$txt.": ".$_SESSION['roadper'].chr(13).chr(10);
      $txt=$txt.": ".$_SESSION['districtper'].chr(13).chr(10);
      $txt=$txt.": ".$_SESSION['policestationper'].chr(13).chr(10);
      $txt=$txt.": ".$_SESSION['postofficeper'].chr(13).chr(10);
    }

    $txt=$txt."Office No: ".$_SESSION['officeno'].chr(13).chr(10);
    $txt=$txt."Residence No: ".$_SESSION['residenceno'].chr(13).chr(10);
    $txt=$txt."Mobile No: ".$_SESSION['mobileno'].chr(13).chr(10);
    $txt=$txt."Passport No: ".$_SESSION['passportno'].chr(13).chr(10);
    $txt=$txt."Place of Issue: ".$_SESSION['placeofissue'].chr(13).chr(10);
    $txt=$txt."Date of Issue: ".$_SESSION['dateofissue'].chr(13).chr(10);
    $txt=$txt."Re-issue Reason: ".$_SESSION['reissuereason'].chr(13).chr(10);
    $txt=$txt."Emergency Contact :".chr(13).chr(10);
    $txt=$txt."Name: ".$_SESSION['nameemer'].chr(13).chr(10);
    $txt=$txt."Country: ".$_SESSION['countryemer'].chr(13).chr(10);
    $txt=$txt."Address: ".$_SESSION['sameaspermanentaddress'].chr(13).chr(10);
    $txt=$txt."Address: ".$_SESSION['sameaspresentaddress'].chr(13).chr(10);
    $txt=$txt."Village: ".$_SESSION['villageemer'].chr(13).chr(10);
    $txt=$txt."Road: ".$_SESSION['roademer'].chr(13).chr(10);
    $txt=$txt."District: ".$_SESSION['districtemer'].chr(13).chr(10);
    $txt=$txt."Police Station: ".$_SESSION['policestationemer'].chr(13).chr(10);
    $txt=$txt."Post Office: ".$_SESSION['postofficeemer'].chr(13).chr(10);
    $txt=$txt."Contact No: ".$_SESSION['contactnoemer'].chr(13).chr(10);
    $txt=$txt."Email: ".$_SESSION['emailemer'].chr(13).chr(10);
    $txt=$txt."Relationship: ".$_SESSION['relationshipemer'].chr(13).chr(10);

    $txt=$txt."Payment Type: ".$_SESSION['paymenttype'].chr(13).chr(10);
    $txt=$txt."Skip Payment: ".$_SESSION['skippayment'].chr(13).chr(10);
    $txt=$txt."Currency: ".$_SESSION['currency'].chr(13).chr(10);
    $txt=$txt."Amount: ".$_SESSION['amount'].chr(13).chr(10);
    $txt=$txt."Date of Payment: ".$_SESSION['dateofpayment'].chr(13).chr(10);
    $txt=$txt."Receipt No: ".$_SESSION['receiptno'].chr(13).chr(10);
    $txt=$txt."Name of Bank: ".$_SESSION['nameofbank'].chr(13).chr(10);
    $txt=$txt."Name of Branch: ".$_SESSION['nameofbranch'].chr(13).chr(10);
    
    fwrite($myfile, $txt);
    fclose($myfile);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Thank You</title>
    <link rel="stylesheet" href="stylecss.css">
  </head>
  <body>
    <p id="p06">Thank You for Your Time</p>
  </body>
</html>