<?php date_default_timezone_set('Asia/kolkata')?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content='1'>
<title>Program7</title>
</head>
<body>
<div style="height:100px;background-color:black;margin-top:-25px";>
<h1 style="color:blue;"align="center"> DIGITAL CLOCK </h1></div>

<div style="height:400px; background-color:orange";>
<br><br><br>
<center>
<table border="1">
<tr style="font-size:50px; color:red;"/>
<th> HH </th>
<th> MM </th>
<th> SS </th>
<th> YY </th>
</tr>

<tr style="font-size:50px">
<td><?php echo date('h'); ?></td>
<td><?php echo date('i'); ?></td>
<td><?php echo date('s'); ?></td>
<td><?php echo date('a'); ?></td>
</tr>

</table>
</center>
</div>

<div style="height:130px;background-color:black;margin-top:-25px";>
<h2 style="color:blue;"align="center"> copyright@shwetha(4Cb16Cs093) </h2></div>
</body>
</html>
