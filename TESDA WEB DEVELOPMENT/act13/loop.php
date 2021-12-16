<html>
    <head>
        <title>Loop</title>
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
        <br><br>
        <fieldset>
            <center>
                <font face="Century Gothic" size="4">
                    <h1>
                        FOR LOOP 0 - 1000
                    </h1>
                    <?php
                        for($x=0;$x<=1000;$x+=5)
                        {
                            echo "$x <br>";
                        }
                    ?>
                </font>
            </center>
        </fieldset>
        <br><br>
    </body>
</html>