<?php
/**
 * Class file for SOLeadValidateServiceValidate
 * @date 06/07/2012
 */
/**
 * Class SOLeadValidateServiceValidate
 * @date 06/07/2012
 */
class SOLeadValidateServiceValidate extends SOLeadValidateWsdlClass
{
	/**
	 * Method to call ValidateLead
	 * Meta informations :
	 * 	- documentation : This operation is still supported for legacy users. Not recommended for new applications.
	 * @uses SOLeadValidateWsdlClass::getSoapClient()
	 * @uses SOLeadValidateWsdlClass::setResult()
	 * @uses SOLeadValidateWsdlClass::getResult()
	 * @uses SOLeadValidateWsdlClass::saveLastError()
	 * @uses SOLeadValidateTypeValidateLead::getName()
	 * @uses SOLeadValidateTypeValidateLead::getAddress1()
	 * @uses SOLeadValidateTypeValidateLead::getAddress2()
	 * @uses SOLeadValidateTypeValidateLead::getCity()
	 * @uses SOLeadValidateTypeValidateLead::getState()
	 * @uses SOLeadValidateTypeValidateLead::getZip()
	 * @uses SOLeadValidateTypeValidateLead::getCountry()
	 * @uses SOLeadValidateTypeValidateLead::getPhone1()
	 * @uses SOLeadValidateTypeValidateLead::getPhone2()
	 * @uses SOLeadValidateTypeValidateLead::getEmail()
	 * @uses SOLeadValidateTypeValidateLead::getIP()
	 * @uses SOLeadValidateTypeValidateLead::getTestType()
	 * @uses SOLeadValidateTypeValidateLead::getLicenseKey()
	 * @param SOLeadValidateTypeValidateLead ValidateLead
	 * @return SOLeadValidateTypeValidateLeadResponse
	 */
	public function ValidateLead(SOLeadValidateTypeValidateLead $_SOLeadValidateTypeValidateLead)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ValidateLead(array('Name'=>$_SOLeadValidateTypeValidateLead->getName(),'Address1'=>$_SOLeadValidateTypeValidateLead->getAddress1(),'Address2'=>$_SOLeadValidateTypeValidateLead->getAddress2(),'City'=>$_SOLeadValidateTypeValidateLead->getCity(),'State'=>$_SOLeadValidateTypeValidateLead->getState(),'Zip'=>$_SOLeadValidateTypeValidateLead->getZip(),'Country'=>$_SOLeadValidateTypeValidateLead->getCountry(),'Phone1'=>$_SOLeadValidateTypeValidateLead->getPhone1(),'Phone2'=>$_SOLeadValidateTypeValidateLead->getPhone2(),'Email'=>$_SOLeadValidateTypeValidateLead->getEmail(),'IP'=>$_SOLeadValidateTypeValidateLead->getIP(),'TestType'=>$_SOLeadValidateTypeValidateLead->getTestType(),'LicenseKey'=>$_SOLeadValidateTypeValidateLead->getLicenseKey())));
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
	 * @return SOLeadValidateTypeValidateLeadResponse
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