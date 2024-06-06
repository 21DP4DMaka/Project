<?php
// Включение отображения ошибок
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php'; // Подключение автозагрузчика Composer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "project";

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Сохраняем фидбэк в базу данных
    $stmt = $conn->prepare("INSERT INTO feedback (name, email, message) VALUES (?, ?, ?)");
    if (!$stmt) {
        die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    }
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        // Отправляем email
        $mail = new PHPMailer(true); // Создаем экземпляр PHPMailer

        try {
            // Настройка SMTP для Gmail
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'jabloko123123123123@gmail.com'; // Замените на ваш адрес Gmail
            $mail->Password = 'danila2005123123123421432144532432432r32r43f94-3yf4h3-87fy4-3hgc'; // Замените на пароль вашей учетной записи Gmail
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Устанавливаем адрес отправителя и получателя
            $mail->setFrom($email, $name);
            $mail->addAddress('jabloko123123123123@gmail.com'); // Замените на ваш email

            // Устанавливаем тему и содержимое письма
            $mail->Subject = 'New Feedback from ' . $name;
            $mail->Body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

            // Отправляем письмо
            $mail->send();
            echo 'Thank you for your feedback!';
        } catch (Exception $e) {
            error_log('Mail failed to send: ' . $mail->ErrorInfo);
            echo 'Sorry, there was an error sending your feedback. Please try again later.';
        }
    } else {
        error_log('MySQL insert failed: ' . $stmt->error);
        echo 'Sorry, there was an error saving your feedback. Please try again later.';
    }

    $stmt->close();
} else {
    echo 'Invalid request method';
}

$conn->close();
?>