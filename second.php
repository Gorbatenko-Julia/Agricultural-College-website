<?php
//получим данные с элемента формы
$email=$_POST['email'];
$text=$_POST['text'];
$form_textarea=$_POST['form_textarea'];

//обработаем полученные данные

$email=htmlspecialchars($email);
$text=htmlspecialchars($text);
$form_textarea=htmlspecialchars($form_textarea);

$email=urldecode($email);   //декодирование url
$text=urldecode($text);
$form_textarea=urldecode($form_textarea);

$email=trim($email); //удаление пробельных символов с обеих сторон
$text=trim($text);
$form_textarea=trim($form_textarea);


//отправляем данные на почту

if (mail("ellis.tom@internet.ru",
"Новое письмо с сайта",
"Электронная почта:".$email."/n".
"Имя:".$text."/n".
"Сообщение:".$form_textarea."/n".
"From:ellis.@internet.ru\r\n")
)
{
    echo('Письмо отправлено успешно!');
}
else{
    echo('Есть ошибки! Проверьте данные...');
}
?>