<style>
  #sidebar .list-group-item-action {
    background-color: #0000;
    color: #fff;
  }

  #sidebar .list-group-item-action.active {
    background-color: #fc7d1c;
    color: #fff;
  }
</style>
<div class="list-group list-group-flush bg-dark" id="sidebar">
  <a class="list-group-item list-group-item-action border-bottom-0" style="pointer-events: none"></a>

  <a href="<?= base_url('admin/index'); ?>" class="list-group-item list-group-item-action <?php if ($this->uri->segment(2) == 'index') {
                                                                                            echo 'active';
                                                                                          } ?> border-bottom-0 border-top-0"><i class="fas fa-tachometer-alt"></i>&nbsp; Dashboard</a>

  <a href="<?= base_url('admin/category'); ?>" class="mt-2 list-group-item list-group-item-action <?php if ($this->uri->segment(2) == 'category') {
                                                                                                    echo 'active';
                                                                                                  } ?> border-top-0 border-bottom-0"><i class="fas fa-box"></i>&nbsp; Categorías</a>

  <a href="<?= base_url('admin/add_vehicle'); ?>" class="mt-2 list-group-item list-group-item-action border-top-0 border-bottom-0 <?php if ($this->uri->segment(2) == 'add_vehicle') {
                                                                                                                                    echo 'active';
                                                                                                                                  } ?>"><i class="fas fa-file-import"></i>&nbsp; Ingreso de Vehículos</a>

  <a href="<?= base_url('admin/manage_vehicle'); ?>" class="mt-2 list-group-item list-group-item-action border-top-0 border-bottom-0 <?php if ($this->uri->segment(2) == 'manage_vehicle') {
                                                                                                                                        echo 'active';
                                                                                                                                      } ?>"><i class="fas fa-tasks"></i>&nbsp; Gestionar Vehículos</a>

  <a href="<?= base_url('admin/reports'); ?>" class="mt-2 list-group-item list-group-item-action border-top-0 border-bottom-0 <?php if ($this->uri->segment(2) == 'reports') {
                                                                                                                                echo 'active';
                                                                                                                              } ?>"><i class="fas fa-chart-line"></i>&nbsp; Gráfico</a>

  <a href="<?= base_url('admin/search'); ?>" class="mt-2 list-group-item list-group-item-action border-top-0 border-bottom-0 <?php if ($this->uri->segment(2) == 'search') {
                                                                                                                                echo 'active';
                                                                                                                              } ?>"><i class="fas fa-search"></i>&nbsp; Buscar</a>

  <a href="<?= base_url('admin/setting'); ?>" class="mt-2 list-group-item list-group-item-action border-top-0 border-bottom-0 <?php if ($this->uri->segment(2) == 'setting') {
                                                                                                                                echo 'active';
                                                                                                                              } ?>"><i class="fas fa-cog"></i>&nbsp; Configuración de Cuenta</a>

  <a href="<?= base_url('admin/logout'); ?>" class=" mt-2 list-group-item list-group-item-action border-top-0 border-bottom-0"><i class="fas fa-power-off"></i>&nbsp; Cerrar Sesión</a>

  <br><br><br><br>

  <!-- <small class="text-center mt-1">&copy; 2020 VPMS | All rights reserved.</small> -->
  <br>

</div>