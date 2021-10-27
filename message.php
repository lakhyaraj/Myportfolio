<?php
include('conn1.php');
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $msg=$_POST['msg'];
    if($con==false)
    {
        echo "Error in database connection!!";
    }
    else{
        
        
        $insert="INSERT INTO `message`(`name`,`email`, `subject`,`msg` ) VALUES ('$name','$email','$subject','$msg')";
            $row=mysqli_query($con,$insert);
            if($row==true)
            {
            ?>
                <script>
                 alert("Message send sucessfully");
                 window.open('index.html','_self');
                </script>
                
                
            <?php
            }
            else{
                echo "error";
            }
        
    }
        
}
?>
    