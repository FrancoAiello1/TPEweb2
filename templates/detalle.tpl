{include file="headervendedor.tpl" }

<h2 align="center"> DETALLE DEL AUTOMOTOR</h2>
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

{foreach from= $detalle_s item= auto}
    <tr>
        <td>{$auto->modelo}</td>
        <td>{$auto->anio}</td>
        <td>{$auto->kilometraje}</td>
        <td>{$auto->potencia}</td>
        <td>{$auto->peso}</td>
        <td>{$auto->consumo}</td>
    </tr>
{/foreach}
</tbody>
</table>
<br>
<h4 align="center">{$auto->detalles}</h4>





{include file="footer.tpl"}