<?php
    include("config.php");
    if(isset($_POST['submit'])) {
        $date = $_POST['date'];
        $name =$_POST['name'];
        $task1 = $_POST['task1'];
        $task2 = $_POST['task2'];
        $task3 = $_POST['task3'];
        $task4 = $_POST['task4'];
        $task5 = $_POST['task5'];


        $result = mysqli_query($mysqli, "INSERT INTO user (date, name, task1, task2, task3, task4, task5)
         VALUES ('$date', '$name', '$task1', '$task2', '$task3', '$task4', '$task5')");

        if($result) {
            header("Location:user.php?error=User Name is required");
        } else {
            echo "Something went wrong, data not stored";
        }
    }
    ?>