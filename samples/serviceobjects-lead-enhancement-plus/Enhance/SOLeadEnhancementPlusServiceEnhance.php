<?php
/**
 * Class file for SOLeadEnhancementPlusServiceEnhance
 * @date 06/07/2012
 */
/**
 * Class SOLeadEnhancementPlusServiceEnhance
 * @date 06/07/2012
 */
class SOLeadEnhancementPlusServiceEnhance extends SOLeadEnhancementPlusWsdlClass
{
	/**
	 * Method to call EnhanceResidentialLead
	 * Meta informations :
	 * 	- documentation : Enhance, embellish and append additional elements to any residential lead. All inputs are optional.
	 * @uses SOLeadEnhancementPlusWsdlClass::getSoapClient()
	 * @uses SOLeadEnhancementPlusWsdlClass::setResult()
	 * @uses SOLeadEnhancementPlusWsdlClass::getResult()
	 * @uses SOLeadEnhancementPlusWsdlClass::saveLastError()
	 * @uses SOLeadEnhancementPlusTypeEnhanceResidentialLead::getName()
	 * @uses SOLeadEnhancementPlusTypeEnhanceResidentialLead::getEmail()
	 * @uses SOLeadEnhancementPlusTypeEnhanceResidentialLead::getPhoneNumber()
	 * @uses SOLeadEnhancementPlusTypeEnhanceResidentialLead::getAddress1()
	 * @uses SOLeadEnhancementPlusTypeEnhanceResidentialLead::getAddress2()
	 * @uses SOLeadEnhancementPlusTypeEnhanceResidentialLead::getCity()
	 * @uses SOLeadEnhancementPlusTypeEnhanceResidentialLead::getRegion()
	 * @uses SOLeadEnhancementPlusTypeEnhanceResidentialLead::getPostalCode()
	 * @uses SOLeadEnhancementPlusTypeEnhanceResidentialLead::getCountry()
	 * @uses SOLeadEnhancementPlusTypeEnhanceResidentialLead::getIPAddress()
	 * @uses SOLeadEnhancementPlusTypeEnhanceResidentialLead::getLicenseKey()
	 * @param SOLeadEnhancementPlusTypeEnhanceResidentialLead EnhanceResidentialLead
	 * @return SOLeadEnhancementPlusTypeEnhanceResidentialLeadResponse
	 */
	public function EnhanceResidentialLead(SOLeadEnhancementPlusTypeEnhanceResidentialLead $_SOLeadEnhancementPlusTypeEnhanceResidentialLead)
	{
		try
		{
			$this->setResult(self::getSoapClient()->EnhanceResidentialLead(array('Name'=>$_SOLeadEnhancementPlusTypeEnhanceResidentialLead->getName(),'Email'=>$_SOLeadEnhancementPlusTypeEnhanceResidentialLead->getEmail(),'PhoneNumber'=>$_SOLeadEnhancementPlusTypeEnhanceResidentialLead->getPhoneNumber(),'Address1'=>$_SOLeadEnhancementPlusTypeEnhanceResidentialLead->getAddress1(),'Address2'=>$_SOLeadEnhancementPlusTypeEnhanceResidentialLead->getAddress2(),'City'=>$_SOLeadEnhancementPlusTypeEnhanceResidentialLead->getCity(),'Region'=>$_SOLeadEnhancementPlusTypeEnhanceResidentialLead->getRegion(),'PostalCode'=>$_SOLeadEnhancementPlusTypeEnhanceResidentialLead->getPostalCode(),'Country'=>$_SOLeadEnhancementPlusTypeEnhanceResidentialLead->getCountry(),'IPAddress'=>$_SOLeadEnhancementPlusTypeEnhanceResidentialLead->getIPAddress(),'LicenseKey'=>$_SOLeadEnhancementPlusTypeEnhanceResidentialLead->getLicenseKey())));
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
	 * @return SOLeadEnhancementPlusTypeEnhanceResidentialLeadResponse
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