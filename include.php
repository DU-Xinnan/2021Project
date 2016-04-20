<?php
/**
 * Created by PhpStorm.
 * User: Xinnan
 * Date: 3/27/2016
 * Time: 3:55 PM
 */
session_start();
define("ROOT",dirname(__FILE__));
set_include_path(".".PATH_SEPARATOR.ROOT."/library".PATH_SEPARATOR.ROOT."/core".PATH_SEPARATOR.ROOT."/configs".PATH_SEPARATOR.get_include_path());
require_once 'library/mysql.func.php';
//require_once 'image.func.php';
require_once 'library/common.func.php';
//require_once 'string.func.php';
require_once "configs/configs.php";
require_once 'core/admin.inc.php';
//require_once 'cate.inc.php';
//require_once 'pro.inc.php';
//require_once 'album.inc.php';
require_once 'library/upload.func.php';
require_once 'user.inc.php';
$link=connect();
