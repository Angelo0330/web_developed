<html>
    <head>
        <title>Grading</title>
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
                    <form action="grade.php" method="post">
                        Prelim Grade: <br>
                        <input type="text" name='txtPG'> <br><br>

                        Midterm Grade: <br>
                        <input type="text" name='txtMG'> <br><br>

                        Final Grade: <br>
                        <input type="text" name='txtFG'> <br><br>

                        <input id="button" type="submit" value="Compute Grade">
                    </form>
                </font>
            </center>
        </fieldset>
    </body>
</html>