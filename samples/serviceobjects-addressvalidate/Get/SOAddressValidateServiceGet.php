<?php
/**
 * Class file for SOAddressValidateServiceGet
 * @date 05/07/2012
 */
/**
 * Class SOAddressValidateServiceGet
 * @date 05/07/2012
 */
class SOAddressValidateServiceGet extends SOAddressValidateWsdlClass
{
	/**
	 * Method to call GetPossibleMatches
	 * Meta informations :
	 * 	- documentation : Returns the possible validated matches for a given US postal address.
	 * @uses SOAddressValidateWsdlClass::getSoapClient()
	 * @uses SOAddressValidateWsdlClass::setResult()
	 * @uses SOAddressValidateWsdlClass::getResult()
	 * @uses SOAddressValidateWsdlClass::saveLastError()
	 * @uses SOAddressValidateTypeGetPossibleMatches::getAddress()
	 * @uses SOAddressValidateTypeGetPossibleMatches::getAddress2()
	 * @uses SOAddressValidateTypeGetPossibleMatches::getCity()
	 * @uses SOAddressValidateTypeGetPossibleMatches::getState()
	 * @uses SOAddressValidateTypeGetPossibleMatches::getPostalCode()
	 * @uses SOAddressValidateTypeGetPossibleMatches::getLicenseKey()
	 * @param SOAddressValidateTypeGetPossibleMatches GetPossibleMatches
	 * @return SOAddressValidateTypeGetPossibleMatchesResponse
	 */
	public function GetPossibleMatches(SOAddressValidateTypeGetPossibleMatches $_SOAddressValidateTypeGetPossibleMatches)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetPossibleMatches(array('Address'=>$_SOAddressValidateTypeGetPossibleMatches->getAddress(),'Address2'=>$_SOAddressValidateTypeGetPossibleMatches->getAddress2(),'City'=>$_SOAddressValidateTypeGetPossibleMatches->getCity(),'State'=>$_SOAddressValidateTypeGetPossibleMatches->getState(),'PostalCode'=>$_SOAddressValidateTypeGetPossibleMatches->getPostalCode(),'LicenseKey'=>$_SOAddressValidateTypeGetPossibleMatches->getLicenseKey())));
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
	 * @return SOAddressValidateTypeGetPossibleMatchesResponse
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