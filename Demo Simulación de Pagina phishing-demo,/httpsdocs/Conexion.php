<?php  
// cadena de conexion 
$nomserver = "localhost";
$username  =  "root";
$passserver = "";
$dbname = "";


// crear conexión 
$conection = mysqli_connect($nomserver,$username,$passserver,$dbname);



// validacion 
if (!$conection) {
    echo "Error";
}





?>