<html>
<head>
</head>
<body style="background-color:black; background-repeat:repeat-x;background-position:center; ">
<i><p style='color:white;font-size:xx-large;text-align: center'>Feedback Result</p></i>
<?php
session_start();
if(isset($_POST['a']))
{
 $a1=$_POST['a'];
 $n=count($a1);
 //echo $n;
}
$t=$_SESSION["total"];
echo "<p></p>";
//echo $t;
echo "<p></p>";
$FDB=($n/$t)*100;
echo "<p style='color:white;font-size:large'>The feedback system is $FDB% efficient</p>";
echo "<script type='text/javascript' src='https://www.google.com/jsapi'></script>
   <script type='text/javascript'>
     google.load('visualization', '1', {packages:['corechart']});
     google.setOnLoadCallback(drawChart);
     function drawChart() {
       var data = google.visualization.arrayToDataTable([
        ['feedback', 'survey'],
        ['liked',      $n ],
        ['not liked',  $t-$n]
         
       ]);

       var options = {
         title: 'Survey of Artist',
         backgroundColor : 'black',
         legend: {textStyle: {color: 'white'}},
         is3D: true,
         
       };

       var chart = new google.visualization.PieChart(document.getElementById('piechart3_3d'));
       chart.draw(data, options);
     }
   </script>";
?>


<div id="piechart3_3d" style="width: 900px; height: 500px;"></div>
<a href="main.php" style="color:white;">Take another survey if you wish</a>
</body>
</html>

