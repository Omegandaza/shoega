<?php
if(!mysql_connect("localhost","root","cream123"))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("test"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
?>