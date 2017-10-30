<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
//use yii\bootstrap\ActiveForm;
//use yii\captcha\Captcha;
//use phpnt\yandexMap\YandexMaps;
//$agent=$_SERVER['HTTP_USER_AGENT'];
//dd($agent);
//if(agent($_SERVER['HTTP_USER_AGENT'])) echo '555';


$title = 'Политика конфиденциальности';
$this->title = title($title);

/*$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Пользовательское соглашение и политика в отношении обработки персональных данных центра иностранных языков "Росакадемия", г. Самара. Мы предлагаем возможность дистанционного обучения теории по всем направлениям школы: Авто и мото техника, квадроцикл, снегоход, трактор, погрузчик, гидроцикл, катер и т.д. Мы - лучшая автошкола в городе Самаре. Звоните сейчас!',
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'политика конфиденциальности, пользовательское соглашение, политика, в отношении, обработки персональных данных, автошкола, мотошкола, права, Ros.Academy, школа, учебный центр'
    ]);
*/

$this->params['breadcrumbs'][] = $title;
?>


<!-- 
<div class="" id="full-widthid">
<div class="container-fluid mainblock text-center contacts">
  <div class="text-center contacts">  <div class="row">
  <div class="col-md-3 col-sm-3 col-xs-6  col-big-6  box1  cl-effect-12">
  <img class="hvr-grow1" src="../images/new_car.png" width="180px">
  <p class="blocktitlec anim_one  hvr-bob1 ">Автомотошкола</p>
  </div>
  <div class="col-md-3 col-sm-3 col-xs-6  col-big-6  box2 cl-effect-12">
  <img class="hvr-grow1" src="../images/two.png" width="150px" style="margin-top: 0;">
  <p class="blocktitlec anim_two  hvr-bob1">Самоходная техника</p>
  </div>
  <div class="col-md-3 col-sm-3 col-xs-6  col-big-6 box3  cl-effect-12">
  <img class="hvr-grow1" src="../images/boat_t2.png" width="160px">
  <p class="blocktitlec anim_three hvr-bob1">Судовождение</p>
  </div>
  <div class="col-md-3 col-sm-3 col-xs-6  col-big-6 box4  cl-effect-12">
  <img class="hvr-grow1" src="../images/new_car.png" width="180px" style="margin-top: 0;">
  <p class="blocktitlec anim_four hvr-bob1">Защитное вождение</p>
  </div>
  </div> 
  </div></div></div>
 -->

<!-- <?= Html::encode($this->title) ?> -->
<div class="site-distance  siteblock">
   
<h1 class="text-center"><?= Html::encode($title) ?></h1>
<h2 style="font-size:200%;margin-top:30px">Пользовательское соглашение и политика в отношении обработки
        персональных данных
    
</h2>
<p>
    В настоящем соглашении нижеприведенные термины имеют следующие определения:
</p>
<p>
    <strong>Исполнитель, Администрация сайта, Владелец сайта </strong>
    – <b>АНО ЦДПО «АКАДЕМИЯ»</b> (ИНН:6317085438, ОГРН:1106300005844), осуществляющее
    руководство интернет-сайтом <a href="http://Ros.Academy" style="color:darkgreen;text-decoration:underline">Ros.Academy</a> на условиях настоящего Соглашения.
</p><p>
        <strong>Пользователь</strong>
    – любое лицо, использующее Сайт.
</p>
<p>
    <strong>Акцепт Соглашения</strong>
    – полное и безоговорочное принятие всех условий Соглашения путем
    осуществления действий по Регистрации на Сайте.
</p>
<p>
    <strong>Персональные данные</strong>
    - персональные данные Пользователя, которые Пользователь предоставляет о
    себе самостоятельно при Регистрации или в процессе использования
    функционала Сайта.
</p>
<p>
    <strong>Данные</strong>
    – иные данные, не относящиеся к персональным данным.
</p>
<p>
    <strong>Регистрация</strong>
    – заполнение пользователем форм, запрашивающих данные пользователя, включая
    формы обратной связи, заявки, учетные записи пользователя.
</p>
<p>
    <strong>Сайт</strong>
    – интернет-сайт, размещенный в сети Интернет по адресу: <a href="http://Ros.Academy" style="color:darkgreen;text-decoration:underline">Ros.Academy</a>
</p>
<p style="font:weight:bold;font-size:200%">
    1.Общие положения
