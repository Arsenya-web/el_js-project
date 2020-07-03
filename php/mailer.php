<?php 
if (!empty($_POST['contact_name']) and !empty($_POST['email_name']) and !empty($_POST['text_name'])){

   $theme = 'Новое сообщение';

   $letter = 'Данные сообщения:/r/n';
   $letter .= 'Имя: '.$_POST['contact_name'].'/r/n';
   $letter .= 'Эл-почта: '.$_POST['email_name'].'/r/n';
   $letter .= 'Сообщение: '.$_POST['text_name'].'/r/n';

  if (mail('arsenya.khudonogov@mail.ru', 'Сообщение от EL_JS', $theme, $letter)){
   header('Lovayion/thack.php')
  }else {
   header('Location/thank.php');
  }
} else {
   header('Location/');
}