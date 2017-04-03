
<body>
    <?php include MODULE . "template.php"; ?>
    <div style="width: 60%; margin: 5% auto;">
        <form class="form-horizontal" action="<?php echo URL . "Funcion/listar" ?>" enctype="multipart/form-data"  method="post">
            <div class="teatros">
                <?php foreach ($this->funciones as $funcion): ?>
                <label for="id" style="margin: 10px;" ><h2>Función</h2></label>
                <div id="id" class="teatros" > 
                    <label for="nombreid" style="margin: 10px;" >Hora:</label>
                    <div style="margin:10px;" id="nombreid" class="title"><?php echo $funcion["hora"]; ?></div>
                    <label for="telefonoid" style="margin: 10px;" >Fecha:</label>
                    <div style="margin:10px;" id="telefonoid" class="title"><?php echo $funcion["fecha"]; ?></div>
                    <label for="dirid" style="margin: 10px;" >Sala:</label>
                    <div style="margin:10px;" id="dirid" class="title"><?php echo $funcion["Sala_id"]; ?></div>
                    <label for="ciuid" style="margin: 10px;" >Pelicula:</label>
                    <div style="margin:10px;" class="title"><?php echo $funcion["Pelicula_id"]; ?></div>
                    <br/>
                    </div>
                <?php endforeach; ?>
            </div>
        </form>
    </div>
</body>
</hmtl>
