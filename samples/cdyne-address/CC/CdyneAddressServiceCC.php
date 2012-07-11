<?php
/**
 * Class file for CdyneAddressServiceCC
 * @date 02/07/2012
 */
/**
 * Class CdyneAddressServiceCC
 * @date 02/07/2012
 */
class CdyneAddressServiceCC extends CdyneAddressWsdlClass
{
	/**
	 * Method to call CCServerCheck
	 * @uses CdyneAddressWsdlClass::getSoapClient()
	 * @uses CdyneAddressWsdlClass::setResult()
	 * @uses CdyneAddressWsdlClass::getResult()
	 * @uses CdyneAddressWsdlClass::saveLastError()
	 * @param CdyneAddressTypeCCServerCheck CCServerCheck
	 * @return CdyneAddressTypeCCServerCheckResponse
	 */
	public function CCServerCheck(CdyneAddressTypeCCServerCheck $_CdyneAddressTypeCCServerCheck)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CCServerCheck(array()));
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
	 * @return CdyneAddressTypeCCServerCheckResponse
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