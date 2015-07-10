<head>
    <!--Load the AJAX API-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" />
<link href='http://fonts.googleapis.com/css?family=Comfortaa:400,300' rel='stylesheet' type='text/css'>
    <script type="text/javascript">

     $(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: '<?php echo $question ?>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: "Votes",
            colorByPoint: true,
            data: [{
                name: '<?php echo $answer_a ?>',
                y: <?php echo $a_count ?>
            }, {
                name: '<?php echo $answer_b ?>',
                y: <?php echo $b_count ?>,
            }, {
                name: '<?php echo $answer_c ?>',
                y: <?php echo $c_count ?>
            }, {
                name: '<?php echo $answer_d ?>',
                y: <?php echo $d_count ?>
            }]
        }]
    });
});

/**
 * Sand-Signika theme for Highcharts JS
 * @author Torstein Honsi
 */

// Load the fonts
Highcharts.createElement('link', {
   href: 'http://fonts.googleapis.com/css?family=Comfortaa:400,300',
   rel: 'stylesheet',
   type: 'text/css'
}, null, document.getElementsByTagName('head')[0]);

// Add the background image to the container
Highcharts.wrap(Highcharts.Chart.prototype, 'getContainer', function (proceed) {
   proceed.call(this);
   this.container.style.background = '#A1CDF1';
});


Highcharts.theme = {
   colors: ["#87BBA2", "#A285AA", "#E5B68E", "#D67060"],
   chart: {
      backgroundColor: null,
      style: {
         fontFamily: "Comfortaa, serif"
      }
   },
   title: {
      style: {
         color: '#F7F5FB',
         fontSize: '5.5em',
         fontWeight: 'bold',
         margin: '20vh 0 0 0'
      }
   },
   subtitle: {
      style: {
         color: 'black'
      }
   },
   tooltip: {
      borderWidth: 0
   },
   legend: {
      itemStyle: {
         fontWeight: 'bold',
         fontSize: '13px'
      }
   },
   xAxis: {
      labels: {
         style: {
            color: '#6e6e70'
         }
      }
   },
   yAxis: {
      labels: {
         style: {
            color: '#6e6e70'
         }
      }
   },
   plotOptions: {
      series: {
         shadow: true
      },
      candlestick: {
         lineColor: '#404048'
      },
      map: {
         shadow: false
      }
   },

   // Highstock specific
   navigator: {
      xAxis: {
         gridLineColor: '#D0D0D8'
      }
   },
   rangeSelector: {
      buttonTheme: {
         fill: 'white',
         stroke: '#C0C0C8',
         'stroke-width': 1,
         states: {
            select: {
               fill: '#D0D0D8'
            }
         }
      }
   },
   scrollbar: {
      trackBorderColor: '#C0C0C8'
   },

   // General
   background2: '#E0E0E8'
   
};

// Apply the theme
Highcharts.setOptions(Highcharts.theme);




    </script>
  </head>

  <body>

    <!--Div that will hold the pie chart-->
    <div id="container" style="width: 70vw; height: 70vh; margin-right: auto; margin-left: auto"></div>
        <div class="container">
    	<a class="btn button-top btn-stat btn-default" href="../thought/form" role="button">Have a thought?</a>
    	</br>
		<a class="btn btn-stat btn-default" href="../info" role="button">What is Talking Toilet?</a>
    </div>
  </body>