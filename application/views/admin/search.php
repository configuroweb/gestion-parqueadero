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
        <div class="col-9 offset-3 mr-5 mt-5">
            <?php include('notification.php'); ?>
            <div class="row">
                <div class="col-12">
                    <div class="card rounded-0 shadow-sm">
                        <div class="card-header">
                            <div class="card-title h6 m-0"><i class="fas fa-search"></i> &nbsp;Buscador | <small><span class="text-danger">S</span>olo los registros de los últimos 30 días están disponibles aquí</small></div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8 mx-auto">
                                    <form action="<?= base_url('admin/search/' . 'searching' . '/'); ?>" method="get" class="mt-5">
                                        <div class="input-group mb-3">
                                            <input type="search" name="search" class="form-control rounded-0 shadow-none rounded-0" placeholder="Buscar por Número de Vehículo O Número de Serie del Recibo" value="<?= isset($search) ? $search : '' ?>">
                                            <div class="input-group-append">
                                                <button class="btn btn-secondary shadow-none rounded-0" type="submit" name="find"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> <br>
                            <?php if ($this->uri->segment(3) == 'searching') : ?>
                                <table class="table mt-4 table-bordered table-striped">
                                    <tr>
                                        <th class="p-1 text-center"><b>#</b></th>
                                        <th class="p-1 text-center"><b>Número de Placa</b></th>
                                        <th class="p-1 text-center"><b>Tipo</b></th>
                                        <th class="p-1 text-center"><b>Área</b></th>
                                        <th class="p-1 text-center"><b>Precio</b></th>
                                        <th class="p-1 text-center"><b>Hora de Ingreso</b></th>
                                        <th class="p-1 text-center"><b>Estado</b></th>
                                    </tr>
                                    <?php foreach ($vehicle_details as $v) : ?>
                                        <tr>
                                            <td class="px-2 py-1 aling-middle text-center"><?= $v->id; ?></td>
                                            <td class="px-2 py-1 aling-middle"><?= $v->vehicle_no; ?></td>
                                            <td class="px-2 py-1 aling-middle"><?= $v->vehicle_type; ?></td>
                                            <td class="px-2 py-1 aling-middle text-right"><?= number_format($v->parking_area_no); ?></td>
                                            <td class="px-2 py-1 aling-middle text-right"><i class="fas fa-dollar-sign text-warning"></i>&nbsp; <?= number_format($v->parking_charge, 2); ?></td>
                                            <td class="px-2 py-1 aling-middle"><?= $v->arrival_time; ?></td>
                                            <td class="px-2 py-1 aling-middle text-center"><?php if ($v->status == 0) : ?>

                                                    <p class="text-white badge badge-success badge-pill"><b>Parked</b></p>
                                                <?php else : ?>
                                                    <p class="text-white badge badge-danger badge-pill"><b>Salió</b></p>

                                                <?php endif; ?></small>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            <?php else : ?>
                                <h5 class="text-center text-danger mt-5 mb-5">
                                    ¡Busca y obtén resultados aquí!
                                </h5>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>