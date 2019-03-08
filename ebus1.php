<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmins="http.//www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Ebusiness 1</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
        <body style="background: url(http://proxy139.hellorf.com/ak3/shutterstock/videos/23011333/thumb/1.jpg);
          background-repeat: repeat; background-size: 100%">
        <div class="form">
            <form name="intCalc" method="post" action="Ebus2.php">
        <h1 style="color:white;font-size:5vw" class="double">Consultancy Service Shopping Cart</h1>   
        <hr/>
        <center>
            <table cellspacing="10">
                <tr>
                    <td style="color:white;font-size:2vw" class="double"><b>Service</b></td>
                </tr>
                <tr>
                    <td style="color:white;font-size:1.5vw" class="double">Blockchain Consultancy Service</td>
                    <td><input type="radio" id="Blockchain" name="rdoGroup" value="2500" /></td>
                </tr>
                <tr>
                    <td style="color:white;font-size:1.5vw" class="double">Autonomous Things Consultancy Service</td>
                    <td><input type="radio" id="AUT" name="rdoGroup" value="1500" /></td>
                </tr>
                <tr>
                    <td style="color:white;font-size:1.5vw" class="double">Immersive Experience Consultancy Service</td>
                    <td><input type="radio" id="VR" name="rdoGroup" value="1000" /></td>
                </tr>
            </table>
        </center>
        <br/>
            <center>
                 <table cellspacing="10">
            <tr>
                    <td><b></b></td>
                    <td style="color:white;font-size:1.5vw" class="double"><b>Amount</b></td>
            </tr>
                <tr>
                    <td style="color:white;font-size:1.5vw" class="double">Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                </tr>
                <tr>
                    <td style="color:white;font-size:1.5vw" class="double">Discount @ 30%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                </tr>
                <tr>
                    <td style="color:white;font-size:1.5vw" class="double">+ VAT @ 40%</td>
                    <td><input type="text" id="txtVAT" name="txtVAT" readonly /></td>
                </tr>
                <tr>
                    <td style="color:white;font-size:1.5vw" class="double">Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly/></td>
                </tr>
            </table>
        </center>
       
        <br />
            <center>
            <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
            <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
            <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/>
        </center>
            </form>
        </div>
       
            <script type="text/javascript">
                
                function calcSub(){
                    //Assigning variables to the values
                    var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                    var CocaCola = parseFloat(document.getElementById('Blockchain').value);
                    var Sprite = parseFloat(document.getElementById('AUT').value);
                    var Fanta = parseFloat(document.getElementById('VR').value);
                   
                    // if radio buttons are clicked, values are assigned
                    if (document.getElementById('Blockchain').checked) {
                        document.intCalc.txtSubTot.value = CocaCola;
                        subAmount = CocaCola;
                        calculation(subAmount);
                       
                    }
                   else if (document.getElementById('AUT').checked) {
                        document.intCalc.txtSubTot.value = Sprite;
                        subAmount = Sprite;
                        calculation(subAmount);
                       
                    }
                    else if (document.getElementById('VR').checked) {
                        document.intCalc.txtSubTot.value = Fanta;
                        subAmount = Fanta;
                        calculation(subAmount);
                    }
                }
               
                //function for calculationg the values//
                function calculation(parmsTotal) {
                    var subTotal = parseFloat(parmsTotal);
                    var discCalc = parseFloat(subTotal * .30);
                    var vatCalc= parseFloat(subTotal * .40);   
                    var total = parseFloat(subTotal - discCalc + vatCalc);
                   
                    //Inserting thrm intp thr correct fields//
                    document.intCalc.txtDisc.value = discCalc;
                    document.intCalc.txtVAT.value = vatCalc;
                    document.intCalc.txtTotal.value = total;
                }
               
                function AmountClear() {
                    document.getElementById("txtSubTot").value="";
                    document.getElementById("txtDisc").value="";
                    document.getElementById("txtVAT").value="";
                    document.getElementById("txtTotal").value="";
                }
                   
                   
                
                   
                   
            </script>
            
            
            <button onclick="window.location.href='index.php'">Back to Homepage</button>
    </body>
    </html>



