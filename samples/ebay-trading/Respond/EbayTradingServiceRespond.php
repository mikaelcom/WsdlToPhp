<?php
/**
 * Class file for EbayTradingServiceRespond
 * @date 04/07/2012
 */
/**
 * Class EbayTradingServiceRespond
 * @date 04/07/2012
 */
class EbayTradingServiceRespond extends EbayTradingWsdlClass
{
	/**
	 * Method to call RespondToBestOffer
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeRespondToBestOfferRequestType::getItemID()
	 * @uses EbayTradingTypeRespondToBestOfferRequestType::getBestOfferID()
	 * @uses EbayTradingTypeRespondToBestOfferRequestType::getAction()
	 * @uses EbayTradingTypeRespondToBestOfferRequestType::getSellerResponse()
	 * @uses EbayTradingTypeRespondToBestOfferRequestType::getCounterOfferPrice()
	 * @uses EbayTradingTypeRespondToBestOfferRequestType::getCounterOfferQuantity()
	 * @param EbayTradingTypeRespondToBestOfferRequestType RespondToBestOfferRequestType
	 * @return EbayTradingTypeRespondToBestOfferResponseType
	 */
	public function RespondToBestOffer(EbayTradingTypeRespondToBestOfferRequestType $_EbayTradingTypeRespondToBestOfferRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RespondToBestOffer(array('ItemID'=>$_EbayTradingTypeRespondToBestOfferRequestType->getItemID(),'BestOfferID'=>$_EbayTradingTypeRespondToBestOfferRequestType->getBestOfferID(),'Action'=>$_EbayTradingTypeRespondToBestOfferRequestType->getAction(),'SellerResponse'=>$_EbayTradingTypeRespondToBestOfferRequestType->getSellerResponse(),'CounterOfferPrice'=>$_EbayTradingTypeRespondToBestOfferRequestType->getCounterOfferPrice(),'CounterOfferQuantity'=>$_EbayTradingTypeRespondToBestOfferRequestType->getCounterOfferQuantity())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call RespondToFeedback
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeRespondToFeedbackRequestType::getFeedbackID()
	 * @uses EbayTradingTypeRespondToFeedbackRequestType::getItemID()
	 * @uses EbayTradingTypeRespondToFeedbackRequestType::getTransactionID()
	 * @uses EbayTradingTypeRespondToFeedbackRequestType::getTargetUserID()
	 * @uses EbayTradingTypeRespondToFeedbackRequestType::getResponseType()
	 * @uses EbayTradingTypeRespondToFeedbackRequestType::getResponseText()
	 * @uses EbayTradingTypeRespondToFeedbackRequestType::getOrderLineItemID()
	 * @param EbayTradingTypeRespondToFeedbackRequestType RespondToFeedbackRequestType
	 * @return EbayTradingTypeRespondToFeedbackResponseType
	 */
	public function RespondToFeedback(EbayTradingTypeRespondToFeedbackRequestType $_EbayTradingTypeRespondToFeedbackRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RespondToFeedback(array('FeedbackID'=>$_EbayTradingTypeRespondToFeedbackRequestType->getFeedbackID(),'ItemID'=>$_EbayTradingTypeRespondToFeedbackRequestType->getItemID(),'TransactionID'=>$_EbayTradingTypeRespondToFeedbackRequestType->getTransactionID(),'TargetUserID'=>$_EbayTradingTypeRespondToFeedbackRequestType->getTargetUserID(),'ResponseType'=>$_EbayTradingTypeRespondToFeedbackRequestType->getResponseType(),'ResponseText'=>$_EbayTradingTypeRespondToFeedbackRequestType->getResponseText(),'OrderLineItemID'=>$_EbayTradingTypeRespondToFeedbackRequestType->getOrderLineItemID())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call RespondToWantItNowPost
	 * @uses EbayTradingWsdlClass::getSoapClient()
	 * @uses EbayTradingWsdlClass::setResult()
	 * @uses EbayTradingWsdlClass::getResult()
	 * @uses EbayTradingWsdlClass::saveLastError()
	 * @uses EbayTradingTypeRespondToWantItNowPostRequestType::getItemID()
	 * @uses EbayTradingTypeRespondToWantItNowPostRequestType::getPostID()
	 * @param EbayTradingTypeRespondToWantItNowPostRequestType RespondToWantItNowPostRequestType
	 * @return EbayTradingTypeRespondToWantItNowPostResponseType
	 */
	public function RespondToWantItNowPost(EbayTradingTypeRespondToWantItNowPostRequestType $_EbayTradingTypeRespondToWantItNowPostRequestType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->RespondToWantItNowPost(array('ItemID'=>$_EbayTradingTypeRespondToWantItNowPostRequestType->getItemID(),'PostID'=>$_EbayTradingTypeRespondToWantItNowPostRequestType->getPostID())));
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
	 * @return EbayTradingTypeRespondToWantItNowPostResponseType
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