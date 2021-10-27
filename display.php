<html>
    <head>
        <title>display records</title>
    </head>
<body>
    <center>
    <table border="3" style="width:40%;" class="center">
        <tr>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>SUBJECT</th>
            <th>MSG</th>
        </tr>
    </center>
<?php
include('conn1.php');
error_reporting(0);
$query = " SELECT * FROM  message ";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
if($total!=0)
{
    while($result=mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$result['name']."</td>
        <td>".$result['email']."</td>
        <td>".$result['subject']."</td>
        <td>".$result['msg']."</td>
        </tr>
        ";
    }
}
else{
    echo "no records found";
}
?>
</table>
</body>
</html>


