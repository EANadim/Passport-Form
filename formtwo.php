<!DOCTYPE html>
<html>
    <head>
        <title>stage two</title>
        <link rel="stylesheet" href="stylecss.css">
    </head>
    <body>
        <p id="p01"><b>PASSPORT APPLICATION - STAGE 2</b></p>
        <?php
            session_start();
        ?>
        <p id="p04"><b>Online application ID:<?php echo $_SESSION['id']; ?></b></p>
        <span id="span01">Fields marked with <span id="span02"><b><i>(*)</i></b></span> are mandatory.</span>
        <br>
        <br>
        <div id="div01">
            <hr>
        </div>
        <div id="div02">
            <form action="formtworesults.php" method="post">
                <table id="table01">
                    <tr>
                        <td colspan="2"><p class="p03"><b>Applicant Contact Information</b></p></td>
                        <td colspan="2"><p class="p03"><b>Old Passport Information</b></p></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="span03"><b>Office No:</b></span>
                        </td>
                        <td>
                            <input type="text" class="text01" size="30" name="officeno" <?php if(!empty($_SESSION['officeno'])) echo "value=".$_SESSION['officeno'];?> >
                        </td>
                        <td>
                            <span class="span03"><b>Passport No:</b></span>
                        </td>
                        <td>
                            <input type="text" class="text01" size="30" name="passportno" <?php if(!empty($_SESSION['passportno'])) echo "value=".$_SESSION['passportno'];?> >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="span03"><b>Residence No:</b></span>
                        </td>
                        <td>
                            <input type="text" class="text01" size="30" name="residenceno" <?php if(!empty($_SESSION['residenceno'])) echo "value=".$_SESSION['residenceno'];?> >
                        </td>
                        <td>
                            <span class="span03"><b>Place of Issue:</b></span>
                        </td>
                        <td>
                            <input type="text" class="text01" size="30" name="placeofissue" <?php if(!empty($_SESSION['placeofissue'])) echo "value=".$_SESSION['placeofissue'];?> >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="span03"><b>Mobile No:</b></span>
                        </td>
                        <td>
                            <input type="text" class="text01" size="30" name="mobileno"  <?php if(!empty($_SESSION['mobileno'])) echo "value=".$_SESSION['mobileno'];?>>
                        </td>
                        <td>
                            <span class="span03"><b>Date of Issue:</b></span>
                        </td>
                        <td>
                            <input type="date" class="text01" size="30" name="dateofissue"  <?php if(!empty($_SESSION['dateofissue'])) echo "value=".$_SESSION['dateofissue'];?>>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><p class="p03"><b>Emergency Contact Person's Details</b></p></td>
                        <td>
                            <span class="span03"><b>Re-Issue Reason:</b></span>
                        </td>
                        <td>
                            <select class="select01" name="reissuereason">
                                <option value=""  <?php if(isset($_SESSION['reissuereason'])){ if($_SESSION['reissuereason']=='') echo "selected"; }?> ></option>
                                <option value="expired"  <?php if(isset($_SESSION['reissuereason'])){ if($_SESSION['reissuereason']=='expired') echo "selected";} ?> >Expired</option>
                                <option value="lost"  <?php if(isset($_SESSION['reissuereason'])){ if($_SESSION['reissuereason']=='lost') echo "selected";} ?> >Lost</option>
                                <option value="stolen"  <?php if(isset($_SESSION['reissuereason'])){ if($_SESSION['reissuereason']=='stolen') echo "selected";} ?> >Stolen</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="span03"><b>Name:<span class="span04">*</span></b></span>
                        </td>
                        <td>
                            <input type="text" class="text01" size="30" name="nameemer" <?php if(!empty($_SESSION['nameemer'])) echo "value=".$_SESSION['nameemer'];?> >
                        </td>
                        <td></td></td></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="span03"><b>Country:<span class="span04">*</span></b></span>
                        </td>
                        <td>
                            <select class="select01" name="countryemer">
                                <option value=""  <?php if(isset($_SESSION['countryemer'])){ if($_SESSION['countryemer']=='') echo "selected";} ?> ></option>
                                <option value="Bangladesh" <?php if(isset($_SESSION['countryemer'])){ if($_SESSION['countryemer']=='Bangladesh') echo "selected";} ?> >Bangladesh</option>
                                <option value="Germany" <?php if(isset($_SESSION['countryemer'])){ if($_SESSION['countryemer']=='Germany') echo "selected";} ?> >Germany</option>
                                <option value="Canada" <?php if(isset($_SESSION['countryemer'])){ if($_SESSION['countryemer']=='Canada') echo "selected";} ?> >Canada</option>
                                <option value="Turkey" <?php if(isset($_SESSION['countryemer'])){ if($_SESSION['countryemer']=='Turkey') echo "selected";} ?> >Turkey</option>
                            </select>
                        </td>
                        <td></td></td></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="checkbox" name="sameaspermanentaddress" value="sameaspermanentaddress" <?php if(!empty($_SESSION['sameaspermanentaddress'])) echo "checked"; ?> ><span class="span03"><b>Same as permanent address</b></span></td>
                        <td></td><td></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="checkbox" name="sameaspresentaddress" value="sameaspresentaddress" <?php if(!empty($_SESSION['sameaspresentaddress'])) echo "checked"; ?>><span class="span03"><b>Same as present address</b></span></td>
                        <td></td><td></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="span03"><b>Village/House:</b></span>
                        </td>
                        <td>
                            <input type="text" class="text01" size="30" name="villageemer" <?php if(!empty($_SESSION['villageemer'])) echo "value=".$_SESSION['villageemer'];?> >
                        </td>
                        <td></td><td></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="span03"><b>Road/Block/Sector:</b></span>
                        </td>
                        <td>
                            <input type="text" class="text01" size="30" name="roademer" <?php if(!empty($_SESSION['roademer'])) echo "value=".$_SESSION['roademer'];?> >
                        </td>
                        <td></td><td></td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>District:<span class="span04">*</span></b></span></td>
                        <td>
                            <select class="select01" name="districtemer">
                                <option value=""  <?php if(isset($_SESSION['districtemer'])){ if($_SESSION['districtemer']=='') echo "selected";} ?> ></option>
                                <option value="dhaka" <?php if(isset($_SESSION['districtemer'])){ if($_SESSION['districtemer']=='dhaka') echo "selected";} ?> >Dhaka</option>
                                <option value="khulna" <?php if(isset($_SESSION['districtemer'])){ if($_SESSION['districtemer']=='khulna') echo "selected";} ?> >Khulna</option>
                                <option value="satkhira" <?php if(isset($_SESSION['districtemer'])){ if($_SESSION['districtemer']=='satkhira') echo "selected";} ?> >Satkhira</option>
                                <option value="sylhet" <?php if(isset($_SESSION['districtemer'])){ if($_SESSION['districtemer']=='sylhet') echo "selected";} ?> >Sylhet</option>
                            </select>
                        </td>
                        <td></td><td></td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>Police Station:<span class="span04">*</span></b></span></td>
                        <td>
                            <select class="select01" name="policestationemer">
                                <option value=""  <?php if(isset($_SESSION['policestationemer'])){ if($_SESSION['policestationemer']=='') echo "selected";} ?> ></option>
                                <option value="khilgaon" <?php if(isset($_SESSION['policestationemer'])){ if($_SESSION['policestationemer']=='khilgaon') echo "selected";} ?> >Khilgaon</option>
                                <option value="kuril" <?php if(isset($_SESSION['policestationemer'])){ if($_SESSION['policestationemer']=='kuril') echo "selected";} ?> >Kuril</option>
                                <option value="kaliganj" <?php if(isset($_SESSION['policestationemer'])){ if($_SESSION['policestationemer']=='kaliganj') echo "selected";} ?> >Kaliganj</option>
                                <option value="khilkhet" <?php if(isset($_SESSION['policestationemer'])){ if($_SESSION['policestationemer']=='khilkhet') echo "selected";} ?> >khilkhet</option>
                            </select>
                        </td>
                        <td></td><td></td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>Post Office:<span class="span04">*</span></b></span></td>
                        <td>
                            <select class="select01" name="postofficeemer">
                                <option value=""  <?php if(isset($_SESSION['postofficeemer'])){ if($_SESSION['postofficeemer']=='') echo "selected";} ?> ></option>
                                <option value="khilgaon" <?php if(isset($_SESSION['postofficeemer'])){ if($_SESSION['postofficeemer']=='khilgaon') echo "selected";} ?> >Khilgaon</option>
                                <option value="kuril" <?php if(isset($_SESSION['postofficeemer'])){ if($_SESSION['postofficeemer']=='kuril') echo "selected";} ?> >Kuril</option>
                                <option value="kaliganj" <?php if(isset($_SESSION['postofficeemer'])){ if($_SESSION['postofficeemer']=='kaliganj') echo "selected";} ?> >Kaliganj</option>
                                <option value="khilkhet" <?php if(isset($_SESSION['postofficeemer'])){ if($_SESSION['postofficeemer']=='khilkhet') echo "selected";} ?> >khilkhet</option>
                            </select>
                        </td>
                        <td></td><td></td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>Contact No:<span class="span04">*</span></b></span></td>
                        <td>
                            <input type="text" class="text01" size="30" name="contactnoemer"  <?php if(!empty($_SESSION['contactnoemer'])) echo "value=".$_SESSION['contactnoemer'];?> >
                        </td>
                        <td></td><td></td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>Email:</b></span></td>
                        <td>
                            <input type="email" class="text01" size="30" name="emailemer" <?php if(!empty($_SESSION['emailemer'])) echo "value=".$_SESSION['emailemer'];?> >
                        </td>
                        <td></td><td></td>
                    </tr>
                    <tr>
                        <td><span class="span03"><b>Relationship:<span class="span04">*</span></b></span></td>
                        <td>
                            <select class="select01" name="relationshipemer">
                                <option value=""  <?php if(isset($_SESSION['relationshipemer'])){ if($_SESSION['relationshipemer']=='') echo "selected";} ?> ></option>
                                <option value="father" <?php if(isset($_SESSION['relationshipemer'])){ if($_SESSION['relationshipemer']=='father') echo "selected";} ?> >Father</option>
                                <option value="mother" <?php if(isset($_SESSION['relationshipemer'])){ if($_SESSION['relationshipemer']=='mother') echo "selected";} ?> >Mother</option>
                                <option value="friend" <?php if(isset($_SESSION['relationshipemer'])){ if($_SESSION['relationshipemer']=='friend') echo "selected";} ?> >Friend</option>
                                <option value="wife" <?php if(isset($_SESSION['relationshipemer'])){ if($_SESSION['relationshipemer']=='wife') echo "selected";} ?> >Wife</option>
                            </select>
                        </td>
                    </tr>
                    <tr></tr>
                    <tr></tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><a href="index.php" class="button02">PREVIOUS PAGE</a></td>
                        <td><input type="submit" value="SAVE & NEXT" class="button01"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>