</p>
<p>
    1.1. Настоящее Соглашение определяет условия пользования Пользователями
    материалов и сервисов сайта <a href="http://Ros.Academy" style="color:darkgreen;text-decoration:underline">Ros.Academy</a> (далее «Сайт»), а также регулирует
    порядок обработки и использования персональных и иных данных Пользователей
    Исполнителем.
</p>
<p>
    1.2. Использование материалов и сервисов Сайта и порядок обработки
    персональных данных регулируется нормами действующего законодательства
    Российской Федерации.
</p>
<p>
    1.3. Настоящее Соглашение является публичной офертой. Получая доступ к
    материалам Сайта, Пользователь считается присоединившимся к настоящему
    Соглашению.
</p>
<p>
    1.4. Целью настоящего Соглашения является обеспечение надлежащей защиты
    информации о пользователях, в том числе их персональных данных от
    несанкционированного доступа и разглашения.
</p>
<p>
    1.5. Отношения, связанные со сбором, хранением, распространением и защитой
    информации о пользователях Сайта, регулируются настоящим Соглашением, иными
    официальными документами Исполнителя и действующим законодательством
    Российской Федерации.
</p>
<p>
    1.6. Использование Пользователем Сайта означает безоговорочное согласие
    Пользователя со всеми условиями настоящего Соглашения (Акцепт Соглашения),
    и дает согласие на автоматизированную, а также без использования средств
    автоматизации обработку своих персональных данных, а именно совершение
    действий, предусмотренных пунктом 3 статьи 3 Федерального закона от
    27.07.2006 N 152-ФЗ. В случае несогласия с этими условиями Пользователь не
    осуществляет пользование сайтом и информацией, предоставляемой Сайтом.
</p>
<p>
    1.7. Действующая редакция Соглашения, являющегося публичным документом,
    доступна любому пользователю сети Интернет. Исполнитель вправе вносить
    изменения в настоящее Соглашение. При внесении изменений Исполнитель
    уведомляет об этом пользователей путем размещения новой редакции Соглашения
на Сайте по постоянному адресу    <a href="http://Ros.Academy/privacy" style="color:darkgreen;text-decoration:underline">http://Ros.Academy/политика-конфиденциальности</a>
</p>
<p>
    1.8. При несогласии Пользователя с внесенными изменениями использование
    Сайта и его сервисов должно быть немедленно прекращено.
</p>
<p style="font:weight:bold;font-size:200%">
    2. Обязательства Пользователя
</p>
<p>
    2.1. Пользователь соглашается не предпринимать действий, которые могут
    рассматриваться как нарушающие российское законодательство или нормы
    международного права, в том числе в сфере интеллектуальной собственности,
    авторских и/или смежных правах, а также любых действий, которые приводят
    или могут привести к нарушению нормальной работы Сайта и сервисов Сайта.
</p>
<p>
    2.2. Использование материалов Сайта без согласия правообладателя не
    допускается (статья 1270 Г.К РФ). Для правомерного использования материалов
    Сайта необходимо заключение лицензионных договоров (получение лицензий) от
    Правообладателей.
</p>
<p>
    2.3. При цитировании материалов Сайта или распространении фото-материалов,
    ссылка на Сайт обязательна (подпункт 1 пункта 1 статьи 1274 Г.К РФ).
</p>
<p>
    2.4. Комментарии и иные записи Пользователя на Сайте не должны вступать в
    противоречие с требованиями законодательства Российской Федерации и
    общепринятых норм морали и нравственности.
    <br/>
   </p>
<p>
    2.5 Пользователь информирован о том, что правообладателем объектов
    авторского права, с помощью которых функционирует сайт (графического
    дизайна сайта, программного кода, фото- и текстовых материалов и пр.),
    является Администрация Сайта
</p>
<p>
    2.6. Пользователь предупрежден о том, что Администрация Сайта не несет
    ответственности за посещение и использование им внешних ресурсов, ссылки на
    которые могут содержаться на сайте.
</p>
<p>
    2.7. Пользователь принимает положение о том, что все материалы и сервисы
    Сайта или любая их часть могут сопровождаться сторонней рекламой.
    Пользователь согласен с тем, что Администрация Сайта не несет какой-либо
    ответственности и не имеет каких-либо обязательств в связи с такой
    рекламой.
</p>
<p style="font:weight:bold;font-size:200%">
    3. Персональные данные
