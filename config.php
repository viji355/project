<?php

$hostname='localhost';
$username='root';
$password='';
$databasename='task';

$mysqli =mysqli_connect($hostname,$username,$password,$databasename);
if($mysqli){
    "<script>alert('error');</script>";
}
else{
    "<script>alert('connected');</script>";

}

?>



<?php
    // include("config.php");
    // if(isset($_POST['submit'])) {
    //     $name = $_POST['name'];
    //     $tamil = $_POST['tamil'];
    //     $english = $_POST['english'];
    //     $maths = $_POST['maths'];
    //     $science = $_POST['science'];
    //     $sscience = $_POST['sscience'];

    //     $result = mysqli_query($mysqli, "INSERT INTO students (name, tamil, english, maths, science, sscience) VALUES ('$name', '$tamil', '$english', '$maths', '$science', '$sscience')");

    //     if($result) {
    //         echo "User Registered Successfully, You can Login Now";
    //     } else {
    //         echo "Something went wrong, data not stored";
    //     }
    // }
    ?>