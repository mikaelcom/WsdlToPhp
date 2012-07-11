<?php
/**
 * Class file for SOLeadEnhancementServiceEnhance
 * @date 06/07/2012
 */
/**
 * Class SOLeadEnhancementServiceEnhance
 * @date 06/07/2012
 */
class SOLeadEnhancementServiceEnhance extends SOLeadEnhancementWsdlClass
{
	/**
	 * Method to call EnhanceResidentialLead
	 * Meta informations :
	 * 	- documentation : Enhance, embellish and append additional elements to any residential lead. All inputs are optional. Does not append contacts or additional phones. For that functionality please try DOTS Lead Enhancement Plus.
	 * @uses SOLeadEnhancementWsdlClass::getSoapClient()
	 * @uses SOLeadEnhancementWsdlClass::setResult()
	 * @uses SOLeadEnhancementWsdlClass::getResult()
	 * @uses SOLeadEnhancementWsdlClass::saveLastError()
	 * @uses SOLeadEnhancementTypeEnhanceResidentialLead::getName()
	 * @uses SOLeadEnhancementTypeEnhanceResidentialLead::getEmail()
	 * @uses SOLeadEnhancementTypeEnhanceResidentialLead::getPhoneNumber()
	 * @uses SOLeadEnhancementTypeEnhanceResidentialLead::getAddress1()
	 * @uses SOLeadEnhancementTypeEnhanceResidentialLead::getAddress2()
	 * @uses SOLeadEnhancementTypeEnhanceResidentialLead::getCity()
	 * @uses SOLeadEnhancementTypeEnhanceResidentialLead::getRegion()
	 * @uses SOLeadEnhancementTypeEnhanceResidentialLead::getPostalCode()
	 * @uses SOLeadEnhancementTypeEnhanceResidentialLead::getCountry()
	 * @uses SOLeadEnhancementTypeEnhanceResidentialLead::getIPAddress()
	 * @uses SOLeadEnhancementTypeEnhanceResidentialLead::getLicenseKey()
	 * @param SOLeadEnhancementTypeEnhanceResidentialLead EnhanceResidentialLead
	 * @return SOLeadEnhancementTypeEnhanceResidentialLeadResponse
	 */
	public function EnhanceResidentialLead(SOLeadEnhancementTypeEnhanceResidentialLead $_SOLeadEnhancementTypeEnhanceResidentialLead)
	{
		try
		{
			$this->setResult(self::getSoapClient()->EnhanceResidentialLead(array('Name'=>$_SOLeadEnhancementTypeEnhanceResidentialLead->getName(),'Email'=>$_SOLeadEnhancementTypeEnhanceResidentialLead->getEmail(),'PhoneNumber'=>$_SOLeadEnhancementTypeEnhanceResidentialLead->getPhoneNumber(),'Address1'=>$_SOLeadEnhancementTypeEnhanceResidentialLead->getAddress1(),'Address2'=>$_SOLeadEnhancementTypeEnhanceResidentialLead->getAddress2(),'City'=>$_SOLeadEnhancementTypeEnhanceResidentialLead->getCity(),'Region'=>$_SOLeadEnhancementTypeEnhanceResidentialLead->getRegion(),'PostalCode'=>$_SOLeadEnhancementTypeEnhanceResidentialLead->getPostalCode(),'Country'=>$_SOLeadEnhancementTypeEnhanceResidentialLead->getCountry(),'IPAddress'=>$_SOLeadEnhancementTypeEnhanceResidentialLead->getIPAddress(),'LicenseKey'=>$_SOLeadEnhancementTypeEnhanceResidentialLead->getLicenseKey())));
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
	 * @return SOLeadEnhancementTypeEnhanceResidentialLeadResponse
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