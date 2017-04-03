<body>
    <?php include MODULE . "template.php"; ?>
    <div style="width: 90%; margin: 5% auto;">
        <form class="form-horizontal" action="<?php echo URL . "Categoria/save" ?>" enctype="multipart/form-data"  method="post">
            <h1> Crear categoria</h1>
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
