<?php
include_once 'dashbord_check.php';

session_start();
if(!isset($_SESSION['email']) && !isset($_SESSION['password']))
{
    header("location:home.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashbord_style.css">
</head>

<body>
    <header>
        <form action="dashbord.php" method="post" autocomplete="off">
            <h1 class="title1">Student Details</h1>
            <hr>
            <div class="row">
                <div class="col25"><label>Student Name </label><?php echo $nameer ;?></div>
                <div class="col75"><input type="text" name="name" placeholder="Enter Student Name ..." ></div>
            </div>
            <div class="btn">
            <button type="submit" name='submit'>Submit</button>
        </div>
        

        </form>
        <div style="overflow-x: auto;">
            <table>
                <h2 style="text-align: center;">Mark Details</h2><br>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Date</th>
                        <th>Name</th>
                        <th>TASK1</th>
                        <th>TASK2</th>
                        <th>TASK3</th>
                        <th>TASK4</th>
                        <th>TASK5</th>
                        
                    
</tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($data)) {
                        foreach ($data as $row) {
                            echo "<tr>";
                            foreach ($row as $cell) {
                                echo "<td>$cell</td>";
                            }
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='9'>No data </td></tr>";
                    }
                    ?>
                </tbody>
            </table>

        </div><br><br><br><br>
       
              <div class="btn">
            <button type="submit" name='submit'><a href='logout.php'>Logout</a></button>
        </div>


    </header>
</body>

</html>