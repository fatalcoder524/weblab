<!DOCTYPE html>
<html>
<head>
	
	
	<title>MultiOptions</title>
</head>
<body>
	<div style="height:100px;background-color:#5c3565;">
		<h1 style="color:white;"><center>MATRIX AND CALCULATOR</center></h1>
		<h4 style="color:yellow;"><center>Simple calculator,transpose, multiplication and addition of a matrix in a single roof...</center>
	</div>
	<div style="background-color:white;height:480px;">
	<br/>
	<br/>
	<div>
		<center><h2>Please Click on the link below to proceed</h2></center>
		
			<center><a href="8a.php"><h3>Simple Calculator</h3></a></center>
			
			<center><a href="8b.php"><h3>Transpose Of Matrix</h3></a></center>
			
			<center><a href="8c.php"><h3>Multiplication Of Matrix</h3></a></center>
			
			<center><a href="8ad.php"><h3>Addition Of Matrix</h3></a></center>
			
	</div>

<div style="height:50px;background-color:#987654;margin-top:170px;">
	<h5 style="color:#ffffff;" align="center">CopyRight@Vinayaka Mudradi</h5>
</div>
</body>
</html>
--------------------------------------------------8a------------------------------------------------------------------------
<!DOCTYPE html>
<html>
<head>
	
	
	<title>MultiOptions</title>
</head>
<body>
	<div style="height:130px;background-color:#5c3565;">
		<h1 style="color:white;"><center>MATRIX AND CALCULATOR</center></h1>
		<h4 style="color:yellow;"><center>Simple calculator,transpose, multiplication and addition of a matrix in a single roof...</center></h4>
		<h2 style="color:white;"><center>Simple Calculator</center></h2>
		
	</div><br/><br/>
	<div>
		<center><form name="frm" action="" method="POST">
			<h1 style="color:blue;">Enter Numbers Below</h1>
			<h3>First Number:</h3>
			<input type="text" name="fnum" placeholder="First Number" required/><br/>
			<h3>Second Number:</h3>
			<input type="text" name="snum" placeholder="Second Number" required/>
			<br/>
			<h3>Select Option:</h3>
			<select name="opt" onchange="javascript:submit();" required>
				<option value="">Select Any one</option>
				<option value="add">Addition</option>
				<option value="sub">Substraction</option>
				<option value="mul">Multiplication</option>
				<option value="div">Division</option></select>
		</form></center>
	</div>
<?php

	if(isset($_POST['opt']))
	{
		
		$fnum=$_POST['fnum'];
		$snum=$_POST['snum'];
		$option=$_POST['opt'];
		if($option=='add')
		{
			echo "<br/><center><b style='color:red;font-size:30px;'>";
			echo "Addition of ".$fnum." and ".$snum." is ".($fnum+$snum);	
			echo "</b></center>";
		}
		else if($option=='sub')
		{
			echo "<br/><center><b style='color:red;font-size:30px;'>";
			echo "Substraction of ".$fnum." and ".$snum." is ".($fnum-$snum);
			echo "</b></center>";	
		}
		else if($option=='mul')
		{
		echo "<br/><center><b style='color:red;font-size:30px;'>";
			echo "Multiplication of ".$fnum." and ".$snum." is ".($fnum*$snum);
			echo "</b></center>";	
		}
		else if($option=='div')
		{
			echo "<br/><center><b style='color:red;font-size:30px;'>";
			echo "Division of ".$fnum." and ".$snum." is ".($fnum/$snum);	
			echo "</b></center>";
		}
		
			
	}

?>
<br/>
<center><a href="8th.php">BACK</a></center>

<div style="height:50px;background-color:#987654;margin-top:0px;">
	<h5 style="color:#ffffff;" align="center">CopyRight@Vinayaka Mudradi</h5>
</div>
</body>
</html>
--------------------------------------------------8b------------------------------------------------------------------------
<!DOCTYPE html>
<html>
<head>
	
	
	<title>MultiOptions</title>
</head>
<body>
	<div style="height:130px;background-color:#5c3565;">
		<h1 style="color:white;"><center>MATRIX AND CALCULATOR</center></h1>
		<h4 style="color:yellow;"><center>Simple calculator,transpose, multiplication and addition of a matrix in a single roof...</center></h4>
		<h2 style="color:white;"><center>Transpose Of Matrix</center></h2>
	</div>
	<?php
		echo"<h2 style='color:red;'><center>Given Matrix</center></h2>";
		echo"<b style='font-size:30px;'><center>";
		$arr=array(array(11,22,33),array(54,65,76),array(77,88,99),array(15,11,12));
		for($i=0;$i<4;$i++)
		{
			for($j=0;$j<3;$j++)
			{
				echo $arr[$i][$j]."  ";
			}
			echo "<br/>";
		}
		echo"</center></b>";
		echo"<h2 style='color:red;'><center>Transpose Matrix</center></h2>";
		echo"<b style='font-size:30px;'><center>";
		
		for($i=0;$i<3;$i++)
		{
			for($j=0;$j<4;$j++)
			{
				echo $arr[$j][$i]."  ";
			}
			echo "<br/>";
		}
		echo"</center></b>";
	?>
	

