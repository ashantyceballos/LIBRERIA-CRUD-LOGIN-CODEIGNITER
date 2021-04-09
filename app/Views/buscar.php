<?=$cabecera;?>
<div class="row">
    <?php foreach($libros as $libro): ?>
            <div id="fondo" class="col-md-4">
            <img class="img-thumbnail img-fluid mx-auto d-block" 
                        src="<?=base_url()?>./public/uploads/<?=$libro['imagen'];?>" 
                        width="200" alt=""> 
              <div id="texto">
                <h4 class="text-center titulos"><?=$libro['titulo']?></h4>
                <h6 class="autores">Autor: <strong><?=$libro['autor']?></strong></h6>
                <p class="text-justify">Descripción: <br><?=$libro['descripcionc']?></p>
                <a href="<?=base_url('mostrar/'.$libro['id']);?>" class="btn btn-info mb-4 btn-center">Ver más...</a>
              </div>
            </div>
    <?php endforeach; ?>
</div>
<?=$pie?>