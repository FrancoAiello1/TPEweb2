{include file="headerAdmin.tpl"}
<h2 class="text-center bg-danger text-white">MODIFICAR AUTOMOTOR</h2>
<div align="center" class="flex-container">
    <form class="formulario" action="modify" method="post">
        {foreach from= $autos_s item=auto}
            <label for="modelo">Modelo </label>
            <div>
                <input id="modelo" name="input_modelo" value="{$auto->modelo}" />
            </div>
            <label for="año">Año </label>
            <div>
                <input id="año" name="input_año" value="{$auto->anio}" />
            </div>
            <label for="kms">Kilometraje </label>
            <div>
                <input id="kms" name="input_kms" value="{$auto->kilometraje}" />
            </div>
            <label for="potencia">Potencia (cv)</label>
            <div>
                <input id="potencia" name="input_potencia" value="{$auto->potencia}" />
            </div>
            <label for="peso">Peso</label>
            <div>
                <input id="peso" name="input_peso" value="{$auto->peso}" />
            </div>
            <label for="consumo">Consumo</label>
            <div>
                <input id="consumo" name="input_consumo" value="{$auto->consumo}" />
            </div>
            <label for="detalle">Detalle</label>
            <div>
                <input id="detalle" size="100" name="input_detalle" value="{$auto->detalles}" />
            </div>
            <label for="vendedor">Vendedor</label>
            <div>
                <select id="vendedor" name="input_vendedor">
                    {foreach from= $vendedores_s item= vendedor}
                        <option value="{$vendedor->id_vendedor}">{$vendedor->nombre}</option>
                    {/foreach}
                </select>
            </div>
            <div class="oculto">
                <input id="id" name="input_idauto" value="{$auto->id_auto}" />
            </div>
        {/foreach}
        <div>
            <button type="submit" class="btn btn-primary">Modificar automotor</button>
        </div>
    </form>
</div>

{include file="footer.tpl"}