{include file="header.tpl"}


<div class="col-md-3 offset-md-4">
    <form action="verifyUser" method="post">
        <label for="user">Usuario</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input id="user" name="input_user" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="form-group">
            <label for="pass">Contraseña</label>
            <input id="pass" name="input_pass" type="password" class="form-control" placeholder="Password">
        </div>
        <button action="ingresar" type="submit" class="btn btn-primary">Login</button>
    </form>
    <div class="alert alert-danger" role="alert">
  {$message}
</div>
</div>


{include file="footer.tpl"}