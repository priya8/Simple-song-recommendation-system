<html>
<head>
<style type="text/css">
h3 {
color:white;
</style>
</head>
<body style="background-color:black; background-repeat:repeat-x;background-position:center; ">
<h3><i>After reviewing your likes, we suggest you the following songs which you may like..</i></h3>
<?php
$c=mysql_connect("localhost","root","");
mysql_select_db("ism",$c);
$n=$n1=$n2=$n3=$n4=$n5=0;
$q=mysql_query("SELECT COUNT(*) FROM naive");
$n=mysql_result($q,0);
mysql_query("delete from display");
$q1=mysql_query("SELECT * FROM naive" );
$a=array("shreya goshal"=>"0","sonu nigam"=>"0","sunidhi chauhan"=>"0","KK"=>"0","MJ"=>"0");
while($row=mysql_fetch_array($q1))
{
 foreach ($a as $singer=>$p1 )
{
  $q8=mysql_query("SELECT COUNT(*) FROM naive WHERE artist='$singer' ");
  $rr=mysql_result($q8,0);
  $l=$rr/$n;
  $a[$singer]=$l;
}
}
$yyy=arsort($a);
$dups1=array();
$dups2=array();
$dups3=array();
foreach($a as $k1=>$v1)
{
   $a[$k1]=100*$v1;
}
$s1=$a['shreya goshal'];
$s2=$a['sonu nigam'];
$s3=$a['sunidhi chauhan'];
$s4=$a['KK'];
$s5=$a['MJ'];

echo "<script type='text/javascript' src='https://www.google.com/jsapi'></script>
   <script type='text/javascript'>
     google.load('visualization', '1', {packages:['corechart']});
     google.setOnLoadCallback(drawChart);
     function drawChart() {
       var data = google.visualization.arrayToDataTable([
        ['artist', 'survey'],
          ['shreya goshal',$s1 ],
          ['sonu nigam',$s2],
          ['sunidhi chauhan',$s3],
          ['KK',    $s4],
          ['MJ', $s5]
       ]);

      var options = {
         title: 'Survey of Artist',
         backgroundColor : 'black',
         legend: {textStyle: {color: 'white'}},
         is3D: true,
         colors:['Red', 'Green','Yellow','Grey','Blue']
        };
     var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
       chart.draw(data, options);
     }
   </script>";
foreach($a as $key=>$val)
{
if(isset($new_arr1[$val]))
 {
  $new_arr1[$val]=$key;
  }
  else
     {
      if(isset($dups1[$val]))
            {
                $dups1[$val][]=$key;
        }
          else
          {
         $dups1[$val]=array($key);
      }
       }
}

krsort($dups1);
$q2=mysql_query("SELECT * FROM naive" );
$b=array("romantic"=>"0","jazz"=>"0","rock"=>"0","saga"=>"0");
while($row=mysql_fetch_array($q2)){
 foreach ($b as $genree=>$p2 )
{
  $q9=mysql_query("SELECT COUNT(*) FROM naive WHERE genre='$genree' ");
  $rr1=mysql_result($q9,0);
  $l1=$rr1/$n;
  $b[$genree]=$l1;
   }
}
$xxx=arsort($b);
foreach($b as $k1=>$v1)
{
   $b[$k1]=100*$v1;
}
$g1=$b['romantic'];
$g2=$b['jazz'];
$g3=$b['rock'];
$g4=$b['saga'];
echo "<script type='text/javascript' src='https://www.google.com/jsapi'></script>
   <script type='text/javascript'>
     google.load('visualization', '1', {packages:['corechart']});
     google.setOnLoadCallback(drawChart);
     function drawChart() {
       var data = google.visualization.arrayToDataTable([
        ['genre', 'survey'],
          ['romantic',       $g1 ],
          ['jazz',         $g2],
          ['rock',     $g3],
          ['saga',    $g4]
       ]);
 var options = {
         title: 'Survey of Genre',
         backgroundColor : 'black',
         legend: {textStyle: {color: 'white'}},
         is3D: true,
         colors:['Red', 'Green','Yellow','Grey','Blue']
         };
      var chart = new google.visualization.PieChart(document.getElementById('piechart1_3d'));
       chart.draw(data, options);
     }
   </script>";
foreach($b as $key=>$val)
{
if(isset($new_arr2[$val]))
 {
  $new_arr2[$val]=$key;
  }
  else
     {
      if(isset($dups2[$val]))
            {
                $dups2[$val][]=$key;
        }
          else
          {
         $dups2[$val]=array($key);
      }
       }
}
krsort($dups2);
$q3=mysql_query("SELECT * FROM naive" );
$c=array("old"=>"0","new"=>"0");
while($row=mysql_fetch_array($q3))
{
 foreach ($c as $erass=>$p3 )
{
  $q10=mysql_query("SELECT COUNT(*) FROM naive WHERE eras='$erass' ");
  $rr3=mysql_result($q10,0);
  $l3=$rr3/$n;
  $c[$erass]=$l3;
}
}
$zzz=arsort($c);
foreach($c as $k1=>$v1)
{
   $c[$k1]=100*$v1;
}
$e1=$c['old'];
$e2=$c['new'];
echo "<script type='text/javascript' src='https://www.google.com/jsapi'></script>
   <script type='text/javascript'>
     google.load('visualization', '1', {packages:['corechart']});
     google.setOnLoadCallback(drawChart);
     function drawChart() {
       var data = google.visualization.arrayToDataTable([
        ['eras', 'survey'],
        ['old',       $e1 ],
          ['new',         $e2]
         
       ]);

       var options = {
         title: 'Survey of Eras',
         backgroundColor : 'black',
         legend: {textStyle: {color: 'white'}},
         is3D: true,
         colors:['Red', 'Green','Yellow','Grey','Blue'] };

       var chart = new google.visualization.PieChart(document.getElementById('piechart2_3d'));
       chart.draw(data, options);
     }
   </script>";

foreach($c as $key=>$val)
{
if(isset($new_arr3[$val])){
 
  $new_arr3[$val]=$key;
  }
  else
     {
      if(isset($dups3[$val]))
            {
                $dups3[$val][]=$key;
        }
          else
          {          $dups3[$val]=array($key);
      }
       }
}
krsort($dups3);
foreach($dups1 as $key=>$val)
{    
  if($key>=28)
    {  
       foreach($val as $key1)
          {
             $w=mysql_query("select * from songs WHERE artist='$key1' and song not in(select song from naive) limit 10");
             while($row=mysql_fetch_array($w))
                     
                   {$m1=$row['song'];
                   mysql_query("insert into display(song) values('$m1')");
                    }
                }
                }
           }
   foreach($dups1 as $a=>$b)
{
  foreach($dups2 as $c=>$d)
   {
      foreach($dups3 as $e=>$f)
       {
          if($a>28 && $c>35 && $e>60)
           {
              foreach($b as $p)
                {
                  foreach($d as $q)
                   {
                     foreach($f as $r)
                       {
                          $poo=mysql_query("select * from songs where artist='$p' and genre='$q' and eras='$r' and song not in(select song from naive) limit 4");
                            while($row=mysql_fetch_array($poo))
                     
                     { $m4=$row['song'];
                    mysql_query("insert into display(song) values('$m4')");
}
}
}
}
}
}
}
}
?>
<form id="feedback" action="fb.php" method="POST" >
<?php
 
$dis=mysql_query("SELECT DISTINCT song FROM display");
$rows = mysql_num_rows($dis);
while($row=mysql_fetch_array($dis))
{echo "<p></p>";echo "<p style='color:white;'>".$row['song']."<input type='checkbox' name='a[]'/></p>";}
echo "<p></p>";
echo "<input type='submit' name='submit' value='submit'/>";

session_start();
$_SESSION["total"] = $rows ;
?>
<i><p style='color:white;font-size:xx-large;text-align: center'>Survey of artist </p></i>;
<div id="piechart_3d" style="width: 900px; height: 500px;"></div>
<i><p style='color:white;font-size:xx-large;text-align: center'>Survey of genre</p></i>;
<div id="piechart1_3d" style="width: 900px; height: 500px;"></div>
<i><p style='color:white;font-size:xx-large;text-align: center'>Survey of eras</p></i>;
<div id="piechart2_3d" style="width: 900px; height: 500px;"></div>
</body>
</html>