</p>
<p>
    3.1. Администрация сайта обязуется использовать Персональные данные в
    соответствии с Федеральным Законом «О персональных данных» № 152-ФЗ от 27
    июля 2006 г. в редакции, действующей на момент обработки таких персональных
    данных и внутренними документами владельца сайта.
</p>
<p>
    3.1. При использовании Сайта Пользователем могут быть запрошены для
    предоставления Исполнителю следующие персональные данные:
</p>
<p>
    3.1.1. Достоверная персональная информация, которую Пользователь
    предоставляет о себе добровольно и самостоятельно в процессе использования
    сервисов Сайта, включая, фамилию, имя, отчество, номер телефона (домашний
    или мобильный), адрес электронной почты. Персональные данные третьих лиц
    Пользователь обязуется предоставлять только с их согласия.
</p>
<p>
    3.1.2. Данные, которые автоматически передаются сервисам Сайта в процессе
    их использования с помощью установленного на устройстве Пользователя
    программного обеспечения, в том числе IP-адрес, информация из Cookies,
    информация о браузере Пользователя (или иной программе, с помощью которой
    осуществляется доступ к сервисам).
</p>
<p>
    3.2. Исполнитель не проверяет достоверность персональных данных,
    предоставляемых Пользователем. При этом Исполнитель исходит из того, что
    Пользователь предоставляет достоверную и достаточную персональную
    информацию по вопросам, предлагаемым в форме Регистрации.
</p>
<p>
    3.3. Исполнитель осуществляет обработку персональных данных, которые
    необходимы для предоставления и оказания услуг Пользователю.
</p>
<p>
    3.4. Персональные данные Пользователя используются Исполнителем в следующих
    целях:
</p>
<p>
    3.4.1. Идентификация Пользователя;
</p>
<p>
    3.4.2. Предоставление Пользователю персонализированных сервисов и услуг
    Сайта;
</p>
<p>
    3.4.3. Предоставление Пользователю информации об Исполнителе, об услугах и
    акциях Исполнителя, его деловых партнеров и аффилированных лиц. В
    частности, использование таких данных Пользователя для проведения рекламных
    рассылок и кампаний в любой, не запрещенной действующим законодательством
    форме.
</p>
<p>
    3.4.4. Поддерживания связи с Пользователем в случае необходимости, в том
    числе направление уведомлений, запросов и информации, связанных с
    использованием сервисов, оказанием услуг, а также обработка запросов и
    заявок от Пользователя;
</p>
<p>
    3.5. Исполнитель имеет право использовать переданную Пользователем
    информацию и в иных целях, не указанных в п. 3.4 настоящего Соглашения,
    исходя из потребностей ведения своей финансово-хозяйственной деятельности и
    в рамках действующего Законодательства.
</p>
<p>
    3.6. В ходе обработки персональных данных могут быть совершены следующие
    действия: сбор, запись, систематизация, накопление, хранение, уточнение
    (обновление, изменение), извлечение, использование, блокирование, удаление,
    уничтожение.
</p>
<p>
    3.7. Данное согласие на обработку персональных данных действует бессрочно,
    но может быть отозвано субъектом персональных данных на основании личного
    письменного заявления, направленного на юридический адрес Исполнителя
    заказным письмом с уведомлением о вручении или вручено нарочно.
</p>
<p>
    3.8. Принимая условия настоящего соглашения, Пользователь соглашается с
    получением рекламной рассылки в формате sms-сообщений, звонков, e-mail
    рассылки и иными путями, не запрещенными действующим законодательством.
</p>
<p>
    3.9. Обработка персональных данных осуществляется Исполнителем путем
    ведения баз данных, автоматизированным, механическим, ручным способами.
</p>
<p>
    3.10. Сайт использует файлы Cookies и другие технологии, чтобы отслеживать
    использование сервисов Сайта. Эти данные необходимы для оптимизации
    технической работы Сайта и повышения качества предоставления услуг. На
    Сайте автоматически записываются сведения (включая URL, IP-адрес, тип
    браузера, язык, дату и время запроса) о каждом посетителе Сайта. При
    использовании данного сайта Пользователь подтверждает свое согласие на
    использование компанией Cookie-файлов. Пользователь вправе отказаться от
    предоставления персональных данных при посещении Сайта или отключить файлы
    Cookies, но в этом случае не все функции и сервисы в составе Сайта могут
    работать правильно.
