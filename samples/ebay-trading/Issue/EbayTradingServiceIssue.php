<?php
/**
 * Class file for EbayTradingServiceIssue
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceIssue
 * @date 04/07/2012
 */
class EbayTradingServiceIssue extends EbayTradingWsdlClass
{
	/**
	 * Method to call IssueRefund
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeIssueRefundRequestType::getItemID()
	 * @uses EbayTradingTypeIssueRefundRequestType::getTransactionID()
	 * @uses EbayTradingTypeIssueRefundRequestType::getRefundReason()
	 * @uses EbayTradingTypeIssueRefundRequestType::getRefundType()
	 * @uses EbayTradingTypeIssueRefundRequestType::getRefundAmount()
	 * @uses EbayTradingTypeIssueRefundRequestType::getRefundMessage()
	 * @uses EbayTradingTypeIssueRefundRequestType::getOrderLineItemID()
	 * @param EbayTradingTypeIssueRefundRequestType IssueRefundRequestType
	 * @return EbayTradingTypeIssueRefundResponseType
	 */
	public function IssueRefund(EbayTradingTypeIssueRefundRequestType $_EbayTradingTypeIssueRefundRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->IssueRefund(array('ItemID'=>$_EbayTradingTypeIssueRefundRequestType->getItemID(),'TransactionID'=>$_EbayTradingTypeIssueRefundRequestType->getTransactionID(),'RefundReason'=>$_EbayTradingTypeIssueRefundRequestType->getRefundReason(),'RefundType'=>$_EbayTradingTypeIssueRefundRequestType->getRefundType(),'RefundAmount'=>$_EbayTradingTypeIssueRefundRequestType->getRefundAmount(),'RefundMessage'=>$_EbayTradingTypeIssueRefundRequestType->getRefundMessage(),'OrderLineItemID'=>$_EbayTradingTypeIssueRefundRequestType->getOrderLineItemID())));
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
	 * @return EbayTradingTypeIssueRefundResponseType
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