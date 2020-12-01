{literal}
<section id="app-comments">

  <div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">
        <span>
          Puntuacion promedio: {{promedio}}
        </span>
    </div>
    
    <div class="card" class="col-md-12">
      <ul id= "list-comments" class="list-group list-group-flush">
        <li v-for= "comments in comments" class="list-group-item">
       <span class="badge badge-dark">Usuario {{comments.username}}</span> - "{{comments.comentario}}" - Puntaje: {{comments.puntaje}}
        <button class="btn btn-link" v-if="admin == 1" v-on:click="borrar(comments.id)">Borrar</button>
        </li>
        </ul>
    </div>

  </div> 
</section>
{/literal}