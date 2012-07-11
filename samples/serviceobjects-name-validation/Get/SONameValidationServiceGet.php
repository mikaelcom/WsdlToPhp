<?php
/**
 * Class file for SONameValidationServiceGet
 * @date 08/07/2012
 */
/**
 * Class SONameValidationServiceGet
 * @date 08/07/2012
 */
class SONameValidationServiceGet extends SONameValidationWsdlClass
{
	/**
	 * Method to call GetNameInfo
	 * Meta informations :
	 * 	- documentation : Returns information on a person's name.
	 * @uses SONameValidationWsdlClass::getSoapClient()
	 * @uses SONameValidationWsdlClass::setResult()
	 * @uses SONameValidationWsdlClass::getResult()
	 * @uses SONameValidationWsdlClass::saveLastError()
	 * @uses SONameValidationTypeGetNameInfo::getName()
	 * @uses SONameValidationTypeGetNameInfo::getLicenseKey()
	 * @param SONameValidationTypeGetNameInfo GetNameInfo
	 * @return SONameValidationTypeGetNameInfoResponse
	 */
	public function GetNameInfo(SONameValidationTypeGetNameInfo $_SONameValidationTypeGetNameInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetNameInfo(array('Name'=>$_SONameValidationTypeGetNameInfo->getName(),'LicenseKey'=>$_SONameValidationTypeGetNameInfo->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetOrderedName
	 * Meta informations :
	 * 	- documentation : Given two names, determines which is the likely first name, and which is the likely last name
	 * @uses SONameValidationWsdlClass::getSoapClient()
	 * @uses SONameValidationWsdlClass::setResult()
	 * @uses SONameValidationWsdlClass::getResult()
	 * @uses SONameValidationWsdlClass::saveLastError()
	 * @uses SONameValidationTypeGetOrderedName::getName()
	 * @uses SONameValidationTypeGetOrderedName::getLicenseKey()
	 * @param SONameValidationTypeGetOrderedName GetOrderedName
	 * @return SONameValidationTypeGetOrderedNameResponse
	 */
	public function GetOrderedName(SONameValidationTypeGetOrderedName $_SONameValidationTypeGetOrderedName)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetOrderedName(array('Name'=>$_SONameValidationTypeGetOrderedName->getName(),'LicenseKey'=>$_SONameValidationTypeGetOrderedName->getLicenseKey())));
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
	 * @return SONameValidationTypeGetOrderedNameResponse
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