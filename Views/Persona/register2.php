<div class="container">
  <h2>Registro de Persona</h2>
  <form action="?controller=usuario&&action=save" method="POST">

    
    <div class="form-group">
      <label for="text">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Ingrese su Nombre de usuario" name="username">
    </div>
    <div class="form-group">
      <label for="text">Password</label>
      <input type="text" id="password" name="password" class="form-control" placeholder="Ingrese su contraseña">
    </div>

   <div class="form-group">
      <label for="text">idpersona</label>
      <select id="idpersona" name="idpersona"class="form-control"> 
        <option value="1004921441">1004921441</option>
        <option value="556">556</option>
        <option value="1004921442">1004921442</option>
        </select>
    </div>
    <div class="form-group">
      <label for="text">idtipousuario</label>
      <select id="idtipousuario" name="idtipousuario"class="form-control"> 
        <option value="Administrador">Administrador</option>
        <option value="Cliente">Cliente</option>
        </select>
    </div>

         <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
</div>