{include file="header.tpl"}

<h2 align="center">NUESTROS AUTOMOTORES</h2>

<table align="center" border=1px, solid, black>
    <thead>
        <tr>
            <th>Modelo</th>
            <th>Año</th>
            <th>Kilometraje</th>
            <th>Potencia</th>
            <th>Peso</th>
            <th>Consumo</th>
            <th>Más información</th>
            <th>Vendedor</th>
        </tr>
    </thead>
    <tbody>

        {foreach from= $inventario_s item= auto}
            <tr>
                <td>{$auto->modelo}</td>
                <td>{$auto->anio}</td>
                <td>{$auto->kilometraje}</td>
                <td>{$auto->potencia}</td>
                <td>{$auto->peso}</td>
                <td>{$auto->consumo}</td>
                <td><button type="button" class="btn btn-link"><a href="detalle/{$auto->id_auto}">Detalle</a></button></td>
                <td>{$auto->nombre}</td>
            </tr>
        {/foreach}
    </tbody>
</table>


{include file="footer.tpl"}