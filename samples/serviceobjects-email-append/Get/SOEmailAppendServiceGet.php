<?php
/**
 * Class file for SOEmailAppendServiceGet
 * @date 08/07/2012
 */
/**
 * Class SOEmailAppendServiceGet
 * @date 08/07/2012
 */
class SOEmailAppendServiceGet extends SOEmailAppendWsdlClass
{
	/**
	 * Method to call GetConsumerEmailByNameAndAddress
	 * Meta informations :
	 * 	- documentation : Appends email address for given name and address, performs Address Validation to make a positive match.
	 * @uses SOEmailAppendWsdlClass::getSoapClient()
	 * @uses SOEmailAppendWsdlClass::setResult()
	 * @uses SOEmailAppendWsdlClass::getResult()
	 * @uses SOEmailAppendWsdlClass::saveLastError()
	 * @uses SOEmailAppendTypeGetConsumerEmailByNameAndAddress::getFirstName()
	 * @uses SOEmailAppendTypeGetConsumerEmailByNameAndAddress::getLastName()
	 * @uses SOEmailAppendTypeGetConsumerEmailByNameAndAddress::getAddress()
	 * @uses SOEmailAppendTypeGetConsumerEmailByNameAndAddress::getCity()
	 * @uses SOEmailAppendTypeGetConsumerEmailByNameAndAddress::getState()
	 * @uses SOEmailAppendTypeGetConsumerEmailByNameAndAddress::getPostalCode()
	 * @uses SOEmailAppendTypeGetConsumerEmailByNameAndAddress::getLicenseKey()
	 * @param SOEmailAppendTypeGetConsumerEmailByNameAndAddress GetConsumerEmailByNameAndAddress
	 * @return SOEmailAppendTypeGetConsumerEmailByNameAndAddressResponse
	 */
	public function GetConsumerEmailByNameAndAddress(SOEmailAppendTypeGetConsumerEmailByNameAndAddress $_SOEmailAppendTypeGetConsumerEmailByNameAndAddress)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetConsumerEmailByNameAndAddress(array('FirstName'=>$_SOEmailAppendTypeGetConsumerEmailByNameAndAddress->getFirstName(),'LastName'=>$_SOEmailAppendTypeGetConsumerEmailByNameAndAddress->getLastName(),'Address'=>$_SOEmailAppendTypeGetConsumerEmailByNameAndAddress->getAddress(),'City'=>$_SOEmailAppendTypeGetConsumerEmailByNameAndAddress->getCity(),'State'=>$_SOEmailAppendTypeGetConsumerEmailByNameAndAddress->getState(),'PostalCode'=>$_SOEmailAppendTypeGetConsumerEmailByNameAndAddress->getPostalCode(),'LicenseKey'=>$_SOEmailAppendTypeGetConsumerEmailByNameAndAddress->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetConsumerEmailByNameAndPostalCodeUS
	 * Meta informations :
	 * 	- documentation : Appends email address for given name and U.S. Postal Code.
	 * @uses SOEmailAppendWsdlClass::getSoapClient()
	 * @uses SOEmailAppendWsdlClass::setResult()
	 * @uses SOEmailAppendWsdlClass::getResult()
	 * @uses SOEmailAppendWsdlClass::saveLastError()
	 * @uses SOEmailAppendTypeGetConsumerEmailByNameAndPostalCodeUS::getFirstName()
	 * @uses SOEmailAppendTypeGetConsumerEmailByNameAndPostalCodeUS::getLastName()
	 * @uses SOEmailAppendTypeGetConsumerEmailByNameAndPostalCodeUS::getPostalCode()
	 * @uses SOEmailAppendTypeGetConsumerEmailByNameAndPostalCodeUS::getLicenseKey()
	 * @param SOEmailAppendTypeGetConsumerEmailByNameAndPostalCodeUS GetConsumerEmailByNameAndPostalCodeUS
	 * @return SOEmailAppendTypeGetConsumerEmailByNameAndPostalCodeUSResponse
	 */
	public function GetConsumerEmailByNameAndPostalCodeUS(SOEmailAppendTypeGetConsumerEmailByNameAndPostalCodeUS $_SOEmailAppendTypeGetConsumerEmailByNameAndPostalCodeUS)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetConsumerEmailByNameAndPostalCodeUS(array('FirstName'=>$_SOEmailAppendTypeGetConsumerEmailByNameAndPostalCodeUS->getFirstName(),'LastName'=>$_SOEmailAppendTypeGetConsumerEmailByNameAndPostalCodeUS->getLastName(),'PostalCode'=>$_SOEmailAppendTypeGetConsumerEmailByNameAndPostalCodeUS->getPostalCode(),'LicenseKey'=>$_SOEmailAppendTypeGetConsumerEmailByNameAndPostalCodeUS->getLicenseKey())));
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
	 * @return SOEmailAppendTypeGetConsumerEmailByNameAndPostalCodeUSResponse
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