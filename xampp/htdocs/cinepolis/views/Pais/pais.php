<head>
    <link rel="stylesheet" href="<?php print(URL); ?>public/styles/style.css">
</head>
<body>
    <?php include MODULE . "template.php"; ?>
    <div style="width: 90%; margin: 5% auto;">
        <form class="form-horizontal" action="<?php echo URL . "Pais/save" ?>" enctype="multipart/form-data"  method="post">
            <h1>Crear Pais</h1>
            <div class="form-group">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
            </div>

            <input type="submit" value="Guardar"/>
        </form>

    </div>


</body>
</hmtl>
