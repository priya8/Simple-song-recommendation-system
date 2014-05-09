<html>
<head></head>
<body>
<?php
if(isset($_POST['chckbox']))  $a=$_POST['chckbox'];
  $n=count($a);
 $c=mysql_connect("localhost","root","");
mysql_select_db("ism",$c);
mysql_query("delete from naive");
 foreach($a as $key=>$val)
  {
    $b=mysql_query("select * from songs where song='$val'");
   
    while($row=mysql_fetch_array($b))
    {     
     $p=$row['song'];
     $q=$row['artist'];
     $r=$row['genre'];
     $s=$row['eras'];
    mysql_query("insert into naive(song,artist,genre,eras) values('$p','$q','$r','$s')");
  }
 }
  if($n<7)
 {
    echo "<a href='3.php'>select more songs</a>";
  }
 else{ echo "<a href='5.php'>survey review</a>";}
}?>
</body>
</html> 
