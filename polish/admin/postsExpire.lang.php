<?php
/**
 * Posts Expire 1.3
 * Copyright 2011 Lukasz Tkacz, All Rights Reserved
 *
 * Author:  Lukasz "LukasAMD" Tkacz
 * Website: http://lukasztkacz.com
 * License: http://creativecommons.org/licenses/by-nc-sa/3.0/
 * Date:    26.11.2011
 */

$l['postsExpireName'] = 'Wygasanie postów / zamykanie tematów';
$l['postsExpireDesc'] = 'Ten Plugin pozwala na ustawienie czasu, po którym posty wygasają, a tematy są zamykane.<br /><br />
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="D7UXF2LJJK7AA">
<input type="image" src="https://www.paypalobjects.com/pl_PL/PL/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal — Płać wygodnie i bezpiecznie">
<img alt="" border="0" src="https://www.paypalobjects.com/pl_PL/i/scr/pixel.gif" width="1" height="1">
</form>';

$l['postsExpireSettingGroupDesc'] = 'Ustawienia pluginu, "Wygasanie postów / zamykanie tematów".';

$l['postsExpireEnableExpire'] = 'Status opcji wygasania postów';
$l['postsExpireEnableDescExpire'] = 'Określa, czy opcja wygasania postów ma być aktywna.';

$l['postsExpireOptionsExpire'] = 'Dostępne opcje czasowe wygasania';
$l['postsExpireOptionsDescExpire'] = 'Lista wszystkich dostępnych opcji wygasania.
<br />Składnia: "ILOSCoznaczenie" | Dostępne oznaczenia:<br />
s - sekunda<br />
m - minuta<br />
h - godzina<br />
d - dzień<br />
w - tydzień<br />
Np. 45m - 45 minut, 4d - cztery dni itd.<br />';

$l['postsExpireDisallowExpire'] = 'Wykluczone grupy użytkowników (wygasanie)';
$l['postsExpireDisallowDescExpire'] = 'ID grup użytkowników, które nie będą mogły ustawiać czasu wygaśnięcia postów, oddzielone przecinkami.';

$l['postsExpireTimeFormatExpire'] = 'Format daty informacji o wygasaniu';
$l['postsExpireTimeFormatDescExpire'] = 'Format daty zapisu informującego kiedy wygasa post, zgodny z date().';

$l['postsExpireEnableClose'] = 'Status opcji zamykania tematów';
$l['postsExpireEnableDescClose'] = 'Określa, czy opcja zamykania tematów ma być aktywna.';

$l['postsExpireOptionsClose'] = 'Dostępne opcje czasowe zamykania';
$l['postsExpireOptionsDescClose'] = 'Lista wszystkich dostępnych opcji zamykania.
<br />Składnia: "ILOSCoznaczenie" | Dostępne oznaczenia:<br />
s - sekunda<br />
m - minuta<br />
h - godzina<br />
d - dzień<br />
w - tydzień<br />
Np. 45m - 45 minut, 4d - cztery dni itd.<br />';

$l['postsExpireDisallowClose'] = 'Wykluczone grupy użytkowników (zamykanie)';
$l['postsExpireDisallowDescClose'] = 'ID grup użytkowników, które nie będą mogły ustawić czasu zamknięcia wątków, oddzielone przecinkami.';

$l['postsExpireTimeFormatClose'] = 'Format daty informacji o zamknięciu';
$l['postsExpireTimeFormatDescClose'] = 'Format daty zapisu informującego kiedy temat zostanie zamknięty, zgodny z date().';

$l['postsExpireTask'] = 'Wygasanie i zamykanie postów';
$l['postsExpireTaskDesc'] = 'Usuwanie postów i zamykanie tematów, dla których minął czas wygaśnięcia.';
?>
