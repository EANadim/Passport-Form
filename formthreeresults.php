<?php
    session_start();
    $_SESSION['paymenttype']=test_input($_POST['paymenttype']);
    $_SESSION['skippayment']=test_input($_POST['skippayment']);
    $_SESSION['currency']=test_input($_POST['currency']);
    $_SESSION['amount']=test_input($_POST['amount']);
    $_SESSION['dateofpayment']=test_input($_POST['dateofpayment']);
    $_SESSION['receiptno']=test_input($_POST['receiptno']);
    $_SESSION['nameofbank']=test_input($_POST['nameofbank']);
    $_SESSION['nameofbranch']=test_input($_POST['nameofbranch']);
    if($_SESSION['skippayment']=='skippayment')
    {
        $_SESSION['currency']='';
        $_SESSION['amount']='';
        $_SESSION['dateofpayment']='';
        $_SESSION['receiptno']='';
        $_SESSION['nameofbank']='';
        $_SESSION['nameofbranch']='';
    }
    /*print_r($_SESSION);*/
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    header('Location:formreform.php');
?>