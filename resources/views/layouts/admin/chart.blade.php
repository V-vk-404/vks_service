<html>

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"
        integrity="sha512-TW5s0IT/IppJtu76UbysrBH9Hy/5X41OTAbQuffZFU6lQ1rdcLHzpU5BzVvr/YFykoiMYZVWlr/PX1mDcfM9Qg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script src="https://raw.githubusercontent.com/nnnick/Chart.js/master/dist/Chart.bundle.js"></script>
    {{-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> --}}
    {{-- <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],

            ]);

            var options = {
                // title: 'User By City',

                is3D: true,
                pieHole: 0.4,


            };


            var chart = new google.visualization.PieChart(document.getElementById('piechart'));


            chart.draw(data, options);
        }
    </script> --}}
</head>

<body>
    {{-- <div id="piechart" style="width: 900px; height: 500px;"></div>
    <div id="piechart1" style="width: 900px; height: 500px;"></div> --}}
    <div style="height: 400px;width:900px;margin:auto;">
        <canvas id="barChart"></canvas>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        <canvas id="canvas" height="280" width="600"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script>
        var year = <?php echo $year; ?>;
        var user = <?php echo $user; ?>;
        var barChartData = {
            labels: year,
            datasets: [{
                label: 'User',
                backgroundColor: "pink",
                data: user
            }]
        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    elements: {
                        rectangle: {
                            borderWidth: 2,
                            borderColor: '#c1c1c1',
                            borderSkipped: 'bottom'
                        }
                    },
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Yearly User Joined'
                    }
                }
            });
        };
    </script>
</body>
{{-- <script>
    $(function() {
                var datas = <?php echo json_encode($datas);
?>;
                var barCanvas = $('#barChart');
                var barChart = new Chart(barCanvas, {
                        type: 'bar',
                        data = {
                            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov',
                                'Dec'
                            ],
                            datasets: [{
                                    label: 'New Users Growth,2022',
                                    data: datas,
                                    backgroundColor: ['red', 'blue', 'green', 'yellow', 'orange', 'purple',
                                        'pink',
                                        'brown',
                                        'golden', 'silver', 'white', 'cyan'
                                    ]
                                }

                            ]
                        })
                }
</script> --}}

</html>
