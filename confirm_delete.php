<?php
$conn = new MySQLi('localhost', 'gestor','', 'tesistas_db');
$id = $_GET['id'];
$query = "SELECT * FROM tesistas_db.usuarios WHERE id = $id;";
$resultado = $conn->query($query)->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class='col-6 offset-3'>
                <h5>Confirma que quiere eliminar 
                    <?php   echo $resultado['nombre'].''.$resultado['apellido_p']?>
                </h5>
                <form method='post' action="action.php?action=delete&id=<?php echo $id?>">
                <div class='form-group'>
                    <a href="index.php" class='btn btn-success btn-sm'>NO</a>
                    
                    <button type = 'submit' class='btn btn-danger btn-sm'>Si</button>
                </div>

                </form>

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