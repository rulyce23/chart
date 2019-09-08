@extends('layouts.app')
@section('content')
	<body bgcolor="#202020">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Highcharts Example</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="data.js" ></script>
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
	<script src="/js/themes/dark-mod.js"></script>
    </head>
    <body>
        <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    $(function () { 
        var data_click ;
        var data_viewer ;
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Yearly Website Ratio'
        },
        xAxis: {
            categories: ['2013','2014','2015', '2016']
        },
        yAxis: {
            title: {
                text: 'Rate'
            }
        },
        series: [{
            name: 'Click',
            data: data_click
        }, {
            name: 'View',
            data: data_viewer
        }]
    });
});
</script>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <div id="container"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection