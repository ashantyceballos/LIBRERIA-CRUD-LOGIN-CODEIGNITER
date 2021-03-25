<?= $cabecera ?>
    <h5 class="text-muted card-header">Libro seleccionado</h5><br>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <img class="img-thumbnail"
                        src="<?=base_url()?>./public/uploads/<?=$libro['imagen'];?>" 
                        width="300" alt="">
                </div>
                <div class="col-6">
                    <h2><?=$libro['titulo'];?></h2><br>
                    <p>Autor: <strong><?=$libro['autor'];?></strong><br></p><br>
                    <div class="row">
                        <div class="col">
                            <img src="<?=base_url()?>./public/iconos/isbn.png"  alt="..." width="50">
                            <strong>ISBN: </strong>
                            <?=$libro['isbn'];?><br>
                        </div>
                        <div class="col">
                            <img src="<?=base_url()?>./public/iconos/editorial.png"  alt="..." width="50">
                            <strong>Editorial: </strong>
                            <?=$libro['editorial'];?><br>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <img src="<?=base_url()?>./public/iconos/numpag.png"  alt="..." width="50">
                            <strong>Páginas: </strong>
                            <?=$libro['numpag'];?><br>
                        </div>
                        <div class="col">
                            <img src="<?=base_url()?>./public/iconos/edicion.png"  alt="..." width="50">
                            <strong>Edicion: </strong>
                            <?=$libro['edicion'];?><br>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <img src="<?=base_url()?>./public/iconos/pais.png"  alt="..." width="50">
                            <strong>País: </strong>
                            <?=$libro['pais'];?><br>
                        </div>
                        <div class="col">
                            <img src="<?=base_url()?>./public/iconos/anio.png"  alt="..." width="50">
                            <strong>Año: </strong>
                            <?=$libro['anio'];?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p><strong>Descripción: </strong><br><?=$libro['descripcion'];?><br></p>
        <a href="<?=base_url('libreria')?>" class="btn btn-info" type="button">Regresar</a>
   </body>
<?= $pie ?>