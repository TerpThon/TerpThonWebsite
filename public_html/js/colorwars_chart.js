google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);

var colorWarsGetPointsScript = "get_points.php";


function drawChart() {
	
	$.ajax({
		// make a get request to the php file
		type: "GET",
		url: colorWarsGetPointsScript,
		
		// Pass the graph type requested to the php points script. Default "all"
		data: { graph: "all" },
		
		dataType: "json",
				
		// on success:
		success: function(data) {
			
			var chartData = google.visualization.arrayToDataTable([
				['Team', 'Points', { role: 'style' }],
				['Pink', data['Pink'], '#ff33a1'],            // RGB value
				['Yellow', data['Yellow'], 'yellow'],            // English color name
				['Green', data['Green'], 'lime'],
				['Blue', data['Blue'], '#00FFFF' ],
				['Orange', data['Orange'], 'FD5F00' ],
				['Purple', data['Purple'], 'cc00ff' ]
			]);
			
			var view = new google.visualization.DataView(chartData);
				view.setColumns([0, 1,
				   { calc: "stringify",
					 sourceColumn: 1,
					 type: "string",
					 role: "annotation" },
				   2]);

			var options = {
			  title: "",
			  hAxis: {title: 'Team', titleTextStyle: {color: 'red'}},
			  vAxis: {title: 'Points', titleTextStyle: {color: 'red'}, maxValue:200, minValue:0},
			  legend:{position:'none'}
			};

			var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
			chart.draw(view, options);
		},
			
		// on error:
		error: function(err) {
			// alert the user that the request failed
			alert("An error occurred while fetching the Color Wars points data.");
		}
	});
}