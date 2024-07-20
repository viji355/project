
<?php

require_once('config.php');

$nameer = "";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    
    if (empty($name)) {
        $nameer = 'please fill the name';
    } else {
        $sql = "SELECT `Id`,`date`,`name`,`task1`,`task2`,`task3`,`task4`,`task5` FROM `user` WHERE name ='$name'";
        $result = $mysqli->query($sql);


        if ($result) {

            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = array($row['Id'], $row['date'], $row['name'], $row['task1'], $row['task2'], $row['task3'], 
                $row['task4'],  $row['task5']);
            }
        } else {
            echo "Error: " . $mysqli->error;
        }
       
        
    }
}

        ?>