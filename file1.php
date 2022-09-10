

<!doctype html>
<html>
<head> 

<title>Multiply table</title>

</head>

<body>


<!--Multiply table calculator-->
<form method="post" >
<table border="2">
<tr>
<th>Enter the number :</th>
<td><input type="number" name="txtnum" ></td>
</tr>

<tr>
<td><input type="submit" name="btn_sub" value="calculate" ></td>
</tr>
</table>

</form>


</body>
</html>

<?php
if(isset($_POST['btn_sub'])){
$num=$_POST['txtnum'];


for($i=1; $i<=10; $i++)
{
echo $num ." X ".$i." = ".$i*$num."<br>";

}	
	
	
	
}
?>