<?php
/**
 * Test with eCoComa Video Aol WSDL
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-video-aol/EccVideoAolAutoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','VDO-T91160806J');
define('ECC_WSDL','http://service.ecocoma.com/video/aol.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccVideoAolWsdlClass::WSDL_URL=>ECC_WSDL);
$v = new EccVideoAolServiceGet($wsdl);
$v->GetVideo(new EccVideoAolTypeGetVideo(ECC_KEY_ID,'','star wars'));
print_r($v);
?>