<?php
/**
 * Class file for CdyneAddressServiceBarcode
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressServiceBarcode
 * @date 02/07/2012
 */
class CdyneAddressServiceBarcode extends CdyneAddressWsdlClass
{
	/**
	 * Method to call BarcodeFontURL
	 * @uses CdyneAddressWsdlClass::getSoapClient()
	 * @uses CdyneAddressWsdlClass::setResult()
	 * @uses CdyneAddressWsdlClass::getResult()
	 * @uses CdyneAddressWsdlClass::saveLastError()
	 * @param CdyneAddressTypeBarcodeFontURL BarcodeFontURL
	 * @return CdyneAddressTypeBarcodeFontURLResponse
	 */
	public function BarcodeFontURL(CdyneAddressTypeBarcodeFontURL $_CdyneAddressTypeBarcodeFontURL)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BarcodeFontURL(array()));
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
	 * @return CdyneAddressTypeBarcodeFontURLResponse
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