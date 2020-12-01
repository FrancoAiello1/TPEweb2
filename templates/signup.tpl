{include file="header.tpl"}

<h2 class="text-center bg-danger text-white">REGISTRÁ TU CUENTA</h2>
<div class="col-md-3 offset-md-4">
    <form action="register" method="post">
        <label for="user">Usuario</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input id="user" name="new_user" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="form-group">
            <label for="pass">Contraseña</label>
            <input id="pass" name="new_pass" type="password" class="form-control" placeholder="Contraseña">
        </div>
        <div class="form-group">
            <label for="pass">Contraseña</label>
            <input id="pass" name="repeat_pass" type="password" class="form-control" placeholder="Repita contraseña">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Registrarse</button>
    </form>
    <div class="alert alert-danger" role="alert">
        {$message}
    </div>
</div>


{include file="footer.tpl"}