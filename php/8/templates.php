<?php
// �������� �������� ��� ��������
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
// �������� ��� ���� �����
$tplMenu = <<<HTML
<table width="100%" border="0" cellspacing="0" cellpadding="1">
 <tr>
 {menuItems !createMenu}
 </tr>
</table>
HTML;
// �������� ��� ������ ���� ��� ���� �����
$tplMenuItem = <<<HTML
 <td><a href="{url}">{name}</a></td>
HTML;
// �������� ��� ��������� content'� ��������
$tplContent = <<<HTML
<p>{content !createPageContent}</p>
HTML;
// �������� footer'� �����
$tplFooter = <<<HTML
<p>{footer �&nbsp;���������,&nbsp;����(����)&nbsp;�.}</p>
HTML;
?>