<!DOCTYPE html><html class=''>
  <head>
    <style>
      .container {
      width: 700px ;
      margin-left: auto ;
      margin-right: auto ;
      padding-top: 10%;
      }
    </style>
  </head>
  <body>
<div class="app">
	<h1>Bar Chart</h1>
	<ul>
	    <p>Oleg Komarov - first level</p>
	</ul>
	<ul>
	    <p>Maksim Tretiakov - second level</p>
	</ul>
	<ul>
	    <p>Kristina Slonova - third level</p>
	</ul>
	<ul>
	    <p>Igor Ivleev - fourth level</p>
	</ul>
	<bar-chart></bar-chart>
</div>
    <script src='//cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js'></script>
    <script src='//unpkg.com/vue-chartjs@2.6.0/dist/vue-chartjs.full.min.js'></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.js'></script>
    <script src='//unpkg.com/hchs-vue-charts@1.2.8'></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-apexcharts"></script>
    <script >'use strict';

Vue.component('bar-chart', {
	extends: VueChartJs.Pie,
	data: function () {
		return {
			datacollection: {
				labels: ['Card 1', 'Card 2', 'Card 3', 'Card 4', 'Card 5', 'Card 6'],

				datasets: [
					{   
						label: 'Oleg Komarov',
						    backgroundColor: [
                           "#ADFF2F",
                           "#00FFFF",
                           "#4682B4",
                           "#A52A2A",
                           "#000080",
                           "#FFFF00"
                        ],
						pointBackgroundColor: 'white',
						borderWidth: 1,
						pointBorderColor: '#249EBF',
						data: [2, 1, 1, 18, 1, 1],
					},
					{   
					    label: 'Maksim Tretiakov',
						backgroundColor: [
                           "#ADFF2F",
                           "#00FFFF",
                           "#4682B4",
                           "#A52A2A",
                           "#000080",
                           "#FFFF00"
                        ],
						pointBackgroundColor: 'white',
						borderWidth: 1,
						pointBorderColor: '#249EBF',
						data: [2, 0, 4, 0, 3, 0],
					},
										{
					    label: 'Kristina Slonova',
						backgroundColor: [
                           "#ADFF2F",
                           "#00FFFF",
                           "#4682B4",
                           "#A52A2A",
                           "#000080",
                           "#FFFF00"
                        ],
						pointBackgroundColor: 'white',
						borderWidth: 1,
						pointBorderColor: '#249EBF',
						data: [27, 50, 0, 0, 2, 0],
					},
						{
					    label: 'Igor Ivleev',
						backgroundColor: [
                           "#ADFF2F",
                           "#00FFFF",
                           "#4682B4",
                           "#A52A2A",
                           "#000080",
                           "#FFFF00"
                        ],
						pointBackgroundColor: 'white',
						borderWidth: 1,
						pointBorderColor: '#249EBF',
						data: [2, 4, 1, 2, 1, 1],
					},
]
			},
              options: {
                chart: {
                  width: 200
                },
				
				legend: {
					display: true
				},

				responsive: false,
	//			maintainAspectRatio: true,
	//			height: 500
}
		}
	},
	mounted () {
		// this.chartData is created in the mixin
		this.renderChart(this.datacollection, this.options)
	}
})

var vm = new Vue({ 
	el: '.app',
})
    </script>
  </body>
</html>