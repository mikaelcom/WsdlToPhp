<?php
/**
 * Class file for SOAddressPlusServiceGet
 * @date 05/07/2012
 */
/**
 * Class SOAddressPlusServiceGet
 * @date 05/07/2012
 */
class SOAddressPlusServiceGet extends SOAddressPlusWsdlClass
{
	/**
	 * Method to call GetAddressPlus
	 * Meta informations :
	 * 	- documentation : Returns extensive address information for a given US postal address.
	 * @uses SOAddressPlusWsdlClass::getSoapClient()
	 * @uses SOAddressPlusWsdlClass::setResult()
	 * @uses SOAddressPlusWsdlClass::getResult()
	 * @uses SOAddressPlusWsdlClass::saveLastError()
	 * @uses SOAddressPlusTypeGetAddressPlus::getAddress()
	 * @uses SOAddressPlusTypeGetAddressPlus::getAddress2()
	 * @uses SOAddressPlusTypeGetAddressPlus::getCity()
	 * @uses SOAddressPlusTypeGetAddressPlus::getState()
	 * @uses SOAddressPlusTypeGetAddressPlus::getPostalCode()
	 * @uses SOAddressPlusTypeGetAddressPlus::getLicenseKey()
	 * @param SOAddressPlusTypeGetAddressPlus GetAddressPlus
	 * @return SOAddressPlusTypeGetAddressPlusResponse
	 */
	public function GetAddressPlus(SOAddressPlusTypeGetAddressPlus $_SOAddressPlusTypeGetAddressPlus)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAddressPlus(array('Address'=>$_SOAddressPlusTypeGetAddressPlus->getAddress(),'Address2'=>$_SOAddressPlusTypeGetAddressPlus->getAddress2(),'City'=>$_SOAddressPlusTypeGetAddressPlus->getCity(),'State'=>$_SOAddressPlusTypeGetAddressPlus->getState(),'PostalCode'=>$_SOAddressPlusTypeGetAddressPlus->getPostalCode(),'LicenseKey'=>$_SOAddressPlusTypeGetAddressPlus->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAddressPlusNoCensus
	 * Meta informations :
	 * 	- documentation : Returns only corrected address information and geocoding data for a given US postal address.
	 * @uses SOAddressPlusWsdlClass::getSoapClient()
	 * @uses SOAddressPlusWsdlClass::setResult()
	 * @uses SOAddressPlusWsdlClass::getResult()
	 * @uses SOAddressPlusWsdlClass::saveLastError()
	 * @uses SOAddressPlusTypeGetAddressPlusNoCensus::getAddress()
	 * @uses SOAddressPlusTypeGetAddressPlusNoCensus::getAddress2()
	 * @uses SOAddressPlusTypeGetAddressPlusNoCensus::getCity()
	 * @uses SOAddressPlusTypeGetAddressPlusNoCensus::getState()
	 * @uses SOAddressPlusTypeGetAddressPlusNoCensus::getPostalCode()
	 * @uses SOAddressPlusTypeGetAddressPlusNoCensus::getLicenseKey()
	 * @param SOAddressPlusTypeGetAddressPlusNoCensus GetAddressPlusNoCensus
	 * @return SOAddressPlusTypeGetAddressPlusNoCensusResponse
	 */
	public function GetAddressPlusNoCensus(SOAddressPlusTypeGetAddressPlusNoCensus $_SOAddressPlusTypeGetAddressPlusNoCensus)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAddressPlusNoCensus(array('Address'=>$_SOAddressPlusTypeGetAddressPlusNoCensus->getAddress(),'Address2'=>$_SOAddressPlusTypeGetAddressPlusNoCensus->getAddress2(),'City'=>$_SOAddressPlusTypeGetAddressPlusNoCensus->getCity(),'State'=>$_SOAddressPlusTypeGetAddressPlusNoCensus->getState(),'PostalCode'=>$_SOAddressPlusTypeGetAddressPlusNoCensus->getPostalCode(),'LicenseKey'=>$_SOAddressPlusTypeGetAddressPlusNoCensus->getLicenseKey())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call GetAddressPlusWithDPV
	 * Meta informations :
	 * 	- documentation : Returns extensive address information including DPV for a given US postal address.
	 * @uses SOAddressPlusWsdlClass::getSoapClient()
	 * @uses SOAddressPlusWsdlClass::setResult()
	 * @uses SOAddressPlusWsdlClass::getResult()
	 * @uses SOAddressPlusWsdlClass::saveLastError()
	 * @uses SOAddressPlusTypeGetAddressPlusWithDPV::getAddress()
	 * @uses SOAddressPlusTypeGetAddressPlusWithDPV::getAddress2()
	 * @uses SOAddressPlusTypeGetAddressPlusWithDPV::getCity()
	 * @uses SOAddressPlusTypeGetAddressPlusWithDPV::getState()
	 * @uses SOAddressPlusTypeGetAddressPlusWithDPV::getPostalCode()
	 * @uses SOAddressPlusTypeGetAddressPlusWithDPV::getLicenseKey()
	 * @param SOAddressPlusTypeGetAddressPlusWithDPV GetAddressPlusWithDPV
	 * @return SOAddressPlusTypeGetAddressPlusWithDPVResponse
	 */
	public function GetAddressPlusWithDPV(SOAddressPlusTypeGetAddressPlusWithDPV $_SOAddressPlusTypeGetAddressPlusWithDPV)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetAddressPlusWithDPV(array('Address'=>$_SOAddressPlusTypeGetAddressPlusWithDPV->getAddress(),'Address2'=>$_SOAddressPlusTypeGetAddressPlusWithDPV->getAddress2(),'City'=>$_SOAddressPlusTypeGetAddressPlusWithDPV->getCity(),'State'=>$_SOAddressPlusTypeGetAddressPlusWithDPV->getState(),'PostalCode'=>$_SOAddressPlusTypeGetAddressPlusWithDPV->getPostalCode(),'LicenseKey'=>$_SOAddressPlusTypeGetAddressPlusWithDPV->getLicenseKey())));
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
	 * @return SOAddressPlusTypeGetAddressPlusWithDPVResponse
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