</p>
<p>
    3.11. В отношении персональных данных Пользователя сохраняется их
    конфиденциальность, кроме случаев добровольного предоставления
    Пользователем информации о себе для общего доступа неограниченному кругу
    лиц.
</p>
<p>
    3.12. Не является конфиденциальной информация, публично раскрытая в ходе
    исполнения настоящего Соглашения, а также информация, которая может быть
    получена сторонами или третьими лицами из источников, к которым имеется
    свободный доступ любым лицам.
</p>
<p>
    3.13. Личные данные пользователей могут быть переданы лицам, не связанным с
    настоящим сайтом, если это необходимо для соблюдения закона,
    нормативно-правового акта, исполнения решения суда; для выявления или
    воспрепятствования мошенничеству; для устранения технических неисправностей
    в работе сайта; для предоставления информации на основании запроса
    уполномоченных государственных органов.
</p>
<p>
    3.14. Исполнитель принимает все необходимые меры для защиты
    конфиденциальности персональных данных Пользователя от несанкционированного
    доступа, изменения, раскрытия или уничтожения, в том числе: обеспечивает
    постоянную внутреннюю проверку процессов сбора, хранения и обработки данных
    и обеспечения безопасности; обеспечивает физическую безопасность данных,
    предотвращая неправомерный доступ к техническим системам, обеспечивающим
    работу Сайта, в которых Исполнитель хранит персональные данные;
    осуществляет регулярное обновление служб и систем управления сайтом и его
    содержимым, предоставляет доступ к персональным данным только тем
    сотрудникам Исполнителя или уполномоченным лицам, которым эта информация
    необходима для выполнения обязанностей, непосредственно связанных с
    оказанием услуг Пользователю, а также эксплуатации, разработки и улучшения
    Сайта.
</p>
<p>
    3.15. Пользователь вправе:
</p>
<p>
    1. требовать от Исполнителя уточнения своих персональных данных, их
    блокирования или уничтожения.
</p>
<p>
    2. на основании запроса получать от Исполнителя информацию, касающуюся
    обработки его персональных данных.
</p>
<p style="font:weight:bold;font-size:200%">
    4. Обращения пользователей
</p>
<p>
    4.1. Пользователь вправе направлять Исполнителю свои запросы, в том числе
    запросы относительно использования их персональных данных в письменной
    форме по адресу: <strong>443096, г. Самара, ул. Осипенко 11, оф. 404. </strong> или в форме электронного документа,
    подписанного квалифицированной электронной подписью в соответствии с
законодательством Российской Федерации, по адресу электронной почты:    <a href="mailto:samarapb@ya.ru" style="color:darkgreen;text-decoration:underline">samarapb@ya.ru</a>
</p>
<p>
    4.2. Исполнитель обязуется рассмотреть и направить ответ на поступивший
    запрос Пользователя в течение 30 календарных дней с момента поступления
    обращения.
</p>
<p>
    4.3. Вся корреспонденция, полученная Исполнителем от Пользователей
    (обращения в письменной или электронной форме), относится к информации
    ограниченного доступа и не разглашается без письменного согласия
    Пользователя. Персональные данные и иная информация о Пользователе,
    направившем запрос, не могут быть без специального согласия Пользователя
    использованы иначе, как для ответа по теме полученного запроса или в
    случаях, прямо предусмотренных законодательством.
</p>
<p style="font:weight:bold;font-size:200%">
    5. Прочие условия
</p>
<p>
    5.1. Все возможные споры, вытекающие из настоящего Соглашения или связанные
    с ним, подлежат разрешению в соответствии с действующим законодательством
    Российской Федерации.
</p>
<p>
    5.2. Признание судом какого-либо положения Соглашения недействительным или
    не подлежащим принудительному исполнению не влечет недействительности иных
    положений Соглашения.
</p>
<p>
    5.3. Бездействие со стороны Администрации Сайта в случае нарушения кем-либо
    из Пользователей положений Соглашения не лишает Администрацию Сайта права
    предпринять позднее соответствующие действия в защиту своих интересов и
    защиту авторских прав на охраняемые в соответствии с законодательством
    материалы Сайта.
    <br/>
    5.4. Пользователь подтверждает, что ознакомлен со всеми пунктами настоящего
    Соглашения и безусловно принимает их.
</p>
<br/>


</div>

