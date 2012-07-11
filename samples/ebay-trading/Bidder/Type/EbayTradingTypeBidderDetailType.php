<?php
/**
 * Class file for EbayTradingTypeBidderDetailType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBidderDetailType
 * Documentation : Contains the data for a user who is interested in bidding on items in a Live Auctions catalog.
 * @date 04/07/2012
 */
class EbayTradingTypeBidderDetailType extends EbayTradingWsdlClass
{
	/**
	 * The UserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of the user requesting approval.
	 * @var EbayTradingTypeUserIDType
	 */
	public $UserID;
	/**
	 * The Email
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : E-mail address of the bidder. You cannot retrieve an email address for any user with whom you do not have an order relationship, regardless of site. Email is only returned for applicable calls when you are retrieving your own user data OR when you and the other user are in an order relationship and the call is being executed within a certain amount of time after the order line item is created. Returned as CDATA. When an email address can not be returned, the string "Invalid Request" is returned instead.
	 * @var string
	 */
	public $Email;
	/**
	 * The FeedbackScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Aggegate feedback score for the specified user. Feedback score is only return if the user has not chosen to make his or her feeback private.
	 * @var int
	 */
	public $FeedbackScore;
	/**
	 * The UniqueNegativeFeedbackCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total count of negative Feedback entries received by the user, including weekly repeats.
	 * @var int
	 */
	public $UniqueNegativeFeedbackCount;
	/**
	 * The UniquePositiveFeedbackCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total count of positive Feedback entries received by the user, including weekly repeats.
	 * @var int
	 */
	public $UniquePositiveFeedbackCount;
	/**
	 * The UniqueNeutralFeedbackCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total count of neutral Feedback entries received by the user, including weekly repeats.
	 * @var int
	 */
	public $UniqueNeutralFeedbackCount;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeUserIDType UserID
	 * @param string Email
	 * @param int FeedbackScore
	 * @param int UniqueNegativeFeedbackCount
	 * @param int UniquePositiveFeedbackCount
	 * @param int UniqueNeutralFeedbackCount
	 * @param DOMDocument any
	 * @return EbayTradingTypeBidderDetailType
	 */
	public function __construct($_UserID = null,$_Email = null,$_FeedbackScore = null,$_UniqueNegativeFeedbackCount = null,$_UniquePositiveFeedbackCount = null,$_UniqueNeutralFeedbackCount = null,$_any = null)
	{
		parent::__construct(array('UserID'=>$_UserID,'Email'=>$_Email,'FeedbackScore'=>$_FeedbackScore,'UniqueNegativeFeedbackCount'=>$_UniqueNegativeFeedbackCount,'UniquePositiveFeedbackCount'=>$_UniquePositiveFeedbackCount,'UniqueNeutralFeedbackCount'=>$_UniqueNeutralFeedbackCount,'any'=>$_any));
	}
	/**
	 * Set UserID
	 * @param UserIDType UserID
	 * @return UserIDType
	 */
	public function setUserID($_UserID)
	{
		return ($this->UserID = EbayTradingTypeUserIDType::valueIsValid($_UserID)?$_UserID:null);
	}
	/**
	 * Get UserID
	 * @return EbayTradingTypeUserIDType
	 */
	public function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * Set Email
	 * @param string Email
	 * @return string
	 */
	public function setEmail($_Email)
	{
		return ($this->Email = $_Email);
	}
	/**
	 * Get Email
	 * @return string
	 */
	public function getEmail()
	{
		return $this->Email;
	}
	/**
	 * Set FeedbackScore
	 * @param int FeedbackScore
	 * @return int
	 */
	public function setFeedbackScore($_FeedbackScore)
	{
		return ($this->FeedbackScore = $_FeedbackScore);
	}
	/**
	 * Get FeedbackScore
	 * @return int
	 */
	public function getFeedbackScore()
	{
		return $this->FeedbackScore;
	}
	/**
	 * Set UniqueNegativeFeedbackCount
	 * @param int UniqueNegativeFeedbackCount
	 * @return int
	 */
	public function setUniqueNegativeFeedbackCount($_UniqueNegativeFeedbackCount)
	{
		return ($this->UniqueNegativeFeedbackCount = $_UniqueNegativeFeedbackCount);
	}
	/**
	 * Get UniqueNegativeFeedbackCount
	 * @return int
	 */
	public function getUniqueNegativeFeedbackCount()
	{
		return $this->UniqueNegativeFeedbackCount;
	}
	/**
	 * Set UniquePositiveFeedbackCount
	 * @param int UniquePositiveFeedbackCount
	 * @return int
	 */
	public function setUniquePositiveFeedbackCount($_UniquePositiveFeedbackCount)
	{
		return ($this->UniquePositiveFeedbackCount = $_UniquePositiveFeedbackCount);
	}
	/**
	 * Get UniquePositiveFeedbackCount
	 * @return int
	 */
	public function getUniquePositiveFeedbackCount()
	{
		return $this->UniquePositiveFeedbackCount;
	}
	/**
	 * Set UniqueNeutralFeedbackCount
	 * @param int UniqueNeutralFeedbackCount
	 * @return int
	 */
	public function setUniqueNeutralFeedbackCount($_UniqueNeutralFeedbackCount)
	{
		return ($this->UniqueNeutralFeedbackCount = $_UniqueNeutralFeedbackCount);
	}
	/**
	 * Get UniqueNeutralFeedbackCount
	 * @return int
	 */
	public function getUniqueNeutralFeedbackCount()
	{
		return $this->UniqueNeutralFeedbackCount;
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