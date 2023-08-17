<?php
if(isset($_POST['submit'])){
    $to = "zvezdnyjmalciksa@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = "Новое сообщение с формы контактов";
    $message = "Имя: " . $name . "\n\n" .
               "Email: " . $from . "\n\n" .
               "Сообщение: " . $_POST['message'];
    $headers = "From:" . $from;
    
    if(mail($to, $subject, $message, $headers)){
        echo "Сообщение успешно отправлено.";
    } else{
        echo "Ошибка при отправке сообщения.";
    }
}
?>;