<html>
    <head>
        <title>Inserting Database</title>
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
                    <form action="submited.php" method="post">
                        Name: <br>
                        <input type="text" name='txtName'> <br><br>

                        Email: <br>
                        <input type="Email" name='txtEmail'> <br><br>

                        Final Age: <br>
                        <input type="text" name='txtAge'> <br><br>

                        Address: <br>
                        <input type="text" name='txtAdd'> <br><br>

                        <button id="button" type="submit" name="submit">Submit</button>
                    </form>
                </font>
            </center>
        </fieldset>
    </body>
</html>