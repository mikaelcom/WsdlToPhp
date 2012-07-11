<?php
/**
 * Class file for SPMeetingsServiceGet
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsServiceGet
 * @date 06/07/2012
 */
class SPMeetingsServiceGet extends SPMeetingsWsdlClass
{
	/**
	 * Method to call GetMeetingWorkspaces
	 * @uses SPMeetingsWsdlClass::getSoapClient()
	 * @uses SPMeetingsWsdlClass::setResult()
	 * @uses SPMeetingsWsdlClass::getResult()
	 * @uses SPMeetingsWsdlClass::saveLastError()
	 * @uses SPMeetingsTypeGetMeetingWorkspaces::getRecurring()
	 * @param SPMeetingsTypeGetMeetingWorkspaces GetMeetingWorkspaces
	 * @return SPMeetingsTypeGetMeetingWorkspacesResponse
	 */
	public function GetMeetingWorkspaces(SPMeetingsTypeGetMeetingWorkspaces $_SPMeetingsTypeGetMeetingWorkspaces)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMeetingWorkspaces(array('recurring'=>$_SPMeetingsTypeGetMeetingWorkspaces->getRecurring())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetMeetingsInformation
	 * @uses SPMeetingsWsdlClass::getSoapClient()
	 * @uses SPMeetingsWsdlClass::setResult()
	 * @uses SPMeetingsWsdlClass::getResult()
	 * @uses SPMeetingsWsdlClass::saveLastError()
	 * @uses SPMeetingsTypeGetMeetingsInformation::getRequestFlags()
	 * @uses SPMeetingsTypeGetMeetingsInformation::getLcid()
	 * @param SPMeetingsTypeGetMeetingsInformation GetMeetingsInformation
	 * @return SPMeetingsTypeGetMeetingsInformationResponse
	 */
	public function GetMeetingsInformation(SPMeetingsTypeGetMeetingsInformation $_SPMeetingsTypeGetMeetingsInformation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetMeetingsInformation(array('requestFlags'=>$_SPMeetingsTypeGetMeetingsInformation->getRequestFlags(),'lcid'=>$_SPMeetingsTypeGetMeetingsInformation->getLcid())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method returning the result content
	 *
	 * @return SPMeetingsTypeGetMeetingsInformationResponse
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>