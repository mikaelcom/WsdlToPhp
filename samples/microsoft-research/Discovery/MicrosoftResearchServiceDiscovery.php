<?php
/**
 * Class file for MicrosoftResearchServiceDiscovery
 * @date 05/07/2012
 */
/**
 * Class MicrosoftResearchServiceDiscovery
 * @date 05/07/2012
 */
class MicrosoftResearchServiceDiscovery extends MicrosoftResearchWsdlClass
{
	/**
	 * Method to call Discovery
	 * Meta informations :
	 * 	- documentation : Entry point for service discovery
	 * @uses MicrosoftResearchWsdlClass::getSoapClient()
	 * @uses MicrosoftResearchWsdlClass::setResult()
	 * @uses MicrosoftResearchWsdlClass::getResult()
	 * @uses MicrosoftResearchWsdlClass::saveLastError()
	 * @uses MicrosoftResearchTypeDiscovery::getRegistrationXml()
	 * @param MicrosoftResearchTypeDiscovery Discovery
	 * @return MicrosoftResearchTypeDiscoveryResponse
	 */
	public function Discovery(MicrosoftResearchTypeDiscovery $_MicrosoftResearchTypeDiscovery)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Discovery(array('registrationXml'=>$_MicrosoftResearchTypeDiscovery->getRegistrationXml())));
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
	 * @return MicrosoftResearchTypeDiscoveryResponse
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