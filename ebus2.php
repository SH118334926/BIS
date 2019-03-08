<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;

/**
 * Allocate the mobile number session variable to a text box
 */
 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
    </head>
    <body style="background: url(http://proxy139.hellorf.com/ak3/shutterstock/videos/23011333/thumb/1.jpg);
          background-repeat: repeat; background-size: 100%"> 
        <div class="form">
            <form name="Details" method="post" action="Ebus3.php">
                <center>
                    <table cellspacing="10">
                    <tr>
                        <td><b></b></td>
                        <td style="color:white;font-size:2vw" class="double"><b>Enter in your details below</b></td>
                    </tr>
                    <tr>
                        <td style="color:white;font-size:1.5vw" class="double">Name</td>
                        <td><input type="text" id="txtName" name="txtName" value=""  /></td>
                    </tr>
                    <tr>
                        <td style="color:white;font-size:1.5vw" class="double">Phone number</td>
                        <td><input type="text" id="txtNum" name="txtNum" value=""  /></td>
                    </tr>
                   
                    <tr>
                        <td style="color:white;font-size:1.5vw" class="double">Password</td>
                        <td><input type="text" id="txtPassword" name="txtPassword" value=""  /></td>
                    </tr>
                   
                    <tr>
                       
                        <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"  /></td>
                    </tr>
                </table>
            </center>
           
        <center>
       
       
                <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
        </center>
                
                <button onclick="window.location.href='index.php'">Back to Homepage</button>
        </div>
        </form>
	


