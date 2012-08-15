<?php
/**
 * AutoloadFile 
 * @date 15/08/2012
 */
/**
 * AutoloadFile
 * @date 15/08/2012
 */
require_once dirname(__FILE__) . '/BioIDWSWsdlClass.php';
require_once dirname(__FILE__) . '/Biometric/ID/BioIDWSTypeBiometricClassID.php';
require_once dirname(__FILE__) . '/Bio/Fault/BioIDWSTypeBioIDWebServiceFault.php';
require_once dirname(__FILE__) . '/Sample/BioIDWSTypeSample.php';
require_once dirname(__FILE__) . '/Array/Sample/BioIDWSTypeArrayOfSample.php';
require_once dirname(__FILE__) . '/Array/Class/BioIDWSTypeArrayOfScoredClass.php';
require_once dirname(__FILE__) . '/Scored/Class/BioIDWSTypeScoredClass.php';
require_once dirname(__FILE__) . '/Guid/BioIDWSTypeGuid.php';
require_once dirname(__FILE__) . '/Duration/BioIDWSTypeDuration.php';
require_once dirname(__FILE__) . '/Char/BioIDWSTypeChar.php';
require_once dirname(__FILE__) . '/Delete/Response/BioIDWSTypeDeleteClassResponse.php';
require_once dirname(__FILE__) . '/Delete/Class/BioIDWSTypeDeleteClass.php';
require_once dirname(__FILE__) . '/Identify/BioIDWSTypeIdentify.php';
require_once dirname(__FILE__) . '/Verify/Response/BioIDWSTypeVerifyResponse.php';
require_once dirname(__FILE__) . '/Verify/BioIDWSTypeVerify.php';
require_once dirname(__FILE__) . '/Enroll/Response/BioIDWSTypeEnrollResponse.php';
require_once dirname(__FILE__) . '/Identify/Response/BioIDWSTypeIdentifyResponse.php';
require_once dirname(__FILE__) . '/Quality/Check/BioIDWSTypeQualityCheck.php';
require_once dirname(__FILE__) . '/Status/Response/BioIDWSTypeStatusResponse.php';
require_once dirname(__FILE__) . '/Status/BioIDWSTypeStatus.php';
require_once dirname(__FILE__) . '/Quality/Response/BioIDWSTypeQualityCheckResponse.php';
require_once dirname(__FILE__) . '/Enroll/BioIDWSTypeEnroll.php';
require_once dirname(__FILE__) . '/Enroll/BioIDWSServiceEnroll.php';
require_once dirname(__FILE__) . '/Verify/BioIDWSServiceVerify.php';
require_once dirname(__FILE__) . '/Identify/BioIDWSServiceIdentify.php';
require_once dirname(__FILE__) . '/Quality/BioIDWSServiceQuality.php';
require_once dirname(__FILE__) . '/Status/BioIDWSServiceStatus.php';
require_once dirname(__FILE__) . '/Delete/BioIDWSServiceDelete.php';
require_once dirname(__FILE__) . '/BioIDWSClassMap.php';
?>