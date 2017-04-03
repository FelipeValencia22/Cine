
<body>
    <?php include MODULE . "template.php"; ?>
    <div style="width: 60%; margin: 5% auto;">
        <form class="form-horizontal" action="<?php echo URL . "Categoria/listar" ?>" enctype="multipart/form-data"  method="post">
            <div class="teatros">
                <?php foreach ($this->categorias as $categoria): ?>
                <label for="id" style="margin: 10px;" ><h2>Categoria</h2></label>
                <div id="id" class="teatros" > 
                    <label for="nombreid" style="margin: 10px;" >Nombre:</label>
                    <div style="margin:10px;" id="nombreid" class="title"><?php echo $categoria["nombre"]; ?></div>
                    <br/>
                    </div>
                <?php endforeach; ?>
            </div>
        </form>
    </div>
</body>
</hmtl>
