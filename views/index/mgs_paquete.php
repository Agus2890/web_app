<?php require 'views/header.php';?>
<main role="main" id="main_index_tree" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Paquete</h1>
      </div>
      <!-- <h2>Clientes <a class="btn btn-sm btn-outline-secondary" href="#" id="new_client">Nuevo Cliente</a> </h2> -->
  
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Correo</th>
              <th>Paquete</th>
              
            </tr>
          </thead>
          <tbody>
          <?php
           foreach ($this->msg_paquete as $row) {
          ?>
          <tr>
              <td><?php echo $row->mail; ?></td>
              <td><?php echo $row->paquete; ?></td>
              
            </tr>

          <?php
          }
          ?>
          </tbody>
        </table>
      </div>
    </main>
    <script type="text/javascript">
      $(document).on('click','#new_client',function(e){
        $('.table-responsive').load('views/index/form_register.php',1);
        $( this ).slideUp();
      });
    </script>
  <?php require 'views/footer.php';?>