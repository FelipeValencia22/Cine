<body>
    <?php include MODULE . "template.php"; ?>
    <div style="width: 60%; margin: 5% auto;">
        <form class="form-horizontal" action="<?php echo URL . "Teatro/editar" ?>" enctype="multipart/form-data"  method="post">
            <h2> Editar teatro </h2>
            <?php foreach ($this->teatros as $teatro): ?>
            <h1>Ok</h1>
                <div class="form-group">
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $teatro["nombre"]; ?>"/>
                </div>
            <?php endforeach; ?>



            <button type="submit" class="btn btn-default" style="width: 10%; margin:5%;">Guardar</button>
        </form>

    </div>


</body>
</hmtl>
