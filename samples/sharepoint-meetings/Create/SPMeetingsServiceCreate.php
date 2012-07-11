<?php
/**
 * Class file for SPMeetingsServiceCreate
 * @date 06/07/2012
 */
/**
 * Class SPMeetingsServiceCreate
 * @date 06/07/2012
 */
class SPMeetingsServiceCreate extends SPMeetingsWsdlClass
{
	/**
	 * Method to call CreateWorkspace
	 * @uses SPMeetingsWsdlClass::getSoapClient()
	 * @uses SPMeetingsWsdlClass::setResult()
	 * @uses SPMeetingsWsdlClass::getResult()
	 * @uses SPMeetingsWsdlClass::saveLastError()
	 * @uses SPMeetingsTypeCreateWorkspace::getTitle()
	 * @uses SPMeetingsTypeCreateWorkspace::getTemplateName()
	 * @uses SPMeetingsTypeCreateWorkspace::getLcid()
	 * @uses SPMeetingsTypeCreateWorkspace::getTimeZoneInformation()
	 * @param SPMeetingsTypeCreateWorkspace CreateWorkspace
	 * @return SPMeetingsTypeCreateWorkspaceResponse
	 */
	public function CreateWorkspace(SPMeetingsTypeCreateWorkspace $_SPMeetingsTypeCreateWorkspace)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CreateWorkspace(array('title'=>$_SPMeetingsTypeCreateWorkspace->getTitle(),'templateName'=>$_SPMeetingsTypeCreateWorkspace->getTemplateName(),'lcid'=>$_SPMeetingsTypeCreateWorkspace->getLcid(),'timeZoneInformation'=>$_SPMeetingsTypeCreateWorkspace->getTimeZoneInformation())));
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
	 * @return SPMeetingsTypeCreateWorkspaceResponse
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