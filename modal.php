<!-- links de bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<!-- modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  modal
</button>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ciudad</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- FORMULARIO -->
        <form>
        <div class="mb-3"> 
          <lablel for="exampleFormControlImput1" class="form-label">Codigo del Pais</label>
          <input type="text" class="form-control" name="nombre_curso" placeholder="Nombre Curso" required>
        </div>
        <div class="mb-3"> 
          <lablel for="exampleFormControlImput1" class="form-label">Nombre</label>
          <input type="text" class="form-control" name="nombre_curso" placeholder="Nombre Curso" required>
        </div>
        <div class="mb-3"> 
          <lablel for="exampleFormControlImput1" class="form-label">Distritos</label>
          <input type="text" class="form-control" name="nombre_curso" placeholder="Nombre Curso" required>
        </div>
        <div class="mb-3"> 
          <lablel for="exampleFormControlImput1" class="form-label">Poblacion</label>
          <input type="text" class="form-control" name="nombre_curso" placeholder="Nombre Curso" required>
        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
       </form>
    </div>
  </div>
</div>