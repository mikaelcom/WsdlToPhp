<?php
/**
 * Class file for EbayTradingServiceFetch
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceFetch
 * @date 04/07/2012
 */
class EbayTradingServiceFetch extends EbayTradingWsdlClass
{
	/**
	 * Method to call FetchToken
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeFetchTokenRequestType::getSecretID()
	 * @uses EbayTradingTypeFetchTokenRequestType::getSessionID()
	 * @param EbayTradingTypeFetchTokenRequestType FetchTokenRequestType
	 * @return EbayTradingTypeFetchTokenResponseType
	 */
	public function FetchToken(EbayTradingTypeFetchTokenRequestType $_EbayTradingTypeFetchTokenRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->FetchToken(array('SecretID'=>$_EbayTradingTypeFetchTokenRequestType->getSecretID(),'SessionID'=>$_EbayTradingTypeFetchTokenRequestType->getSessionID())));
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
	 * @return EbayTradingTypeFetchTokenResponseType
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