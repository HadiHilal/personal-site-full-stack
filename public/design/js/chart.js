window.onload = function() {

    var chart = new CanvasJS.Chart("chartContainer", {
        theme: "light2", // "light1", "light2", "dark1", "dark2"
        exportEnabled: true,
        animationEnabled: true,
        title: {
            text: "What i use every day ?"
        },
        data: [{
            type: "pie",
            startAngle: 25,
            toolTipContent: "<b>{label}</b>: {y}%",
            showInLegend: "true",
            legendText: "{label}",
            indexLabelFontSize: 16,
            indexLabel: "{label} - {y}%",
            dataPoints: [
                { y: 31.08, label: "Coffe" },
                { y: 27.34, label: "html5 & css3" },
                { y: 20.62, label: "larvel" },
                { y: 10.02, label: "terminal" },
                { y: 9.07, label: "js" },
                { y: 1.22, label: "mysql" },
                { y: 0.44, label: "Others" }
            ]
        }]
    });
    chart.render();

    }
