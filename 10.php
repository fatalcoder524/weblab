<!DOCTYPE html>
<html>
<head>
<title>PROGRAM 10</title>
</head>
<body>
    <div style="height:150px; width:100%; background-color:red;">
        <br/>
        <center>
        <h1>PROGRAM 10</h1>
        </center>
    </div>
       
    <div style="height:400px; width:100%; background-color:white;">
        </br>
        <center>
        <h3>ADD STUDENT INFO</h3>
        <br/>
        <form name="frm" method="POST" action="">
        <input type="text" name="name" placeholder="name"/>
        <br/>
        <br/>
        <input type="text" name="usn" placeholder="usn"/>
        <br/>
        <br/>
        <input type="text" name="email" placeholder="email"/>
        <br/>
        <br/>
        <input type="text" name="phno" placeholder="phone number"/>
        <br/>
        <br/>
        <input type="submit" name="sub" value="SUBMIT"/>
        <br/>
        </form>
	<?php
	$con=mysqli_connect("localhost","root","","prima")or die("connection error");
	if(isset($_POST['sub']))
	{
		$sname=$_POST['name'];
		$susn=$_POST['usn'];
		$semail=$_POST['email'];
		$sphno=$_POST['phno'];
		$qu="INSERT INTO primal VALUES('$sname','$susn','$semail','$sphno')";
		$run=mysqli_query($con,$qu) or die("query error");
		echo" Data added successfully ";
	}
	?>

        <br/>
        <br/>
        <a href="sortedstudent.php">click here</a>
        </center>
    </div>

    <div style="height:70px; width:100%; background-color:red;">
        <br/>
        <center>
        <h4>copyright@PRIMALDSOUZA</h4>
        </center>
    </div>
</body>
</html>
-----------------------------------------------------------------------------------
<?php
function selection_sort($data)
{
for($i=0;$i<count($data);$i++)
{
	$min=$i;
	for($j=$i+1;$j<count($data);$j++)
	{
		if($data[$j]<$data[$min])
		{
			$min=$j;
		}
	}
	$data=swap_positions($data,$i,$min);
}
return $data;
}
function swap_positions($data1,$left,$right)
{
	$backup_old_data_right_value=$data1[$right];
	$data1[$right]=$data1[$left];
	$data1[$left]=$backup_old_data_right_value;
	return $data1;
}


?>
<!DOCTYPE html>
<html>
<head>
	
	
	<title>STUDENT RECORDS</title>
</head>
<body>
	<div style="height:150px;background-color:red;">
		<h1 style="color:white;"><center>Selection Sort</center></h1>
		<h4 style="color:yellow;"><center>students records</center></h4>
	</div>
<div style="height:400px;background-color:white;">
<center>
<table border="2">
<tr ><th colspan="5" style="color:blue;">Initial Student Information</th></tr>
<tr><th style="width:50px;color:red;">SL.NO</th>
	<th style="width:50px;color:red;"> NAME</th>
	<th style="width:50px;color:red;">USN</th>
	<th style="width:50px;color:red;">EMAIL</th>
	<th style="width:50px;color:red;">MOBILE</th>
</tr>
<?php
		$conn=mysqli_connect("localhost","root","","prima") or die("Connection Eroor");
		$que="select * from primal";
		$run=mysqli_query($conn,$que);
		$i=1;
		while($row=mysqli_fetch_array($run))
		{
			$usa[]=$row['usn'];
		?>
		<tr style="text-align:center;"><td><?php echo $i; ?></td>
		<?php $i++; ?>
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["usn"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["phone"]; ?></td></tr>
		<?php
		}
	?>
</table>
<br/>

<table border="2">
<tr ><th colspan="5" style="color:blue;">Sorted Student Information Based On USN</th></tr>
<tr><th style="width:50px;color:red;">SL.NO</th>
	<th style="width:50px;color:red;"> NAME</th>
	<th style="width:50px;color:red;">USN</th>
	<th style="width:50px;color:red;">EMAIL</th>
	<th style="width:50px;color:red;">MOBILE</th>
</tr>
<?php
		
		$sarr=implode(",",selection_sort($usa));
		$sarr1=explode(",",$sarr);
		foreach($sarr1 as $val=>$key)
		{
			$nusn=$key;
		$query="select * from primal where usn='$nusn'";
		$run1=mysqli_query($conn,$query);
		$i=1;
		$row=mysqli_fetch_array($run1);
		
		?>
		<tr style="text-align:center;"><td><?php echo $i; ?></td>
		<?php $i++; ?>
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["usn"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["phone"]; ?></td></tr>
		<?php
		}
		
	?>
</table>
</center>
</div>

<div style="height:70px;background-color:red;margin-top:-20px">
<h3 style="color:white;"align="center"> copyright@PRIMALDSOUZA</h3>
</div>
</body>
</html>
