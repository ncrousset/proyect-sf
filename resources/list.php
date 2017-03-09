<?php include_once "head.php";  ?>
<body>

    <div class="col-md-12">
        <h2>
            Listado de clientes
            <a href="./index.php?accion=add" class="btn btn-success pull-right">
                Agregar
            </a>
        </h2>

        <?php if(!is_null($mensaje)): ?>
            <p class="bg-success col-md-12"><?php echo $mensaje; ?></p>
        <?php endif; ?>

        <div class="col-md-12 table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cedula</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Fecha de nacimiento</th>
                        <th>Fecha de inicio</th>
                        <th>Fecha de fin</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>

                <?php foreach ($clientes as $cliente): ?>
                    <tr>
                        <td>
                            <a href=" <?php echo "index.php?accion=show&id=" . $cliente['cedula']; ?>">
                            <?php echo $cliente['nombre']; ?></a></td>
                        <td><?php echo $cliente['apellido']; ?></td>
                        <td><?php echo $cliente['cedula']; ?></td>
                        <td><?php echo $cliente['email']; ?></td>
                        <td><?php echo $cliente['telefono']; ?></td>
                        <td><?php echo $cliente['direccion']; ?></td>
                        <td><?php echo $cliente['fechaNacimiento']; ?></td>
                        <td><?php echo $cliente['fechaInicio']; ?></td>
                        <td><?php echo $cliente['fechaFin']; ?></td>
                        <td>
                            <a href="index.php?accion=edit&id=<?php echo $cliente['cedula']; ?>" class="btn btn-primary btn-sm pull-left">
                                Edit
                            </a>
                            <form action="index.php?accion=delete" method="post">
                                <input type="hidden" name="key" value="<?php echo $cliente['cedula']; ?>">
                                <input type="hidden" name="_method" value="delete">
                                <button type="submit" class="btn btn-danger pull-right">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>