<!DOCTYPE html>
<html>
<head>
<title>PROGRAM 9</title>
</head>
<body>
    <div style="height:150px; width:100%; background-color:red;">
        <br/>
        <center>
        <h1>PROGRAM 9</h1>
        </center>
    </div>
<div style="height:400px; width:100%; background-color:white;">
        <br/>
        <center>
<?php
$string="Mississippi Alabama Texas Massachusetts Kansas";
$str1=explode(" ",$string);
foreach($str1 as $key=>$val)
{
  echo "STATES[$key]=$val <br/>";

}
$sArray=array();
foreach($str1 as $kk)
{
if(preg_match('/xas$/',($kk)))
{
	$sArray[0]=($kk);
}
}
foreach($str1 as $kk)
{
if(preg_match('/^K.*s$/i',($kk)))
{
	$sArray[1]=($kk);
}
}
foreach($str1 as $kk)
{
if(preg_match('/^M.*s$/',($kk)))
{
	$sArray[2]=($kk);
}
}
foreach($str1 as $kk)
{
if(preg_match('/.*a$/',($kk)))
{
	$sArray[3]=($kk);
}
}


echo"<br/><br/>New data :<br/>";
foreach($sArray as $key1=>$val1)
{
	
	echo "STATES[$key1]=$val1 <br/>";

}

?>



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
