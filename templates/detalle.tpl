{include file="headervendedor.tpl" }

<h2 class="text-center bg-danger text-white"> DETALLE DEL AUTOMOTOR</h2>
<table class="table" align="center" border=1px, solid, black>
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
<h1 class="text-center bg-dark text-white">Descripcion</h1>
<h4 align="center">{$auto->detalles}</h4>
<h1 class="text-center bg-success text-white">Comentarios</h1>

<div style="width: 50rem;">
    {include 'vue/comments.vue'}
</div>

<form method="post" id="form-comentario">
    <input id="id_auto" type="hidden" value={$auto->id_auto}>
    <input id="usuario" type="hidden" value="{$id_usuario[0]->id}">
    <input id="admin" type="hidden" value={$admin[0]->admin}>   

    {if ($logged == 1)}
        <span class="badge badge-dark"></span> <input id="comentario" type="text" size="100" maxlength="100" placeholder="Deje su comentario">
        <label>Puntaje</label>
        <select id="puntuacion">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>

    
        <button class="btn btn-dark" id="button-addcomment" type="submit">Comentar</button>
     {else}
        <p>¡Para comentar, debe resgistrarse!
    {/if}
</form>


{include file="footer.tpl"}