<?php     
  
   $servername = "localhost";
  $username = "root";
  $password = "cream123";
  $dbname = "test";

// Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM Product";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<div class="product-item columns large-3"><div class="image-wrapper"><a class="circle sale" href="sale/products/indigo-slub-poplin-shirt-by-grayers.html"><span>Sale</span></a><a href="sale/products/indigo-slub-poplin-shirt-by-grayers.html"><img  src=". $row["ProductDetail"]. "alt="Indigo Slub Poplin Shirt by Grayers" /></a></div><!-- .coll-image-wrap --><div class="caption"><p class="title"><a href="sale/products/indigo-slub-poplin-shirt-by-grayers.html">". $row["ProductName"]. "</a></p><p class="vendor"><a href="grayers.html" title="">" . $row["ProductBand"] ."</a></p><p class="price"><span class="money">". $row["ProductPrice"] ."</span><em class="marked-down-from">Was <span class="money">$89.95</span></em></p></div><!-- .coll-prod-caption --></div>";
     }
  } else {
       echo "0 results";
  }

  $conn->close();


?>