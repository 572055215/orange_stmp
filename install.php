<?php

!defined('DEBUG') AND exit('Forbidden');

$modelfilepath = APP_PATH . 'xiunophp/xn_send_mail.func.php';

    // 替换文件
    $new_modelfilepath = APP_PATH . 'plugin/orange_bugfix_stmp/model/xn_send_mail.func.php';

    $r = xn_copy($new_modelfilepath, $modelfilepath);

    $r == FALSE AND message(-1, '替换文件失败');