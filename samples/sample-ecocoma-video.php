<?php
/**
 * Test with eCoComa Video WSDL
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-video/EccVideoAutoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','VDO-T91160806J');
define('ECC_WSDL','http://service.ecocoma.com/video/video.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccVideoWsdlClass::WSDL_URL=>ECC_WSDL);
$v = new EccVideoServiceGet($wsdl);
$v->GetVideo(new EccVideoTypeGetVideo(ECC_KEY_ID,'','marketing'));
print_r($v);
?>