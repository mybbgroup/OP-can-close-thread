<?php

$l['opcct_name'] = 'OP Can Close Thread';
$l['opcct_desc'] = 'Allows the authors of threads (aka original posters aka OPs) to close and reopen their own threads to new replies in forums stipulated in the plugin\'s ACP settings. Thread authors do not need to be a moderator to close their own threads in those forums.';

$l['opcct_settings_title'] = 'OP Can Close Thread';
$l['opcct_settings_desc' ] = 'Settings for the OP Can Close Thread plugin.';

$l['opcct_setting_opclosable_forums_title'] = 'Original poster-closable forums';
$l['opcct_setting_opclosable_forums_desc' ] = 'Select the forums the threads of which the original poster (OP) aka thread author is permitted to close/reopen (without needing to be a moderator).';

$l['opcct_all_patched'] = 'All necessary patches have automatically been applied to the following file(s) (where they actually exist): {1}. To auto-revert them, uninstall this plugin.';
$l['opcct_unwritable' ] = 'The following file(s) is/are not writable by your web server, and patches could not be auto-applied to it/them: {1}. Please grant your web server write permissions on that/those file(s). ';
$l['opcct_fpcfalse'   ] = 'Whilst the following files(s) seem(s) to be writable by your web server, a return of false was obtained when trying to save it/them: {1}. Please ensure that your web server can write to that/those file(s). ';
$l['opcct_unpatchable'] = 'Whilst the following file(s) is/are writable by your web server, not all of the patch(es) auto-applied to them succeeded: {1}. Please check that all of the "from" fields of the patch(es) for that/those file(s) has a match in the file(s), and adjust as necessary. ';