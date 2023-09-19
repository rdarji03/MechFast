google.charts.load("current", {
    packages: ["corechart"],
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ["Year", "Sales"],
        [100, 300],
        [200, 400],
        [300, 600],
    ]);

    var options = {
        title: "Total Sales",
        curveType: "function",
        legend: {
            position: "bottom",
        },
    };

    var chart = new google.visualization.LineChart(
        document.getElementById("curve_chart")
    );

    chart.draw(data, options);
}
