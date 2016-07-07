<?php
// Основной темплейт для страницы
$tplPage = <<<HTML
<html>
<head>
 <title>{title}</title>
</head>
<body>
 {menu #tplMenu}
 {content #tplContent}
 {footer #tplFooter}
</body>
</html>
HTML;
// Темплейт для меню сайта
$tplMenu = <<<HTML
<table width="100%" border="0" cellspacing="0" cellpadding="1">
 <tr>
 {menuItems !createMenu}
 </tr>
</table>
HTML;
// Темплейт для пункта меню для меню сайта
$tplMenuItem = <<<HTML
 <td><a href="{url}">{name}</a></td>
HTML;
// Темплейт для основного content'а страницы
$tplContent = <<<HTML
<p>{content !createPageContent}</p>
HTML;
// Темплейт footer'а сайта
$tplFooter = <<<HTML
<p>{footer С&nbsp;уважением,&nbsp;твоя(твой)&nbsp;я.}</p>
HTML;
?>