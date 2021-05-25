
  <style type="text/css">
</style>
<center>
</center>
<br>
  <div class="card text-center"></div>
  <div class="card-header"></div>
  </div>
</style>

<ul class="navbar">
  <li class="nav-item">
    <a class="nav-link active navbar-light" style="background-color: #e3f2fd;" aria-current="page" href="../ProductController/home">Pagina Inicial</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active navbar-light" style="background-color: #e3f2fd;" href="../ProductController/insertar">Registrar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active navbar-light" style="background-color: #e3f2fd;" href="../ProductController/Mostrar">Mostrar</a>
  </li>

</ul>
<br>
   <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
    <form method="POST" action="../ProductController/buscarRegistros" class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Update" aria-label="Search" name="busqueda">
      <button class="btn btn-outline-success" type="submit">Update</button>
    </form>

    <form method="POST" action="../ProductController/deleteProduct" class="d-flex">
      <input class="form-control me-2" type="delete" placeholder="Delete" aria-label="Borrar" name="eliminar">
      <button class="btn btn-outline-success" type="submit">Delete</button>
    </form>
    </div>
    </nav>

</nav>
</font>
