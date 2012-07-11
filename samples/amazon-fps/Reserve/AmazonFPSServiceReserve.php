<?php
/**
 * Class file for AmazonFPSServiceReserve
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSServiceReserve
 * @date 10/07/2012
 */
class AmazonFPSServiceReserve extends AmazonFPSWsdlClass
{
	/**
	 * Method to call Reserve
	 * Meta informations :
	 * 	- documentation : Reserve API is part of the Reserve and Settle API conjunction that serve the purpose of a pay where the authorization and settlement have a timing difference.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypeReserve::getSenderTokenId()
	 * @uses AmazonFPSTypeReserve::getRecipientTokenId()
	 * @uses AmazonFPSTypeReserve::getTransactionAmount()
	 * @uses AmazonFPSTypeReserve::getChargeFeeTo()
	 * @uses AmazonFPSTypeReserve::getCallerReference()
	 * @uses AmazonFPSTypeReserve::getCallerDescription()
	 * @uses AmazonFPSTypeReserve::getSenderDescription()
	 * @uses AmazonFPSTypeReserve::getDescriptorPolicy()
	 * @uses AmazonFPSTypeReserve::getTransactionTimeoutInMins()
	 * @uses AmazonFPSTypeReserve::getMarketplaceFixedFee()
	 * @uses AmazonFPSTypeReserve::getMarketplaceVariableFee()
	 * @uses AmazonFPSTypeReserve::getOverrideIPNURL()
	 * @param AmazonFPSTypeReserve Reserve
	 * @return AmazonFPSTypeReserveResponse
	 */
	public function Reserve(AmazonFPSTypeReserve $_AmazonFPSTypeReserve)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Reserve(array('SenderTokenId'=>$_AmazonFPSTypeReserve->getSenderTokenId(),'RecipientTokenId'=>$_AmazonFPSTypeReserve->getRecipientTokenId(),'TransactionAmount'=>$_AmazonFPSTypeReserve->getTransactionAmount(),'ChargeFeeTo'=>$_AmazonFPSTypeReserve->getChargeFeeTo(),'CallerReference'=>$_AmazonFPSTypeReserve->getCallerReference(),'CallerDescription'=>$_AmazonFPSTypeReserve->getCallerDescription(),'SenderDescription'=>$_AmazonFPSTypeReserve->getSenderDescription(),'DescriptorPolicy'=>$_AmazonFPSTypeReserve->getDescriptorPolicy(),'TransactionTimeoutInMins'=>$_AmazonFPSTypeReserve->getTransactionTimeoutInMins(),'MarketplaceFixedFee'=>$_AmazonFPSTypeReserve->getMarketplaceFixedFee(),'MarketplaceVariableFee'=>$_AmazonFPSTypeReserve->getMarketplaceVariableFee(),'OverrideIPNURL'=>$_AmazonFPSTypeReserve->getOverrideIPNURL())));
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
	 * @return AmazonFPSTypeReserveResponse
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