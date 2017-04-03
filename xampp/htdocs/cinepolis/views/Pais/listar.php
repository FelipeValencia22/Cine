<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php print(URL); ?>public/styles/style.css">

</head>
<body>
    <?php include MODULE . "template.php"; ?>
    <div style="width: 90%; margin: 5% auto;">
        <h1>Paises</h1>
        <form class="form-horizontal" action="<?php echo URL . "Pais/listar" ?>" enctype="multipart/form-data"  method="post">
            <div class="teatros">
                <div class="rg-container"> 
                    <div class="rg-content">
                        <table class="rg-table zebra">
                            <thead>
                                <tr>
                                    <th class="text">Nombre</th>
                                    <th class="text">Editar</th>
                                    <th class="text">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($this->paises as $pais): ?>
                                    <tr>
                                        <td><?php echo $pais["nombre"]; ?></td>
                                        <td><a href="editar?id=<?php echo $pais["id"]; ?>">Editar</a></td>
                                        <td><a onclick="javascript:return confirm('¿Seguro de eliminar el pais?');" href="eliminar?id=<?php echo $pais["id"]; ?>">Eliminar</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>