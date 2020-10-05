<?php require '../../config/core.php'; ?>
<script type="text/javascript" src="<?php echo URL ?>assets/js/code.js"></script>
<form  name="from_client" id="from_client"  action="<?php echo URL; ?>index/register_cliente"  class="FormularioAjaxCustom" method="post" enctype="multipart/form-data" >
    <div class="row" >
        <div class="col-12 col-md-6 col-lg-4">
            <label >IP (Host)</label>
            <input type="text"  class="form-control" name="txtip" id="txtip" required>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <label >Usuario</label>
            <input type="text"  class="form-control" name="txtuser" id="txtuser" required>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <label >Email</label>
            <input type="email"  class="form-control" name="txtmail" id="txtmail" required>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <label>Fecha Inicio</label>
            <input type="datetime-local" class="form-control" name="txtdatestart" id="txtdatestart" required>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <label >Fecha Fin</label>
            <input type="datetime-local" class="form-control" name="txtdatestop" id="txtdatestop" required>
        </div>
    </div>
    <div class="row">
        <div class="btn_basic_user col-sm-12 col-12 mt-4">
            <button class="btn btn-primary" type="submit">Confirmar</button> 
            <button class="btn btn-outline-secondary" type="button">Cancel</button> 
        </div>
    </div>
</form>