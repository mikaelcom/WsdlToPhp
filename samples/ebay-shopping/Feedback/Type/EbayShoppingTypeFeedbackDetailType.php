<?php
/**
 * Class file for EbayShoppingTypeFeedbackDetailType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeFeedbackDetailType
 * Documentation : Detailed feedback information for a user. Conveys the score for the feedback, the textual comment, and other information.
 * @date 05/07/2012
 */
class EbayShoppingTypeFeedbackDetailType extends EbayShoppingWsdlClass
{
	/**
	 * The CommentingUser
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : eBay user ID for the user who left the feedback.
	 * @var string
	 */
	public $CommentingUser;
	/**
	 * The CommentingUserScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Feedback score of the user in CommentingUser.
	 * @var int
	 */
	public $CommentingUserScore;
	/**
	 * The CommentText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Text message left by the user in CommentingUser. Used to provide a more in-depth description of the user's opinion of the transaction. Returned as text in the language that the comment was originally left in.
	 * @var string
	 */
	public $CommentText;
	/**
	 * The CommentTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Date and time (in GMT) that the feedback was submitted to eBay.
	 * @var dateTime
	 */
	public $CommentTime;
	/**
	 * The CommentType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Type of feedback. Can be Positive, Neutral, Negative, or Withdrawn (see the CommentTypeCodeType code list). Positive feedbacks add to the user's total feedback score, negative feedbacks lower the score, and neutral feedbacks do not affect the score (but do affect the overall picture of the user's online reputation).
	 * @var EbayShoppingTypeCommentTypeCodeType
	 */
	public $CommentType;
	/**
	 * The FeedbackResponse
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Textual comment that the user targeted by feedback may leave in response or rebuttal to the feedback.
	 * @var string
	 */
	public $FeedbackResponse;
	/**
	 * The FollowUp
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Explanation a user can give to a response.
	 * @var string
	 */
	public $FollowUp;
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID that uniquely identifies the item listing.
	 * @var string
	 */
	public $ItemID;
	/**
	 * The Role
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the user who was the feedback recipient was a Buyer or the Seller for that transaction.
	 * @var EbayShoppingTypeTradingRoleCodeType
	 */
	public $Role;
	/**
	 * The ItemTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name of the listing for which feedback was provided. Returned as CDATA. Not returned if a listing ended more than 90 days ago.
	 * @var string
	 */
	public $ItemTitle;
	/**
	 * The ItemPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The final price for the item, associated with the currency identified by the currencyId attribute of the AmountType. Not returned if a listing ended more than 90 days ago.
	 * @var EbayShoppingTypeAmountType
	 */
	public $ItemPrice;
	/**
	 * The FeedbackID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for the feedback entry.
	 * @var string
	 */
	public $FeedbackID;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for the transaction about which this feedback entry was left. This field is not returned in the case of TransactionIDs from Chinese auction listings, because a value of zero is used for TransactionIDs in such cases.
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
	 * 	- documentation : Specifies if a user's feedback score is or is not countable. This field is returned only when a user's feedback score is not countable (value is false).
	 * @var boolean
	 */
	public $Countable;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string CommentingUser
	 * @param int CommentingUserScore
	 * @param string CommentText
	 * @param dateTime CommentTime
	 * @param EbayShoppingTypeCommentTypeCodeType CommentType
	 * @param string FeedbackResponse
	 * @param string FollowUp
	 * @param string ItemID
	 * @param EbayShoppingTypeTradingRoleCodeType Role
	 * @param string ItemTitle
	 * @param EbayShoppingTypeAmountType ItemPrice
	 * @param string FeedbackID
	 * @param string TransactionID
	 * @param boolean CommentReplaced
	 * @param boolean ResponseReplaced
	 * @param boolean FollowUpReplaced
	 * @param boolean Countable
	 * @param DOMDocument any
	 * @return EbayShoppingTypeFeedbackDetailType
	 */
	public function __construct($_CommentingUser = null,$_CommentingUserScore = null,$_CommentText = null,$_CommentTime = null,$_CommentType = null,$_FeedbackResponse = null,$_FollowUp = null,$_ItemID = null,$_Role = null,$_ItemTitle = null,$_ItemPrice = null,$_FeedbackID = null,$_TransactionID = null,$_CommentReplaced = null,$_ResponseReplaced = null,$_FollowUpReplaced = null,$_Countable = null,$_any = null)
	{
		parent::__construct(array('CommentingUser'=>$_CommentingUser,'CommentingUserScore'=>$_CommentingUserScore,'CommentText'=>$_CommentText,'CommentTime'=>$_CommentTime,'CommentType'=>$_CommentType,'FeedbackResponse'=>$_FeedbackResponse,'FollowUp'=>$_FollowUp,'ItemID'=>$_ItemID,'Role'=>$_Role,'ItemTitle'=>$_ItemTitle,'ItemPrice'=>$_ItemPrice,'FeedbackID'=>$_FeedbackID,'TransactionID'=>$_TransactionID,'CommentReplaced'=>$_CommentReplaced,'ResponseReplaced'=>$_ResponseReplaced,'FollowUpReplaced'=>$_FollowUpReplaced,'Countable'=>$_Countable,'any'=>$_any));
	}
	/**
	 * Set CommentingUser
	 * @param string CommentingUser
	 * @return string
	 */
	public function setCommentingUser($_CommentingUser)
	{
		return ($this->CommentingUser = $_CommentingUser);
	}
	/**
	 * Get CommentingUser
	 * @return string
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
		return ($this->CommentType = EbayShoppingTypeCommentTypeCodeType::valueIsValid($_CommentType)?$_CommentType:null);
	}
	/**
	 * Get CommentType
	 * @return EbayShoppingTypeCommentTypeCodeType
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
	 * Set FollowUp
	 * @param string FollowUp
	 * @return string
	 */
	public function setFollowUp($_FollowUp)
	{
		return ($this->FollowUp = $_FollowUp);
	}
	/**
	 * Get FollowUp
	 * @return string
	 */
	public function getFollowUp()
	{
		return $this->FollowUp;
	}
	/**
	 * Set ItemID
	 * @param string ItemID
	 * @return string
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = $_ItemID);
	}
	/**
	 * Get ItemID
	 * @return string
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
		return ($this->Role = EbayShoppingTypeTradingRoleCodeType::valueIsValid($_Role)?$_Role:null);
	}
	/**
	 * Get Role
	 * @return EbayShoppingTypeTradingRoleCodeType
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
	 * @return EbayShoppingTypeAmountType
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