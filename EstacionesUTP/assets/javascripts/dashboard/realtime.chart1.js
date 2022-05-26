(function( $ ) {

	'use strict';

	/*
	Flot: Basic
	*/
	(function() {
		var dato = [];
		var id = 1;
		var num = 1;
		function obtenerData() {
		if (dato.length > 6)
		{
			dato = dato.slice(1);
		}
		if (id > 20)
		{
			id = 1;
		}
		$.ajax({
			type:"POST",
			url:"consultatiemporeal.php",
			data:"id="+id,
			success:function(r){
				if(r)
				{
					dato.push([num,JSON.parse(r).VALOR]);
					id=id+1;
					num=num+1;
				}
			}
		})
		return dato;
		}
		
		var plot = $.plot('#graficoBase', [], {
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
				show:false
				/*color: 'rgba(0,0,0,0.1)',
				mode: 'time',
				minTickSize:  [1, "hour"]*/
			},
			tooltip: true,
			tooltipOpts: {
				content: 'El valor a las %x es %y.2',
				shifts: {
					x: -60,
					y: 25
				},
				defaultTheme: false
			}
		});


		function update() {
			//document.getElementById("demo").innerHTML = dato;		
			plot.setData([obtenerData()]);
			
			/*plot.setData([getData()]);*/
			
			// Since the axes don't change, we don't need to call plot.setupGrid()
			plot.setupGrid();
			plot.draw();

			setTimeout(update, 1000);
			}
			update();
	})();
}).apply( this, [ jQuery ]);