{include file="headerAdmin.tpl"}

<h2 align="center">ADMINISTRAR NUESTROS AUTOMOTORES</h2>
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
    <div>
        <table align="center" border=1px, solid, black>
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
                            <td><button type="button" class="btn btn-outline-danger"><a href="delete/{$auto->id_auto}">Borrar</a></button></td>
                        </tr>
                    {/foreach}
                </tbody>
        </table>
    </div>
    <div>
        <form action="modify" method="post">
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
            <label for="detalle">Detalle</label>
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
            <label for="auto">Auto a modificar</label>
            <div>
                <select id="auto" name="input_idauto">
                    {foreach from= $inventario_s item= auto}
                        <option value="{$auto->id_auto}">{$auto->modelo}</option>
                    {/foreach}
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Modificar automotor</button>
            </div>
        </form>
    </div>
        {include file="footer.tpl"}