
<script type="text/javascript">
// $.ajax({
//     type: "GET",       // Request method: post, get
//     url: "http://localhost/chats/attendees",
//     // data: {username: "wiiNinja", password: "isAnub"}, // outer quotes removed
//     dataType: "json",   // Expected response type
//     // contentType: "application/json",
//     cache: false,
//     success: function(response, status, data) {
//         // alert ("Success");
//         //console.log(data);

//         // $.each(data, function() {
//         //   $.each(this, function(k, v) {
//         //     console.log(k.timestamp);
//         //   });
//         // });
//         // $(data).each(function(index,element){
//         //     //alert(element.timestamp); 
//         //     console.log(element.Attendee);
//         // });
//         // $.each(data, function(){ 
//         //      $.each(this, function(key, value){
//         //         console.log(key + ": " + value );
//         //      })
//         // });

//         console.log(data);

//     },
//     error: function(response, status) {
//         console.log(response);
//         alert('Error! response=' + response + " status=" + status);
//     }
// });
</script>
<script type="text/javascript">
// $(function () {
//     var chart;
//     $(document).ready(function() {
//         $.getJSON("http://localhost/chats/attendees", function(json) {
        
//        // console.log(json);
//             chart = new Highcharts.Chart({
//                 chart: {
//                     renderTo: 'disp',
//                     type: 'line',
//                     marginRight: 130,
//                     marginBottom: 25
//                 },
//                 title: {
//                     text: 'Barcamp Checkings',
//                     x: -20 //center
//                 },
//                 subtitle: {
//                     text: '',
//                     x: -20
//                 },
//                 xAxis: {
//                     categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
//                 },
//                 yAxis: {
//                     title: {
//                         text: 'Amount'
//                     },
//                     plotLines: [{
//                         value: 0,
//                         width: 1,
//                         color: '#808080'
//                     }]
//                 },
//                 tooltip: {
//                     formatter: function() {
//                             return '<b>'+ this.series.name +'</b><br/>'+
//                             this.x +': '+ this.y;
//                     }
//                 },
//                 legend: {
//                     layout: 'vertical',
//                     align: 'right',
//                     verticalAlign: 'top',
//                     x: -10,
//                     y: 100,
//                     borderWidth: 0
//                 },
//                 series: json
//             });
//         });
    
//     });
    
// });
$(function () {
    var chart;
    $(document).ready(function() {
        $.getJSON("attendees/", function(json) {
        
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'disp',
                    type: 'line',
                    marginRight: 130,
                    marginBottom: 100
        
                },
                title: {
                    text: 'Barcamp Nairobi 2013 Registartions vs. Time',
                    //x: -20 //center
                },
                subtitle: {
                    text: '',
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
                series: json
            });
        });
    
    });
    
});
        </script>
<div class = "container">
    <div class = "row">
        <div id = "disp" style="min-width: 400px; height: 400px; margin: 0 auto; margin-top:50px; ">

        </div>
    </div>
</div>
