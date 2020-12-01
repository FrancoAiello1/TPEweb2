{include file="headerAdmin.tpl"}
{if ($admin[0]->admin == true)}
    <div class="nav-boton">
        <a class="btn btn-dark" href="abmadmin">Administrar usuarios</a>
    </div>
{/if}
<h2 class="text-center bg-danger text-white">{if ($admin[0]->admin == true)}<span>ADMINISTRAR</span>{/if}NUESTROS VENDEDORES</h2>
{if ($admin[0]->admin == true)}
    <ul class="flex-container">
    
        <div>
            <form action="insertVendedor" method="post">
                <label for="nombre">Nombre </label>
                <div>
                    <input id="nombre" name="input_nombre" />
                </div>
                <label for="edad">Edad </label>
                <div>
                    <input id="edad" name="input_edad" />
                </div>
                <label for="ciudad">Ciudad</label>
                <div>
                    <input id="ciudad" name="input_ciudad" />
                </div>
                <label for="email">Email</label>
                <div>
                    <input id="email" name="input_email" />
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Agregar Vendedor</button>
                </div>
            </form>
        </div>
    {/if}
    <div>
        <table class="table" align="center">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Ciudad</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
                <thead>
                <tbody>

                    {foreach from= $vendedores_s item= vendedor}
                        <tr>
                            <td>{$vendedor->nombre}</td>
                            <td>{$vendedor->edad}</td>
                            <td>{$vendedor->ciudad}</td>
                            <td>{$vendedor->email}</td>
                            {if ($admin[0]->admin == true)}
                                <td><button type="button" class="btn btn-outline-danger"><a href="deletev/{$vendedor->id_vendedor}">Borrar</a></button></td>
                                <td><button type="button" class="btn btn-outline-warning"><a href="editVend/{$vendedor->id_vendedor}">Editar</a></button></td>
                            {/if}
                            <td><button type="button" class="btn btn-outline-success"><a href="autosvendedoradmin/{$vendedor->id_vendedor}">Ver autos que vende</a></button></td>
                        </tr>
                    {/foreach}
                </tbody>
        </table>
    </div>
</ul>

{include file="footer.tpl"}