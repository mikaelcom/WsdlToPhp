<?php
/**
 * Class file for AmazonFPSServiceRefund
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSServiceRefund
 * @date 10/07/2012
 */
class AmazonFPSServiceRefund extends AmazonFPSWsdlClass
{
	/**
	 * Method to call Refund
	 * Meta informations :
	 * 	- documentation : Refunds a previously completed transaction.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypeRefund::getTransactionId()
	 * @uses AmazonFPSTypeRefund::getRefundAmount()
	 * @uses AmazonFPSTypeRefund::getCallerReference()
	 * @uses AmazonFPSTypeRefund::getCallerDescription()
	 * @uses AmazonFPSTypeRefund::getMarketplaceRefundPolicy()
	 * @uses AmazonFPSTypeRefund::getOverrideIPNURL()
	 * @param AmazonFPSTypeRefund Refund
	 * @return AmazonFPSTypeRefundResponse
	 */
	public function Refund(AmazonFPSTypeRefund $_AmazonFPSTypeRefund)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Refund(array('TransactionId'=>$_AmazonFPSTypeRefund->getTransactionId(),'RefundAmount'=>$_AmazonFPSTypeRefund->getRefundAmount(),'CallerReference'=>$_AmazonFPSTypeRefund->getCallerReference(),'CallerDescription'=>$_AmazonFPSTypeRefund->getCallerDescription(),'MarketplaceRefundPolicy'=>$_AmazonFPSTypeRefund->getMarketplaceRefundPolicy(),'OverrideIPNURL'=>$_AmazonFPSTypeRefund->getOverrideIPNURL())));
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
	 * @return AmazonFPSTypeRefundResponse
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