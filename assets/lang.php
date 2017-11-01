<?php
    if(!isset($_SESSION)) {
        session_start();
   }

    $language = [];    

    $language['lv'] = [];
    $language['en'] = [];
    $language['rus'] = [];


    $SiteUrl = 'http://localhost/www/gutenberg/';
    $language;

    if (isset($_GET['lang'])&&!empty($_GET['lang'])) {
        if ($_GET['lang']=='lv'||$_GET['lang']=='en'||$_GET['lang']=='rus'||$_GET['lang']=='ee') {
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
    $language['lv']['RUS'] = 'RU';
	$language['lv']['EN'] = 'EN';
    // RU
    $language['rus']['LV'] = 'ЛАТ';
    $language['rus']['RUS'] = 'РУС';
	$language['rus']['EN'] = 'АНГ';
	// EN
	$language['en']['LV'] = 'LV';
    $language['en']['RUS'] = 'RU';
	$language['en']['EN'] = 'EN';

//LINKS
	$language['rus']['home'] = 'Главная';
    $language['lv']['home'] = 'Galvenā';
	$language['en']['home'] = 'Home';
	
	$language['rus']['about_us'] = 'О нас';
    $language['lv']['about_us'] = 'Par mums';
	$language['en']['about_us'] = 'About us';
	
	$language['rus']['rooms'] = 'Комнаты';
    $language['lv']['rooms'] = 'Istabas';
	$language['en']['rooms'] = 'Rooms';
	
	$language['rus']['restaurant'] = 'Ресторан';
    $language['lv']['restaurant'] = 'Restorāns';
	$language['en']['restaurant'] = 'Restaurant';
	
	$language['rus']['conference'] = 'Зал для конференций';
    $language['lv']['conference'] = 'Konferenču zāle';
	$language['en']['conference'] = 'Conference hall';
	
	$language['rus']['contacts'] = 'Контакты';
    $language['lv']['contacts'] = 'Kontakti';
	$language['en']['contacts'] = 'Contacts';
	
	$language['rus']['reservation'] = 'Резервация';
    $language['lv']['reservation'] = 'Rezervācija';
	$language['en']['reservation'] = 'Reservation';
	
//FORM
	$language['rus']['check_in'] = 'Дата заезда';
    $language['lv']['check_in'] = 'Iebraukšana';
	$language['en']['check_in'] = 'Check in';
	
	$language['rus']['check_out'] = 'Дата выезда';
    $language['lv']['check_out'] = 'Izbraukšana';
	$language['en']['check_out'] = 'Check out';
	
	$language['rus']['adults'] = 'Взрослые';
    $language['lv']['adults'] = 'Pieaugušie';
	$language['en']['adults'] = 'Adults';
	
	$language['rus']['children'] = 'Дети';
    $language['lv']['children'] = 'Bērni';
	$language['en']['children'] = 'Children';
	
	$language['rus']['book'] = 'забронировать';
    $language['lv']['book'] = 'pasūtīt';
	$language['en']['book'] = 'book';
	
//FOOTER
	$language['rus']['visit'] = 'посещайте';
    $language['lv']['visit'] = 'apmeklējiet';
	$language['en']['visit'] = 'visit';
	
	$language['rus']['call'] = 'звоните';
    $language['lv']['call'] = 'zvāniet';
	$language['en']['call'] = 'call';
	
	$language['rus']['get_in_touch'] = 'будьте на связи';
    $language['lv']['get_in_touch'] = 'sazināties ar mums';
	$language['en']['get_in_touch'] = 'geit in touch';
	
	$language['rus']['latest'] = 'новости';
    $language['lv']['latest'] = 'jaunumi';
	$language['en']['latest'] = 'latest';

//INDEX

//header
	$language['rus']['hotel'] = 'Познакомьтесь с нашим отелем';
    $language['lv']['hotel'] = 'Iepazīstieties ar mūsu viesnīcu';
	$language['en']['hotel'] = 'Introduce our hotel';
	
	$language['rus']['our_rooms'] = 'Наши комнаты';
    $language['lv']['our_rooms'] = 'Mūsu istabas';
	$language['en']['our_rooms'] = 'Our rooms';
	
	$language['rus']['question'] = 'Есть вопросы?';
    $language['lv']['question'] = 'Ir jautājumi?';
	$language['en']['question'] = 'Have any question?';
	
	$language['rus']['contact_us'] = 'Контакты';
    $language['lv']['contact_us'] = 'Kontakti';
	$language['en']['contact_us'] = 'Contact us';
//blocks
	$language['rus']['gallery'] = 'Галерея';
    $language['lv']['gallery'] = 'Galerija';
	$language['en']['gallery'] = 'Gallery';
//header text
	$language['rus']['header_text'] = 'Гостиница в стиле Boutique в центре Старого города. Славится своим роскошным интерьером, романтическим, историческим стилем и отзывчивым персоналом.';
    $language['lv']['header_text'] = 'Boutique stila viesnīca Vecpilsētas centrā. Slavena ar greznu interjeru, romantisku, vēsturisku stilu un sirsnīgu personālu.';
	$language['en']['header_text'] = 'Boutique-style hotel in the center of the Old Town. Famous for its gorgeous interior, romantic and historical style, and kind personnel.';
	
	
	
//ABOUT US
	$language['rus']['about_us'] = 'О нас';
	$language['lv']['about_us'] = 'Par mums';
	$language['en']['about_us'] = 'About us';

	$language['rus']['about_us_text1'] = 'Гостиница в стиле Boutique в центре Старого города. Славится своим роскошным интерьером, романтическим, историческим стилем и отзывчивым персоналом.';
	$language['lv']['about_us_text1'] = 'Boutique stila viesnīca Vecpilsētas centrā. Slavena ar greznu interjeru, romantisku, vēsturisku stilu un sirsnīgu personālu.';
	$language['en']['about_us_text1'] = 'Boutique-style hotel in the center of the Old Town. Famous for its gorgeous interior, romantic and historical style, and kind personnel.';

	$language['rus']['about_us_text2'] = '38 уютных по-разному обустроенных номеров. Все удобства – ванна или душ, ТВ, WIFI, телефон, минибар, сейф, в ванной комнате теплый пол и другие экстры. Завтрак входит в цену.';
	$language['lv']['about_us_text2'] = 'Viesnīcā ir 38 mājīgas, dažādi iekārtotas istabas. Visas ērtības - vanna vai duša, Viasat TV, bezmaksas internets, telefons, minibārs, seifs, vannas istabā siltā grīda un citas ekstras. Viesiem brokastis iekļautas cenā.';
	$language['en']['about_us_text2'] = 'There are 38 cozy rooms of various design. Every convenience – a bath or a shower, TV, WIFI, a phone, a mini-bar, a safe, heated floors in the bathroom and other extras. Breakfast included.';

	$language['rus']['about_us_text3'] = 'Здания гостиницы были построены в XVI и XIX вв. специально для типографии. С тех пор Иоганн Гутенберг – известный патриций из Майнца, который изобрел книгопечатание в 1550 году, – патронирует эти здания, его барельеф украшает фасад здания. В 2001 году во время открытия гостиницы Иоганн Гутенберг вежливо согласился стать покровителем гостиницы.';
	$language['lv']['about_us_text3'] = 'Viesnīcas ēkas XVI un XIX gs. celtas speciāli tipogrāfijai. Kopš tiem laikiem Johannes Gutenbergs – slavenais Maincas patricietis, poligrāfijas izgudrotājs 1550.gadā - ir šo ēku patrons, viņa bareljefs grezno ēku fasādi. 2001.gadā, atklājot viesnīcu, Johannes Gutenbergs laipni piekrita kļūt arī par viesnīcas patronu.';
	$language['en']['about_us_text3'] = 'The buildings of the hotel were built in the XVI and XIX centuries for needs of a printing-house. Since then Johannes Gutenberg – the well-known patrician of Mainz, inventor of the polygraph in 1550 – is the patron of these buildings; his bas-relief bedecks the gorgeous facade of the buildings. In 2001, when the hotel was opened, Johannes Gutenbergs kindly agreed to be also the patron of the hotel.';

	$language['rus']['about_us_text4'] = 'Живя в гостинице "Gutenbergs", Вы действительно находитесь в Риге! Здесь все предметы – картины, гравюры, античные предметы роскоши, древние книги в гостиных и коридорах – рассказывают об истории Риги. В холле на 1-м этаже – красивые копии из известной Библии Гуттенберга, а также гравюры и книги, отпечатанные в древней типографии, в холле на 2-м этаже – пейзажи, на которых изображена Латвия и Рига XVII века, а на 3-м этаже – оригиналы картин латышских художников и рассказ в портретах о латышской интеллигенции.';
	$language['lv']['about_us_text4'] = 'Dzīvojot „Gutenbergā”, jūs pilnīgi noteikti atrodaties Rīgā! Te viss - gleznas, gravīras, antīkas greznumlietas, senas grāmatas viesu istabās un gaiteņos – ir kā stāsts par Rīgas vēsturi. I stāva hallē - skaistas kopijas no slavenās Gutenberga Bībeles un seno laiku spiestuves gravīras, grāmatas, II stāva hallē – ainavas no 17.gs. Latvijas un Rīgas, bet III stāvā – latviešu mākslinieku oriģinālgleznas un stāsts portretos par latviešu inteliģenci.';
	$language['en']['about_us_text4'] = 'Accommodating at the Gutenbergs you are definitely being in Riga! Everything here – the paintings, engravings, antique fancy articles, old books in the guest rooms and the corridors – is like a story about the history of Riga. In the 1st floors hall – beautiful copies of the famous Gutenberg Bible and the ancient times printing engravings, books; in the 2nd floors hall – landscapes from 17th century Latvia and Riga, and on the 3rd floor – original paintings of Latvian painters and a portrait-story about Latvian intelligentsia.';


	$language['rus']['convenience'] = 'О нас';
	$language['lv']['convenience'] = 'Par mums';
	$language['en']['convenience'] = 'About us';

	// for us
	$language['rus']['for_us'] = 'Для Вашего удобства';
	$language['lv']['for_us'] = 'Jūsu ērtībām';
	$language['en']['for_us'] = 'For your convenience';
	// 1--------------------------------------------------> //
	$language['rus']['for_people'] = 'Для деловых людей';
	$language['lv']['for_people'] = 'Lietišķiem cilvēkiem';
	$language['en']['for_people'] = 'For business needs';

	$language['rus']['for_people_text'] = "Проведение конференций (до 80 человек) на 4-м этаже в зале «Johans». <br>
		Копирование или сканирование документов и изображений на мощном копировальном аппарате и сканере. <br>
		Заказ визитных карточек или материалов для конференций в течение 24 часов. <br>
		Заказ автомобиля гостиницы для поездки в аэропорт или на вокзал.";
	$language['lv']['for_people_text'] = 'Konferences (līdz 80 cilvēkiem) 4. stāvā zālē "Johans". <br>
		Pavairot vai ieskanēt dokumentus un attēlus uz jaudīga kopētāja. <br>
		Pasūtīt vizītkartes vai konferenču materiālus 24h laikā. <br>
		Bezmaksas WiFi internets visā viesnīcā. <br> 
		Pasūtīt taksometru ceļam uz lidostu vai staciju. <br>
		Izmantot kurjerpasta pakalpojumus un vēstuļu un atklātņu nosūtīšanu. Par to parūpēsies reģistratūras darbinieki.';
	$language['en']['for_people_text'] = "Conferences (for up to 80 persons) in the Johans hall on the 4th floor <br> Document and picture scanning and copying via powerful scanner and copier <br> Order business cards or conference materials in 24 hours <br> Keep valuables and personal PC in a safe in your hotel's room <br> Rent a car with or without a driver for everyday use or longer journeys <br> Carrier services and postage of letters and cards; reception personnel will take care of it.";
	
	// 2-----------------------------------------------> //
	$language['rus']['for_relax'] = 'Для Вашего отдыха';
	$language['lv']['for_relax'] = 'Jūsu atpūtai';
	$language['en']['for_relax'] = 'For your entertainment';

	$language['rus']['for_relax_text'] = "Заказ театральных и концертных билетов. <br>
		Услуги компетентного гида для экскурсии по историческим местам Риги. <br>
		Отдых на террасе на крыше в солнечный день или под звездным небом, слушая тихую музыку и наблюдая за незабываемыми крышами и башнями Вецриги и противоположным берегом Даугавы с высоты 6-го этажа."; 
	$language['lv']['for_relax_text'] = "Pasūtīt teātru un koncertu biļetes. <br>
		Piedāvāt zinoša gida pakalpojumus ekskursijai pa Rīgas vēsturiskajām vietām. <br> 
		Saulainā dienā vai zem zvaigžņotām debesīm atpūsties viesnīcas jumta terasē un, skanot klusai mūzikai, pavērot neaizmirstamos Vecrīgas jumtus un torņus un Daugavas otru krastu no 6.stāva augstuma.";
	$language['en']['for_relax_text'] = " Book theater and concert tickets. <br> A competent guide will show you the historical sites in Riga. <br> On a sunny day or under starry skies at night, enjoy the hotel's roof terrace and, listening to a quiet music, look at the unforgettable roofs and towers of the Old Riga and see the other bank of Daugava River from the height of 5th floor.";
	
	// 3--------------------------------------------> //
	$language['rus']['for_health'] = 'Для здоровья';
	$language['lv']['for_health'] = 'Veselībai';
	$language['en']['for_health'] = 'For your health';

	$language['rus']['for_health_text'] = "10% скидка в SPA салоне, резиденцие красоты  „Bellezza” . Мы находимся в старом городе на улице 13 января - 21. Дополнительная информация  www.Bellezza.lv  и по тел.  +371 67876555 <br>
		Салон красоты, парикмахерская и солярий «Agua villa», ул. Тиргоню 11, 2-й этаж, в 5 минутах ходьбы от гостиницы. <br>
		Если Вы поздно прибываете в Ригу или выезжаете очень рано, в регистратуре гостиницы «Gutenbergs» Вас каждый раз будет ждать чашка горячего чая или кофе, бутерброд или сердечная улыбка, которая поможет решить все проблемы.";
	$language['lv']['for_health_text'] = '10% atlaide SPA salonā, skaistuma rezidence "Bellezza" ,13. janvāra ielā 21. Vairāk informācijas skat. www.Bellezza.lv vai pa tālruni +371 67876555. <br>
		Izmantot veselības, skaistuma un labsajūtas gūšanai Dienas SPA Aqua Villa , Tirgoņu ielā 11, Vecrīga (5 minūšu gājienā), piedāvā savus pakalpojumus ar 7% atlaidi viesnīcas „Gutenbergs” klientiem. <br>
		Informācija www.aquavillaspa.lv. vai pa tālruni + 371 67814686,+371 29196349.';
	$language['en']['for_health_text'] = '10% discount at the SPA and beauty salon "Bellezza" in Oldriga on 13.janvara street 21. For more information please see www.Bellezza.lv or call +371 67876555+371 67876555 <br> Visit the beauty salon, hair-dresser and solarium Agua Villa in 5 minutes walk from the hotel, on 11 Tirgonu Street, 2nd floor. <br> Should you arrive in Riga very late or depart very early, in the reception of the hotel Gutenbergs you will be greeted with a cup of hot tea or coffee, a sandwich and a warm smile which will help solving any problem.';
	// 4----------------------------------------------->//
	$language['rus']['for_disposal'] = 'Для Вашего удобства';
	$language['lv']['for_disposal'] = 'Jūsu ērtībām';
	$language['en']['for_disposal'] = 'At your disposal';

	$language['rus']['for_disposal_text'] = 'Звонок-будильник администратора. <br>
		Дополнительные кровати или детская кроватка, дополнительные одеяла, подушки, а также подушки, не вызывающие аллергию, игрушки и другие необходимые вещи для детей. <br>
		Табличку «Не беспокоить! / Прошу убрать номер!» Вы найдете на дверной ручке в номер. <br>
		В регистратуре можно приобрести забытые дома мелочи для ухода за зубами, предметы личной гигиены и т.д. <br>
		Стирка белья или химчистка верхней одежды. Мешочек для белья и прейскурант найдете в шкафу.';
	$language['lv']['for_disposal_text'] = 'Pasūtīt modināšanas zvanu. <br>
		Izmantot papildu gultas vai bērnu gultiņu, papildu segas, spilvenus, pretalerģiskos spilvenus, rotaļlietas un citas bērniem nepieciešamas lietas. <br>
		Zīmi "Lūdzu netraucēt/uzkopt istabu" Jūs atradīsiet uz istabas roktura. <br>
		Reģistratūrā iegādāties mājās aizmirstus sīkumus zobu kopšanas piederumus, higiēnas preces, utt.';
	$language['en']['for_disposal_text'] = "Order wake-up call. <br>
		Extra beds or a child's bed, extra blankets, pillows, anti-allergic pillows, toys and other items that children need. <br>
		You will find the Don’t Disturb/Tidy Up sign on you door handle. <br> 
		Buy tooth-care and hygienic products and other small items forgotten at home at the reception. <br>
		If you wish you can use laundry service for you clothes and dry-cleaning for your outdoor apparel. You will find the laundry bag and the price list in the closet.";



/// ROOMS

$language['rus']['stand_room'] = 'Стандартный номер <br> одноместный/двухместный';
$language['lv']['stand_room'] = 'Standarta istabas';
$language['en']['stand_room'] = 'Standard room <br> single/double';

$language['rus']['stand_room_text'] = 'Кровать размером «king size» (220 x 180), 2 ночных столика, торшер, столик для завтрака, 2 мягких кресла для отдыха, письменный стол со стулом и лампой, ТВ, телефон, WIFI, минибар, сейф. В ванной комнате – душ или ванна, фен, одна электрическая розетка, мыло, гель для душа, шапочки для волос, 3 полотенца. Сервис по уборке номера, стирка и глажка белья, транспортные услуги и др.';
$language['lv']['stand_room_text'] = 'Ar "king size" (220 x 180) gultu, 2 naktsgaldiņiem, stāvlampu, brokastu galdiņu, 2 mīkstiem atpūtas krēsliem, rakstāmgaldu ar krēslu un lampu, TV, telefonu, WIFI, minibāru, seifu. Vannas istabā - duša vai vanna, fēns, viena elektrības kontaktligzda, ziepes, dušas želejas, matu cepurītes, 3 dvieļi. Room service, veļas mazgāšana, gludināšana, auto pakalpojumi u.c.';
$language['en']['stand_room_text'] = "With a king size (220 x 180) bed, 2 bedside tables, a stand-lamp, a breakfast-table, 2 soft armchairs, a writing cabinet with a lamp, TV , a phone, WIFI , a mini-bar.  In the bathroom – a shower or a bath at your option, a hair dryer, one power outlet, soap, shower gels, shower caps, 3 towels. Room service, laundry service, ironing, car services, etc.";


$language['rus']['jun_room'] = 'Апартаменты <br> полулюкс';
$language['lv']['jun_room'] = 'Pusluksa istabas';
$language['en']['jun_room'] = 'Junior Suite <br> apartments';

$language['rus']['jun_room_text'] = 'Одноместные или двухместные апартаменты с удобной прихожей. Одна или две кровати размером «king size», 2 ночных столика, люстра, столик для завтрака, 2 мягких кресла для отдыха, письменный стол с лампой, ТВ, телефон, WIFI, минибар, сейф , в ванной комнате – подогреваемый кафельный пол. Остальные удобства – те же самые, которые упомянуты выше.';
$language['lv']['jun_room_text'] = 'Vienvietīgas vai divvietīgas istabas ar ērtupriekštelpu. Ar vienu vai divām "king size" gultām, 2 naktsgaldiņiem, griestu lampu, brokastu galdiņu, 2 mīkstiem atpūtas krēsliem, rakstāmgaldu ar lampu, TV, telefonu, WIFI, minibāru, seifu, vannas istabā - apsildāmā flīžu grīda. Pārējās ērtības - visas tās pašas, kas minētas iepriekš.';
$language['en']['jun_room_text'] = "Single or double apartments with a comfortable anteroom. With one or two king size beds, 2 bedside tables, a ceiling lamp, a breakfast-table, 2 soft armchairs, a writing cabinet with a lamp, TV, a phone, WiFi, a mini-bar, in the bathroom – heated tile floor. More conveniences – the same as before.";

$language['rus']['apm_lux'] = 'Апартаменты люкс';
$language['lv']['apm_lux'] = 'Luksa apartaments';
$language['en']['apm_lux'] = 'De Luxe apartment';

$language['rus']['apm_lux_text'] = 'Одноместные или двухместные апартаменты люкс с удобной прихожей и туалетом для гостей. Позади прихожей – жилая комната с 4 окнами, одно из которых открывается до пола. В жилой комнате – удобный письменный стол, комод, минибар. Рядом со спальней – второй просторный туалет с ванной и подогреваемым полом. В жилой комнате можно принять гостей в составе 4-6 человек, или она может служить спальней для ребенка. В спальне – ТВ, большая кровать размером «king size». Остальные удобства – те же самые, которые упомянуты выше.';
$language['lv']['apm_lux_text'] = 'Vienvietīgi vai divvietīgi luksa apartamenti ar ērtu priekštelpu un ar tualeti viesiem. Aiz priekštelpas - istaba ar 4 logiem, no kuriem viens atverams līdz grīdai. Dzīvojamā istabā ērts rakstāmgalds, kumode un minibārs. Aiz guļamistabas - otra plaša tualete ar vannu ar apsildāmu grīdu. Dzīvojamā istaba var uzņemt nelielas 6-10 cilvēku viesības vai kalpot kā bērnu guļamtelpa. Guļamistabā - TV, lielā "king size" gulta. Pārējās ērtības - visas, kas minētas iepriekš.';
$language['en']['apm_lux_text'] = "Single or double De Luxe apartment with a comfortable anteroom with a guest restroom. Further on from the anteroom – living room with 4 windows, one opens to the very floor. The living room has a comfortable writing cabinet, a chest of drawers, a mini-bar. Behind the bedroom – the second spacious restroom with a bath and heated floor. The living room can host a small party of 6-10 people or serve as a children's bedroom. In the bedroom – a TV, the large king size bed. More conveniences – the same as before.";


$language['rus']['book'] = 'Записаться';
$language['lv']['book'] = 'Pieteikties';
$language['en']['book'] = 'Book';

// CONTACTS

$language['rus']['konf_text'] = 'На четвертом этаже гостиницы расположен зал для семинаров/банкетов, в котором размещена коллекция картин выдающихся латышских и зарубежных мастеров, придающая уют и роскошь. Помещения предназначены для проведения конференций (до 50 человек), юбилеев и свадеб (до 25 человек), приемов, презентаций и дегустаций (до 35 человек).';
$language['en']['konf_text'] = 'The 4th floor of the hotel houses a seminar/banquet hall with a collection of artwork by excellent Latvian painters and other artists, which make for a cosy and luxurious interior. Conferences can accommodate up to 50 guests, birthdays and weddings, up to 25 guests, and receptions, presentations and degustations, up to 35 guests.';
$language['lv']['konf_text'] = 'Viesnīcas 4.stāvā atrodas semināru/banketu zāle “Johans”, kurā atrodas izcilu latviešu meistaru un citu mākslinieku gleznu kolekcija, kas telpu padara mājīgu un greznu. Konferenču rīkošanai telpas paredzētas līdz 50 personām, jubilejām un kāzām līdz 25 personām, pieņemšanām, prezentācijām, degustācijām līdz 35 personām.';

$language['rus']['area'] = 'Площадь:';
$language['rus']['guests'] = 'Кол-во гостей:';
$language['rus']['price'] = 'Цена:';
$language['rus']['rezervation'] = 'Резервируй:';

$language['lv']['area'] = 'Platība:';
$language['lv']['guests'] = 'Viesu skaits:';
$language['lv']['price'] = 'Cena:';
$language['lv']['rezervation'] = 'Rezervē:';

$language['en']['area'] = 'Area:';
$language['en']['guests'] = 'Number of Guests: ';
$language['en']['price'] = 'Price:';
$language['en']['rezervation'] = 'Reservation:';

$language['rus']['info_area'] = '60м2';
$language['en']['info_area'] = '60m2';
$language['lv']['info_area'] = '60m2';

$language['rus']['info_price'] = '70 EUR (1ч) | 250 EUR (08:00-17:00)';
$language['en']['info_price'] = '70 EUR (1h) | 250 EUR (08:00-17:00)';
$language['lv']['info_price'] = '70 EUR (1h) | 250 EUR (08:00-17:00)';

// EMAILL

$language['rus']['name_t_sh'] = 'Имя слишком короткое. ';
$language['rus']['only_alph'] = 'Tолько алфавит !';
$language['rus']['enter_email'] = 'Пожалуйста, введите адрес электронной почты!';
$language['rus']['you_ques'] = 'Пожалуйста, введите свой вопрос!';
$language['rus']['question'] = 'Вопрос:';
$language['rus']['name'] = 'Имя:';
$language['rus']['email'] = 'Эл. адрес:';
$language['rus']['checkyo'] = 'Проверь почту! ';

$language['lv']['name_t_sh'] = 'Jūsu ievadītais vārds ir par īsu.';
$language['lv']['only_alph'] = 'Tikai alfabēta burti !';
$language['lv']['enter_email'] = 'Lūdzu ievadiet savu e-pastu!';
$language['lv']['you_ques'] = 'Lūdzu ievadiet savu jautājumu!';
$language['lv']['question'] = 'Jautājums:';
$language['lv']['name'] = 'Vārds:';
$language['lv']['email'] = 'E-pasts:';
$language['lv']['checkyo'] = 'Pārbaudiet e-pastu!';

$language['en']['name_t_sh'] = 'Name too short.';
$language['en']['only_alph'] = 'Only alphabet!: ';
$language['en']['enter_email'] = 'Please enter email!';
$language['en']['you_ques'] = 'Please enter your question!';
$language['en']['question'] = 'Question:';
$language['en']['name'] = 'Name:';
$language['en']['email'] = 'Email:';
$language['en']['checkyo'] = 'Check your mail!';

$language['lv']['send'] = 'Nosūtīt';
$language['rus']['send'] = 'Oтправить';
$language['en']['send'] = 'Send';
//CONFERENCE HALL

?>