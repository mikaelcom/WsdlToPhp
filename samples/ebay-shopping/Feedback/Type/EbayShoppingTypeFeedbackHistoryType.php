<?php
/**
 * Class file for EbayShoppingTypeFeedbackHistoryType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeFeedbackHistoryType
 * Documentation : Specifies all feedback summary information (except Score). Contains objects that each convey feedback counts for positive, negative, neutral, and total feedback counts - for various time periods each. Also conveys counts of bid retractions for the predefined time periods.
 * @date 05/07/2012
 */
class EbayShoppingTypeFeedbackHistoryType extends EbayShoppingWsdlClass
{
	/**
	 * The BidRetractionFeedbackPeriods
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Bid retractions count, for multiple predefined time periods preceding the call.
	 * @var EbayShoppingTypeFeedbackPeriodType
	 */
	public $BidRetractionFeedbackPeriods;
	/**
	 * The NegativeFeedbackPeriods
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Negative feedback entries count, for multiple predefined time periods preceding the call.
	 * @var EbayShoppingTypeFeedbackPeriodType
	 */
	public $NegativeFeedbackPeriods;
	/**
	 * The NeutralFeedbackPeriods
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Neutral feedback entries count, for multiple predefined time periods preceding the call.
	 * @var EbayShoppingTypeFeedbackPeriodType
	 */
	public $NeutralFeedbackPeriods;
	/**
	 * The PositiveFeedbackPeriods
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Positive feedback entries count, for multiple predefined time periods preceding the call.
	 * @var EbayShoppingTypeFeedbackPeriodType
	 */
	public $PositiveFeedbackPeriods;
	/**
	 * The TotalFeedbackPeriods
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Total feedback score, for multiple predefined time periods preceding the call.
	 * @var EbayShoppingTypeFeedbackPeriodType
	 */
	public $TotalFeedbackPeriods;
	/**
	 * The UniqueNegativeFeedbackCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total number of negative Feedback comments received by the user, including weekly repeats.
	 * @var long
	 */
	public $UniqueNegativeFeedbackCount;
	/**
	 * The UniquePositiveFeedbackCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total number of positive Feedback comments received by the user, including weekly repeats.
	 * @var long
	 */
	public $UniquePositiveFeedbackCount;
	/**
	 * The AverageRatingDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Container for information about detailed seller ratings (DSRs) that buyers have left for a seller. Sellers have access to the number of ratings they've received, as well as to the averages of DSRs they've received in each DSR area (i.e., to the average of ratings in the item-description area, etc.).
	 * @var EbayShoppingTypeAverageRatingDetailsType
	 */
	public $AverageRatingDetails;
	/**
	 * The NeutralCommentCountFromSuspendedUsers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of neutral comments received from suspended users.
	 * @var long
	 */
	public $NeutralCommentCountFromSuspendedUsers;
	/**
	 * The UniqueNeutralFeedbackCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total number of neutral Feedback comments received by the user, including weekly repeats.
	 * @var long
	 */
	public $UniqueNeutralFeedbackCount;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayShoppingTypeFeedbackPeriodType BidRetractionFeedbackPeriods
	 * @param EbayShoppingTypeFeedbackPeriodType NegativeFeedbackPeriods
	 * @param EbayShoppingTypeFeedbackPeriodType NeutralFeedbackPeriods
	 * @param EbayShoppingTypeFeedbackPeriodType PositiveFeedbackPeriods
	 * @param EbayShoppingTypeFeedbackPeriodType TotalFeedbackPeriods
	 * @param long UniqueNegativeFeedbackCount
	 * @param long UniquePositiveFeedbackCount
	 * @param EbayShoppingTypeAverageRatingDetailsType AverageRatingDetails
	 * @param long NeutralCommentCountFromSuspendedUsers
	 * @param long UniqueNeutralFeedbackCount
	 * @param DOMDocument any
	 * @return EbayShoppingTypeFeedbackHistoryType
	 */
	public function __construct($_BidRetractionFeedbackPeriods = null,$_NegativeFeedbackPeriods = null,$_NeutralFeedbackPeriods = null,$_PositiveFeedbackPeriods = null,$_TotalFeedbackPeriods = null,$_UniqueNegativeFeedbackCount = null,$_UniquePositiveFeedbackCount = null,$_AverageRatingDetails = null,$_NeutralCommentCountFromSuspendedUsers = null,$_UniqueNeutralFeedbackCount = null,$_any = null)
	{
		parent::__construct(array('BidRetractionFeedbackPeriods'=>$_BidRetractionFeedbackPeriods,'NegativeFeedbackPeriods'=>$_NegativeFeedbackPeriods,'NeutralFeedbackPeriods'=>$_NeutralFeedbackPeriods,'PositiveFeedbackPeriods'=>$_PositiveFeedbackPeriods,'TotalFeedbackPeriods'=>$_TotalFeedbackPeriods,'UniqueNegativeFeedbackCount'=>$_UniqueNegativeFeedbackCount,'UniquePositiveFeedbackCount'=>$_UniquePositiveFeedbackCount,'AverageRatingDetails'=>$_AverageRatingDetails,'NeutralCommentCountFromSuspendedUsers'=>$_NeutralCommentCountFromSuspendedUsers,'UniqueNeutralFeedbackCount'=>$_UniqueNeutralFeedbackCount,'any'=>$_any));
	}
	/**
	 * Set BidRetractionFeedbackPeriods
	 * @param FeedbackPeriodType BidRetractionFeedbackPeriods
	 * @return FeedbackPeriodType
	 */
	public function setBidRetractionFeedbackPeriods($_BidRetractionFeedbackPeriods)
	{
		return ($this->BidRetractionFeedbackPeriods = $_BidRetractionFeedbackPeriods);
	}
	/**
	 * Get BidRetractionFeedbackPeriods
	 * @return EbayShoppingTypeFeedbackPeriodType
	 */
	public function getBidRetractionFeedbackPeriods()
	{
		return $this->BidRetractionFeedbackPeriods;
	}
	/**
	 * Set NegativeFeedbackPeriods
	 * @param FeedbackPeriodType NegativeFeedbackPeriods
	 * @return FeedbackPeriodType
	 */
	public function setNegativeFeedbackPeriods($_NegativeFeedbackPeriods)
	{
		return ($this->NegativeFeedbackPeriods = $_NegativeFeedbackPeriods);
	}
	/**
	 * Get NegativeFeedbackPeriods
	 * @return EbayShoppingTypeFeedbackPeriodType
	 */
	public function getNegativeFeedbackPeriods()
	{
		return $this->NegativeFeedbackPeriods;
	}
	/**
	 * Set NeutralFeedbackPeriods
	 * @param FeedbackPeriodType NeutralFeedbackPeriods
	 * @return FeedbackPeriodType
	 */
	public function setNeutralFeedbackPeriods($_NeutralFeedbackPeriods)
	{
		return ($this->NeutralFeedbackPeriods = $_NeutralFeedbackPeriods);
	}
	/**
	 * Get NeutralFeedbackPeriods
	 * @return EbayShoppingTypeFeedbackPeriodType
	 */
	public function getNeutralFeedbackPeriods()
	{
		return $this->NeutralFeedbackPeriods;
	}
	/**
	 * Set PositiveFeedbackPeriods
	 * @param FeedbackPeriodType PositiveFeedbackPeriods
	 * @return FeedbackPeriodType
	 */
	public function setPositiveFeedbackPeriods($_PositiveFeedbackPeriods)
	{
		return ($this->PositiveFeedbackPeriods = $_PositiveFeedbackPeriods);
	}
	/**
	 * Get PositiveFeedbackPeriods
	 * @return EbayShoppingTypeFeedbackPeriodType
	 */
	public function getPositiveFeedbackPeriods()
	{
		return $this->PositiveFeedbackPeriods;
	}
	/**
	 * Set TotalFeedbackPeriods
	 * @param FeedbackPeriodType TotalFeedbackPeriods
	 * @return FeedbackPeriodType
	 */
	public function setTotalFeedbackPeriods($_TotalFeedbackPeriods)
	{
		return ($this->TotalFeedbackPeriods = $_TotalFeedbackPeriods);
	}
	/**
	 * Get TotalFeedbackPeriods
	 * @return EbayShoppingTypeFeedbackPeriodType
	 */
	public function getTotalFeedbackPeriods()
	{
		return $this->TotalFeedbackPeriods;
	}
	/**
	 * Set UniqueNegativeFeedbackCount
	 * @param long UniqueNegativeFeedbackCount
	 * @return long
	 */
	public function setUniqueNegativeFeedbackCount($_UniqueNegativeFeedbackCount)
	{
		return ($this->UniqueNegativeFeedbackCount = $_UniqueNegativeFeedbackCount);
	}
	/**
	 * Get UniqueNegativeFeedbackCount
	 * @return long
	 */
	public function getUniqueNegativeFeedbackCount()
	{
		return $this->UniqueNegativeFeedbackCount;
	}
	/**
	 * Set UniquePositiveFeedbackCount
	 * @param long UniquePositiveFeedbackCount
	 * @return long
	 */
	public function setUniquePositiveFeedbackCount($_UniquePositiveFeedbackCount)
	{
		return ($this->UniquePositiveFeedbackCount = $_UniquePositiveFeedbackCount);
	}
	/**
	 * Get UniquePositiveFeedbackCount
	 * @return long
	 */
	public function getUniquePositiveFeedbackCount()
	{
		return $this->UniquePositiveFeedbackCount;
	}
	/**
	 * Set AverageRatingDetails
	 * @param AverageRatingDetailsType AverageRatingDetails
	 * @return AverageRatingDetailsType
	 */
	public function setAverageRatingDetails($_AverageRatingDetails)
	{
		return ($this->AverageRatingDetails = $_AverageRatingDetails);
	}
	/**
	 * Get AverageRatingDetails
	 * @return EbayShoppingTypeAverageRatingDetailsType
	 */
	public function getAverageRatingDetails()
	{
		return $this->AverageRatingDetails;
	}
	/**
	 * Set NeutralCommentCountFromSuspendedUsers
	 * @param long NeutralCommentCountFromSuspendedUsers
	 * @return long
	 */
	public function setNeutralCommentCountFromSuspendedUsers($_NeutralCommentCountFromSuspendedUsers)
	{
		return ($this->NeutralCommentCountFromSuspendedUsers = $_NeutralCommentCountFromSuspendedUsers);
	}
	/**
	 * Get NeutralCommentCountFromSuspendedUsers
	 * @return long
	 */
	public function getNeutralCommentCountFromSuspendedUsers()
	{
		return $this->NeutralCommentCountFromSuspendedUsers;
	}
	/**
	 * Set UniqueNeutralFeedbackCount
	 * @param long UniqueNeutralFeedbackCount
	 * @return long
	 */
	public function setUniqueNeutralFeedbackCount($_UniqueNeutralFeedbackCount)
	{
		return ($this->UniqueNeutralFeedbackCount = $_UniqueNeutralFeedbackCount);
	}
	/**
	 * Get UniqueNeutralFeedbackCount
	 * @return long
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