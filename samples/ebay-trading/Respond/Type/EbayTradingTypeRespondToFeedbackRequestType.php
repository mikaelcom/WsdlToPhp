<?php
/**
 * Class file for EbayTradingTypeRespondToFeedbackRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRespondToFeedbackRequestType
 * Documentation : Used to reply to feedback that has been left for a user, or to post a follow-up comment to a feedback comment the user has left for someone else.
 * @date 04/07/2012
 */
class EbayTradingTypeRespondToFeedbackRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The FeedbackID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A unique identifier for a Feedback record. Buying and selling partners leave feedback for one another after the completion of an order. Feedback is left at the order line item (transaction) level, so a Feedback comment for each line item in a Combined Payment order is expected from the buyer and seller. A unique <b>FeedbackID</b> is created whenever a buyer leaves feedback for a seller, and vice versa. A <b>FeedbackID</b> is created by eBay when feedback is left through the eBay site, or through the <b>LeaveFeedback</b> call. <b>FeedbackIDs</b> can be retrieved with the <b>GetFeedback</b> call. In the <b>RespondToFeedback</b> call, <b>FeedbackID</b> can be used as an input filter to respond to a specific Feedback comment. Since Feedback is always linked to a unique order line item, an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> can also be used to respond to a Feedback comment.
	 * @var string
	 */
	public $FeedbackID;
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay item listing. A listing can have multiple order line items (transactions), but only one <b>ItemID</b>. An <b>ItemID</b> can be paired up with a corresponding <b>TransactionID</b> and used as an input filter to respond to a Feedback comment in the <b>RespondToFeedback</b> call. Unless the specific Feedback record is identified by a <b>FeedbackID</b> or an <b>OrderLineItemID</b> in the request, an <b>ItemID</b>/<b>TransactionID</b> pair is required.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay order line item (transaction). A <b>TransactionID</b> can be paired up with its corresponding <b>ItemID</b> and used as an input filter to respond to a Feedback comment in the <b>RespondToFeedback</b> call. Unless the specific Feedback record is identified by a <b>FeedbackID</b> or an <b>OrderLineItemID</b> in the request, an <b>ItemID</b>/<b>TransactionID</b> pair is required.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The TargetUserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The eBay user ID of the caller's order partner. The caller is either replyting to or following up on this user's Feedback comment.
	 * @var EbayTradingTypeUserIDType
	 */
	public $TargetUserID;
	/**
	 * The ResponseType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether the response is a reply or a follow-up to a Feedback comment left by the user identified in the <b>TargetUserID</b> field.
	 * @var EbayTradingTypeFeedbackResponseCodeType
	 */
	public $ResponseType;
	/**
	 * The ResponseText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Textual comment that the user who is subject of feedback may leave in response or rebuttal to the Feedback comment. Alternatively, when the <b>ResponseType</b> is <b>FollowUp</b>, this value contains the text of the follow-up comment.
	 * @var string
	 */
	public $ResponseText;
	/**
	 * The OrderLineItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>OrderLineItemID</b> is a unique identifier for an eBay order line item and is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. Since Feedback is always linked to a unique order line item, an <b>OrderLineItemID</b> can be used to respond to a Feedback comment. <br><br> Unless an <b>ItemID</b>/<b>TransactionID</b> pair or a <b>FeedbackID</b> is used to identify a Feedback record, the <b>OrderLineItemID</b> must be specified. <br>
	 * @var string
	 */
	public $OrderLineItemID;
	/**
	 * Constructor
	 * @param string FeedbackID
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param string TransactionID
	 * @param EbayTradingTypeUserIDType TargetUserID
	 * @param EbayTradingTypeFeedbackResponseCodeType ResponseType
	 * @param string ResponseText
	 * @param string OrderLineItemID
	 * @return EbayTradingTypeRespondToFeedbackRequestType
	 */
	public function __construct($_FeedbackID = null,$_ItemID = null,$_TransactionID = null,$_TargetUserID = null,$_ResponseType = null,$_ResponseText = null,$_OrderLineItemID = null)
	{
		EbayTradingWsdlClass::__construct(array('FeedbackID'=>$_FeedbackID,'ItemID'=>$_ItemID,'TransactionID'=>$_TransactionID,'TargetUserID'=>$_TargetUserID,'ResponseType'=>$_ResponseType,'ResponseText'=>$_ResponseText,'OrderLineItemID'=>$_OrderLineItemID));
	}
	/**
	 * Set FeedbackID
	 * @param string FeedbackID
	 * @return string
	 */
	public function setFeedbackID($_FeedbackID)
	{
		return ($this->FeedbackID = $_FeedbackID);
	}
	/**
	 * Get FeedbackID
	 * @return string
	 */
	public function getFeedbackID()
	{
		return $this->FeedbackID;
	}
	/**
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = EbayTradingTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set TransactionID
	 * @param string TransactionID
	 * @return string
	 */
	public function setTransactionID($_TransactionID)
	{
		return ($this->TransactionID = $_TransactionID);
	}
	/**
	 * Get TransactionID
	 * @return string
	 */
	public function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * Set TargetUserID
	 * @param UserIDType TargetUserID
	 * @return UserIDType
	 */
	public function setTargetUserID($_TargetUserID)
	{
		return ($this->TargetUserID = EbayTradingTypeUserIDType::valueIsValid($_TargetUserID)?$_TargetUserID:null);
	}
	/**
	 * Get TargetUserID
	 * @return EbayTradingTypeUserIDType
	 */
	public function getTargetUserID()
	{
		return $this->TargetUserID;
	}
	/**
	 * Set ResponseType
	 * @param FeedbackResponseCodeType ResponseType
	 * @return FeedbackResponseCodeType
	 */
	public function setResponseType($_ResponseType)
	{
		return ($this->ResponseType = EbayTradingTypeFeedbackResponseCodeType::valueIsValid($_ResponseType)?$_ResponseType:null);
	}
	/**
	 * Get ResponseType
	 * @return EbayTradingTypeFeedbackResponseCodeType
	 */
	public function getResponseType()
	{
		return $this->ResponseType;
	}
	/**
	 * Set ResponseText
	 * @param string ResponseText
	 * @return string
	 */
	public function setResponseText($_ResponseText)
	{
		return ($this->ResponseText = $_ResponseText);
	}
	/**
	 * Get ResponseText
	 * @return string
	 */
	public function getResponseText()
	{
		return $this->ResponseText;
	}
	/**
	 * Set OrderLineItemID
	 * @param string OrderLineItemID
	 * @return string
	 */
	public function setOrderLineItemID($_OrderLineItemID)
	{
		return ($this->OrderLineItemID = $_OrderLineItemID);
	}
	/**
	 * Get OrderLineItemID
	 * @return string
	 */
	public function getOrderLineItemID()
	{
		return $this->OrderLineItemID;
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