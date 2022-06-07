<?php
    include("conn.php");
    echo "<script LANGUAGE='javascript'> var ravg=[0,0,0,0,0,0,0,0,0,0,0,0];</script>";
    for($i=1 ; $i<=12 ; $i++){
        // $SQL="SELECT * ,AVG(f.rating) AS ravg FROM fix f,analysis t  WHERE f.sdate LIKE '2020/0".$i."%' AND t.fixNo=f.No ";
        $SQL="SELECT * ,AVG(f.rating) AS ravg FROM fix f,analysis a  WHERE year(f.sdate)='2020' AND month(f.sdate)=".$i."  AND a.fixNo=f.No ";
        $result= mysqli_query($con,$SQL);
        
        while ($row=mysqli_fetch_assoc($result)) {
			$ravg[$i-1]=$row["ravg"];//why??????????
			// echo $ravg[$i-1]." ";
            echo "<script LANGUAGE='javascript'>ravg[".$i."-1]=".$row['ravg'].";</script>";
        }
    }
    // $SQL="SELECT * ,AVG(f.rating) AS ravg FROM fix f,analysis t  WHERE f.sdate LIKE '2020/%' AND t.fixNo=f.No ";
    $SQL="SELECT * ,AVG(f.rating) AS ravg FROM fix f,analysis t  WHERE year(f.sdate)='2020' AND t.fixNo=f.No ";
        $result= mysqli_query($con,$SQL);
        
        while ($row=mysqli_fetch_assoc($result)) {
			$yravg[$i-1]=$row["ravg"];//why??????????
			// echo $ravg[$i-1]." ";
            echo "<script LANGUAGE='javascript'>yravg=".$row['ravg'].";</script>";
        }
?>	
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);
      function drawStuff() {
        
        var data = new google.visualization.arrayToDataTable([
          ['Month', 'Rating'],
          ["Jan", ravg[0]],
          ["Feb", ravg[1]],
          ["Mar", ravg[2]],
          ["Apr", ravg[3]],
          ['May', ravg[4]],
          ['Jun', ravg[5]],
          ['Jul', ravg[6]],
          ['Aug', ravg[7]],
          ['Sep', ravg[8]],
          ['Oct', ravg[9]],
          ['Nov', ravg[10]],
          ['Dec', ravg[11]], 
          ['2020', yravg]
        ]);

        var options = {
          title: '每月平均評價',
          width: 900,
          legend: { position: 'none' },
          chart: { title: '評價',
                   subtitle: '每月平均評價' },
          bars: 'horizontal', // Required for Material Bar Charts.
        //   bars: 'vertical', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'buttom', label: 'Rating'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
  </head>
  <body>
    <div id="top_x_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>
