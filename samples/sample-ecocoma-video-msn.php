<?php
/**
 * Test with eCoComa Video Msn WSDL
 * @date 03/07/2012
 */
ini_set('display_errors',E_ALL);
require_once dirname(__FILE__) . '/ecocoma-video-msn/EccVideoMsnAutoload.php';
/**
 * eCoComa Informations
 */
define('ECC_KEY_ID','VDO-T91160806J');
define('ECC_WSDL','http://service.ecocoma.com/video/msn.asmx?WSDL');
/**
 * init
 */
$wsdl = array(
			EccVideoMsnWsdlClass::WSDL_URL=>ECC_WSDL);
$v = new EccVideoMsnServiceGet($wsdl);
$v->GetVideo(new EccVideoMsnTypeGetVideo(ECC_KEY_ID,'','star wars'));
print_r($v->getSoapClient());
?>