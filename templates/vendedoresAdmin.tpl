{include file="headerAdmin.tpl"}

<h2 align="center">ADMINISTRAR NUESTROS VENDEDORES</h2>

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
            <label for="email">Email (cv)</label>
            <div>
                <input id="email" name="input_email" />
            </div>
            <label for="vendedor">Vendedor</label>
            <div>
                <button type="submit" class="btn btn-primary">Agregar Vendedor</button>
            </div>
        </form>
    </div>
    <div>
        <table align="center" border=1px, solid, black>
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
                            <td><button type="button" class="btn btn-outline-danger"><a href="deletev/{$vendedor->id_vendedor}">Borrar</a></button></td>
                            <td><button type="button" class="btn btn-outline-success"><a href="autosvendedoradmin/{$vendedor->id_vendedor}">Ver autos que vende</a></button></td>
                        </tr>
                    {/foreach}
                </tbody>
        </table>
    </div>
    <div>
        <form action="modifyVendedor" method="post">
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
            <label for="email">Email (cv)</label>
            <div>
                <input id="email" name="input_email" />
            </div>
            <label for="vendedor">Vendedor a modificar</label>
            <div>
                <select id="vendedor" name="input_vendedor">
                    {foreach from= $vendedores_s item= vendedor}
                        <option value="{$vendedor->id_vendedor}">{$vendedor->nombre}</option>
                    {/foreach}
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Modificar Vendedor</button>
            </div>
        </form>
    </div>
</ul>

{include file="footer.tpl"}