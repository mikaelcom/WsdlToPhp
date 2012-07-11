<?php
/**
 * Class file for SOBusinessInformationServiceGet
 * @date 08/07/2012
 */
/**
 * Class SOBusinessInformationServiceGet
 * @date 08/07/2012
 */
class SOBusinessInformationServiceGet extends SOBusinessInformationWsdlClass
{
	/**
	 * Method to call GetBusinessByPhone
	 * @uses SOBusinessInformationWsdlClass::getSoapClient()
	 * @uses SOBusinessInformationWsdlClass::setResult()
	 * @uses SOBusinessInformationWsdlClass::getResult()
	 * @uses SOBusinessInformationWsdlClass::saveLastError()
	 * @uses SOBusinessInformationTypeGetBusinessByPhone::getPhone()
	 * @uses SOBusinessInformationTypeGetBusinessByPhone::getLicenseKey()
	 * @param SOBusinessInformationTypeGetBusinessByPhone GetBusinessByPhone
	 * @return SOBusinessInformationTypeGetBusinessByPhoneResponse
	 */
	public function GetBusinessByPhone(SOBusinessInformationTypeGetBusinessByPhone $_SOBusinessInformationTypeGetBusinessByPhone)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBusinessByPhone(array('Phone'=>$_SOBusinessInformationTypeGetBusinessByPhone->getPhone(),'LicenseKey'=>$_SOBusinessInformationTypeGetBusinessByPhone->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetBusinessByAddress
	 * @uses SOBusinessInformationWsdlClass::getSoapClient()
	 * @uses SOBusinessInformationWsdlClass::setResult()
	 * @uses SOBusinessInformationWsdlClass::getResult()
	 * @uses SOBusinessInformationWsdlClass::saveLastError()
	 * @uses SOBusinessInformationTypeGetBusinessByAddress::getAddress()
	 * @uses SOBusinessInformationTypeGetBusinessByAddress::getCity()
	 * @uses SOBusinessInformationTypeGetBusinessByAddress::getState()
	 * @uses SOBusinessInformationTypeGetBusinessByAddress::getZip()
	 * @uses SOBusinessInformationTypeGetBusinessByAddress::getLicenseKey()
	 * @param SOBusinessInformationTypeGetBusinessByAddress GetBusinessByAddress
	 * @return SOBusinessInformationTypeGetBusinessByAddressResponse
	 */
	public function GetBusinessByAddress(SOBusinessInformationTypeGetBusinessByAddress $_SOBusinessInformationTypeGetBusinessByAddress)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetBusinessByAddress(array('Address'=>$_SOBusinessInformationTypeGetBusinessByAddress->getAddress(),'City'=>$_SOBusinessInformationTypeGetBusinessByAddress->getCity(),'State'=>$_SOBusinessInformationTypeGetBusinessByAddress->getState(),'Zip'=>$_SOBusinessInformationTypeGetBusinessByAddress->getZip(),'LicenseKey'=>$_SOBusinessInformationTypeGetBusinessByAddress->getLicenseKey())));
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
	 * @return SOBusinessInformationTypeGetBusinessByAddressResponse
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