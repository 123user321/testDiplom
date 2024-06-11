<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Формируем заголовок письма
    $subject = "Новая заявка с сайта";

    // Формируем текст письма
    $email_body = "Имя: $name\n" .
                  "Фамилия: $surname\n" .
                  "Email: $email\n" .
                  "Телефон: $phone\n" .
                  "Сообщение:\n$message";

    // Отправляем письмо
    mail("kamibaaeva@gmail.com", $subject, $email_body);

    exit();
}
?>
