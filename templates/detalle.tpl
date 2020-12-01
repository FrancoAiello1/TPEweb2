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

<div style="width: 30rem;">
    {include 'vue/comments.vue'}
</div>

<form method="POST" id="form-comentario">
    <input id="id_auto" type="hidden" value={$auto->id_auto}>
    <input id="usuario"  value={$id_usuario}>
    <input id="admin"  value={$admin}> 

    {if $admin}
        <span class="badge badge-dark">{$admin}</span> <input id="comentario" type="text" size="30" maxlength="30" placeholder="Deje su comentario">
        <label>Puntaje</label>
        <select id="puntuacion">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    
        <input class="btn btn-link" type="submit" value="Comentar">
    
    {else}
        <p>Para comentar, debe resgistrarse aqui -
            <a name="registro" href="registro">Registrarme</a></p>
    {/if}
</form>


{include file="footer.tpl"}