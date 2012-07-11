<?php
/**
 * Class file for EbayTradingServiceLeave
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceLeave
 * @date 04/07/2012
 */
class EbayTradingServiceLeave extends EbayTradingWsdlClass
{
	/**
	 * Method to call LeaveFeedback
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeLeaveFeedbackRequestType::getItemID()
	 * @uses EbayTradingTypeLeaveFeedbackRequestType::getCommentText()
	 * @uses EbayTradingTypeLeaveFeedbackRequestType::getCommentType()
	 * @uses EbayTradingTypeLeaveFeedbackRequestType::getTransactionID()
	 * @uses EbayTradingTypeLeaveFeedbackRequestType::getTargetUser()
	 * @uses EbayTradingTypeLeaveFeedbackRequestType::getSellerItemRatingDetailArray()
	 * @uses EbayTradingTypeLeaveFeedbackRequestType::getOrderLineItemID()
	 * @param EbayTradingTypeLeaveFeedbackRequestType LeaveFeedbackRequestType
	 * @return EbayTradingTypeLeaveFeedbackResponseType
	 */
	public function LeaveFeedback(EbayTradingTypeLeaveFeedbackRequestType $_EbayTradingTypeLeaveFeedbackRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->LeaveFeedback(array('ItemID'=>$_EbayTradingTypeLeaveFeedbackRequestType->getItemID(),'CommentText'=>$_EbayTradingTypeLeaveFeedbackRequestType->getCommentText(),'CommentType'=>$_EbayTradingTypeLeaveFeedbackRequestType->getCommentType(),'TransactionID'=>$_EbayTradingTypeLeaveFeedbackRequestType->getTransactionID(),'TargetUser'=>$_EbayTradingTypeLeaveFeedbackRequestType->getTargetUser(),'SellerItemRatingDetailArray'=>$_EbayTradingTypeLeaveFeedbackRequestType->getSellerItemRatingDetailArray(),'OrderLineItemID'=>$_EbayTradingTypeLeaveFeedbackRequestType->getOrderLineItemID())));
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
	 * @return EbayTradingTypeLeaveFeedbackResponseType
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