<!DOCTYPE html>
<html>
    <head>
        <title>stage three</title>
        <link rel="stylesheet" href="stylecss.css">
    </head>
    <body>
        <p id="p01"><b>PASSPORT APPLICATION - STAGE 3</b></p>
        <p id="p04"><b>Online application ID:<?php session_start(); echo $_SESSION['id']; ?></b></p>
        <span id="span01">Fields marked with <span id="span02"><b><i>(*)</i></b></span> are mandatory.</span>
        <br>
        <br>
        <div id="div01">
            <hr>
        </div>
        <div id="div02">
            <form action="formthreeresults.php" method="post">
                <table id="table01">
                    <tr>
                        <td colspan="2"><p class="p03"><b>Payment Information</b></p></td>
                        <td></td><td></td>
                    </tr>
                    <tr>
                        <td rowspan="2">
                            <span class="span03"><b>Payment Type:</b></span>
                        </td>
                        <td rowspan="2">
                            <input type="radio" name="paymenttype" value="online" <?php if(isset($_SESSION['paymenttype'])){ if($_SESSION['paymenttype']=='online') echo "checked";} ?> ><span class="span03"><b>Online</b></span><br>
                            <input type="radio" name="paymenttype" value="non-online" <?php if(isset($_SESSION['paymenttype'])){ if($_SESSION['paymenttype']=='non-online') echo "checked";} ?>> <span class="span03"><b>Non-Online</b></span><br>
                        </td>
                        <td rowspan="2"></td><td rowspan="2"></td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td colspan="2"><input type="checkbox" name="skippayment" value="skippayment" <?php if(!empty($_SESSION['skippayment'])) echo "checked"; ?>><span class="span03"><b><i>Skip Payment</i></b></span></td>
                        <td></td><td></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="span03"><b>Amount:<span class="span04">*</span></b></span>
                        </td>
                        <td>
                            <select class="select02" name="currency">
                                <option value="" <?php if(isset($_SESSION['currency'])){ if($_SESSION['currency']=='') echo "selected";} ?> ></option>
                                <option value="bdt" <?php if(isset($_SESSION['currency'])){ if($_SESSION['currency']=='bdt') echo "selected";} ?> >BDT</option>
                                <option value="usd" <?php if(isset($_SESSION['currency'])){ if($_SESSION['currency']=='usd') echo "selected";} ?> >USD</option>
                                <option value="pound" <?php if(isset($_SESSION['currency'])){ if($_SESSION['currency']=='pound') echo "selected";} ?> >POUND</option>
                                <option value="diner" <?php if(isset($_SESSION['currency'])){ if($_SESSION['currency']=='diner') echo "selected";} ?> >DINER</option>
                            </select>
                            <input type="text" class="text01" size="7" name="amount" <?php if(!empty($_SESSION['amount'])) echo "value=".$_SESSION['amount'];?>>
                        </td>
                        </td>
                        <td></td><td></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="span03"><b>Date of Payment:<span class="span04">*</span></b></span>
                        </td>
                        <td>
                            <input type="date" class="text01" size="30" name="dateofpayment"  <?php if(!empty($_SESSION['dateofpayment'])) echo "value=".$_SESSION['dateofpayment'];?> >
                        </td>
                        <td></td><td></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="span03"><b>Receipt No:<span class="span04">*</span></b></span>
                        </td>
                        <td>
                            <input type="text" class="text01" size="30" name="receiptno" <?php if(!empty($_SESSION['receiptno'])) echo "value=".$_SESSION['receiptno'];?>>
                        </td>
                        <td></td><td></td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>Name of Bank:</b></span></td>
                        <td>
                            <select class="select01" name="nameofbank">
                                <option value="" name="nameofbank" <?php if(isset($_SESSION['nameofbank'])){ if($_SESSION['nameofbank']=='') echo "selected";} ?> ></option>
                                <option value="sobnali bank" name="nameofbank" <?php if(isset($_SESSION['nameofbank'])){ if($_SESSION['nameofbank']=='sonali bank') echo "selected";} ?> >Sonali Bank</option>
                                <option value="rupali bank" name="nameofbank" <?php if(isset($_SESSION['nameofbank'])){ if($_SESSION['nameofbank']=='rupali bank') echo "selected";} ?> >Rupali Bank</option>
                                <option value="janata bank" name="nameofbank" <?php if(isset($_SESSION['nameofbank'])){ if($_SESSION['nameofbank']=='janata bank') echo "selected";} ?> >Janata Bank</option>
                            </select>
                        </td>
                        <td></td><td></td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>Name of Branch:</b></span></td>
                        <td>
                            <select class="select01" name="nameofbranch">
                                <option value="" name="nameofbranch" <?php if(isset($_SESSION['nameofbranch'])){ if($_SESSION['nameofbranch']=='') echo "selected";} ?> ></option>
                                <option value="dhaka" name="nameofbranch" <?php if(isset($_SESSION['nameofbranch'])){ if($_SESSION['nameofbranch']=='dhaka') echo "selected";} ?> >Dhaka</option>
                                <option value="khulna" name="nameofbranch" <?php if(isset($_SESSION['nameofbranch'])){ if($_SESSION['nameofbranch']=='khulna') echo "selected";} ?> >Khulna</option>
                                <option value="rajshahi" name="nameofbranch" <?php if(isset($_SESSION['nameofbranch'])){ if($_SESSION['nameofbranch']=='rajshahi') echo "selected";} ?> >Rajshahi</option>
                            </select>
                        </td>
                        <td></td><td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><a href="formtwo.php" class="button02">PREVIOUS PAGE</a></td>
                        <td><input type="submit" value="SAVE & NEXT" class="button01"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>