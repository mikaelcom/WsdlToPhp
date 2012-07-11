<?php
/**
 * Class file for AmazonFPSServicePay
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSServicePay
 * @date 10/07/2012
 */
class AmazonFPSServicePay extends AmazonFPSWsdlClass
{
	/**
	 * Method to call Pay
	 * Meta informations :
	 * 	- documentation : Allows calling applications to move money from a sender to a recipient.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypePay::getSenderTokenId()
	 * @uses AmazonFPSTypePay::getRecipientTokenId()
	 * @uses AmazonFPSTypePay::getTransactionAmount()
	 * @uses AmazonFPSTypePay::getChargeFeeTo()
	 * @uses AmazonFPSTypePay::getCallerReference()
	 * @uses AmazonFPSTypePay::getCallerDescription()
	 * @uses AmazonFPSTypePay::getSenderDescription()
	 * @uses AmazonFPSTypePay::getDescriptorPolicy()
	 * @uses AmazonFPSTypePay::getTransactionTimeoutInMins()
	 * @uses AmazonFPSTypePay::getMarketplaceFixedFee()
	 * @uses AmazonFPSTypePay::getMarketplaceVariableFee()
	 * @uses AmazonFPSTypePay::getOverrideIPNURL()
	 * @param AmazonFPSTypePay Pay
	 * @return AmazonFPSTypePayResponse
	 */
	public function Pay(AmazonFPSTypePay $_AmazonFPSTypePay)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Pay(array('SenderTokenId'=>$_AmazonFPSTypePay->getSenderTokenId(),'RecipientTokenId'=>$_AmazonFPSTypePay->getRecipientTokenId(),'TransactionAmount'=>$_AmazonFPSTypePay->getTransactionAmount(),'ChargeFeeTo'=>$_AmazonFPSTypePay->getChargeFeeTo(),'CallerReference'=>$_AmazonFPSTypePay->getCallerReference(),'CallerDescription'=>$_AmazonFPSTypePay->getCallerDescription(),'SenderDescription'=>$_AmazonFPSTypePay->getSenderDescription(),'DescriptorPolicy'=>$_AmazonFPSTypePay->getDescriptorPolicy(),'TransactionTimeoutInMins'=>$_AmazonFPSTypePay->getTransactionTimeoutInMins(),'MarketplaceFixedFee'=>$_AmazonFPSTypePay->getMarketplaceFixedFee(),'MarketplaceVariableFee'=>$_AmazonFPSTypePay->getMarketplaceVariableFee(),'OverrideIPNURL'=>$_AmazonFPSTypePay->getOverrideIPNURL())));
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
	 * @return AmazonFPSTypePayResponse
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