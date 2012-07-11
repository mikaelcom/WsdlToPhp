<?php
/**
 * ClassMap 
 * @date 09/07/2012
 */
/**
 * ClassMap
 * @date 09/07/2012
 */
class XWebACHDirectoryClassMap
{
	final public static function classMap()
	{
		return array (
  'Participant' => 'XWebACHDirectoryTypeParticipant',
  'GetParticipantRequest' => 'XWebACHDirectoryTypeGetParticipantRequest',
  'GetParticipantResponse' => 'XWebACHDirectoryTypeGetParticipantResponse',
  'IsRoutingNumberValidRequest' => 'XWebACHDirectoryTypeIsRoutingNumberValidRequest',
  'GetServicingFRBsResponse' => 'XWebACHDirectoryTypeGetServicingFRBsResponse',
  'Directory' => 'XWebACHDirectoryTypeDirectory',
  'GetParticipantsByServicingFRBNumberRequest' => 'XWebACHDirectoryTypeGetParticipantsByServicingFRBNumberRequest',
  'GetParticipantsByServicingFRBNumberResponse' => 'XWebACHDirectoryTypeGetParticipantsByServicingFRBNumberResponse',
  'GetParticipantsByStateRequest' => 'XWebACHDirectoryTypeGetParticipantsByStateRequest',
  'GetParticipantsByStateResponse' => 'XWebACHDirectoryTypeGetParticipantsByStateResponse',
  'GetParticipantsByZipCodeRequest' => 'XWebACHDirectoryTypeGetParticipantsByZipCodeRequest',
  'GetParticipantsByZipCodeResponse' => 'XWebACHDirectoryTypeGetParticipantsByZipCodeResponse',
  'GetParticipantsByTelephoneAreaCodeRequest' => 'XWebACHDirectoryTypeGetParticipantsByTelephoneAreaCodeRequest',
  'GetParticipantsByTelephoneAreaCodeResponse' => 'XWebACHDirectoryTypeGetParticipantsByTelephoneAreaCodeResponse',
);
	}
}
?>