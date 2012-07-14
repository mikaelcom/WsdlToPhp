<?php
/**
 * Class file for PayPalServiceAddress
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceAddress
 * @date 14/07/2012
 */
class PayPalServiceAddress extends PayPalWsdlClass
{
	/**
	 * Method to call AddressVerify
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeAddressVerifyReq::getAddressVerifyRequest()
	 * @param PayPalTypeAddressVerifyReq AddressVerifyReq
	 * @return PayPalTypeAddressVerifyResponseType
	 */
	public function AddressVerify(PayPalTypeAddressVerifyReq $_PayPalTypeAddressVerifyReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->AddressVerify(array('AddressVerifyRequest'=>$_PayPalTypeAddressVerifyReq->getAddressVerifyRequest())));
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
	 * @return PayPalTypeAddressVerifyResponseType
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