<style type="text/css">
    .show {
    position: relative;
    }
    .show:after{
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.1);
        background-image: url(<?php echo URL ?>assets/img/loading.gif);
        background-position: center;
        background-repeat: no-repeat;
        background-size: 50px 50px;
        content: "";
    }
</style>
<?php require 'views/header.php';?>
<main role="main" id="main_index_tree" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Version APK <a class="btn btn-sm btn-outline-secondary" href="#" id="new_version">Nuevo</a></h1>
      </div>
      <!-- <h2>Mensage Contacto <a class="btn btn-sm btn-outline-secondary" href="#" id="new_client">Nuevo Cliente</a> </h2> -->
      <div id="div_conten">
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <!-- <th>Nombre</th> -->
                <th>Obligatorio</th>
                <th>Version Code</th>
                <th>Version Name</th>
                <th>URL Descarga</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
            <?php
            foreach ($this->versionapk as $row) {
            ?>
            <tr  data-id="<?php echo $row->id;?>" data-table="version_apk" id="<?php echo $row->id;  ?>">
                <!-- <td><?php echo $row->name; ?></td> -->
                <td><?php echo $row->mandatory; ?></td>
                <td><?php echo $row->versioncode; ?></td>
                <td><?php echo $row->versionname; ?></td>
                <td><?php echo $row->download_url; ?></td>
                <td>
                  <a href="#" class="delete_table"><span data-feather="trash-2"></span></a>
                </td>
              </tr>
            <?php
            }
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </main>
    <script type="text/javascript">
      $(document).on('click','#new_client',function(e){
        $('.table-responsive').load('views/index/form_register.php',1);
        $( this ).slideUp();
      });
    </script>
  <?php require 'views/footer.php';?>

  <script type="text/javascript">
      $(document).on('click','#new_version',function(e){
        $('#div_conten').load('views/versionapk/form_register_apk.php');
        $( this ).slideUp();
      });
    </script>