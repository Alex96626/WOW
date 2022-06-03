<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset"UTF-8 />
    
    <title>Ваше сообщение успешно отправлено</title>
</script>

</head>

<body>

<?php
	$back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";

	if(!empty($_GET['phone']) and !empty($_GET['mail'])){
		$phone = trim(strip_tags($_GET['phone']));
		$mail = trim(strip_tags($_GET['mail']));
        $mailTo = 'a.gertsen@wowmedia.pro';
        // $mailTo = 'a.turik@upp.com.ru';
        
        $mailTema = 'Заявка с сайта wowmedia.pro';
        $mailMassage = 'Заявку отправил: Телефон:'. $phone.'    '. 'Email:'. $mail;

		
		
		mail($mailTo,$mailTema, $mailMassage,"Content-type:text/html;charset=UTF-8");
		echo 'Успех';
        
	} 

?>
</body>