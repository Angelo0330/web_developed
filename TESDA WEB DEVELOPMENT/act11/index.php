<html>
    <head>
        <title>Payroll</title>
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
            #button {
            text-transform: uppercase;
            text-decoration: none;
            font-size: 18px;
            font-family: arial;
            font-weight: bold;
            color: #ffffff;
            background-color: #ECC869;
            padding: 12px 20px;
            display: inline-block;
            border-radius: 10px;
            }
            #button:hover{
            background-color: #E9DC88;
            }
        </style>
    </head>
    <body>
        <br><br><br><br>
        <fieldset>
            <center>
                <font face="Century Gothic" size="4">
                    <form action="Sal.php" method="post">
                        No. of Working Hours <br>
                        <input type="text" name='txtNWH'> <br><br>

                        Rate Per Hour <br>
                        <input type="text" name='txtRPH'> <br><br>

                        <input id="button" type="submit" value="Compute salary">
                    </form>
                </font>
            </center>
        </fieldset>
    </body>
</html>