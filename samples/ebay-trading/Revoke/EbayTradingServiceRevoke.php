<?php
/**
 * Class file for EbayTradingServiceRevoke
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceRevoke
 * @date 04/07/2012
 */
class EbayTradingServiceRevoke extends EbayTradingWsdlClass
{
	/**
	 * Method to call RevokeToken
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeRevokeTokenRequestType::getUnsubscribeNotification()
	 * @param EbayTradingTypeRevokeTokenRequestType RevokeTokenRequestType
	 * @return EbayTradingTypeRevokeTokenResponseType
	 */
	public function RevokeToken(EbayTradingTypeRevokeTokenRequestType $_EbayTradingTypeRevokeTokenRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RevokeToken(array('UnsubscribeNotification'=>$_EbayTradingTypeRevokeTokenRequestType->getUnsubscribeNotification())));
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
	 * @return EbayTradingTypeRevokeTokenResponseType
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