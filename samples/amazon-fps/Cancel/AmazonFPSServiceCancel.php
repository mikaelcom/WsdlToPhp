<?php
/**
 * Class file for AmazonFPSServiceCancel
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSServiceCancel
 * @date 10/07/2012
 */
class AmazonFPSServiceCancel extends AmazonFPSWsdlClass
{
	/**
	 * Method to call CancelToken
	 * Meta informations :
	 * 	- documentation : Cancels any token installed by the calling application on its own account.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypeCancelToken::getTokenId()
	 * @uses AmazonFPSTypeCancelToken::getReasonText()
	 * @uses AmazonFPSTypeCancelToken::getOverrideIPNURL()
	 * @param AmazonFPSTypeCancelToken CancelToken
	 * @return AmazonFPSTypeCancelTokenResponse
	 */
	public function CancelToken(AmazonFPSTypeCancelToken $_AmazonFPSTypeCancelToken)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CancelToken(array('TokenId'=>$_AmazonFPSTypeCancelToken->getTokenId(),'ReasonText'=>$_AmazonFPSTypeCancelToken->getReasonText(),'OverrideIPNURL'=>$_AmazonFPSTypeCancelToken->getOverrideIPNURL())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call Cancel
	 * Meta informations :
	 * 	- documentation : Cancels an ongoing transaction and puts it in cancelled state.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypeCancel::getTransactionId()
	 * @uses AmazonFPSTypeCancel::getDescription()
	 * @uses AmazonFPSTypeCancel::getOverrideIPNURL()
	 * @param AmazonFPSTypeCancel Cancel
	 * @return AmazonFPSTypeCancelResponse
	 */
	public function Cancel(AmazonFPSTypeCancel $_AmazonFPSTypeCancel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->Cancel(array('TransactionId'=>$_AmazonFPSTypeCancel->getTransactionId(),'Description'=>$_AmazonFPSTypeCancel->getDescription(),'OverrideIPNURL'=>$_AmazonFPSTypeCancel->getOverrideIPNURL())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call CancelSubscriptionAndRefund
	 * Meta informations :
	 * 	- documentation : Cancels a subscription.
	 * @uses AmazonFPSWsdlClass::getSoapClient()
	 * @uses AmazonFPSWsdlClass::setResult()
	 * @uses AmazonFPSWsdlClass::getResult()
	 * @uses AmazonFPSWsdlClass::saveLastError()
	 * @uses AmazonFPSTypeCancelSubscriptionAndRefund::getSubscriptionId()
	 * @uses AmazonFPSTypeCancelSubscriptionAndRefund::getRefundAmount()
	 * @uses AmazonFPSTypeCancelSubscriptionAndRefund::getCallerReference()
	 * @uses AmazonFPSTypeCancelSubscriptionAndRefund::getCancelReason()
	 * @param AmazonFPSTypeCancelSubscriptionAndRefund CancelSubscriptionAndRefund
	 * @return AmazonFPSTypeCancelSubscriptionAndRefundResponse
	 */
	public function CancelSubscriptionAndRefund(AmazonFPSTypeCancelSubscriptionAndRefund $_AmazonFPSTypeCancelSubscriptionAndRefund)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CancelSubscriptionAndRefund(array('SubscriptionId'=>$_AmazonFPSTypeCancelSubscriptionAndRefund->getSubscriptionId(),'RefundAmount'=>$_AmazonFPSTypeCancelSubscriptionAndRefund->getRefundAmount(),'CallerReference'=>$_AmazonFPSTypeCancelSubscriptionAndRefund->getCallerReference(),'CancelReason'=>$_AmazonFPSTypeCancelSubscriptionAndRefund->getCancelReason())));
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
	 * @return AmazonFPSTypeCancelSubscriptionAndRefundResponse
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