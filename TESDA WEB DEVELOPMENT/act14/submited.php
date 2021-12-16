
<html>
    <head>
        <title>Submited</title>
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
                <?php

                $server = "localhost";
                $username = "root";
                $password = "";
                $dbaname = "accdb";

                $conn = mysqli_connect($server, $username, $password, $dbaname);

                if(isset($_POST['submit']))
                {
                    if(!empty($_POST['txtName']) && !empty($_POST['txtEmail']) && !empty($_POST['txtAge'] && !empty($_POST['txtAdd']) ))
                    {
                        $name = $_POST['txtName'];
                        $email = $_POST['txtEmail'];
                        $age = $_POST['txtAge'];
                        $address = $_POST['txtAdd'];
                        
                        $query = "INSERT INTO form(name, email, age, address) VALUES ('$name', '$email', '$age', '$address')";

                        $run = mysqli_query($conn,$query) or die(mysqli_error());

                        if($run)
                        {
                            echo "<h1>Submited succesfully</h1>";
                        }
                        else
                        {
                            echo "<h1>Form not submited</h1>";
                        }

                    }
                }
                else
                {
                    echo "<h1>All fields must required!</h1>";
                }


                ?>
            </font>
         </center>
         <br>
     </fieldset>
</body>
</html>