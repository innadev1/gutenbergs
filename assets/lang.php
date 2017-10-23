<?php
    if(!isset($_SESSION)) {
        session_start();
   }

    $language = [];    

    $language['lv'] = [];
    $language['en'] = [];
    $language['ru'] = [];


    $SiteUrl = 'http://localhost/www/gutenberg/';
    $language;

    if (isset($_GET['lang'])&&!empty($_GET['lang'])) {
        if ($_GET['lang']=='lv'||$_GET['lang']=='en'||$_GET['lang']=='ru'||$_GET['lang']=='ee') {
            $_SESSION['lang'] = $_GET['lang'];
        }
    }

    if (isset($_SESSION['lang'])) {
        $lang = $_SESSION['lang'];
    }else{
        $lang = 'lv';
    }

//LANGUAGES
    // LV
	$language['lv']['LV'] = 'LV';
    $language['lv']['RU'] = 'RU';
	$language['lv']['EN'] = 'EN';
    // RU
    $language['ru']['LV'] = 'ЛАТ';
    $language['ru']['RU'] = 'РУС';
	$language['ru']['EN'] = 'АНГ';
	// EN
	$language['en']['LV'] = 'LV';
    $language['en']['RU'] = 'RU';
	$language['en']['EN'] = 'EN';

//LINKS
	$language['ru']['home'] = 'Главная';
    $language['lv']['home'] = 'Galvenā';
	$language['en']['home'] = 'Home';
	
	$language['ru']['about_us'] = 'О нас';
    $language['lv']['about_us'] = 'Par mums';
	$language['en']['about_us'] = 'About us';
	
	$language['ru']['rooms'] = 'Комнаты';
    $language['lv']['rooms'] = 'Istabas';
	$language['en']['rooms'] = 'Rooms';
	
	$language['ru']['restaurant'] = 'Ресторан';
    $language['lv']['restaurant'] = 'Restorāns';
	$language['en']['restaurant'] = 'Restaurant';
	
	$language['ru']['conference'] = 'Зал для конференций';
    $language['lv']['conference'] = 'Konferenču zāle';
	$language['en']['conference'] = 'Conference hall';
	
	$language['ru']['contacts'] = 'Контакты';
    $language['lv']['contacts'] = 'Kontakti';
	$language['en']['contacts'] = 'Contacts';
	
	$language['ru']['reservation'] = 'Резервация';
    $language['lv']['reservation'] = 'Rezervācija';
	$language['en']['reservation'] = 'Reservation';
	
//FORM
	$language['ru']['check_in'] = 'Дата заезда';
    $language['lv']['check_in'] = 'Iebraukšana';
	$language['en']['check_in'] = 'Check in';
	
	$language['ru']['check_out'] = 'Дата выезда';
    $language['lv']['check_out'] = 'Izbraukšana';
	$language['en']['check_out'] = 'Check out';
	
	$language['ru']['adults'] = 'Взрослые';
    $language['lv']['adults'] = 'Pieaugušie';
	$language['en']['adults'] = 'Adults';
	
	$language['ru']['children'] = 'Дети';
    $language['lv']['children'] = 'Bērni';
	$language['en']['children'] = 'Children';
	
	$language['ru']['book'] = 'забронировать';
    $language['lv']['book'] = 'pasūtīt';
	$language['en']['book'] = 'book';
	
//FOOTER
	$language['ru']['visit'] = 'посещайте';
    $language['lv']['visit'] = 'apmeklējiet';
	$language['en']['visit'] = 'visit';
	
	$language['ru']['call'] = 'звоните';
    $language['lv']['call'] = 'zvāniet';
	$language['en']['call'] = 'call';
	
	$language['ru']['get_in_touch'] = 'будьте на связи';
    $language['lv']['get_in_touch'] = 'sazināties ar mums';
	$language['en']['get_in_touch'] = 'geit in touch';
	
	$language['ru']['latest'] = 'новости';
    $language['lv']['latest'] = 'jaunumi';
	$language['en']['latest'] = 'latest';

//INDEX

//header
	$language['ru']['hotel'] = 'Познакомьтесь с нашим отелем';
    $language['lv']['hotel'] = 'Iepazīstieties ar mūsu viesnīcu';
	$language['en']['hotel'] = 'Introduce our hotel';
	
	$language['ru']['our_rooms'] = 'Наши комнаты';
    $language['lv']['our_rooms'] = 'Mūsu istabas';
	$language['en']['our_rooms'] = 'Our rooms';
	
	$language['ru']['question'] = 'Есть вопросы?';
    $language['lv']['question'] = 'Ir jautājumi?';
	$language['en']['question'] = 'Have any question?';
	
	$language['ru']['contact_us'] = 'Контакты';
    $language['lv']['contact_us'] = 'Kontakti';
	$language['en']['contact_us'] = 'Contact us';
//blocks
	$language['ru']['gallery'] = 'Галерея';
    $language['lv']['gallery'] = 'Galerija';
	$language['en']['gallery'] = 'Gallery';
//header text
	$language['ru']['header_text'] = 'Гостиница в стиле Boutique в центре Старого города. Славится своим роскошным интерьером, романтическим, историческим стилем и отзывчивым персоналом.';
    $language['lv']['header_text'] = 'Boutique stila viesnīca Vecpilsētas centrā. Slavena ar greznu interjeru, romantisku, vēsturisku stilu un sirsnīgu personālu.';
	$language['en']['header_text'] = 'Boutique-style hotel in the center of the Old Town. Famous for its gorgeous interior, romantic and historical style, and kind personnel.';
	
	
	
//ABOUT US

//ROOMS

//CONFERENCE HALL

?>