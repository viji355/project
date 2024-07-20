<?php

session_start();
if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
        }

        tr,
        td {
            border: 1px solid black;
            text-align: center;
            font-size: 19px;
            font-family: 'Courier New', Courier, monospace;
        }

        header {
            overflow: auto;
        }

        tr:nth-child(odd) {
            background-color: aliceblue;
        }

        input {
            border: none;
            padding: 10px;
            border-radius: 3px;
        }

        body {
            background-color: #f0f0f0;
        }
    </style>
</head>


<body>
    <header>
        <h1><a href='logout.php'>A</a>dmin Dashboard</h1>
        <table>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Status</td>
            </tr>
            <?php
            include('conn.php');


            $sql = "SELECT * FROM `Record` WHERE `status`='panding'";
            $result = mysqli_query($con, $sql);
            while ($row = $result->fetch_assoc()) {


            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td>
                        <form action="admin.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="submit" name="approve" value="Approve" style="background-color: #60cc7d;" />
                            <input type="submit" name="deny" value="Deny" style="background-color: red;" />
                        </form>
                    </td>
                </tr>
            <?php } ?>

        </table>
        <?php
        if (isset($_POST['approve'])) {
            $id = $_POST['id'];

            $update = "UPDATE `Record` SET `status`='approved' WHERE `id`='$id'";
            $new = mysqli_query($con, $update);
        }
        if (isset($_POST['deny'])) {
            $id = $_POST['id'];

            $update = "DELETE FROM `Record` WHERE `id`='$id'";
            $new = mysqli_query($con, $update);
            echo "<script>alert('Denyed');</script>";
        }
        ?>


    </header><br><br>
    <center><a style=" font-size: 30px;text-decoration: none; background-color: skyblue;border-radius: 5px;" href="dashbord.php">Report</a></center>

</html>