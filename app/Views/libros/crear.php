<?=$cabecera;?>
    Formulario de crear
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos del libro</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('/guardar')?>" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input id="titulo" value="<?=old('titulo')?>" class="form-control" type="text" name="titulo">
                    </div>
                    <div class="form-group">
                        <label for="imagen">Portada del libro</label>
                        <input id="imagen" class="form-control-file" type="file" name="imagen">
                    </div>
                    <div class="form-group">
                        <label for="autor">Autor</label>
                        <input id="autor" class="form-control" type="text" name="autor">
                    </div>
                    <div class="form-group">
                        <label for="descripcionc">Descripción corta</label>
                        <input id="descripcionc" class="form-control" type="text" name="descripcionc">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <input id="descripcion" class="form-control" type="text" name="descripcion">
                    </div>
                    <div class="form-group">
                        <label for="isbn">ISBN</label>
                        <input id="isbn" class="form-control" type="text" name="isbn">
                    </div>
                    <div class="form-group">
                        <label for="editorial">Editorial</label>
                        <input id="editorial" class="form-control" type="text" name="editorial">
                    </div>
                    <div class="form-group">
                        <label for="numpag">Número de páginas</label>
                        <input id="numpag" class="form-control" type="text" name="numpag">
                    </div>
                    <div class="form-group">
                        <label for="edicion">Edición</label>
                        <input id="edcicion" class="form-control" type="text" name="edicion">
                    </div>
                    <div class="form-group">
                        <label for="pais">País</label>
                        <input id="pais" class="form-control" type="text" name="pais">
                    </div>
                    <div class="form-group">
                        <label for="anio">Año</label>
                        <input id="anio" class="form-control" type="text" name="anio">
                    </div>
                    <button class="btn btn-success" type="submit">Guardar</button>
                    <a href="<?=base_url('listar');?>" class="btn btn-info">Cancelar</a>
                </form>
            </p>
        </div>
    </div>
<?=$pie?>