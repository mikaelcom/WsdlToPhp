<?php
/**
 * Class file for MicrosoftResearchServiceRegistration
 * @date 05/07/2012
 */
/**
 * Class MicrosoftResearchServiceRegistration
 * @date 05/07/2012
 */
class MicrosoftResearchServiceRegistration extends MicrosoftResearchWsdlClass
{
	/**
	 * Method to call Registration
	 * Meta informations :
	 * 	- documentation : Basic registration entry point
	 * @uses MicrosoftResearchWsdlClass::getSoapClient()
	 * @uses MicrosoftResearchWsdlClass::setResult()
	 * @uses MicrosoftResearchWsdlClass::getResult()
	 * @uses MicrosoftResearchWsdlClass::saveLastError()
	 * @uses MicrosoftResearchTypeRegistration::getRegistrationXml()
	 * @param MicrosoftResearchTypeRegistration Registration
	 * @return MicrosoftResearchTypeRegistrationResponse
	 */
	public function Registration(MicrosoftResearchTypeRegistration $_MicrosoftResearchTypeRegistration)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Registration(array('registrationXml'=>$_MicrosoftResearchTypeRegistration->getRegistrationXml())));
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
	 * @return MicrosoftResearchTypeRegistrationResponse
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