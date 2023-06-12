@extends('navbar')
@section('isihalaman')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['line']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Tanggal Catat Tumbuh');
        data.addColumn('number', 'Berat Badan Anak (kg)');
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
    var chart = new google.charts.Line(document.getElementById('berat_badan_anak'));
    chart.draw(data, google.charts.Line.convertOptions(options));
    }
</script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['line']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Tanggal Catat Tumbuh');
        data.addColumn('number', 'Tinggi Badan Anak (cm)');
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
    var chart = new google.charts.Line(document.getElementById('tinggi_badan_anak'));
    chart.draw(data, google.charts.Line.convertOptions(options));
    }
</script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['line']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('date', 'Tanggal Catat Tumbuh');
        data.addColumn('number', 'Lingkar Kepala Anak (cm)');
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
    var chart = new google.charts.Line(document.getElementById('lingkar_kepala_anak'));
    chart.draw(data, google.charts.Line.convertOptions(options));
    }
</script>
<div class="container mt-5 mb-5">
    <div class="card row mb-3">
        <div class="col">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="img-fluid" width="150px" src="{{asset('assets/images/Icon-1000_Hari_Anak.png')}}">
                <h1><span class="font-weight-bold"><br>Catatan Pertumbuhan</span></h1>
            </div>
        </div>
    </div>
    <div class="card row mb-3">
        <div class="col">
            <center><h2><span class="font-weight-bold"><br>Berat Badan Anak (kg)</span></h2></center>
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <div class="card row mb-3">
                    <div class="p-3 py-5">
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div id="berat_badan_anak"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card row mb-3">
        <div class="col">
            <center><h2><span class="font-weight-bold"><br>Tinggi Badan Anak (cm)</span></h2></center>
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <div class="card row mb-3">
                    <div class="p-3 py-5">
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div id="tinggi_badan_anak"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card row mb-3">
        <div class="col">
            <center><h2><span class="font-weight-bold"><br>Lingkar kepala Anak (cm)</span></h2></center>
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <div class="card row mb-3">
                    <div class="p-3 py-5">
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div id="lingkar_kepala_anak"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection