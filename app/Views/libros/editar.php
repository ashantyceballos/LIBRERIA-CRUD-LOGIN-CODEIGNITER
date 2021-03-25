<?=$cabecera;?>
    <div class="card">  
        <div class="card-body">
            <h5 class="card-title">Ingresar datos del libro</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('/actualizar')?>" enctype="multipart/form-data">
                    
                    <input type="hidden" name="id" value="<?=$libro['id']?>">
                    <div class="form-group">
                        <label for="titulo">Titulo</label>
                        <input id="titulo" value="<?=$libro['titulo']?>" class="form-control" type="text" name="titulo">
                    </div>
                    <div class="form-group">
                        <label for="imagen">Portada del libro</label>
                        <br><img class="img-thumbnail" 
                                src="<?=base_url()?>./public/uploads/<?=$libro['imagen'];?>" 
                                width="100" alt="">   
                        <input id="imagen" class="form-control-file" type="file" name="imagen">
                    </div>
                    <div class="form-group">
                        <label for="autor">Autor</label>
                        <input id="autor" value="<?=$libro['autor']?>" class="form-control" type="text" name="autor">
                    </div>
                    <div class="form-group">
                        <label for="descripcionc">Descripción corta</label>
                        <input id="descripcionc" value="<?=$libro['descripcionc']?>" class="form-control" type="text" name="descripcionc">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <input id="descripcion" value="<?=$libro['descripcion']?>" class="form-control" type="text" name="descripcion">
                    </div>
                    <div class="form-group">
                        <label for="isbn">ISBN</label>
                        <input id="isbn" value="<?=$libro['isbn']?>" class="form-control" type="text" name="isbn">
                    </div>
                    <div class="form-group">
                        <label for="editorial">Editorial</label>
                        <input id="editorial" value="<?=$libro['editorial']?>" class="form-control" type="text" name="editorial">
                    </div>
                    <div class="form-group">
                        <label for="numpag">Número de páginas</label>
                        <input id="numpag" value="<?=$libro['numpag']?>" class="form-control" type="text" name="numpag">
                    </div>
                    <div class="form-group">
                        <label for="edicion">Edición</label>
                        <input id="edcicion" value="<?=$libro['edicion']?>" class="form-control" type="text" name="edicion">
                    </div>
                    <div class="form-group">
                        <label for="pais">País</label>
                        <input id="pais" value="<?=$libro['pais']?>" class="form-control" type="text" name="pais">
                    </div>
                    <div class="form-group">
                        <label for="anio">Año</label>
                        <input id="anio" value="<?=$libro['anio']?>" class="form-control" type="text" name="anio">
                    </div>
                    <button class="btn btn-success" type="submit">Actualizar</button>
                    <a href="<?=base_url('listar');?>" class="btn btn-info">Cancelar</a>
                </form>
            </p>
        </div>
    </div>
<?=$pie;?>