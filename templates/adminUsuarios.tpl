{include file="headerAdmin.tpl"}

<h2 class="text-center bg-danger text-white">ADMINISTRAR USUARIOS</h2>

<table class="table" align="center" border=1px, solid, black>
    <thead>
        <tr>
            <th>Usuario</th>
            <th>Es admin</th>
            <thead>
            <tbody>

                {foreach from= $usuarios_s item= usuario}
                    <tr>
                        <td>{$usuario->username}</td>
                        <td>{if $usuario->admin == 1}
                                Si
                            {elseif $usuario->admin == 0}
                                No
                            {/if}</td>
                        <td>{if $usuario->admin == 1}
                                <button type="button" class="btn btn-outline-warning"><a href="removeadmin/{$usuario->id}">Sacar admin</a></button>
                            {elseif $usuario->admin == 0}
                                <button type="button" class="btn btn-outline-success"><a href="addadmin/{$usuario->id}">Hacer admin</a></button>
                            {/if}</td>
                            <td><button type="button" class="btn btn-outline-danger"><a href="deleteuser/{$usuario->id}">Borrar usuario</a></button></td>
                    </tr>
                {/foreach}
            </tbody>
</table>

{include file="footer.tpl"}