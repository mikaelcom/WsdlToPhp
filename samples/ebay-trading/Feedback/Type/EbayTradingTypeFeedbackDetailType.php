<?php
/**
 * Class file for EbayTradingTypeFeedbackDetailType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFeedbackDetailType
 * Documentation : Detailed feedback information for a user. Conveys the score for the feedback, the textual comment, and other information.
 * @date 04/07/2012
 */
class EbayTradingTypeFeedbackDetailType extends EbayTradingWsdlClass
{
	/**
	 * The CommentingUser
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : eBay user ID for the user who left the feedback. Returned for a detail level of <b>ReturnAll</b> (if the parent is returned).
	 * @var EbayTradingTypeUserIDType
	 */
	public $CommentingUser;
	/**
	 * The CommentingUserScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Feedback score of the user indicated in <b>CommentingUser</b>. Returned for a detail level of <b>ReturnAll</b> (if the parent is returned).
	 * @var int
	 */
	public $CommentingUserScore;
	/**
	 * The CommentText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Text message left by user specified in <b>CommentingUser</b>. Used to provide a more in-depth description of the user's opinion of their order experience with the user about whom they left feedback. Returned as text in the language that the comment was originally left in. Returned for a detail level of <b>ReturnAll</b> (if the parent is returned).
	 * @var string
	 */
	public $CommentText;
	/**
	 * The CommentTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Date and time (in GMT) that the feedback was submitted to eBay. Returned for a detail level of <b>ReturnAll</b> (if the parent is returned).
	 * @var dateTime
	 */
	public $CommentTime;
	/**
	 * The CommentType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Type of feedback. Can be Positive, Neutral, Negative, or Withdrawn (see the <b>CommentTypeCodeType</b> code list). Positive feedback adds to the user's total feedback score, negative feedback lowers the score, and neutral feedback does not affect the score (but does affect the overall picture of the user's online reputation). Returned for a detail level of <b>ReturnAll</b> (if the parent is returned).
	 * @var EbayTradingTypeCommentTypeCodeType
	 */
	public $CommentType;
	/**
	 * The FeedbackResponse
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Textual comment that the user targeted by feedback may leave in response or rebuttal to the feedback. (Cannot be submitted or edited via the API.)
	 * @var string
	 */
	public $FeedbackResponse;
	/**
	 * The Followup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Explanation a user can give to a response. (Cannot be submitted or edited via the API.) Returned for a detail level of <b>ReturnAll</b> (if the parent is returned).
	 * @var string
	 */
	public $Followup;
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID that uniquely identifies the item listing. Returned for a detail level of <b>ReturnAll</b> (if the parent is returned).
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The Role
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the user who was the feedback recipient was the Buyer or the Seller for the corresponding order line item. Returned for a detail level of <b>ReturnAll</b> (if the parent is returned).
	 * @var EbayTradingTypeTradingRoleCodeType
	 */
	public $Role;
	/**
	 * The ItemTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name of the item listing for which feedback was provided. Returned as CDATA. This value can be returned as part of the Detailed Seller Ratings feature. Not returned if a listing ended more than 90 days ago. <br><br> <span class="tablenote"><b>Note:</b> The maximum length of an eBay Item Title is increasing to 80 characters in Version 735. </span>
	 * @var string
	 */
	public $ItemTitle;
	/**
	 * The ItemPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The final price for the item, associated with the currency identified by the <b>CurrencyID</b> attribute of the <b>AmountType</b>. This value can be returned as part of the Detailed Seller Ratings feature. Not returned if a listing ended more than 90 days ago.
	 * @var EbayTradingTypeAmountType
	 */
	public $ItemPrice;
	/**
	 * The FeedbackID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for the feedback entry. Returned for a detail level of <b>ReturnAll</b> (if the parent is returned).
	 * @var string
	 */
	public $FeedbackID;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for an eBay order line item (transaction) for which the feedback entry was left. This field is not returned if the feedback was left for an auction listing, since all auction listings have a <b>TransactionID</b> value of 0.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The CommentReplaced
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether eBay replaced the comment with a message that the comment was removed.
	 * @var boolean
	 */
	public $CommentReplaced;
	/**
	 * The ResponseReplaced
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether eBay replaced the response with a message that the response was removed.
	 * @var boolean
	 */
	public $ResponseReplaced;
	/**
	 * The FollowUpReplaced
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether eBay replaced the follow-up with a message that the follow-up was removed.
	 * @var boolean
	 */
	public $FollowUpReplaced;
	/**
	 * The Countable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies if a user's feedback score is or is not countable. This field is returned only when a user's feedback score is not countable (value is false). <br><br> Only feedback left by verified users can count toward the aggregate score of another user. If a user is not verified and leaves a feedback, then later becomes verified, that feedback will still not be counted. Or, if a user is verified and at some later date changes to unverified status, the feedback left while the user was verified remains countable. So you cannot determine a user's current verification status from whether or not feedback they've left is or was countable. Whether or not feedback is countable has nothing to do with the verification status of the one receiving the comment, only the one leaving the feedback.
	 * @var boolean
	 */
	public $Countable;
	/**
	 * The FeedbackRevised
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether this feedback was revised.
	 * @var boolean
	 */
	public $FeedbackRevised;
	/**
	 * The OrderLineItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <b>OrderLineItemID</b> is a unique identifier for an eBay order line item and is based upon the concatenation of <b>ItemID</b> and <b>TransactionID</b>, with a hyphen in between these two IDs. <br>
	 * @var string
	 */
	public $OrderLineItemID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeUserIDType CommentingUser
	 * @param int CommentingUserScore
	 * @param string CommentText
	 * @param dateTime CommentTime
	 * @param EbayTradingTypeCommentTypeCodeType CommentType
	 * @param string FeedbackResponse
	 * @param string Followup
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypeTradingRoleCodeType Role
	 * @param string ItemTitle
	 * @param EbayTradingTypeAmountType ItemPrice
	 * @param string FeedbackID
	 * @param string TransactionID
	 * @param boolean CommentReplaced
	 * @param boolean ResponseReplaced
	 * @param boolean FollowUpReplaced
	 * @param boolean Countable
	 * @param boolean FeedbackRevised
	 * @param string OrderLineItemID
	 * @param DOMDocument any
	 * @return EbayTradingTypeFeedbackDetailType
	 */
	public function __construct($_CommentingUser = null,$_CommentingUserScore = null,$_CommentText = null,$_CommentTime = null,$_CommentType = null,$_FeedbackResponse = null,$_Followup = null,$_ItemID = null,$_Role = null,$_ItemTitle = null,$_ItemPrice = null,$_FeedbackID = null,$_TransactionID = null,$_CommentReplaced = null,$_ResponseReplaced = null,$_FollowUpReplaced = null,$_Countable = null,$_FeedbackRevised = null,$_OrderLineItemID = null,$_any = null)
	{
		parent::__construct(array('CommentingUser'=>$_CommentingUser,'CommentingUserScore'=>$_CommentingUserScore,'CommentText'=>$_CommentText,'CommentTime'=>$_CommentTime,'CommentType'=>$_CommentType,'FeedbackResponse'=>$_FeedbackResponse,'Followup'=>$_Followup,'ItemID'=>$_ItemID,'Role'=>$_Role,'ItemTitle'=>$_ItemTitle,'ItemPrice'=>$_ItemPrice,'FeedbackID'=>$_FeedbackID,'TransactionID'=>$_TransactionID,'CommentReplaced'=>$_CommentReplaced,'ResponseReplaced'=>$_ResponseReplaced,'FollowUpReplaced'=>$_FollowUpReplaced,'Countable'=>$_Countable,'FeedbackRevised'=>$_FeedbackRevised,'OrderLineItemID'=>$_OrderLineItemID,'any'=>$_any));
	}
	/**
	 * Set CommentingUser
	 * @param UserIDType CommentingUser
	 * @return UserIDType
	 */
	public function setCommentingUser($_CommentingUser)
	{
		return ($this->CommentingUser = EbayTradingTypeUserIDType::valueIsValid($_CommentingUser)?$_CommentingUser:null);
	}
	/**
	 * Get CommentingUser
	 * @return EbayTradingTypeUserIDType
	 */
	public function getCommentingUser()
	{
		return $this->CommentingUser;
	}
	/**
	 * Set CommentingUserScore
	 * @param int CommentingUserScore
	 * @return int
	 */
	public function setCommentingUserScore($_CommentingUserScore)
	{
		return ($this->CommentingUserScore = $_CommentingUserScore);
	}
	/**
	 * Get CommentingUserScore
	 * @return int
	 */
	public function getCommentingUserScore()
	{
		return $this->CommentingUserScore;
	}
	/**
	 * Set CommentText
	 * @param string CommentText
	 * @return string
	 */
	public function setCommentText($_CommentText)
	{
		return ($this->CommentText = $_CommentText);
	}
	/**
	 * Get CommentText
	 * @return string
	 */
	public function getCommentText()
	{
		return $this->CommentText;
	}
	/**
	 * Set CommentTime
	 * @param dateTime CommentTime
	 * @return dateTime
	 */
	public function setCommentTime($_CommentTime)
	{
		return ($this->CommentTime = $_CommentTime);
	}
	/**
	 * Get CommentTime
	 * @return dateTime
	 */
	public function getCommentTime()
	{
		return $this->CommentTime;
	}
	/**
	 * Set CommentType
	 * @param CommentTypeCodeType CommentType
	 * @return CommentTypeCodeType
	 */
	public function setCommentType($_CommentType)
	{
		return ($this->CommentType = EbayTradingTypeCommentTypeCodeType::valueIsValid($_CommentType)?$_CommentType:null);
	}
	/**
	 * Get CommentType
	 * @return EbayTradingTypeCommentTypeCodeType
	 */
	public function getCommentType()
	{
		return $this->CommentType;
	}
	/**
	 * Set FeedbackResponse
	 * @param string FeedbackResponse
	 * @return string
	 */
	public function setFeedbackResponse($_FeedbackResponse)
	{
		return ($this->FeedbackResponse = $_FeedbackResponse);
	}
	/**
	 * Get FeedbackResponse
	 * @return string
	 */
	public function getFeedbackResponse()
	{
		return $this->FeedbackResponse;
	}
	/**
	 * Set Followup
	 * @param string Followup
	 * @return string
	 */
	public function setFollowup($_Followup)
	{
		return ($this->Followup = $_Followup);
	}
	/**
	 * Get Followup
	 * @return string
	 */
	public function getFollowup()
	{
		return $this->Followup;
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
	 * Set Role
	 * @param TradingRoleCodeType Role
	 * @return TradingRoleCodeType
	 */
	public function setRole($_Role)
	{
		return ($this->Role = EbayTradingTypeTradingRoleCodeType::valueIsValid($_Role)?$_Role:null);
	}
	/**
	 * Get Role
	 * @return EbayTradingTypeTradingRoleCodeType
	 */
	public function getRole()
	{
		return $this->Role;
	}
	/**
	 * Set ItemTitle
	 * @param string ItemTitle
	 * @return string
	 */
	public function setItemTitle($_ItemTitle)
	{
		return ($this->ItemTitle = $_ItemTitle);
	}
	/**
	 * Get ItemTitle
	 * @return string
	 */
	public function getItemTitle()
	{
		return $this->ItemTitle;
	}
	/**
	 * Set ItemPrice
	 * @param AmountType ItemPrice
	 * @return AmountType
	 */
	public function setItemPrice($_ItemPrice)
	{
		return ($this->ItemPrice = $_ItemPrice);
	}
	/**
	 * Get ItemPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getItemPrice()
	{
		return $this->ItemPrice;
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
	 * Set CommentReplaced
	 * @param boolean CommentReplaced
	 * @return boolean
	 */
	public function setCommentReplaced($_CommentReplaced)
	{
		return ($this->CommentReplaced = $_CommentReplaced);
	}
	/**
	 * Get CommentReplaced
	 * @return boolean
	 */
	public function getCommentReplaced()
	{
		return $this->CommentReplaced;
	}
	/**
	 * Set ResponseReplaced
	 * @param boolean ResponseReplaced
	 * @return boolean
	 */
	public function setResponseReplaced($_ResponseReplaced)
	{
		return ($this->ResponseReplaced = $_ResponseReplaced);
	}
	/**
	 * Get ResponseReplaced
	 * @return boolean
	 */
	public function getResponseReplaced()
	{
		return $this->ResponseReplaced;
	}
	/**
	 * Set FollowUpReplaced
	 * @param boolean FollowUpReplaced
	 * @return boolean
	 */
	public function setFollowUpReplaced($_FollowUpReplaced)
	{
		return ($this->FollowUpReplaced = $_FollowUpReplaced);
	}
	/**
	 * Get FollowUpReplaced
	 * @return boolean
	 */
	public function getFollowUpReplaced()
	{
		return $this->FollowUpReplaced;
	}
	/**
	 * Set Countable
	 * @param boolean Countable
	 * @return boolean
	 */
	public function setCountable($_Countable)
	{
		return ($this->Countable = $_Countable);
	}
	/**
	 * Get Countable
	 * @return boolean
	 */
	public function getCountable()
	{
		return $this->Countable;
	}
	/**
	 * Set FeedbackRevised
	 * @param boolean FeedbackRevised
	 * @return boolean
	 */
	public function setFeedbackRevised($_FeedbackRevised)
	{
		return ($this->FeedbackRevised = $_FeedbackRevised);
	}
	/**
	 * Get FeedbackRevised
	 * @return boolean
	 */
	public function getFeedbackRevised()
	{
		return $this->FeedbackRevised;
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
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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