@extends('navbar')
@section('isihalaman')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['line']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Tanggal Rekam Medis');
        data.addColumn('number', 'Berat Janin (g)');
        data.addRows([
            <?php echo $data1 ?>
        ]);
        var options = {
            width: 900,
            height: 500,
            hAxis: {
                format: 'd MMMM yyyy',
                gridlines: {count: 15}
            },
            axes: {
                x: {
                    0: {side: 'bottom'}
                }
            },
    };
    var chart = new google.charts.Line(document.getElementById('berat_janin'));
    chart.draw(data, google.charts.Line.convertOptions(options));
    }
</script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['line']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Tanggal Rekam Medis');
        data.addColumn('number', 'Panjang Janin (cm)');
        data.addRows([
            <?php echo $data2 ?>
        ]);
        var options = {
            width: 900,
            height: 500,
            hAxis: {
                format: 'd MMMM yyyy',
                gridlines: {count: 15}
            },
            axes: {
                x: {
                    0: {side: 'bottom'}
                }
            },
    };
    var chart = new google.charts.Line(document.getElementById('panjang_janin'));
    chart.draw(data, google.charts.Line.convertOptions(options));
    }
</script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['line']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Tanggal Rekam Medis');
        data.addColumn('number', 'Detak Jantung Janin (bpm)');
        data.addRows([
            <?php echo $data3 ?>
        ]);
        var options = {
            width: 900,
            height: 500,
            hAxis: {
                format: 'd MMMM yyyy',
                gridlines: {count: 15}
            },
            axes: {
                x: {
                    0: {side: 'bottom'}
                }
            },
    };
    var chart = new google.charts.Line(document.getElementById('detak_janin'));
    chart.draw(data, google.charts.Line.convertOptions(options));
    }
</script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['line']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Tanggal Rekam Medis');
        data.addColumn('number', 'Berat Ibu (kg)');
        data.addRows([
            <?php echo $data4 ?>
        ]);
        var view = new google.visualization.DataView(data);
        var options = {
            width: 900,
            height: 500,
            hAxis: {
                format: 'd MMMM yyyy',
                gridlines: {count: 15}
            },
            axes: {
                x: {
                    0: {side: 'bottom'}
                }
            },
    };
    var chart = new google.charts.Line(document.getElementById('berat_ibu'));
    chart.draw(data, google.charts.Line.convertOptions(options));
    }
</script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['line']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Tanggal Rekam Medis');
        data.addColumn('number', 'Detak Jantung Ibu (bpm)');
        data.addRows([
            <?php echo $data5 ?>
        ]);
        var options = {
            width: 900,
            height: 500,
            hAxis: {
                format: 'd MMMM yyyy',
                gridlines: {count: 15}
            },
            axes: {
                x: {
                    0: {side: 'bottom'}
                }
            },
    };
    var chart = new google.charts.Line(document.getElementById('detak_ibu'));
    chart.draw(data, google.charts.Line.convertOptions(options));
    }
</script>
<div class="container mt-5 mb-5">
    <div class="card row mb-3">
        <div class="col">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="img-fluid" width="150px" src="{{asset('assets/images/Icon-Si_Ibu.png')}}">
                <h1><span class="font-weight-bold"><br>Rekam Medis</span></h1>
            </div>
        </div>
    </div>
    <div class="card row mb-3">
        <div class="col">
            <center><h2><span class="font-weight-bold"><br>Berat Janin (kg)</span></h2></center>
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <div class="card row mb-3">
                    <div class="p-3 py-5">
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div id="berat_janin"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card row mb-3">
        <div class="col">
            <center><h2><span class="font-weight-bold"><br>Panjang Janin (cm)</span></h2></center>
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <div class="card row mb-3">
                    <div class="p-3 py-5">
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div id="panjang_janin"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card row mb-3">
        <div class="col">
            <center><h2><span class="font-weight-bold"><br>Detak Jantung Janin (bpm)</span></h2></center>
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <div class="card row mb-3">
                    <div class="p-3 py-5">
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div id="detak_janin"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card row mb-3">
        <div class="col">
            <center><h2><span class="font-weight-bold"><br>Berat Ibu (kg)</span></h2></center>
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <div class="card row mb-3">
                    <div class="p-3 py-5">
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div id="berat_ibu"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card row mb-3">
        <div class="col">
            <center><h2><span class="font-weight-bold"><br>Detak Jantung Ibu (bpm)</span></h2></center>
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <div class="card row mb-3">
                    <div class="p-3 py-5">
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div id="detak_ibu"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection