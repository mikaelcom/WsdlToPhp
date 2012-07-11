<?php
/**
 * Class file for SPMeetingsServiceDelete
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsServiceDelete
 * @date 06/07/2012
 */
class SPMeetingsServiceDelete extends SPMeetingsWsdlClass
{
	/**
	 * Method to call DeleteWorkspace
	 * @uses SPMeetingsWsdlClass::getSoapClient()
	 * @uses SPMeetingsWsdlClass::setResult()
	 * @uses SPMeetingsWsdlClass::getResult()
	 * @uses SPMeetingsWsdlClass::saveLastError()
	 * @param SPMeetingsTypeDeleteWorkspace DeleteWorkspace
	 * @return SPMeetingsTypeDeleteWorkspaceResponse
	 */
	public function DeleteWorkspace(SPMeetingsTypeDeleteWorkspace $_SPMeetingsTypeDeleteWorkspace)
	{
		try
		{
			$this->setResult(self::getSoapClient()->DeleteWorkspace(array()));
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
	 * @return SPMeetingsTypeDeleteWorkspaceResponse
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