<html>
<head>
<title>Test Product</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<?php
mysql_connect("localhost","root","cream123");
mysql_select_db("test");

$strSQL = "SELECT * FROM Orders WHERE OrderID = '".$_GET["OrderID"]."' ";
$objQuery = mysql_query($strSQL)  or die(mysql_error());
$objResult = mysql_fetch_array($objQuery);
?>

 <table width="304" border="1">
    <tr>
      <td width="71">OrderID</td>
      <td width="217">
	  <?php echo $objResult["OrderID"];?></td>
    </tr>
    <tr>
      <td width="71">Name</td>
      <td width="217">
	  <?php echo $objResult["Name"];?></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><?php echo $objResult["OrderAddress"];?></td>
    </tr>
    <tr>
      <td>Tel</td>
      <td><?php echo $objResult["Telephone"];?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><?php echo $objResult["Email"];?></td>
    </tr>
  </table>

  <br>

<table width="400"  border="1">
  <tr>
    <td width="101">ProductID</td>
    <td width="82">ProductName</td>
    <td width="82">Price</td>
    <td width="79">Qty</td>
    <td width="79">Total</td>
  </tr>
<?php

$Total = 0;
$SumTotal = 0;

$strSQL2 = "SELECT * FROM OrderDel WHERE OrderID = '".$_GET["OrderID"]."' ";
$objQuery2 = mysql_query($strSQL2)  or die(mysql_error());

while($objResult2 = mysql_fetch_array($objQuery2))
{
		$strSQL3 = "SELECT * FROM Product WHERE ProductID = '".$objResult2["ProductID"]."' ";
		$objQuery3 = mysql_query($strSQL3)  or die(mysql_error());
		$objResult3 = mysql_fetch_array($objQuery3);
		$Total = $objResult2["Unit"] * $objResult3["ProductPrice"];
		$SumTotal = $SumTotal + $Total;
	  ?>
	  <tr>
		<td><?=$objResult2["ProductID"];?></td>
		<td><?=$objResult3["ProductName"];?></td>
		<td><?=$objResult3["ProductPrice"];?></td>
		<td><?=$objResult2["Unit"];?></td>
		<td><?=number_format($Total,2);?></td>
	  </tr>
	  <?php
 }
  ?>
</table>
Sum Total <?=number_format($SumTotal,2);?>

<?php
mysql_close();
?>
</body>
</html>

