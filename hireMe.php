<?php
        $db_name = "hireMe";
        $mysql_username = "root";
        $mysql_password = "BrightEly123,./";
        $server_name = "localhost";
         $conn = mysqli_connect($server_name,$mysql_username,$mysql_password,$db_name);
         
         $companyName = $_POST['company'];
         $email = $_POST['email'];
         $hirePosition = $_POST['position'];

                if ($companyName == '' || $email =='' || $hirePosition == '' )
                {
                    echo 'Please fill all values';
        }else{

            $check = mysqli_fetch_array(mysqli_query($conn,$sql));
            if(isset($check))
            {
                    $sql = "INSERT INTO hireMe (companyName,email,hirePosition) VALUES ('$companyName','$email','$hirePosition')";
                    if(mysqli_query($conn,$sql)){
                        echo 'Successfully Registered';
                    }
                    else{
                        echo 'Oops! Please try again';
                        }
                }
                mysqli_close($con);
        }

?>