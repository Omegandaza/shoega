<?php
session_start();

mysql_connect("localhost","root","cream123");
mysql_select_db("test");

  $Total = 0;
  $SumTotal = 0;

  $strSQL = "
	INSERT INTO Orders (OrderDate,Name,OrderAddress,Telephone,Email)
	VALUES ('".date("Y-m-d H:i:s")."','".$_POST["txtName"]."','".$_POST["txtAddress"]."','".$_POST["txtTel"]."','".$_POST["txtEmail"]."')";
  mysql_query($strSQL) or die(mysql_error());

  $strOrderID = mysql_insert_id();

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strProductID"][$i] != "")
	  {
			  $strSQL = "
				INSERT INTO OrderDel (OrderID,ProductID,Unit)
				VALUES ('".$strOrderID."','".$_SESSION["strProductID"][$i]."','".$_SESSION["strQty"][$i]."')";
			  mysql_query($strSQL) or die(mysql_error());
	  }
  }

mysql_close();

session_destroy();

header("location:finish_order.php?OrderID=".$strOrderID);
?>

