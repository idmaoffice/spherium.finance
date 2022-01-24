<?php
/* Проверка антиспама */
//if ( ( (!isset($_POST['posto'])) and (!isset($_POST['telefono'])) ) or ( ( $_POST['name'] != '' ) or ( $_POST['mail'] != '' ) or ( $_POST['email'] != '' ) or ( $_POST['phone'] != '' ) or ( $_POST['tel'] != '' ) or ( $_POST['url'] != '' ) ) ) { $status = 'spam'; }
/* Формируем сообщение */
if (true) {
  $letter = '';
  if (isset($_POST['name'])) {
    $letter .= PHP_EOL . "Имя: " . $_POST['name'];
  }
  if (isset($_POST['lastname'])) {
    $letter .= PHP_EOL . "Фамилия: " . $_POST['lastname'];
  }
  if (isset($_POST['email'])) {
    $letter .= PHP_EOL . "Email:  " . $_POST['email'];
  }
  if (isset($_POST['companynam'])) {
    $letter .= PHP_EOL . "Компания: " . $_POST['companynam'];
  }

  if (isset($_POST['hear'])) {
    $letter .= PHP_EOL . "Услышали: " . $_POST['hear'];
  }
}



/* Отправка e-mail */
  // $our_email = 'alex.berstein@web.de';
  // $mail_subject = 'Заказ звонка: ' . $_SERVER['HTTP_HOST'] . ' (';
  // if (isset($_POST['nomo']))      { $mail_subject .= ' Имя: '.$_POST['nomo']; }
  // if (isset($_POST['posto']))     { $mail_subject .= ' E-mail: '.$_POST['posto'] ; }
  // if (isset($_POST['telefono']))  { $mail_subject .= ' Телефон: '.$_POST['telefono']; }
  // $mail_subject .= ')';
  // $mail_headers = "MIME-Version: 1.0\r\n";
  // $mail_headers .= "Content-type: text/html; charset=utf-8\r\n";
  // $mail_headers .= "From: IGD <notice@" . $_SERVER['HTTP_HOST'] . ">" . "\r\n";
  // if (//mail($our_email, $mail_subject, $letter, $mail_headers)) {
  //     $status = 'true';
  //     $botToken = "1168068825:AAFWrahsF7UG15n9CqSua8OrewbGQygnkJw"; // не менять, наш бот для нашего канала с ошибками
  //     $bot_url = "https://api.telegram.org/bot$botToken/";
  //     $chat_id = "-1001422481304"; // не менять, наш канал с ошибками
  //     $letter = strip_tags($letter);
  //     $url = $bot_url . "sendMessage?chat_id=" . $chat_id . "&text=" . urlencode($letter);
  //     file_get_contents($url);
  //    header('Location: /thanks/index.php');
  // } else {
  //     $status = 'false';
  // }
