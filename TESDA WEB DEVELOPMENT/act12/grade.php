
<html>
    <head>
        <title>Final Grade</title>
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
     <br><br><br><br><br>
     <fieldset>
         <center>
         <BR>
            <font face="Century Gothic" size="4">

                <h1>SEMESTRAL FINAL GRADE</h1>
                <br><br><br>
                <?php

                    $PG = $_POST['txtPG'];
                    $MG = $_POST['txtMG'];
                    $FG = $_POST['txtFG'];
                    
                    $SG = ($PG*.30)+($MG*.30)+($FG*.40);

                    if ($SG>=50 and $SG<=100)
                    {
                        echo "Semestral Grade: $SG <BR><BR>";
                        echo "<B>YOU PASSED!</B><BR>";
                    }
                    elseif ($SG>=0 and $SG<50)
                    {
                        echo "Semestral Grade: $SG <BR><BR>";
                        echo "<B>YOU FAILED!</B><BR>";
                    }
                    else
                    {
                        echo " INVALID GRADE! <BR>";
                    }

                ?>
            </font>
         </center>
         <br>
     </fieldset>
</body>
</html>