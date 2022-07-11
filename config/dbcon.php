<?php
//connection
$con=mysqli_connect("localhost","root","","ndc_project1");

//check connection
if(!$con)
{
    header("Location: ../errors/db.php");
    die();
}
/* else
{
    echo"Database Connected..!";
} */





?>