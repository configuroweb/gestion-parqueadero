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

<div class="container-fluid">
    <?php include('notification.php'); ?>
    <div class="row">
        <div class="col-3 px-0" style="position:fixed">
            <div class="card border-0 shadow-sm">
                <div class="card-body m-0 p-0">
                    <?php include('sidebar.php'); ?>
                </div>
            </div>
        </div>
        <div class="col-9 offset-3 mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card rounded-0 border-0 shadow-sm bg-info text-white">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <h1 class="ml-2"><?= $this->datawork->count_data('add_vehicle', ['status' => 0]); ?></h1>
                                    <h6 class="my-3">Vehículos Parqueados</h6>
                                </div>
                                <div class="col-5">
                                    <div class="mx-auto my-2">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card rounded-0 border-0 shadow-sm bg-info text-white">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <h1 class="ml-2"><?= $this->datawork->count_data('add_vehicle', ['status=' => 1]); ?></h1>
                                    <h6 class="my-3">Vehículos que han Salido</h6>
                                </div>
                                <div class="col-5">
                                    <div class="mx-auto my-2">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card rounded-0 border-0 shadow-sm bg-info text-white">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <h1 class="ml-2"><?= $this->datawork->count_data('category', ['cat_id!=' => NULL]); ?></h1>
                                    <h6 class="my-3">Categorías Disponibles</h6>
                                </div>
                                <div class="col-5">
                                    <div class="mx-auto my-2">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card rounded-0 border-0 shadow-sm bg-info text-white">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">

                                    <h1 class="ml-2"><i class="fas fa-dollar-sign fa-xs"></i>&nbsp;<?= number_format($this->datawork->column_sum('parking_charge', 'add_vehicle'), 2); ?></h1>

                                    <h6 class="my-3">Ganancias Totales</h6>
                                </div>
                                <div class="col-5">
                                    <div class="mx-auto my-2">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card rounded-0 border-0 shadow-sm bg-info text-white">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <h1 class="ml-2"><?= $this->datawork->count_data('add_vehicle', ['id!=' => 0]); ?></h1>
                                    <h6 class="my-3">Total de Registros</h6>
                                </div>
                                <div class="col-5">
                                    <div class="mx-auto my-2">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">

                    <div class="card rounded-0 border-0 shadow-sm bg-info text-white">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <h1 class="ml-2"><?= $this->datawork->datawork->column_sum('vehicle_limit', 'category'); ?></h1>
                                    <h6 class="my-3">Espacios Disponibles</h6>
                                </div>
                                <div class="col-5">
                                    <div class="mx-auto my-2">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>


    </div>


</div>

<script>
    function myFunction() {
        var x = document.getElementById("notification");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "none";
        }
    }
</script>





<?php include('footer.php'); ?>