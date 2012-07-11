<?php
/**
 * Class file for EbayTradingTypeSetSellingManagerFeedbackOptionsRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSetSellingManagerFeedbackOptionsRequestType
 * Documentation : Enables Selling Manager subscribers to store standard feedback comments that can be left for their buyers. Selling Manager Pro subscribers can also specify what events, if any, will trigger an automated feedback to buyers.
 * @date 04/07/2012
 */
class EbayTradingTypeSetSellingManagerFeedbackOptionsRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The AutomatedLeaveFeedbackEvent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the event that will trigger automated feedback to the buyer. Applies to Selling Manager Pro subscribers only.
	 * @var EbayTradingTypeAutomatedLeaveFeedbackEventCodeType
	 */
	public $AutomatedLeaveFeedbackEvent;
	/**
	 * The StoredComments
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains a set of comments from which one can be selected to leave feedback for a buyer. If automated feedback is used, a comment is selected from the set randomly. Automated feedback applies to Selling Manager Pro subscribers only. Stored comments cannot be replaced or edited individually. Submitting a stored comments array replaces all existing stored comments. <br>
	 * @var EbayTradingTypeFeedbackCommentArrayType
	 */
	public $StoredComments;
	/**
	 * Constructor
	 * @param EbayTradingTypeAutomatedLeaveFeedbackEventCodeType AutomatedLeaveFeedbackEvent
	 * @param EbayTradingTypeFeedbackCommentArrayType StoredComments
	 * @return EbayTradingTypeSetSellingManagerFeedbackOptionsRequestType
	 */
	public function __construct($_AutomatedLeaveFeedbackEvent = null,$_StoredComments = null)
	{
		EbayTradingWsdlClass::__construct(array('AutomatedLeaveFeedbackEvent'=>$_AutomatedLeaveFeedbackEvent,'StoredComments'=>$_StoredComments));
	}
	/**
	 * Set AutomatedLeaveFeedbackEvent
	 * @param AutomatedLeaveFeedbackEventCodeType AutomatedLeaveFeedbackEvent
	 * @return AutomatedLeaveFeedbackEventCodeType
	 */
	public function setAutomatedLeaveFeedbackEvent($_AutomatedLeaveFeedbackEvent)
	{
		return ($this->AutomatedLeaveFeedbackEvent = EbayTradingTypeAutomatedLeaveFeedbackEventCodeType::valueIsValid($_AutomatedLeaveFeedbackEvent)?$_AutomatedLeaveFeedbackEvent:null);
	}
	/**
	 * Get AutomatedLeaveFeedbackEvent
	 * @return EbayTradingTypeAutomatedLeaveFeedbackEventCodeType
	 */
	public function getAutomatedLeaveFeedbackEvent()
	{
		return $this->AutomatedLeaveFeedbackEvent;
	}
	/**
	 * Set StoredComments
	 * @param FeedbackCommentArrayType StoredComments
	 * @return FeedbackCommentArrayType
	 */
	public function setStoredComments($_StoredComments)
	{
		return ($this->StoredComments = $_StoredComments);
	}
	/**
	 * Get StoredComments
	 * @return EbayTradingTypeFeedbackCommentArrayType
	 */
	public function getStoredComments()
	{
		return $this->StoredComments;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>