//si el doceumento esta listo, de inmediato hace
//$(document) elige o selecciona 
//.Ready ejecuta el metodo ready
$(document).ready(function(){
//para mostrar
    //jQuery contiene el metodo ajax
    $.ajax({
        url: 'actions.php',
        type: 'GET',
        success: function(response){
            let mostrar = JSON.parse(response);
            let plantilla = '';
            mostrar.forEach(usuario => {
                plantilla += 
                `   
                    <tr>
                        <td>${usuario.id}</td>
                        <td>${nombre.nombre}</td>
                        <td>${nombre.apellido_p}</td>
                        <td>${nombre.apellido_m}</td>
                        <td>${nombre.telefono}</td>
                    
                    </tr>
                `
            });
            $('#cuerpoTabla').html(plantilla);
        }
    });
});