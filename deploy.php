<?php
/**
 * PhpStorm.
 * User: Jay
 * Date: 2021/6/21
 */
echo '<pre>';

echo shell_exec('sudo -u zlc bash ./deploy.sh');

echo shell_exec('sudo -u zlc bash ./siteMapPush.sh');
