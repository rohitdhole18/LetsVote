<?php
    include("connection.php");

    $name = $_POST['name'];
    $mobile = $_POST['mob'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $add = $_POST['add'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $role = $_POST['role'];

    function validate_mobile_number($mobile)
    {
         // Allow +, - and . in mobile number
         $filtered_mobile_number = filter_var($mobile, FILTER_SANITIZE_NUMBER_INT);
         // Remove "-" from number
         $mobile_to_check = str_replace("-", "", $filtered_mobile_number);
         // Check the lenght of number
         // This can be customized if you want mobile number from a specific country
         if (strlen($mobile_to_check) < 10 || strlen($mobile_to_check) > 14) {
            return false;
         } else {
           return true;
         }
    }
    // $mobile = "+91-444-444-5555";

    if($cpass!=$pass){

        echo '

        <script>
            alert("Passwords do not match!");
            window.location = "../routes/register.php";

            </script> ';
    }

    else {
        if (validate_mobile_number($mobile) == true) 
        {

            move_uploaded_file($tmp_name, "../uploads/$image");
            $insert = mysqli_query($connect, "insert into myuser (name, mobile, password, address, photo, status, votes, role) values('$name', '$mobile', '$pass', '$add', '$image', 0, 0, '$role') ");
            if ($insert) 
            {
        echo '<script>
                alert("Registration successfull!");
                window.location = "../";
              </script>';
             }
            
        }
            
        else {
            echo '       
            hello 
            <script>
            alert("Phone Number is Invalid!");
            window.location = "../routes/register.php";

            </script> ';
            }
    }
    
?>