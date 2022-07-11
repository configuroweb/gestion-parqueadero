<?php include('header.php'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-3 px-0" style="position:fixed">
            <div class="card border-0 shadow-sm">
                <div class="card-body m-0 p-0">
                    <?php include('sidebar.php'); ?>
                </div>
            </div>
        </div>
        <div class="col-9 offset-3 mt-4">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-info rounded-0" role="alert">El informe que se muestra a continuación abarca solo los últimos 10 días.</div>
                    <?php
                    $dataPoints = $this->datawork->entry_report();
                    ?>

                    <script>
                        window.onload = function() {

                            var chart = new CanvasJS.Chart("chartContainer", {
                                animationEnabled: true,
                                theme: "light2",
                                axisX: {
                                    valueFormatString: "MMM DD, Y"
                                },
                                axisY: {
                                    title: "Registro de Vehículos Ingresados",
                                },
                                data: [{
                                    type: "splineArea",
                                    color: "#6599FF",
                                    xValueType: "dateTime",
                                    yValueFormatString: "#,##0 Entry",
                                    dataPoints: <?php echo json_encode($dataPoints); ?>
                                }]
                            });

                            chart.render();

                        }
                    </script>

                    <div class="container-fluid mt-4">
                        <div class="row">
                            <div class="col-lg-12 mx-auto">
                                <div class="card rounded-0 shadow-none">
                                    <div class="card-header">
                                        <div class="card-title h6 mb-0"><i class="fas fa-chart-line"></i>&nbsp; Entradas de Vehículos Estacionados</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>