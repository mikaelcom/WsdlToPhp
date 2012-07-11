<?php
/**
 * Class file for MicrosoftResearchServiceStatus
 * @date 05/07/2012
 */
/**
 * Class MicrosoftResearchServiceStatus
 * @date 05/07/2012
 */
class MicrosoftResearchServiceStatus extends MicrosoftResearchWsdlClass
{
	/**
	 * Method to call Status
	 * Meta informations :
	 * 	- documentation : Entry point to test if server is alive. Will return 'ONLINE' or 'OFFLINE'
	 * @uses MicrosoftResearchWsdlClass::getSoapClient()
	 * @uses MicrosoftResearchWsdlClass::setResult()
	 * @uses MicrosoftResearchWsdlClass::getResult()
	 * @uses MicrosoftResearchWsdlClass::saveLastError()
	 * @param MicrosoftResearchTypeStatus Status
	 * @return MicrosoftResearchTypeStatusResponse
	 */
	public function Status(MicrosoftResearchTypeStatus $_MicrosoftResearchTypeStatus)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Status(array()));
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
	 * @return MicrosoftResearchTypeStatusResponse
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