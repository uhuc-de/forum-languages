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

$l['postsExpireName'] = 'Posts Expire / Closing Threads';
$l['postsExpireDesc'] = 'This plugin provides posts expire time and auto-close threads function. <br /><br />
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="3BTVZBUG6TMFQ">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/pl_PL/i/scr/pixel.gif" width="1" height="1">
</form>';

$l['postsExpireSettingGroupDesc'] = 'Settings for plugin "Posts Expire / Closing Threads".';

$l['postsExpireEnableExpire'] = 'Status of posts expire option';
$l['postsExpireEnableDescExpire'] = 'Specifies whether the posts expire option is active.';

$l['postsExpireOptionsExpire'] = 'Time options for posts expire';
$l['postsExpireOptionsDescExpire'] = 'All available posts expire time options.
<br />Syntax: "AMOUNTsign" | Available signs:<br />
s - second<br />
m - minute<br />
h - hour<br />
d - day<br />
w - week<br />
Ex. 45m - 45 minutes, 4d - four days dni etc.<br />';

$l['postsExpireDisallowExpire'] = 'Disallowed user groups (posts expire)';
$l['postsExpireDisallowDescExpire'] = 'ID of user groups, which can not be set posts expire time, comma separated.';

$l['postsExpireTimeFormatExpire'] = 'Date format for expire information';
$l['postsExpireTimeFormatDescExpire'] = 'The date format notation to indicate when a post will expire, consistent with the date() PHP function.';

$l['postsExpireEnableClose'] = 'Status of auto-close threads option';
$l['postsExpireEnableDescClose'] = 'Specifies whether the auto-close threads option is active.';

$l['postsExpireOptionsClose'] = 'Time options for auto-close threads';
$l['postsExpireOptionsDescClose'] = 'All available auto-close threads time options.
<br />Syntax: "AMOUNTsign" | Available signs:<br />
s - second<br />
m - minute<br />
h - hour<br />
d - day<br />
w - week<br />
Ex. 45m - 45 minutes, 4d - four days dni etc.<br />';

$l['postsExpireDisallowClose'] = 'Disallowed user groups (auto-close threads)';
$l['postsExpireDisallowDescClose'] = 'ID of user groups, which can not be set auto-close threads time, comma separated.';

$l['postsExpireTimeFormatClose'] = 'Date format for expire information';
$l['postsExpireTimeFormatDescClose'] = 'The date format notation to indicate when a topic will be closed, consistent with the date() PHP function.';

$l['postsExpireTask'] = 'Posts Expire / Closing threads';
$l['postsExpireTaskDesc'] = 'Task for plugin "Posts Expire / Closing threads".';
?>
