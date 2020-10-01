
<?php require '../../config/core.php'; ?>
<form  name="from_user" id="from_user"  action="<?php echo URL; ?>users/register_users"  method="post" >
    <div class="row" >
        <div class="col-12 col-md-6 col-lg-6">
            <label >Nombre</label>
            <input type="text"  class="form-control" name="txtname" id="txtname" required>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
            <label >Usuarios</label>
            <input type="text"  class="form-control" name="txtuser" id="txtuser" required>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
            <label >Password</label>
            <input type="password" class="form-control" name="txtpassword" id="txtpassword" required>
        </div>
    </div>
    <div class="row">
        <div class="btn_basic_user col-sm-12 col-12 mt-4">
            <button class="btn btn-primary" type="submit">Confirmar</button> 
            <button class="btn btn-outline-secondary" type="button">Cancel</button> 
        </div>
    </div>
</form>