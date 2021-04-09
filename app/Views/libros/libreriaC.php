<?=$cabecera;?>
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
<div class="btn-group" role="group" aria-label="Basic example">
    <a href="<?=base_url('libreria');?>" class="btn btn-success mb-4 btn-center">Volver al Inicio</a>
    <a href="<?=base_url('Libros/imprimir');?>" class="btn btn-warning mb-4 btn-center">Impresión en blanco y negro
        método dompdf</a>
    <button type="button" class="btn btn-info mb-4 btn-center" onclick="javascrip:window.print()">Impresion a color
        método onclick</button>
</div>
<?=$pie?>