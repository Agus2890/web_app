
<?php require 'views/header.php';?>
<main role="main" id="main_index_tree" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Usuarios <a class="btn btn-sm btn-outline-secondary" href="#" id="new_user">Nuevo Usuario</a></h1>
      </div>
      <!-- <h2>Usuarios <a class="btn btn-sm btn-outline-secondary" href="#" id="new_user">Nuevo Usuario</a> </h2> -->
        <?php echo isset($_GET['msg']) ? $_GET['msg']:'' ;  ?>
        <div id="content">
          
        <div class="table-responsive">
            <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Utima Conexion</th>
                <th>Status</th>
                <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($this->usuarios as $row) {
            ?>
            <tr data-id="<?php echo $row->id;?>" data-table="users" id="<?php echo $row->id;  ?>">
                <td><?php echo $row->name; ?></td>
                <td><?php echo $row->user; ?></td>
                <td><?php echo $row->datestop; ?></td>
                <td>
                  <?php if($row->active==1) {echo '<span class="label label-success">Activo</span>'; }; ?>
                  <?php if($row->active==0) {echo '<span class="label label-danger">Inactivo</span>'; }; ?>
                </td>
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
      $(document).on('click','#new_user',function(e){
        $('#content').load('views/users/from_register.php');
        $( this ).slideUp();
      });
    </script>
  <?php require 'views/footer.php';?>