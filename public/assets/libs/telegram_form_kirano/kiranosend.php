<?php

$webPage = 'MSJ';
$name = $_POST['user_name'];
$phone = urlencode($_POST['user_phone']);
$city = $_POST['user_city'];
$paymentMethod = $_POST['payment-method'];
$address = $_POST['user_address'];

$token = "1195077988:AAGYUpfLUgHDNIBjWXNH8dYCCc2XSXizq7k"; //НЕ МЕНЯЕТСЯ

$chat_id = "-1001376771478"; //МЕНЯЕТСЯ!!!

$arr = array(
  'Новая заявка с сайта: ' => $webPage,
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Город: ' => $city,
  'Адрес: ' => $address,
  'Способ оплаты: ' => $paymentMethod,
);

foreach ($arr as $key => $value) {
  $txt .= "<b>" . $key . "</b> " . $value . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");


if ($sendToTelegram) {
  header('Location: success.php');
} else {
  header('Location: error_form.php');
}
