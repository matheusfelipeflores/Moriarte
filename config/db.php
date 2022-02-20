<?php 

$localhost = "localhost";
$root = "root";
$pwd = null;
$db = "newsletter";

// connect to db using mysqli_connect()

$conn = mysqli_connect($localhost,$root,$pwd,$db);

if($conn){
    echo 
    "<div class='conectado-servidor'>
        <div class='conectado-texto'>
            <p>Servidor: Conectado</p>
        </div>
        <div class='conectador-servidor-redimension'>
            <div class='conectado-servidor-green'>
            </div>
        </div>
    </div>";
    // die;
}

else{
    echo 
    "<div class='conectado-servidor'>
        <div class='conectado-texto'>
            <p>Servidor: Desconectado</p>
        </div>
        <div class='conectador-servidor-redimension'>
            <div class='conectado-servidor-red'>
            </div>
        </div>
    </div>";
    die;
}

?>