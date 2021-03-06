{include file="headerAdmin.tpl"}
{if ($admin[0]->admin == true)}
    <div class="nav-boton">
        <a class="btn btn-dark" href="abmadmin">Administrar usuarios</a>
    </div>
{/if}
<h2 class="text-center bg-danger text-white">{if ($admin[0]->admin == true)}<span>ADMINISTRAR</span>{/if} NUESTROS AUTOMOTORES</h2>
{if ($admin[0]->admin == true)}
    <ul class="flex-container">
        <div>
            <form action="insert" method="post">
                <label for="modelo">Modelo </label>
                <div>
                    <input id="modelo" name="input_modelo" />
                </div>
                <label for="año">Año </label>
                <div>
                    <input id="año" name="input_año" />
                </div>
                <label for="kms">Kilometraje </label>
                <div>
                    <input id="kms" name="input_kms" />
                </div>
                <label for="potencia">Potencia (cv)</label>
                <div>
                    <input id="potencia" name="input_potencia" />
                </div>
                <label for="peso">Peso</label>
                <div>
                    <input id="peso" name="input_peso" />
                </div>
                <label for="consumo">Consumo</label>
                <div>
                    <input id="consumo" name="input_consumo" />
                </div>
                <label for="detalle">Detalles</label>
                <div>
                    <input id="detalle" name="input_detalle" />
                </div>
                <label for="vendedor">Vendedor</label>
                <div>
                    <select id="vendedor" name="input_vendedor">
                        {foreach from= $vendedores_s item= vendedor}
                            <option value="{$vendedor->id_vendedor}">{$vendedor->nombre}</option>
                        {/foreach}
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Agregar automotor</button>
                </div>
            </form>
        </div>
    {/if}
    <div>
        <table class="table" align="center">
            <thead>
                <tr>
                    <th>Modelo</th>
                    <th>Año</th>
                    <th>Kilometraje</th>
                    <th>Potencia</th>
                    <th>Peso</th>
                    <th>Consumo</th>
                </tr>
                <thead>
                <tbody>

                    {foreach from= $inventario_s item= auto}
                        <tr>
                            <td>{$auto->modelo}</td>
                            <td>{$auto->anio}</td>
                            <td>{$auto->kilometraje}</td>
                            <td>{$auto->potencia}</td>
                            <td>{$auto->peso}</td>
                            <td>{$auto->consumo}</td>
                            {if ($admin[0]->admin == true)}
                                <td><button type="button" class="btn btn-outline-danger"><a href="delete/{$auto->id_auto}">Borrar</a></button></td>
                                <td><button type="button" class="btn btn-outline-warning"><a href="edit/{$auto->id_auto}">Editar</a></button></td>
                            {/if}
                            <td><button type="button" class="btn btn-link"><a href="detalle/{$auto->id_auto}">Detalle</a></button></td>
                        </tr>
                    {/foreach}
                </tbody>
        </table>
    </div>

    {include file="footer.tpl"}