$(function(){
    /* Line */

    var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
    var lineChartData = {
        labels : ["Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"],
        datasets : [
            {
                label: "Sesiones",
                fillColor : "rgba(52, 152, 219, 0.2)",
                strokeColor : "rgba(52, 152, 219,1)",
                pointColor : "rgba(52, 152, 219,1)",
                pointStrokeColor : "#fff",
                pointHighlightFill : "#fff",
                pointHighlightStroke : "rgba(220,220,220,1)",
                data : [10,50,80,90,40,75,69]
            },
            {
                label: "Leads",
                fillColor : "rgba(230, 126, 34,0.2)",
                strokeColor : "rgba(230, 126, 34,1)",
                pointColor : "rgba(230, 126, 34,1)",
                pointStrokeColor : "#fff",
                pointHighlightFill : "#fff",
                pointHighlightStroke : "rgba(230, 126, 34,1)",
                data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
            },
            {
                label: "Llamadas contestadas",
                fillColor : "rgba(231, 76, 60,0.2)",
                strokeColor : "rgba(231, 76, 60,1)",
                pointColor : "rgba(231, 76, 60,1)",
                pointStrokeColor : "#fff",
                pointHighlightFill : "#fff",
                pointHighlightStroke : "rgba(231, 76, 60,1)",
                data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
            },
            {
                label: "Ventas",
                fillColor : "rgba(14, 106, 53,0.2)",
                strokeColor : "rgba(14, 106, 53,1)",
                pointColor : "rgba(14, 106, 53,1)",
                pointStrokeColor : "#fff",
                pointHighlightFill : "#fff",
                pointHighlightStroke : "rgba(14, 106, 53,1)",
                data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
            }
        ]

    }

    var ctx = document.getElementById("canvas-2").getContext("2d");
    window.myLine = new Chart(ctx).Line(lineChartData, {
        responsive: true
    });

});


