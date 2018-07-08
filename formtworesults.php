<?php
    session_start();
    $_SESSION['officeno']=test_input($_POST['officeno']);
    $_SESSION['residenceno']=test_input($_POST['residenceno']);
    $_SESSION['mobileno']=test_input($_POST['mobileno']);
    $_SESSION['passportno']=test_input($_POST['passportno']);
    $_SESSION['placeofissue']=test_input($_POST['placeofissue']);
    $_SESSION['dateofissue']=test_input($_POST['dateofissue']);
    $_SESSION['reissuereason']=test_input($_POST['reissuereason']);
    $_SESSION['nameemer']=test_input($_POST['nameemer']);
    $_SESSION['countryemer']=test_input($_POST['countryemer']);
    $_SESSION['sameaspermanentaddress']=test_input($_POST['sameaspermanentaddress']);
    $_SESSION['sameaspresentaddress']=test_input($_POST['sameaspresentaddress']);
    $_SESSION['villageemer']=test_input($_POST['villageemer']);
    $_SESSION['roademer']=test_input($_POST['roademer']);
    $_SESSION['districtemer']=test_input($_POST['districtemer']);
    $_SESSION['policestationemer']=test_input($_POST['policestationemer']);
    $_SESSION['postofficeemer']=test_input($_POST['postofficeemer']);
    $_SESSION['contactnoemer']=test_input($_POST['contactnoemer']);
    $_SESSION['emailemer']=test_input($_POST['emailemer']);
    $_SESSION['relationshipemer']=test_input($_POST['relationshipemer']);

    if($_SESSION['sameaspermanentaddress']=='sameaspermanentaddress')
    {
        $_SESSION['villageemer']=$_SESSION['villageper'];
        $_SESSION['roademer']= $_SESSION['roadper'];
        $_SESSION['districtemer']= $_SESSION['districtper'];
        $_SESSION['policestationemer']= $_SESSION['policestationper'];
        $_SESSION['postofficeemer']= $_SESSION['postofficeper'];    
    }
    if($_SESSION['sameaspresentaddress']=='sameaspresentaddress')
    {
        $_SESSION['villageemer']=$_SESSION['village'];
        $_SESSION['roademer']= $_SESSION['road'];
        $_SESSION['districtemer']= $_SESSION['district'];
        $_SESSION['policestationemer']= $_SESSION['policestation'];
        $_SESSION['postofficeemer']= $_SESSION['postoffice'];    
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    /*print_r($_SESSION);*/
    header('Location:formthree.php');

?>