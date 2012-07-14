<?php
/**
 * Class file for PayPalServiceBMB
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceBMB
 * @date 14/07/2012
 */
class PayPalServiceBMB extends PayPalWsdlClass
{
	/**
	 * Method to call BMButtonSearch
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeBMButtonSearchReq::getBMButtonSearchRequest()
	 * @param PayPalTypeBMButtonSearchReq BMButtonSearchReq
	 * @return PayPalTypeBMButtonSearchResponseType
	 */
	public function BMButtonSearch(PayPalTypeBMButtonSearchReq $_PayPalTypeBMButtonSearchReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->BMButtonSearch(array('BMButtonSearchRequest'=>$_PayPalTypeBMButtonSearchReq->getBMButtonSearchRequest())));
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
	 * @return PayPalTypeBMButtonSearchResponseType
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