<?php


if ("POST" == $_SERVER["REQUEST_METHOD"]) {
    if (isset($_SERVER["HTTP_ORIGIN"])) {
        $address = "https://".$_SERVER["SERVER_NAME"];
        if (strpos($address, $_SERVER["HTTP_ORIGIN"]) !== 0) {
            exit("CSRF protection in POST request: detected invalid Origin header: ".$_SERVER["HTTP_ORIGIN"]);
        }
    }
}

if(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) != 'domain.ru'){
        die('Не балуйся');   
    }else{



if(isset($_POST['EMAIL'])) {

$file = 'unsubscribe-list.txt';
// Новый человек, которого нужно добавить в файл
$em = $_POST['EMAIL']."\n";

// Пишем содержимое в файл,
// используя флаг FILE_APPEND flag для дописывания содержимого в конец файла
// и флаг LOCK_EX для предотвращения записи данного файла кем-нибудь другим в данное время
file_put_contents($file, $em, FILE_APPEND | LOCK_EX);
}
}



?>
