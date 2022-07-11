<?php foreach ($category as $c) : ?>
    <form action="<?= base_url('admin/edit/edit_category/' . $c->cat_id); ?>" method="post" class="mt-4">
        <div class="form-group">
            <label class="text-muted  m-0 p-0">Número de área de parqueo</label>
            <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control rounded-0 form-control-sm shadow-none" name="parking_area_no" value="<?= $c->parking_area_no; ?>" autofocus>
        </div>
        <div class="form-group">
            <label class="text-muted  m-0 p-0">Tipo de Vehículo</label>
            <input type="text" class="form-control rounded-0 form-control-sm shadow-none" name="vehicle_type" value="<?= $c->vehicle_type; ?>">
        </div>
        <div class="form-group">
            <label class="text-muted  m-0 p-0">Límite de Vehículo</label>
            <input onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" class="form-control rounded-0 form-control-sm shadow-none" name="vehicle_limit" value="<?= $c->vehicle_limit; ?>">
        </div>
        <div class="form-group">
            <label class="text-muted  m-0 p-0">Costo de Parqueo</label>
            <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control rounded-0 form-control-sm shadow-none" name="parking_charge" value="<?= $c->parking_charge; ?>">
        </div>
    </form>
<?php endforeach; ?>