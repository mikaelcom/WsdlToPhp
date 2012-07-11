<?php
/**
 * Class file for EbayTradingTypeFeedbackSummaryType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFeedbackSummaryType
 * Documentation : Specifies all feedback summary information (except Score). Contains FeedbackPeriodArrayType objects that each convey feedback counts for positive, negative, neutral, and total feedback counts - for various time periods each. Also conveys counts of bid retractions for the predefined time periods.
 * @date 04/07/2012
 */
class EbayTradingTypeFeedbackSummaryType extends EbayTradingWsdlClass
{
	/**
	 * The BidRetractionFeedbackPeriodArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Bid retractions count, for multiple predefined time periods preceding the call. Returned if no detail level is specified.
	 * @var EbayTradingTypeFeedbackPeriodArrayType
	 */
	public $BidRetractionFeedbackPeriodArray;
	/**
	 * The NegativeFeedbackPeriodArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Negative feedback entries count, for multiple predefined time periods preceding the call. Returned if no detail level is specified.
	 * @var EbayTradingTypeFeedbackPeriodArrayType
	 */
	public $NegativeFeedbackPeriodArray;
	/**
	 * The NeutralFeedbackPeriodArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Neutral feedback entries count, for multiple predefined time periods preceding the call. Returned if no detail level is specified.
	 * @var EbayTradingTypeFeedbackPeriodArrayType
	 */
	public $NeutralFeedbackPeriodArray;
	/**
	 * The PositiveFeedbackPeriodArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Positive feedback entries count, for multiple predefined time periods preceding the call. Returned if no detail level is specified.
	 * @var EbayTradingTypeFeedbackPeriodArrayType
	 */
	public $PositiveFeedbackPeriodArray;
	/**
	 * The TotalFeedbackPeriodArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total feedback score, for multiple predefined time periods preceding the call. Returned if no detail level is specified.
	 * @var EbayTradingTypeFeedbackPeriodArrayType
	 */
	public $TotalFeedbackPeriodArray;
	/**
	 * The NeutralCommentCountFromSuspendedUsers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of neutral comments received from suspended users. Returned if no detail level is specified.
	 * @var int
	 */
	public $NeutralCommentCountFromSuspendedUsers;
	/**
	 * The UniqueNegativeFeedbackCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total number of negative Feedback comments, including weekly repeats. Returned if no detail level is specified.
	 * @var int
	 */
	public $UniqueNegativeFeedbackCount;
	/**
	 * The UniquePositiveFeedbackCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total number of positive Feedback comments, including weekly repeats. Returned if no detail level is specified.
	 * @var int
	 */
	public $UniquePositiveFeedbackCount;
	/**
	 * The UniqueNeutralFeedbackCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total number of neutral Feedback comments, including weekly repeats. Returned if no detail level is specified.
	 * @var int
	 */
	public $UniqueNeutralFeedbackCount;
	/**
	 * The SellerRatingSummaryArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for information about detailed seller ratings (DSRs) that buyers have left for a seller. Sellers have access to the number of ratings they've received, as well as to the averages of DSRs they've received in each DSR area (i.e., to the average of ratings in the item-description area, etc.). The DSR feature is available on the United Kingdom site and on the following other sites: AU (site ID 15), BEFR (site ID 23), BENL (site ID 123), FR (site ID 71), IE (site ID 205), IN (site ID 203), IT (site ID 101), and PL (site ID 212). The DSR feature is available on the other API-enabled country sites, including the US site (site ID 0).
	 * @var EbayTradingTypeSellerRatingSummaryArrayType
	 */
	public $SellerRatingSummaryArray;
	/**
	 * The SellerRoleMetrics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for information about 1 year feedback metric as seller.
	 * @var EbayTradingTypeSellerRoleMetricsType
	 */
	public $SellerRoleMetrics;
	/**
	 * The BuyerRoleMetrics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for information about 1 year feedback metric as buyer.
	 * @var EbayTradingTypeBuyerRoleMetricsType
	 */
	public $BuyerRoleMetrics;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeFeedbackPeriodArrayType BidRetractionFeedbackPeriodArray
	 * @param EbayTradingTypeFeedbackPeriodArrayType NegativeFeedbackPeriodArray
	 * @param EbayTradingTypeFeedbackPeriodArrayType NeutralFeedbackPeriodArray
	 * @param EbayTradingTypeFeedbackPeriodArrayType PositiveFeedbackPeriodArray
	 * @param EbayTradingTypeFeedbackPeriodArrayType TotalFeedbackPeriodArray
	 * @param int NeutralCommentCountFromSuspendedUsers
	 * @param int UniqueNegativeFeedbackCount
	 * @param int UniquePositiveFeedbackCount
	 * @param int UniqueNeutralFeedbackCount
	 * @param EbayTradingTypeSellerRatingSummaryArrayType SellerRatingSummaryArray
	 * @param EbayTradingTypeSellerRoleMetricsType SellerRoleMetrics
	 * @param EbayTradingTypeBuyerRoleMetricsType BuyerRoleMetrics
	 * @param DOMDocument any
	 * @return EbayTradingTypeFeedbackSummaryType
	 */
	public function __construct($_BidRetractionFeedbackPeriodArray = null,$_NegativeFeedbackPeriodArray = null,$_NeutralFeedbackPeriodArray = null,$_PositiveFeedbackPeriodArray = null,$_TotalFeedbackPeriodArray = null,$_NeutralCommentCountFromSuspendedUsers = null,$_UniqueNegativeFeedbackCount = null,$_UniquePositiveFeedbackCount = null,$_UniqueNeutralFeedbackCount = null,$_SellerRatingSummaryArray = null,$_SellerRoleMetrics = null,$_BuyerRoleMetrics = null,$_any = null)
	{
		parent::__construct(array('BidRetractionFeedbackPeriodArray'=>$_BidRetractionFeedbackPeriodArray,'NegativeFeedbackPeriodArray'=>$_NegativeFeedbackPeriodArray,'NeutralFeedbackPeriodArray'=>$_NeutralFeedbackPeriodArray,'PositiveFeedbackPeriodArray'=>$_PositiveFeedbackPeriodArray,'TotalFeedbackPeriodArray'=>$_TotalFeedbackPeriodArray,'NeutralCommentCountFromSuspendedUsers'=>$_NeutralCommentCountFromSuspendedUsers,'UniqueNegativeFeedbackCount'=>$_UniqueNegativeFeedbackCount,'UniquePositiveFeedbackCount'=>$_UniquePositiveFeedbackCount,'UniqueNeutralFeedbackCount'=>$_UniqueNeutralFeedbackCount,'SellerRatingSummaryArray'=>$_SellerRatingSummaryArray,'SellerRoleMetrics'=>$_SellerRoleMetrics,'BuyerRoleMetrics'=>$_BuyerRoleMetrics,'any'=>$_any));
	}
	/**
	 * Set BidRetractionFeedbackPeriodArray
	 * @param FeedbackPeriodArrayType BidRetractionFeedbackPeriodArray
	 * @return FeedbackPeriodArrayType
	 */
	public function setBidRetractionFeedbackPeriodArray($_BidRetractionFeedbackPeriodArray)
	{
		return ($this->BidRetractionFeedbackPeriodArray = $_BidRetractionFeedbackPeriodArray);
	}
	/**
	 * Get BidRetractionFeedbackPeriodArray
	 * @return EbayTradingTypeFeedbackPeriodArrayType
	 */
	public function getBidRetractionFeedbackPeriodArray()
	{
		return $this->BidRetractionFeedbackPeriodArray;
	}
	/**
	 * Set NegativeFeedbackPeriodArray
	 * @param FeedbackPeriodArrayType NegativeFeedbackPeriodArray
	 * @return FeedbackPeriodArrayType
	 */
	public function setNegativeFeedbackPeriodArray($_NegativeFeedbackPeriodArray)
	{
		return ($this->NegativeFeedbackPeriodArray = $_NegativeFeedbackPeriodArray);
	}
	/**
	 * Get NegativeFeedbackPeriodArray
	 * @return EbayTradingTypeFeedbackPeriodArrayType
	 */
	public function getNegativeFeedbackPeriodArray()
	{
		return $this->NegativeFeedbackPeriodArray;
	}
	/**
	 * Set NeutralFeedbackPeriodArray
	 * @param FeedbackPeriodArrayType NeutralFeedbackPeriodArray
	 * @return FeedbackPeriodArrayType
	 */
	public function setNeutralFeedbackPeriodArray($_NeutralFeedbackPeriodArray)
	{
		return ($this->NeutralFeedbackPeriodArray = $_NeutralFeedbackPeriodArray);
	}
	/**
	 * Get NeutralFeedbackPeriodArray
	 * @return EbayTradingTypeFeedbackPeriodArrayType
	 */
	public function getNeutralFeedbackPeriodArray()
	{
		return $this->NeutralFeedbackPeriodArray;
	}
	/**
	 * Set PositiveFeedbackPeriodArray
	 * @param FeedbackPeriodArrayType PositiveFeedbackPeriodArray
	 * @return FeedbackPeriodArrayType
	 */
	public function setPositiveFeedbackPeriodArray($_PositiveFeedbackPeriodArray)
	{
		return ($this->PositiveFeedbackPeriodArray = $_PositiveFeedbackPeriodArray);
	}
	/**
	 * Get PositiveFeedbackPeriodArray
	 * @return EbayTradingTypeFeedbackPeriodArrayType
	 */
	public function getPositiveFeedbackPeriodArray()
	{
		return $this->PositiveFeedbackPeriodArray;
	}
	/**
	 * Set TotalFeedbackPeriodArray
	 * @param FeedbackPeriodArrayType TotalFeedbackPeriodArray
	 * @return FeedbackPeriodArrayType
	 */
	public function setTotalFeedbackPeriodArray($_TotalFeedbackPeriodArray)
	{
		return ($this->TotalFeedbackPeriodArray = $_TotalFeedbackPeriodArray);
	}
	/**
	 * Get TotalFeedbackPeriodArray
	 * @return EbayTradingTypeFeedbackPeriodArrayType
	 */
	public function getTotalFeedbackPeriodArray()
	{
		return $this->TotalFeedbackPeriodArray;
	}
	/**
	 * Set NeutralCommentCountFromSuspendedUsers
	 * @param int NeutralCommentCountFromSuspendedUsers
	 * @return int
	 */
	public function setNeutralCommentCountFromSuspendedUsers($_NeutralCommentCountFromSuspendedUsers)
	{
		return ($this->NeutralCommentCountFromSuspendedUsers = $_NeutralCommentCountFromSuspendedUsers);
	}
	/**
	 * Get NeutralCommentCountFromSuspendedUsers
	 * @return int
	 */
	public function getNeutralCommentCountFromSuspendedUsers()
	{
		return $this->NeutralCommentCountFromSuspendedUsers;
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
	 * Set SellerRatingSummaryArray
	 * @param SellerRatingSummaryArrayType SellerRatingSummaryArray
	 * @return SellerRatingSummaryArrayType
	 */
	public function setSellerRatingSummaryArray($_SellerRatingSummaryArray)
	{
		return ($this->SellerRatingSummaryArray = $_SellerRatingSummaryArray);
	}
	/**
	 * Get SellerRatingSummaryArray
	 * @return EbayTradingTypeSellerRatingSummaryArrayType
	 */
	public function getSellerRatingSummaryArray()
	{
		return $this->SellerRatingSummaryArray;
	}
	/**
	 * Set SellerRoleMetrics
	 * @param SellerRoleMetricsType SellerRoleMetrics
	 * @return SellerRoleMetricsType
	 */
	public function setSellerRoleMetrics($_SellerRoleMetrics)
	{
		return ($this->SellerRoleMetrics = $_SellerRoleMetrics);
	}
	/**
	 * Get SellerRoleMetrics
	 * @return EbayTradingTypeSellerRoleMetricsType
	 */
	public function getSellerRoleMetrics()
	{
		return $this->SellerRoleMetrics;
	}
	/**
	 * Set BuyerRoleMetrics
	 * @param BuyerRoleMetricsType BuyerRoleMetrics
	 * @return BuyerRoleMetricsType
	 */
	public function setBuyerRoleMetrics($_BuyerRoleMetrics)
	{
		return ($this->BuyerRoleMetrics = $_BuyerRoleMetrics);
	}
	/**
	 * Get BuyerRoleMetrics
	 * @return EbayTradingTypeBuyerRoleMetricsType
	 */
	public function getBuyerRoleMetrics()
	{
		return $this->BuyerRoleMetrics;
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