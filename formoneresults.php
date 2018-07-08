<?php
    session_start();
    $_SESSION['dateofbirth']=test_input($_POST['dateofbirth']);
    $_SESSION['applyingin']=test_input($_POST['applyingin']);
    $_SESSION['gender']=test_input($_POST['gender']);
    $_SESSION['passporttype']=test_input($_POST['passporttype']);
    $_SESSION['birthidno']=test_input($_POST['birthidno']);
    $_SESSION['deliverytype']=test_input($_POST['deliverytype']);
    $_SESSION['nationalidno']=test_input($_POST['nationalidno']);
    $_SESSION['taxidno']=test_input($_POST['taxidno']);
    $_SESSION['birthidno']=test_input($_POST['birthidno']);
    $_SESSION['cm']=test_input($_POST['cm']);
    $_SESSION['inch']=test_input($_POST['inch']);
    $_SESSION['religion']=test_input($_POST['religion']);
    $_SESSION['email']=test_input($_POST['email']);
    $_SESSION['nameofapplicant']=test_input($_POST['nameofapplicant']);
    $_SESSION['firstpart']=test_input($_POST['firstpart']);
    $_SESSION['secondpart']=test_input($_POST['secondpart']);
    $_SESSION['nationality']=test_input($_POST['nationality']);
    $_SESSION['citizenshipstatus']=test_input($_POST['citizenshipstatus']);
    $_SESSION['duelcitizenship']=test_input($_POST['duelcitizenship']);
    $_SESSION['guardian']=test_input($_POST['guardian']);
    $_SESSION['fathersname']=test_input($_POST['fathersname']);
    $_SESSION['fathersnationality']=test_input($_POST['fathersnationality']);
    $_SESSION['fathersprofession']=test_input($_POST['fathersprofession']);
    $_SESSION['mothersname']=test_input($_POST['mothersname']);
    $_SESSION['mothersnationality']=test_input($_POST['mothersnationality']);
    $_SESSION['mothersprofession']=test_input($_POST['mothersprofession']);
    $_SESSION['spousesname']=test_input($_POST['spousesname']);
    $_SESSION['spousesnationality']=test_input($_POST['spousesnationality']);
    $_SESSION['spousesprofession']=test_input($_POST['spousesprofession']);
    $_SESSION['maritalstatus']=test_input($_POST['maritalstatus']);
    $_SESSION['applicantsprofession']=test_input($_POST['applicantsprofession']);
    $_SESSION['countryofbirth']=test_input($_POST['countryofbirth']);
    $_SESSION['birthdistrict']=test_input($_POST['birthdistrict']);
    $_SESSION['village']=test_input($_POST['village']);
    $_SESSION['road']=test_input($_POST['road']);
    $_SESSION['district']=test_input($_POST['district']);
    $_SESSION['policestation']=test_input($_POST['policestation']);
    $_SESSION['postoffice']=test_input($_POST['postoffice']);
    $_SESSION['sameasabove']=test_input($_POST['sameasabove']);
    $_SESSION['villageper']=test_input($_POST['villageper']);
    $_SESSION['roadper']=test_input($_POST['roadper']);
    $_SESSION['districtper']=test_input($_POST['districtper']);
    $_SESSION['policestationper']=test_input($_POST['policestationper']);
    $_SESSION['postofficeper']=test_input($_POST['postofficeper']);
    if($_SESSION['sameasabove']=='sameasabove')
    {
        $_SESSION['villageper']=test_input($_POST['village']);
        $_SESSION['roadper']=test_input($_POST['road']);
        $_SESSION['districtper']=test_input($_POST['district']);
        $_SESSION['policestationper']=test_input($_POST['policestation']);
        $_SESSION['postofficeper']=test_input($_POST['postoffice']);        
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    
    /*print_r($_SESSION);*/

    $myfile=fopen("idgenerator.txt","r") or die("Unable to open file!");
    $id=fread($myfile,filesize("idgenerator.txt"));
    $id++;
    $myfile = fopen("idgenerator.txt", "w") or die("Unable to open file!");
    fwrite($myfile,$id);
    $_SESSION['id']=$id;
    fclose($myfile);

    header('Location:formtwo.php');
    


?>