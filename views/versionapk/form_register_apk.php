<?php require '../../config/core.php'; ?>
<script type="text/javascript" src="<?php echo URL ?>assets/js/code.js"></script>
<form  name="from_user" id="from_user"  action="<?php echo URL; ?>versionapk/register_apk"  class="FormularioAjaxCustom" method="post" enctype="multipart/form-data" >
    <div class="row" >
        <div class="col-12 col-md-6 col-lg-6">
            <label >Obligatorio</label>
            <select class="form-control" name="txtoption" id="txtoption" required>
                <option value="1">Obligatorio</option> 
                <option value="0">No Obligatorio</option> 
            </select>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
            <label >Version Code</label>
            <input type="number"  class="form-control" step="any" name="txtversioncode" id="txtversioncode" required>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
            <label >Version Name</label>
            <input type="text" class="form-control" name="txtversioname" id="txtversioname" required>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
            <label >Version Name</label>
            <input type="file" class="form-control" name="txtapk" id="txtapk" required>
        </div>
    </div>
    <div class="row">
        <div class="btn_basic_user col-sm-12 col-12 mt-4">
            <button class="btn btn-primary" type="submit" id="btn_confirm">Confirmar</button> 
            <button class="btn btn-outline-secondary" type="button">Cancel</button> 
        </div>
    </div>
</form>