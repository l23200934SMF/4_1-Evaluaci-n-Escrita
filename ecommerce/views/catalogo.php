<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Benito Santos Ecommerce</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="container mt-5">

        <h1 class="text-center mb-5">
            Colección Benito Santos
        </h1>

        <div class="row">
            <?php foreach ($productos as $producto): ?>
                <div class="col-md-4 mb-4">
                    <div class="card producto h-100">
                        <!-- imagen -->
                        <img src="<?php echo $producto['imagen']; ?>" class="card-img-top imagen-producto">
                        <div class="card-body text-center">
                            <h4>
                                <?php echo $producto['nombre']; ?>
                            </h4>
                            <p>
                                <?php echo $producto['descripcion']; ?>
                            </p>
                            <h5>
                                $<?php echo $producto['precio']; ?> MXN
                            </h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>