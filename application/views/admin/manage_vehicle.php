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
        <div class="col-9 offset-3 mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm rounde-0">
                        <div class="card-header">
                            <div class="card-title h6 mb-0"><i class="fas fa-tasks"></i>&nbsp; Gestionar Vehículos | <small><span class="text-primary">S</span>olo los registros de los últimos 30 días estarán disponibles en este apartado</small></div>
                        </div>
                        <div class="card-body">

                            <table class="table mt-4 table-bordered table-striped" id="vehicle-tbl">
                                <thead>
                                    <tr>
                                        <th class="p-1 text-center"><b>#</b></th>
                                        <th class="p-1 text-center"><b>Número de Placa</b></th>
                                        <th class="p-1 text-center"><b>Tipo</b></th>
                                        <th class="p-1 text-center"><b># Área</b></th>
                                        <th class="p-1 text-center"><b>Precio</b></th>
                                        <th class="p-1 text-center"><b>Hora de Ingreso</b></th>
                                        <th class="p-1 text-center"><b>Estado</b></th>
                                        <th class="p-1 text-center"><b>Acción</b></th>
                                    </tr>
                                </thead>
                                <?php foreach ($manage_vehicle as $m) : ?>
                                    <tr>
                                        <td class="px-2 py-1 align-middle text-center"><?= $m->id; ?></td>
                                        <td class="px-2 py-1 align-middle"><?= $m->vehicle_no; ?></td>
                                        <td class="px-2 py-1 align-middle"><?= $m->vehicle_type; ?></td>
                                        <td class="px-2 py-1 align-middle text-right"><?= number_format($m->parking_area_no); ?></td>
                                        <td class="px-2 py-1 align-middle text-right"><i class="fas fa-dollar-sign text-warning"></i>&nbsp;<?= number_format($m->parking_charge, 2); ?></td>
                                        <td class="px-2 py-1 align-middle"><?= $m->arrival_time; ?></td>
                                        <td class="px-2 py-1 align-middle text-center"><?php if ($m->status == 0) : ?>

                                                <small class="text-white badge badge-primary badge-pill px-3 text-xs"><b>Parqueado</b></small>
                                            <?php else : ?>
                                                <small class="text-white badge badge-success badge-pill px-3 text-xs"><b>Abandonó</b></small>

                                            <?php endif; ?></small>
                                        </td>
                                        <td class="px-2 py-1 align-middle text-center"><a href="<?= base_url('admin/vehicle_outgoing/' . $m->id); ?>" class="btn btn-sm shadow-none bg-primary text-white btn-sm rounded-0 btn-sm <?php if ($m->status == 1) {
                                                                                                                                                                                                                                        echo "disabled bg-light text-dark border";
                                                                                                                                                                                                                                    } ?>">Finalizado</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12"></div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        var vehicle_tbl = $('#vehicle-tbl').dataTable({
            columnDefs: [{
                'orderable': false,
                'targets': [0, 7]
            }]
        })
    })
</script>
<?php include('footer.php'); ?>