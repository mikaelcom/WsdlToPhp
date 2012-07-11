<?php
/**
 * Class file for EbayTradingServiceConfirm
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceConfirm
 * @date 04/07/2012
 */
class EbayTradingServiceConfirm extends EbayTradingWsdlClass
{
	/**
	 * Method to call ConfirmIdentity
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeConfirmIdentityRequestType::getSessionID()
	 * @param EbayTradingTypeConfirmIdentityRequestType ConfirmIdentityRequestType
	 * @return EbayTradingTypeConfirmIdentityResponseType
	 */
	public function ConfirmIdentity(EbayTradingTypeConfirmIdentityRequestType $_EbayTradingTypeConfirmIdentityRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ConfirmIdentity(array('SessionID'=>$_EbayTradingTypeConfirmIdentityRequestType->getSessionID())));
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
	 * @return EbayTradingTypeConfirmIdentityResponseType
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