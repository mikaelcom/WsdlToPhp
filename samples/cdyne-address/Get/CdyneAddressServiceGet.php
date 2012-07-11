<?php
/**
 * Class file for CdyneAddressServiceGet
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressServiceGet
 * @date 02/07/2012
 */
class CdyneAddressServiceGet extends CdyneAddressWsdlClass
{
	/**
	 * Method to call GetCongressionalDistrictByZip
	 * Meta informations :
	 * 	- documentation : Returns a Congressional District by ZipCode. Use a licensekey of 0 for testing.
	 * @uses CdyneAddressWsdlClass::getSoapClient()
	 * @uses CdyneAddressWsdlClass::setResult()
	 * @uses CdyneAddressWsdlClass::getResult()
	 * @uses CdyneAddressWsdlClass::saveLastError()
	 * @uses CdyneAddressTypeGetCongressionalDistrictByZip::getZipcode()
	 * @uses CdyneAddressTypeGetCongressionalDistrictByZip::getLicenseKey()
	 * @param CdyneAddressTypeGetCongressionalDistrictByZip GetCongressionalDistrictByZip
	 * @return CdyneAddressTypeGetCongressionalDistrictByZipResponse
	 */
	public function GetCongressionalDistrictByZip(CdyneAddressTypeGetCongressionalDistrictByZip $_CdyneAddressTypeGetCongressionalDistrictByZip)
	{
		try
		{
			$this->setResult(self::getSoapClient()->GetCongressionalDistrictByZip(array('Zipcode'=>$_CdyneAddressTypeGetCongressionalDistrictByZip->getZipcode(),'LicenseKey'=>$_CdyneAddressTypeGetCongressionalDistrictByZip->getLicenseKey())));
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
	 * @return CdyneAddressTypeGetCongressionalDistrictByZipResponse
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