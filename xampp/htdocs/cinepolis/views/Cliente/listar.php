<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <?php include MODULE . "template.php"; ?>
    <div style="width: 90%; margin: 5% auto;">
        <h1>Ciudades</h1>
        <form class="form-horizontal" action="<?php echo URL . "Cliente/listar" ?>" enctype="multipart/form-data"  method="post">
            <div class="teatros">
                <div class="rg-container"> 
                    <div class="rg-content">
                        <table class="rg-table zebra">
                            <thead>
                                <tr>
                                    <th class="text">Nombre</th>
                                    <th class="text">Usuario</th>
                                    <th class="text">Identificacio</th>
                                    <th class="text">Tipo Identificacion</th>
                                    <th class="text">Email</th>
                                    <th class="text">Editar</th>
                                    <th class="text">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($this->clientes as $cliente): ?>
                                    <tr>
                                        <td><?php echo $cliente["nombre"]; ?></td>
                                        <td><?php echo $cliente["usuario"]; ?></td>
                                        <td><?php echo $cliente["identificacion"]; ?></td>
                                        <td><?php echo $cliente["Tipo_id"]; ?></td>
                                        <td><?php echo $cliente["email"]; ?></td>
                                        <td><a href="editar?id=<?php echo $cliente["id"]; ?>">Editar</a></td>
                                        <td><a onclick="javascript:return confirm('¿Seguro de eliminar la ciudad?');" href="eliminar?id=<?php echo $cliente["id"]; ?>">Eliminar</a></td>
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