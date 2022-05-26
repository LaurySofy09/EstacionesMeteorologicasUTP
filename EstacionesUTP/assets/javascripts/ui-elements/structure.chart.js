(function( $ ) {

	'use strict';

	/*
	Flot: Basic
	*/
	(function() {
		var plot = $.plot('#graficoBase', [graficoBaseData], {
			colors: ["#0088cc"],
			series: {
				lines: {
					show: true,
					fill: true,
					lineWidth: 1,
					fillColor: {
						colors: [{
							opacity: 0.45
						}, {
							opacity: 0.45
						}]
					}
				},
				points: {
					show: true
				},
				shadowSize: 0
			},
			grid: {
				hoverable: true,
				clickable: true,
				borderColor: 'rgba(0,0,0,0.1)',
				borderWidth: 1,
				labelMargin: 15,
				backgroundColor: 'transparent'
			},
			yaxis: {
				color: 'rgba(0,0,0,0.1)'
			},
			xaxis: {
				color: 'rgba(0,0,0,0.1)',
				mode: 'time',
				minTickSize:  [1, "hour"]
			},
			tooltip: true,
			tooltipOpts: {
				content: 'El valor a las %x es %y.13',
				shifts: {
					x: -60,
					y: 25
				},
				defaultTheme: false
			}
		});
	})();

	(function() {
		var DATA_AGE_LIMIT = 30000; // milliseconds
		var UPDATE_INTERVAL = 1000; // milliseconds

		var data = [
			{
		  	label: "Series 1",
		    data: []
		  },
		  {
		  	label: "Series 2",
		    data: []
		  }
		];

		var options = {
			series: {
		  	shadowSize: 0
		  },
		  yaxis: {
		  	min: 0,
		    max: 100
		  },
		  xaxis: {
		  	mode: "time"
		  }
		};

		// Modifies a series object to remove old data points and
		// adds a new data point.
		function getRandomData(series) {

			var now = new Date().getTime();

			// Drop old data points from the series
		  var i;
		  for (i=0; i<series.data.length; i++) {
		  	if (series.data[i][0] > now - DATA_AGE_LIMIT) {
		    	break;
		    }
		  }
		  series.data = series.data.slice(i);
		  
		  // Get new random Y value
		  // Start the random sequence at 50 or
		  // get a random value within +/- 5 of previous value
			var lastY = series.data.length > 0 ? series.data[series.data.length - 1][1] : 50;
		  var newY = lastY + Math.random() * 10 - 5;

		  // Limit the new value between 0 and 100
		  if (newY < 0) {
		  	newY = 0;
		  } else if (newY > 100) {
		  	newY = 100;
		  }

			// Add the new data point to the series
		  series.data.push([now, newY]);
		}

		function update() {
		  getRandomData(data[0]);
		  getRandomData(data[1]);

			$.plot("#graph", data, options);
		  setTimeout(update, UPDATE_INTERVAL);
		}

		update();
	})();
	
	(function() {
		var flotBasic = $.plot('#flotBasic', flotBasicData, {
			series: {
				lines: {
					show: true,
					fill: true,
					lineWidth: 1,
					fillColor: {
						colors: [{
							opacity: 0.45
						}, {
							opacity: 0.45
						}]
					}
				},
				points: {
					show: true
				},
				shadowSize: 0
			},
			grid: {
				hoverable: true,
				clickable: true,
				borderColor: 'rgba(0,0,0,0.1)',
				borderWidth: 1,
				labelMargin: 15,
				backgroundColor: 'transparent'
			},
			yaxis: {
				min: 0,
				max: 300,
				color: 'rgba(0,0,0,0.1)'
			},
			xaxis: {
				color: 'rgba(0,0,0,0)'
			},
			tooltip: true,
			tooltipOpts: {
				content: '%s: Value of %x is %y',
				shifts: {
					x: -60,
					y: 25
				},
				defaultTheme: false
			}
		});
	})();
}).apply( this, [ jQuery ]);