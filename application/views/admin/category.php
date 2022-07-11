<?php include('header.php'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-3 px-0" style="position:fixed">
            <div class="card border-0 rounded-0 shadow-sm">
                <div class="card-body m-0 p-0">
                    <?php include('sidebar.php'); ?>
                </div>
            </div>
        </div>
        <div class="col-8 offset-3 mt-5 mr-5">
            <?php include('notification.php'); ?>
            <div class="row">
                <div class="col-8">
                    <div class="card rounde-0 shadow-sm">
                        <div class="card-header">
                            <div class="card-title h6 mb-0"><i class="fas fa-th-list"></i> &nbsp;Agregar Categoría</div>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/category'); ?>" method="post" class="mt-4">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="text-muted  m-0 p-0">Número de Área de Parqueo</label>
                                            <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control rounded-0 form-control-sm shadow-none" name="parking_area_no" required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="text-muted  m-0 p-0">Tipo de Vehículo</label>
                                            <input type="text" class="form-control rounded-0 form-control-sm shadow-none" name="vehicle_type" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted  m-0 p-0">Límite de Vehículos</label>
                                    <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" class="form-control rounded-0 form-control-sm shadow-none" name="vehicle_limit" required>
                                </div>
                                <div class="form-group">
                                    <label class="text-muted  m-0 p-0">Cobro de Estacionamiento</label>
                                    <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" class="form-control rounded-0 form-control-sm shadow-none" name="parking_charge" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="send" class="btn text-white mt-4 btn-block shadow-none border-0 bg-primary rounded-0">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card border rounded-0 shadow-sm">
                        <div class="card-header">
                            <div class="text-muted h6 card-title mb-0"><b><i class="fas fa-universal-access"></i>&nbsp; Categorías:</b></div>
                        </div>
                        <div class="card-body">

                            <div class="list-group">
                                <?php foreach ($categoryy as $c) : ?>
                                    <div class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 align-items-center">
                                            <div class="col-auto flex-shrink-1 flex-grow-1 text-truncate"><?= $c->vehicle_type; ?></div>
                                            <div class="col-auto text-right">
                                                <i class="fas fa-dollar-sign"></i>&nbsp; <?= number_format($c->parking_charge, 2); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="card rounded-0 shadow-sm">
                        <div class="card-header">
                            <div class="h6 text-muted mb-0"><i class="fas fa-tasks"></i> &nbsp;Gestionar Categorías</div>
                        </div>
                        <div class="card-body">
                            <table class="table mt-4 table-bordered table-striped" id="cat-tbl">
                                <thead>
                                    <tr>
                                        <th class="p-1 text-center"><b>#</b></th>
                                        <th class="p-1 text-center"><b>Número de Área</b></th>
                                        <th class="p-1 text-center"><b>Tipo de Vehículo</b></th>
                                        <th class="p-1 text-center"><b>Límite de Vehículos</b></th>
                                        <th class="p-1 text-center"><b>Cobro</b></th>
                                        <th class="p-1 text-center"><b>Estado</b></th>
                                        <th class="p-1 text-center"><b>Acción</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($category as $c) : ?>
                                        <tr>
                                            <td class="px-2 py-1 align-middle text-center"><?= $c->cat_id; ?></td>
                                            <td class="px-2 py-1 align-middle text-center"><?= $c->parking_area_no; ?></td>
                                            <td class="px-2 py-1 align-middle"><?= $c->vehicle_type; ?></td>
                                            <td class="px-2 py-1 align-middle text-right"><?= number_format($c->vehicle_limit); ?></td>
                                            <td class="px-2 py-1 align-middle text-right"><?= number_format($c->parking_charge, 2); ?></td>
                                            <td class="px-2 py-1 align-middle text-center"><?php if ($c->status == 0) : ?>

                                                    <small class="badge badge-danger rounded-pill px-3">Desactivado</small>
                                                <?php else : ?>
                                                    <small class="badge badge-success rounded-pill px-3">Activado</small>


                                                <?php endif; ?></small>
                                            </td>
                                            <td class="px-2 py-1 align-middle text-center">
                                                <div class="modal fade" id="rock<?= $c->cat_id; ?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <i class="far fa-frown"></i>&nbsp; ¿Realmente deseas eliminar esta categoría?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="<?= base_url('admin/delete/category/' . $c->cat_id); ?>" class="btn btn-sm btn-danger shadow-none">&nbsp; Sí &nbsp;</a>
                                                                <a href="" class="btn btn-dark btn-sm shadow-none">&nbsp; No &nbsp;</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php if ($c->status == 0) : ?>
                                                    <a href="<?= base_url('admin/status/status_active/' . $c->cat_id); ?>" class="btn btn-sm bg-success text-white shadow-none"><small>Activar</small></a>
                                                <?php else : ?>
                                                    <a href="<?= base_url('admin/status/status_deactivate/' . $c->cat_id); ?>" class="btn btn-sm bg-danger text-white shadow-none"><small>Desactivar</small></a>
                                                <?php endif; ?>
                                                <button class="btn btn btn-sm btn-primary rounded-0 edit-category" type="button" title="Edit Category" data-id="<?= $c->cat_id ?>"><i class="fa fa-xs fa-edit"></i></button>
                                                <button type="button" data-toggle="modal" data class="btn btn-sm btn-danger shadow-none rounded-0" data-target="#rock<?= $c->cat_id; ?>">
                                                    <i class="fas fa-trash fa-xs"></i>
                                                </button>
                                                <?php //anchor_popup('admin/edit/edit_category/'.$c->cat_id,'<i class="fas fa-edit fa-xs"></i>',['class'=>"btn btn-info btn-sm shadow-none"]);
                                                ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-0">
            <div class="modal-header py-2">
                <h5 class="modal-title"><i class="fa fa-edit"></i> Editar Categoría</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm rounded-0" onclick="$('#edit-modal .modal-body form').submit()">Actualizar</button>
                <button type="button" class="btn btn-secondary btn-sm rounded-0" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        var cat_tbl = $('#cat-tbl').dataTable({
            columnDefs: [{
                'orderable': false,
                'targets': [0, 6]
            }]
        })
        $('.edit-category').click(function() {
            var id = $(this).attr('data-id');
            $.ajax({
                url: "<?= base_url('admin/edit/edit_category/') ?>" + id,
                error: (err) => {
                    console.log(err)
                    alert("Ocurrió un error.")
                },
                success: function(resp) {
                    $('#edit-modal .modal-body').html(resp);
                },
                complete: function() {
                    $('#edit-modal').modal('show')
                }
            })
        })
    })
</script>
<?php include('footer.php'); ?>