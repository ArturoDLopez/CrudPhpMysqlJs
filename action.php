<?php

$conn = new MySQLi('localhost', 'gestor', '', 'tesistas_db');

$action = $_GET['action'] ?? '';

switch($action){
    case 'save':
            //lo use para llamar una funcion de prueba //echo holamundo();
            //echo sumar(10, 20);
            echo '<br>';
            $nombre = $_POST['nombre'];
            $apellido_p = $_POST['apellido_p'];
            $apellido_m = $_POST['apellido_m'];
            $telefono = $_POST['telefono'];
            echo save($nombre, $apellido_p, $apellido_m, $telefono, $conn);
        break;
    case 'update':
            $nombre = $_POST['nombre'];
            $apellido_p = $_POST['apellido_p'];
            $apellido_m = $_POST['apellido_m'];
            $telefono = $_POST['telefono'];
            $id  = $_POST['id'];
            echo update($nombre, $apellido_p, $apellido_m, $telefono, $id, $conn);
            
        break;
        case 'delete':
            $id  = $_GET['id'];
            echo borrar($id, $conn);
            
            break;
    default:
        echo 'Servicio incorrecto';
    break;
}

//uso de funciones 
/*funcion de prueba 
function holamundo()
{
    return "hola mundo";
}
*/
/*function sumar ($num1, $num2){
    $suma = $num1 + $num2;
    return $suma;
}
*/

//***Funcion para salvar*** */
function save($nombre, $apellido_p, $apellido_m, $telefono, $conn){
    $query = "INSERT INTO tesistas_db.usuarios (nombre, apellido_p, apellido_m, telefono) VALUES ('$nombre','$apellido_p','$apellido_m','$telefono');";
    if($conn->query($query)){
        echo 'Se ha editado al usuario exitosamente. Será redireccionado en 5s';
        header('refresh:5,url=index.php');
    }
    else{
        echo 'Error al editar el usuario. Será redireccionado en 5s';
        header('refresh:5,url=index.php');  //redirecciona refrecando la pagina en 5 segundos al index.php
    }
}


/***Funcion para actualzar*** */

function update($nombre, $apellido_p, $apellido_m, $telefono, $id, $conn){
    $query = "UPDATE tesistas_db.usuarios SET nombre='$nombre', apellido_p='$apellido_p', apellido_m='$apellido_m', telefono='$telefono' WHERE id=$id;";
    if($conn->query($query)){
        echo 'Se ha editado al usuario exitosamente. Será redireccionado en 5s';
        header('refresh:5,url=index.php');
    }
    else{
        echo 'Error al editar el usuario. Será redireccionado en 5s';
        header('refresh:5,url=index.php');  //redirecciona refrecando la pagina en 5 segundos al index.php
    }
}

/**Funcion para borrar** */     
function borrar($id, $conn){
    $query = "DELETE FROM tesistas_db.usuarios WHERE id=$id;";
            if($conn->query($query)){
                echo 'Se ha eliminado al usuario exitosamente. Será redireccionado en 5s';
                header('refresh:5,url=index.php');
            }
            else{
                echo 'Error al eliminar el usuario. Será redireccionado en 5s';
                header('refresh:5,url=index.php'); 
            }

}