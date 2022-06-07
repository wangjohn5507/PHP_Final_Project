<?php
    include("conn.php");
    echo "<script LANGUAGE='javascript'> var type=[];</script>";
    echo "<script LANGUAGE='javascript'> var tavg=[];</script>";
    // echo "<script LANGUAGE='javascript'> var B=[];</script>";
      $SQL="SELECT a.type ,AVG(a.fdate-a.sdate) AS tavg  FROM analysis a GROUP BY a.type ";
        
      $result= mysqli_query($con,$SQL);
              //         $time_input = strtotime("2011/05/21");  
              // $date_input = getDate($time_input);  
              // print_r($date_input); 
      while ($row=mysqli_fetch_assoc($result)) {
        $type=$row["type"];//why??????????
        echo $type." ";

        $tavg=$row["tavg"];
        echo $tavg."<br/>";
            // echo "<script LANGUAGE='javascript'>ravg[".$i."-1]=".$row['ravg'].";</script>";
            echo "<script LANGUAGE='javascript'>type.push('".$row['type']."');</script>";
            echo "<script LANGUAGE='javascript'>tavg.push('".$row['tavg']."');</script>";
            // echo "<script LANGUAGE='javascript'>B.push('".$row["EdeptName"]."');</script>";
      }
    
      $SQL="SELECT AVG(a.fdate-a.sdate) AS tavg  FROM analysis a  ";
        $result= mysqli_query($con,$SQL);
        echo "<script LANGUAGE='javascript'> var alltavg;</script>";
        while ($row=mysqli_fetch_assoc($result)) {
			    $alltavg=$row["tavg"];//why??????????
          echo $alltavg."<br/>";
          echo "<script LANGUAGE='javascript'>alltavg=".$row['tavg'].";</script>";
        }
?>	
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);
      function drawStuff() {
        aleart(type[0]);
        var data = new google.visualization.arrayToDataTable([
          ['Unit Type', 'Avarage time'],
          [type[0], tavg[0]],
          [type[1], tavg[1]],
          [type[2], tavg[2]],
          [type[3], tavg[3]],
          [type[4], tavg[4]],
          [type[5], tavg[5]],
          [type[6], tavg[6]],
          [type[7], tavg[7]],
          [type[8], tavg[8]],
          // [type[9], tavg[9]], 
          ['total',alltavg]
        ]);

        var options = {
          title: '每月平均評價',
          width: 900,
          legend: { position: 'none' },
          chart: { title: '評價',
                   subtitle: '每月平均評價' },
          bars: 'vertical', // Required for Material Bar Charts.
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
