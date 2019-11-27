<!DOCTYPE html>
<html>
<head>
<title>VISITORS</title>
</head>
<body>
<div style="height:145px;background-color:yellow;">
<h1 style="color:#0f0f0f;" align="center">VISITORS</h1>
</div>
<div style="height:400px;background-color:white;margin-top:-20px;">
<br/><br/><br/><br/><br/>
<h4 style="color:black;" align="center">total number of visitors</h4>

<?php
$f1="count.txt";
$hand=fopen($f1,r);
$count=fread($hand,10);
?>

<center><input type="text" name="st"  style="color:red; font-size:60px;  text-align:center" size="2" value="<?php echo $count; ?>"></center>

<?php
$count=$count+1;
$hand1=fopen($f1,w);
$count1=fwrite($hand1,$count);
fclose($hand1);
?>

</div>
<div style="height:70px;background-color:yellow;margin-top:-20px;">
<h3 style="color:black;" align="center">copyright@PRIMALDSOUZA</h3>
</div>
</body>
</html>
