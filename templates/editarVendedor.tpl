{include file="headerAdmin.tpl"}
<h2 class="text-center bg-danger text-white">MODIFICAR VENDEDOR</h2>
<ul align="center" class="flex-container">
    <form action="modify" method="post">
        {foreach from= $vendedores_s item=vend}
            <label for="nombre">Nombre </label>
            <div>
                <input id="nombre" name="input_nombre" value="{$vend->nombre}" />
            </div>
            <label for="edad">Edad </label>
            <div>
                <input id="edad" name="input_edad" value="{$vend->edad}" />
            </div>
            <label for="ciudad">Ciudad </label>
            <div>
                <input id="ciudad" name="input_ciudad" value="{$vend->ciudad}" />
            </div>
            <label for="email">Email</label>
            <div>
                <input id="email" name="input_email" value="{$vend->email}" />
            </div>
            <input class="oculto" id="id" name="input_idvendedor" value="{$vend->id_vendedor}" />
        {/foreach}
        <div>
            <button type="submit" class="btn btn-primary">Modificar vendedor</button>
        </div>
    </form>
</ul>

{include file="footer.tpl"}