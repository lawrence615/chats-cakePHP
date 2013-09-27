<?php echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js');?>
<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        $.getJSON("attendees", function(json) {
           console.log(json.data);
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'container',
                    type: 'line',
                    marginRight: 130,
                    marginBottom: 100
        
                },
                title: {
                    text: 'Barcamp Nairobi 2013 Registartions vs. Time',
                    //x: -20 //center
                },
                subtitle: {
                    text: 'Version 1.0',
                   // x: -20
                },
                
                xAxis: {
                
                        categories: ['8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00'],
                        
                         title: {
                        text: 'Time'
                
                    },
                
                        
                },
                yAxis: {
                    title: {
                        text: 'Registrations',
                
                    },
                  minRange: 5
                },
                tooltip: {
                    formatter: function() {
                            return '<b>'+ this.series.name +'</b><br/>'+
                            this.x +': '+ this.y;
                    }
                },
                legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom',
                //x:

                borderWidth: 0
                },
               series: [{
                       name: 'checkins',
                       data: json.data
                   },]
            });
        });
    
    });
    
});
</script>
<?php echo $this->Html->script('js/highcharts');?>
<?php echo $this->Html->script('js/modules/exporting');?>
<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto; margin-top:50px; "></div> 