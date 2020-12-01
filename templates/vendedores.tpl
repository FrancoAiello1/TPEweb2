{include file="header.tpl"}

<h2 class="text-center bg-danger text-white">NUESTROS VENDEDORES</h2>

<table class="table" align="center" border=1px, solid, black>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Ciudad</th>
            <th>Email</th>
        </tr>
        <thead>
        <tbody>

{foreach from= $vendedores_s item= vendedor}
    <tr>
        <td>{$vendedor->nombre}</td>
        <td>{$vendedor->edad}</td>
        <td>{$vendedor->ciudad}</td>
        <td>{$vendedor->email}</td>
        <td><button type="button" class="btn btn-outline-success"><a href="autosvendedor/{$vendedor->id_vendedor}">Ver automoviles que vende</a></button></td>
    </tr>
{/foreach}
</tbody>
</table>

{include file="footer.tpl"}