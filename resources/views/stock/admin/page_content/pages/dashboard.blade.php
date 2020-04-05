@extends('stock.admin.page_content.index')
@section('title','Dashboard')
@section('pageHeading','STOCK')


@section('content')


    <div class="container-fluid">
        <!-- Info boxes -->






        <div class="row">
            <div class="col-12 col-sm-6 col-md-2">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Number of Companies</span>
                        <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-2">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-thumbs-up"></i></span>


                    <div class="info-box-content">
                        <span class="info-box-text">Average Open </span>
                        <span class="info-box-number">41,410</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-2">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-shopping-cart"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Average High</span>
                        <span class="info-box-number">760</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-2">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Average low</span>
                        <span class="info-box-number">2,000</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-2">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Average Close</span>
                        <span class="info-box-number">2,000</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-2">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Volume</span>
                        <span class="info-box-number">2,000</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->













        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with minimal features & hover style</h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Company Name</th>
                                <th>Date</th>
                                <th>Open Price</th>
                                <th>High Price</th>
                                <th>Low Price</th>
                                <th>Close Price Price</th>
                                <th>Volume</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1;?>
                            @foreach($stockData as $ad)

                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$ad->company_name}}</td>
                                <td>{{$ad->date}}</td>
                                <td>{{$ad->open_price}}</td>
                                <td>{{$ad->high_price}}</td>
                                <td>{{$ad->low_price}}</td>
                                <td>{{$ad->close_price}}</td>
                                <td>{{$ad->volume}}</td>
                            </tr>

                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Sl</th>
                                <th>Company Name</th>
                                <th>Date</th>
                                <th>Open Price</th>
                                <th>High Price</th>
                                <th>Low Price</th>
                                <th>Close Price Price</th>
                                <th>Volume</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>












        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with minimal features & hover style</h3>
                    </div>
                    <div class="card-body">





                        <div id="curve_chart" style=" height: 500px"></div>







                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script type="text/javascript">
                            google.charts.load('current', {'packages':['corechart']});
                            google.charts.setOnLoadCallback(drawChart);

                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                    ['Date', 'High Price', 'Low Price', 'Close Price'],
                                        <?php foreach ($stockData as $dt){?>
                                    ['{{$dt->date}}',     {{$dt->high_price}},      {{$dt->low_price}},      {{$dt->close_price}}],
                                    <?php }?>
                                ]);

                                var options = {
                                    title: 'Apexfoods',
                                    curveType: 'function',
                                    legend: { position: 'bottom' }
                                };

                                var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                                chart.draw(data, options);
                            }
                        </script>






                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>




















        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Chart</h3>
                    <div class="card-body">





                        <script src="https://code.highcharts.com/stock/highstock.js"></script>
                        <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
                        <script src="https://code.highcharts.com/stock/modules/export-data.js"></script>







                        <div id="container" class="chart"  style=" min-height: 500px"></div>

















                        <script>

                        var seriesOptions = [],
                        seriesCounter = 0,
                        names = ['MSFT', 'AAPL', 'GOOG'];

                        /**
                        * Create the chart when all data is loaded
                        * @returns {undefined}
                        */
                        function createChart() {

                        Highcharts.stockChart('container', {

                            rangeSelector: {
                                buttons: [{
                                    type: 'day',
                                    count: 1,
                                    text: '24h'
                                }, {
                                    type: 'week',
                                    count: 1,
                                    text: '1w'
                                }, {
                                    type: 'month',
                                    count: 1,
                                    text: '1m'
                                }, {
                                    type: 'month',
                                    count: 6,
                                    text: '6m'
                                }, {
                                    type: 'year',
                                    count: 1,
                                    text: '1y'
                                }, {
                                    type: 'all',
                                    text: 'All'
                                }],
                                selected: 1
                            },

                        yAxis: {
                        labels: {
                        formatter: function () {
                        return (this.value > 0 ? ' + ' : '') + this.value + '%';
                        }
                        },
                        plotLines: [{
                        value: 0,
                        width: 2,
                        color: 'silver'
                        }]
                        },

                        plotOptions: {
                        series: {
                        compare: 'percent',
                        showInNavigator: true
                        }
                        },

                        tooltip: {
                        pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.change}%)<br/>',
                        valueDecimals: 2,
                        split: true
                        },

                        series: seriesOptions
                        });
                        }

                        function success(data) {
                            alert(data);
                        var name = this.url.match(/(msft|aapl|goog)/)[0].toUpperCase();
                        var i = names.indexOf(name);
                        seriesOptions = {
                        name: name,
                        data: data
                        };

                        // As we're loading the data asynchronously, we don't know what order it
                        // will arrive. So we keep a counter and create the chart when all the data is loaded.
                        seriesCounter += 1;

                        if (seriesCounter === names.length) {
                        createChart();
                        }
                        }

                        Highcharts.getJSON(
                        // 'https://cdn.jsdelivr.net/gh/highcharts/highcharts@v7.0.0/samples/data/msft-c.json',
                        'http://127.0.0.1:8000/open',
                        success
                        );
                        Highcharts.getJSON(
                        // 'https://cdn.jsdelivr.net/gh/highcharts/highcharts@v7.0.0/samples/data/aapl-c.json',
                        'http://127.0.0.1:8000/high',
                        success
                        );
                        Highcharts.getJSON(
                        // 'https://cdn.jsdelivr.net/gh/highcharts/highcharts@v7.0.0/samples/data/goog-c.json',
                        'http://127.0.0.1:8000/low',
                        success
                        );
                        </script>






                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        </div>






























    </div><!--/. container-fluid -->


@endsection








