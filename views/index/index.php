<?php require 'views/header.php';?>
<main role="main" id="main_index_tree" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>
      <h2>Clientes <a class="btn btn-sm btn-outline-secondary" href="#" id="new_client">Nuevo Cliente</a> </h2>
      <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-5">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Clientes</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">40</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-5">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Septiembre</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$ 5000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-5">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tickets</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">5</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <!-- <div class="col-xl-3 col-md-6 mb-5">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Server</th>
              <th>Usuario</th>
              <th>Token</th>
              <th>Fecha Inicio</th>
              <th>Fecha Fin</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
          <?php
           foreach ($this->clientes as $row) {
          ?>
          <tr>
              <td><?php echo $row->host; ?></td>
              <td><?php echo $row->user; ?></td>
              <td><?php echo $row->token; ?></td>
              <td><?php echo $row->datestart; ?></td>
              <td><?php echo $row->datestop; ?></td>
              <td><?php echo $row->active; ?></td>
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