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
        die('�� �������');   
    }else{



if(isset($_POST['EMAIL'])) {

$file = 'unsubscribe-list.txt';
// ����� �������, �������� ����� �������� � ����
$em = $_POST['EMAIL']."\n";

// ����� ���������� � ����,
// ��������� ���� FILE_APPEND flag ��� ����������� ����������� � ����� �����
// � ���� LOCK_EX ��� �������������� ������ ������� ����� ���-������ ������ � ������ �����
file_put_contents($file, $em, FILE_APPEND | LOCK_EX);
}
}



?>
