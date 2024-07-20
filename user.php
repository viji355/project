<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user take</title>

</head>
<body>
    <form action="user_check.php" method="post" style="width:500px; margin-left:500px;margin-top:50px;background-color:skyblue;"><br>
	    		<h2 style="text-align:center;margin-top:-8px;color:green;"><b>Users Task Updates</b></h2>
				&nbsp;&nbsp;
				Date:<input type="text"  name="date" required> &nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Name:<input type="text" name="name"> <br/><br/>
				<table style=" margin-left:120px; padding-top:50px;">
					<tr><td>Task update 1</td><td><input type="text"  name="task1"required ></td></tr>
					<tr><td>Task update 2</td><td><input type="text"  name="task2"required></td></tr>
					<tr><td>Task update 3</td><td><input type="text"  name="task3"></td></tr>
					<tr><td>Task update 4</td><td><input type="text"  name="task4" required></td></tr>	
                    <tr><td>Task update 5</td><td><input type="text"  name="task5"required ></td></tr>					
				</table><br/>
                <button type="submit" name="submit" style="margin-left:200px;" >save</button>
				<button type="submit" name='submit'style="margin-right:0px;">
					<a style="text-decoration: none;color:black;" href='logout.php'>Logout</a></button><br><br>
				
				


</form>
</body>
</html>