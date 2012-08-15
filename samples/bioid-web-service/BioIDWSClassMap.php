<?php
/**
 * ClassMap 
 * @date 15/08/2012
 */
/**
 * ClassMap
 * @date 15/08/2012
 */
class BioIDWSClassMap
{
	final public static function classMap()
	{
		return array (
  'Enroll' => 'BioIDWSTypeEnroll',
  'EnrollResponse' => 'BioIDWSTypeEnrollResponse',
  'Verify' => 'BioIDWSTypeVerify',
  'VerifyResponse' => 'BioIDWSTypeVerifyResponse',
  'Identify' => 'BioIDWSTypeIdentify',
  'IdentifyResponse' => 'BioIDWSTypeIdentifyResponse',
  'QualityCheck' => 'BioIDWSTypeQualityCheck',
  'QualityCheckResponse' => 'BioIDWSTypeQualityCheckResponse',
  'Status' => 'BioIDWSTypeStatus',
  'StatusResponse' => 'BioIDWSTypeStatusResponse',
  'DeleteClass' => 'BioIDWSTypeDeleteClass',
  'DeleteClassResponse' => 'BioIDWSTypeDeleteClassResponse',
  'BiometricClassID' => 'BioIDWSTypeBiometricClassID',
  'ArrayOfSample' => 'BioIDWSTypeArrayOfSample',
  'Sample' => 'BioIDWSTypeSample',
  'BioIDWebServiceFault' => 'BioIDWSTypeBioIDWebServiceFault',
  'ArrayOfScoredClass' => 'BioIDWSTypeArrayOfScoredClass',
  'ScoredClass' => 'BioIDWSTypeScoredClass',
  'char' => 'BioIDWSTypeChar',
  'duration' => 'BioIDWSTypeDuration',
  'guid' => 'BioIDWSTypeGuid',
);
	}
}
?>