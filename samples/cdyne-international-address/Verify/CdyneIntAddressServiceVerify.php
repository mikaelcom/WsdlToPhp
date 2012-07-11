<?php
/**
 * Class file for CdyneIntAddressServiceVerify
 * @date 03/07/2012
 */
/**
 * Class CdyneIntAddressServiceVerify
 * @date 03/07/2012
 */
class CdyneIntAddressServiceVerify extends CdyneIntAddressWsdlClass
{
	/**
	 * Method to call VerifyAddressInternational
	 * @uses CdyneIntAddressWsdlClass::getSoapClient()
	 * @uses CdyneIntAddressWsdlClass::setResult()
	 * @uses CdyneIntAddressWsdlClass::getResult()
	 * @uses CdyneIntAddressWsdlClass::saveLastError()
	 * @uses CdyneIntAddressTypeVerifyAddressInternational::getRequest()
	 * @param CdyneIntAddressTypeVerifyAddressInternational VerifyAddressInternational
	 * @return CdyneIntAddressTypeVerifyAddressInternationalResponse
	 */
	public function VerifyAddressInternational(CdyneIntAddressTypeVerifyAddressInternational $_CdyneIntAddressTypeVerifyAddressInternational)
	{
		try
		{
			$this->setResult(self::getSoapClient()->VerifyAddressInternational(array('Request'=>$_CdyneIntAddressTypeVerifyAddressInternational->getRequest())));
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
	 * @return CdyneIntAddressTypeVerifyAddressInternationalResponse
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