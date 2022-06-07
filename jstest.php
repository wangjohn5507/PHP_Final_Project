<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>可分页、排序和搜索的jQuery表格插件|DEMO_jQuery之家-自由分享jQuery、html5、css3的插件库</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/htmleaf-demo.css"><!--演示页面样式，使用时可以不引用-->
</head>
<body>
	<div class="htmleaf-container">
		
		<div class="container" style="padding: 30px 0;">
			<h3>Table with sortable headings and global search</h3>
			<table id="sampleTableA" class="table table-striped sampleTable">
				<thead>
					<tr>
						<th>Col A</th>
						<th>Col B</th>
						<th>Col C</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>

			<h3>Simple table with column search</h3>
			<table id="sampleTableB" class="table table-striped sampleTable">
			</table>
			
			
		</div>
		
	</div>
	
	<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/js.geotools/dist/geotools.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/js.geotools/dist/geotools-swedish-zipcodes.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js"></script>
		<script src="./src/fancyTable.js"></script>
		<script type="text/javascript">
			// Word genarator
			function rWord(r){var t,n="bcdfghjklmnpqrstvwxyz",a="aeiou",e=function(r){return Math.floor(Math.random()*r)},o="";r=parseInt(r,10),n=n.split(""),a=a.split("");for(t=0;t<r/2;t++){var l=n[e(n.length)],p=a[e(a.length)];o+=0===t?l.toUpperCase():l,o+=2*t<r-1?p:""}return o}

			$(document).ready(function() {
				// Generate a big table
				for(var n=0;n<1000;n++){
					var row = $("<tr>");
					$("#sampleTableA").find("thead th").each(function() {
						$("<td>",{
							html: rWord(8),
							style:"padding:2px;"
						}).appendTo($(row));
					});
					row.appendTo($("#sampleTableA").find("tbody"));
				}
				// And a simple one
				for(var n=0;n<10;n++){
					var row = $("<tr>");
					for(var nn=0;nn<5;nn++){
						$("<td>",{
							html: rWord(8),
							style:"padding:2px;"
						}).appendTo($(row));
					}
					$(row).find("td:last").first().html(   moment(new Date(Math.floor(new Date().getTime()*Math.random()))).format('l')   );
					row.appendTo($("#sampleTableB"));
				}

				// And one with location data
				$('#getNavigatorLocation').bind("click",function(){
					window.navigator.geolocation.getCurrentPosition(function(pos) {
						var myLocation = new geotools().position(pos.coords.latitude, pos.coords.longitude);
						$("#sampleTableC").find("tbody tr").each(function() {
							var arr = $(this).find("td").eq(1).html().match(/([\-\d\.]+)/g);
							if(arr.length==2){
								var dest = new geotools().position(arr[0],arr[1]);
								$(this).find("td").eq(2).html((Math.round(myLocation.distanceTo(dest)/100)/10)+" km");
							}
						});
						$('#sampleTableC td:nth-child(3),#sampleTableC th:nth-child(3)').show();
						$("#sampleTableC")[0].fancyTable.sortColumn=2;
						$("#sampleTableC")[0].fancyTable.sortOrder=1;
						$.fn.fancyTable().tableSort($("#sampleTableC")[0]);
					});
				});
				$('#getZipCodeLocation').bind("click",function(){
					var myLocation = new geotools().position().fromZip($('#zipCode').val());
					if(!myLocation.latitude){
						return;
					}
					$("#sampleTableC").find("tbody tr").each(function() {
						var arr = $(this).find("td").eq(1).html().match(/([\-\d\.]+)/g);
						if(arr.length==2){
							var dest = new geotools().position(arr[0],arr[1]);
							$(this).find("td").eq(2).html((Math.round(myLocation.distanceTo(dest)/100)/10)+" km");
						}
					});
					$('#sampleTableC td:nth-child(3),#sampleTableC th:nth-child(3)').show();
					$("#sampleTableC")[0].fancyTable.sortColumn=2;
					$("#sampleTableC")[0].fancyTable.sortOrder=1;
					$.fn.fancyTable().tableSort($("#sampleTableC")[0]);
				});
				$('#sampleTableC td:nth-child(2),#sampleTableC th:nth-child(2)').hide();
				$('#sampleTableC td:nth-child(3),#sampleTableC th:nth-child(3)').hide();

				// And make them fancy
				$("#sampleTableA").fancyTable({
					sortColumn:0,
					pagination: true,
					perPage:5,
					globalSearch:true
				});
				$("#sampleTableB").fancyTable({
					pagination: true,
					perPage:5
				});
				$("#sampleTableC").fancyTable({
					searchable: false
				});
			});
		</script>
</body>
</html>




