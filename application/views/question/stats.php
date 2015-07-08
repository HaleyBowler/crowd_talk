<head>
    <!--Load the AJAX API-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
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
            name: "Answer",
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




    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
  </body>