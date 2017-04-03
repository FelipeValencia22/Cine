<body>
    <?php include MODULE . "template.php"; ?>
    <div style="width: 60%; margin: 5% auto;">
        <form class="form-horizontal" action="<?php echo URL . "Categoria/save" ?>" enctype="multipart/form-data"  method="post">
            <h2> Crear categoria</h2>
            <div class="form-group" >
                <label for="horaid" >Nombre</label>
                <input id="horaid" type="text" class="form-control" name="nombre" placeholder="" >
            </div>
            <button type="submit" class="btn btn-default" style="width: 10%;">Guardar</button>
        </form>
    </div>
</div>
</body>
</hmtl>
