<?php
/**
 * Class file for EbayTradingTypeAverageRatingSummaryType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAverageRatingSummaryType
 * Documentation : Container for average detailed seller ratings. If a seller has detailed ratings, they are displayed in the Feedback Profile of the seller.
 * @date 04/07/2012
 */
class EbayTradingTypeAverageRatingSummaryType extends EbayTradingWsdlClass
{
	/**
	 * The FeedbackSummaryPeriod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The summary period for which the detail ratings are calculated.
	 * @var EbayTradingTypeFeedbackSummaryPeriodCodeType
	 */
	public $FeedbackSummaryPeriod;
	/**
	 * The AverageRatingDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Applicable to sites that support the Detailed Seller Ratings feature. The AverageRatingDetails container has information about average detailed seller ratings. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling. Users retrieve detailed ratings as averages of the ratings left by buyers.
	 * @var EbayTradingTypeAverageRatingDetailsType
	 */
	public $AverageRatingDetails;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeFeedbackSummaryPeriodCodeType FeedbackSummaryPeriod
	 * @param EbayTradingTypeAverageRatingDetailsType AverageRatingDetails
	 * @param DOMDocument any
	 * @return EbayTradingTypeAverageRatingSummaryType
	 */
	public function __construct($_FeedbackSummaryPeriod = null,$_AverageRatingDetails = null,$_any = null)
	{
		parent::__construct(array('FeedbackSummaryPeriod'=>$_FeedbackSummaryPeriod,'AverageRatingDetails'=>$_AverageRatingDetails,'any'=>$_any));
	}
	/**
	 * Set FeedbackSummaryPeriod
	 * @param FeedbackSummaryPeriodCodeType FeedbackSummaryPeriod
	 * @return FeedbackSummaryPeriodCodeType
	 */
	public function setFeedbackSummaryPeriod($_FeedbackSummaryPeriod)
	{
		return ($this->FeedbackSummaryPeriod = EbayTradingTypeFeedbackSummaryPeriodCodeType::valueIsValid($_FeedbackSummaryPeriod)?$_FeedbackSummaryPeriod:null);
	}
	/**
	 * Get FeedbackSummaryPeriod
	 * @return EbayTradingTypeFeedbackSummaryPeriodCodeType
	 */
	public function getFeedbackSummaryPeriod()
	{
		return $this->FeedbackSummaryPeriod;
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
	 * @return EbayTradingTypeAverageRatingDetailsType
	 */
	public function getAverageRatingDetails()
	{
		return $this->AverageRatingDetails;
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