<center><a href="8th.php">BACK</a></center>
<div style="height:50px;background-color:#987654;margin-top:0px;">
	<h5 style="color:#ffffff;" align="center">CopyRight@Vinayaka Mudradi</h5>
</div>
</body>
</html>
--------------------------------------------------8c------------------------------------------------------------------------
<!DOCTYPE html>
<html>
<head>
	
	
	<title>MultiOptions</title>
</head>
<body>
	<div style="height:130px;background-color:#5c3565;">
		<h1 style="color:white;"><center>MATRIX AND CALCULATOR</center></h1>
		<h4 style="color:yellow;"><center>Simple calculator,transpose, multiplication and addition of a matrix in a single roof...</center></h4>
		<h2 style="color:white;"><center>Matrix Multiplication</center></h2>
		
	</div>
<?php			

		echo "<br/><br/>";
		echo "<center>";
		echo "<table border='5' cellspacing='10' cellpadding='10'>";
		echo "<tr style='text-align:center;width:100px;height:70px;font-size:50px;color:red'><td>Matrix 1:</td><td>*</td><td>Matrix 2:</td><td>=</td><td>Result</td></tr>";
		$arr1=array(array(1,1,3),array(1,2,3),array(1,4,3));
		echo "<tr style='text-align:center;width:100px;height:70px;font-size:50px;color:blue'><td >";
		for($i=0;$i<3;$i++)
		{
			
			for($j=0;$j<3;$j++)
			{
				echo $arr1[$i][$j]." ";
			}
			
			echo "<br/>";
		}
		echo "</td>";
		echo "<td>";
		echo "*";
		echo "</td>";
		//echo "</center>";
		
		//echo "<center>";
		
		$arr2=array(array(2,4,1),array(1,3,2),array(1,2,3));
		//echo "<tr><td>";
		echo "<td>";
		for($i=0;$i<3;$i++)
		{
			for($j=0;$j<3;$j++)
			{
				
				echo $arr2[$i][$j]."  ";
				
			}
			echo "<br/>";
		}
		//echo "</center>";
		echo "</td>";
		echo "<td>";
		echo "=";
		echo "</td>";
		//echo"<h4 style='color:red;'><center>Multiplicated Matrix </center></h4>";
		//echo "<center>";
		
		$sum=0;
		echo "<td>";
		for($i=0;$i<3;$i++)
		{
			for($j=0;$j<3;$j++)
			{
				$sum=0;
				for($k=0;$k<3;$k++)
				{
				$sum= $sum+($arr1[$i][$k]*$arr2[$k][$j]);
				}
				echo $sum."  ";
			}
			echo "<br/>";
		}
		echo "</td></table>";
		echo "</center>";
		echo"</b>";

?>
<br/>
<center><a href="8th.php">BACK</a></center>
<div style="height:50px;background-color:#987654;margin-top:0px;">
	<h5 style="color:#ffffff;" align="center">CopyRight@Vinayaka Mudradi</h5>
</div>
</body>
</html>
--------------------------------------------------8d------------------------------------------------------------------------
<!DOCTYPE html>
<html>
<head>
	
	
	<title>MultiOptions</title>
</head>
<body>
	<div style="height:130px;background-color:#5c3565;">
		<h1 style="color:white;"><center>MATRIX AND CALCULATOR</center></h1>
		<h4 style="color:yellow;"><center>Simple calculator,transpose, multiplication and addition of a matrix in a single roof...</center></h4>
		<h2 style="color:white;"><center>Matrix Addition</center></h2>
		
	</div>
	<?php
		echo "<br/>";
		echo "<center>";
		echo "<table border='5' cellspacing='10' cellpadding='10'>";
		echo "<tr style='text-align:center;width:100px;height:70px;font-size:50px;color:red'><td>Matrix 1:</td><td>+</td><td>Matrix 2:</td><td>=</td><td>Result</td></tr>";
		echo "<center>";
		$arr1=array(array(10,11,12),array(13,14,15),array(16,17,18),array(15,11,12));
		echo "<tr style='text-align:center;width:100px;height:70px;font-size:50px;color:blue'><td >";
		for($i=0;$i<4;$i++)
		{
			for($j=0;$j<3;$j++)
			{
				echo $arr1[$i][$j]."  ";
			}
			echo "<br/>";
		}
		echo "</td>";
		echo "<td>";
		echo "+";
		echo "</td>";
		
		$arr2=array(array(12,40,15),array(14,10,14),array(10,20,30),array(10,13,19));
		echo "<td>";
		for($i=0;$i<4;$i++)
		{
			for($j=0;$j<3;$j++)
			{
				echo $arr2[$i][$j]."  ";
			}
			echo "<br/>";
		}
		echo "</td>";
		echo "<td>";
		echo "=";
		echo "</td>";
		
		echo "<td>";
		for($i=0;$i<4;$i++)
		{
			for($j=0;$j<3;$j++)
			{
				echo $arr1[$i][$j]+$arr2[$i][$j]."  ";
			}
			echo "<br/>";
		}
		echo "</td></table>";
		echo "</center>";
		echo"</b>";
	?>
<br/>
<center><a href="8th.php">BACK</a></center>
<div style="height:50px;background-color:#987654;margin-top:0px;">
	<h5 style="color:#ffffff;" align="center">CopyRight@Vinayaka Mudradi</h5>
</div>
</body>
</html>
