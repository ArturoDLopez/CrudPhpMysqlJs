<?php
$conn = new MySQLi('localhost', 'gestor', '', 'tesistas_db');
$query = "SELECT * FROM tesistas_db.usuarios;";
$resultados = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Usuarios</title>
</head>
<body>

<div class='container'>
    <div class='row mt-3'>
        <div class='col-6 offset-3'>
            <h3>Agregar usuario nuevo</h3>
            <form action="action.php?action=save" method='post'>
                <div class='form-group'>
                    <label class='form-label' for="nombre">Nombre:</label>
                    <input class='form-control' type="text" name='nombre'>
                </div>
                <div class='form-group'>
                    <label class='form-label' for="apellido_p">Apellido paterno:</label>
                    <input class='form-control' type="text" name='apellido_p'>
                </div>
                <div class='form-group'>
                    <label class='form-label' for="apellido_m">Apellido materno:</label>
                    <input class='form-control' type="text" name='apellido_m'>
                </div>
                <div class='form-group'>
                    <label class='form-label' for="telefono">Teléfono:</label>
                    <input class='form-control' type="text" name='telefono'>
                </div>
                <button type='submit' class='btn btn-primary btn-sm'>Guardar</button>
            </form>
        </div>
    </div>
    <div class='row mt-5'>
        <div class='col'>
            <h3>Lista de usuarios</h3>
            <table class='table'>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Teléfono</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = $resultados->fetch_assoc()){
                            $content = '<tr>';
                            $content .= '<td>' . $row['nombre'] .'</td>' ;
                            $content .= '<td>' . $row['apellido_p'] .'</td>' ;
                            $content .= '<td>' . $row['apellido_m'] .'</td>' ;
                            $content .= '<td>' . $row['telefono'] .'</td>' ;
                            $content .= "<td><a href='confirm_delete.php?id=" . $row['id'] ."'>Eliminar</td>" ;
                            $content .= "<td><a href='update.php?id=" . $row['id'] ."'>Editar</td>" ;
                            $content .= '</tr>';
                            echo $content;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Scripts -->
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>