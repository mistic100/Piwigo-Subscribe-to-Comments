<?php
if (!defined('SUBSCRIBE_TO_PATH')) die('Hacking attempt!');

// +-----------------------------------------------------------------------+
//                         Save configuration                              |
// +-----------------------------------------------------------------------+
if (isset($_POST['config_submit'])) 
{
  $conf['Subscribe_to_Comments'] = array(
    'notify_admin_on_subscribe' => isset($_POST['notify_admin_on_subscribe']),
    'allow_global_subscriptions' => isset($_POST['allow_global_subscriptions']),
    );
  
  conf_update_param('Subscribe_to_Comments', serialize($conf['Subscribe_to_Comments']));
  array_push($page['infos'], l10n('Information data registered in database'));
}  


// +-----------------------------------------------------------------------+
//                               Template                                  |
// +-----------------------------------------------------------------------+  
$template->assign($conf['Subscribe_to_Comments']);

$template->set_filename('stc_admin', realpath(SUBSCRIBE_TO_PATH . 'admin/template/config.tpl'));

?>