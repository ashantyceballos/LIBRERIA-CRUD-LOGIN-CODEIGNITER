<div class="row" style="font-family: Arial, Helvetica, sans-serif;">
    <?php foreach($libros as $libro): ?>
    <div id="fondo" class="col-md-12" style="padding: 25px; background-color: rgba(133, 133, 133, 0.230);">
        <img class="img-thumbnail img-fluid  d-block" src="<?=base_url()?>./public/uploads/<?=$libro['imagen'];?>"
            width="250" alt="">
        <div id="texto" style="padding: 25px; ">
            <h4 class="text-center titulos"><?=$libro['titulo']?></h4>
            <h6 class="autores">Autor: <strong><?=$libro['autor']?></strong></h6>
            <h6 class="autores">Editorial: <strong><?=$libro['edicion']?></strong></h6>
            <p class="text-justify">Descripción: <br><?=$libro['descripcion']?></p>
        </div>
    </div>
    <?php endforeach; ?>
</div>