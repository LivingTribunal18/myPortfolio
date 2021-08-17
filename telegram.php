<?php 
/* https://api.telegram.org/bot1627746318:AAGfGQDBf5zTgmi_y6MPup-1FUtJTaoMKBg/getUpdates */ 

    $name = $_POST['contacts-name'];
    $email = $_POST['contacts-email'];
    $phone = $_POST['contacts-phone'];
    $message = $_POST['contacts-message'];
    $token = "1627746318:AAGfGQDBf5zTgmi_y6MPup-1FUtJTaoMKBg";
    $chat_id = "-588366531";
    $arr = array(
        'Name: ' => $name,
        'Phone: ' => $phone,
        'Email: ' => $email
    );

    $txt = "";
    foreach($arr as $key => $value){
        $txt .= "<b>".$key."</b> ".$value."%0A";
    }

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

    if ($sendToTelegram) {
        header('Location: index.php');
    } else {
        echo "Error";
    }


?>