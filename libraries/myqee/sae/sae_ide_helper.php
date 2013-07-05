<?php
return true;
// settings
define('SAE_FETCHURL_SERVICE_ADDRESS','http://fetchurl.sae.sina.com.cn');

// storage
define( 'SAE_STOREHOST', 'http://stor.sae.sina.com.cn/storageApi.php' );
define( 'SAE_S3HOST', 'http://s3.sae.sina.com.cn/s3Api.php' );

// saetmp constant
define( 'SAE_TMP_PATH' , $SAE_TMPFS_PATH);

if ( isset($_SERVER['HTTP_MYSQLPORT']) && $_SERVER['HTTP_MYSQLPORT'] > 0 ) {
	$_SERVER['HTTP_MYSQLPORT'] = 3307;
}

define( 'SAE_APPNAME', sae_get_env('AppName') );
define( 'SAE_APPVERSION', sae_get_env('AppVersion') );
define( 'SAE_ACCESSKEY', sae_get_env('AccessKey') );
define( 'SAE_SECRETKEY', sae_get_env('SecretKey') );
$_SERVER['HTTP_SECRETKEY'] = 'Discarded';

// document root
$_SERVER['DOCUMENT_ROOT'] = rtrim($_SERVER['DOCUMENT_ROOT'], "/");
$_SERVER['DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT'] . "/" . sae_get_env('AppHash') . "/" . SAE_APPNAME . "/" . SAE_APPVERSION;

define( 'SAE_MYSQL_HOST_M', 'w.rdc.sae.sina.com.cn' );
define( 'SAE_MYSQL_HOST_S', 'r.rdc.sae.sina.com.cn' );
define( 'SAE_MYSQL_PORT', 3307 );
define( 'SAE_MYSQL_USER', SAE_ACCESSKEY );
define( 'SAE_MYSQL_PASS', SAE_SECRETKEY );
define( 'SAE_MYSQL_DB', 'app_' . SAE_APPNAME );

// gravity define
define("SAE_NorthWest", 1);
define("SAE_North", 2);
define("SAE_NorthEast",3);
define("SAE_East",6);
define("SAE_SouthEast",9);
define("SAE_South",8);
define("SAE_SouthWest",7);
define("SAE_West",4);
define("SAE_Static",10);
define("SAE_Center",5);

// font stretch
define("SAE_Undefined",0);
define("SAE_Normal",1);
define("SAE_UltraCondensed",2);
define("SAE_ExtraCondensed",3);
define("SAE_Condensed",4);
define("SAE_SemiCondensed",5);
define("SAE_SemiExpanded",6);
define("SAE_Expanded",7);
define("SAE_ExtraExpanded",8);
define("SAE_UltraExpanded",9);

// font style
define("SAE_Italic",2);
define("SAE_Oblique",3);

// font name
define("SAE_SimSun",1);
define("SAE_SimKai",2);
define("SAE_SimHei",3);
define("SAE_Arial",4);
define("SAE_MicroHei",5);

// anchor postion
define("SAE_TOP_LEFT","tl");
define("SAE_TOP_CENTER","tc");
define("SAE_TOP_RIGHT","tr");
define("SAE_CENTER_LEFT","cl");
define("SAE_CENTER_CENTER","cc");
define("SAE_CENTER_RIGHT","cr");
define("SAE_BOTTOM_LEFT","bl");
define("SAE_BOTTOM_CENTER","bc");
define("SAE_BOTTOM_RIGHT","br");

// errno define
define("SAE_Success", 0); // OK
define("SAE_ErrKey", 1); // invalid accesskey or secretkey
define("SAE_ErrForbidden", 2); // access fibidden for quota limit
define("SAE_ErrParameter", 3); // parameter not exist or invalid
define("SAE_ErrInternal", 500); // internal Error
define("SAE_ErrUnknown", 999); // unknown error

// fonts for gd
define("SAE_Font_Sun", "/usr/share/fonts/chinese/TrueType/uming.ttf");
define("SAE_Font_Kai", "/usr/share/fonts/chinese/TrueType/ukai.ttf");
define("SAE_Font_Hei", "/usr/share/fonts/chinese/TrueType/wqy-zenhei.ttc");
define("SAE_Font_MicroHei", "/usr/share/fonts/chinese/TrueType/wqy-microhei.ttc");

