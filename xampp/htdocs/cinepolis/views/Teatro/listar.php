
<body>
    <?php include MODULE . "template.php"; ?>
    <div style="width: 60%; margin: 5% auto;">
        <form class="form-horizontal" action="<?php echo URL . "Teatro/listar" ?>" enctype="multipart/form-data"  method="post">
            <div class="teatros">
                <?php foreach ($this->teatros as $teatro): ?>
                    <label for="id" style="margin: 10px;" ><h2>Teatro</h2></label>
                    <div id="id" class="teatros" > 
                        <label for="nombreid" style="margin: 10px;" >Nombre:</label>
                        <div style="margin:10px;" id="nombreid" class="title"><?php echo $teatro["nombre"]; ?></div>
                        <label for="telefonoid" style="margin: 10px;" >Telefono:</label>
                        <div style="margin:10px;" id="telefonoid" class="title"><?php echo $teatro["telefono"]; ?></div>
                        <label for="dirid" style="margin: 10px;" >Dirección:</label>
                        <div style="margin:10px;" id="dirid" class="title"><?php echo $teatro["direccion"]; ?></div>
                        <label for="ciuid" style="margin: 10px;" >Ciudad:</label>
                        <div style="margin:10px;" class="title"><?php echo $teatro["Ciudad_id"]; ?></div>
                        <a href="editar">Editar</a>
                        <a onclick="javascript:return confirm('¿Seguro de eliminar el teatro?');" href="eliminar?id=<?php echo $teatro["id"];?>">Eliminar</a>
                        <br/>
                    </div>
                <?php endforeach; ?>
            </div>
        </form>
    </div>
</body>
</hmtl>
