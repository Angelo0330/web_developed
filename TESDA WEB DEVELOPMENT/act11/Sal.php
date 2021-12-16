
<html>
    <head>
        <title>Salary</title>
        <style> 
            fieldset 
            {
            display: block;
            margin-left: 750px;
            margin-right: 750px;
            padding-top: 20px;
            padding-bottom: 0.625em;
            padding-left: 0.75em;
            padding-right: 0.75em;
            background-color: #E4F0F5 ;
            border: 2px;
            border-radius: 12px;
            }
        </style>
    </head>

 <body>
     <br><br><br>
     <fieldset>
         <center>
            <font face="Century Gothic" size="4">
                <?php

                    $NWH = $_POST['txtNWH'];
                    $RPH = $_POST['txtRPH'];

                    $GP = $NWH*$RPH;
                    $Tax = $GP * 0.12;
                    $SSS = $GP * 0.01;
                    $PI = $GP * 0.015;
                    $PH = $GP * 0.025;
                    $TD = $Tax+$SSS+$PI+$PH;
                    $NP = $GP-$TD;
                    
                    echo "<B>Salary</B> <br> <br>";

                    echo "Gross Pay: $GP <br>";
                    echo "Tax: $Tax <br>";
                    echo "SSS: $SSS <br>";
                    echo "Pag Ibig: $PI <br>";
                    echo "PhilHealth: $PH <br>";
                    echo "Total Deduction: $TD <br> <br>";
                    echo "<B>Net Pay: $NP </B><br>";

                ?>
            </font>
         </center>
         <br>
     </fieldset>
</body>
</html>