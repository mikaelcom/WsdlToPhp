<?php
/**
 * Class file for EbayTradingTypeAverageRatingDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAverageRatingDetailsType
 * Documentation : Applicable to sites that support the Detailed Seller Ratings feature. The AverageRatingDetailsType contains the average detailed seller ratings in an area. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling. Users retrieve detailed ratings as averages of the ratings left by buyers.
 * @date 04/07/2012
 */
class EbayTradingTypeAverageRatingDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The RatingDetail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The area of a specific average detailed seller rating. Users retrieve detailed ratings as averages of the ratings left by buyers. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling.
	 * @var EbayTradingTypeFeedbackRatingDetailCodeType
	 */
	public $RatingDetail;
	/**
	 * The Rating
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : An average detailed seller rating applying to the area in the corresponding RatingDetail field.
	 * @var double
	 */
	public $Rating;
	/**
	 * The RatingCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of detailed seller ratings in the area in the corresponding RatingDetail field.
	 * @var int
	 */
	public $RatingCount;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeFeedbackRatingDetailCodeType RatingDetail
	 * @param double Rating
	 * @param int RatingCount
	 * @param DOMDocument any
	 * @return EbayTradingTypeAverageRatingDetailsType
	 */
	public function __construct($_RatingDetail = null,$_Rating = null,$_RatingCount = null,$_any = null)
	{
		parent::__construct(array('RatingDetail'=>$_RatingDetail,'Rating'=>$_Rating,'RatingCount'=>$_RatingCount,'any'=>$_any));
	}
	/**
	 * Set RatingDetail
	 * @param FeedbackRatingDetailCodeType RatingDetail
	 * @return FeedbackRatingDetailCodeType
	 */
	public function setRatingDetail($_RatingDetail)
	{
		return ($this->RatingDetail = EbayTradingTypeFeedbackRatingDetailCodeType::valueIsValid($_RatingDetail)?$_RatingDetail:null);
	}
	/**
	 * Get RatingDetail
	 * @return EbayTradingTypeFeedbackRatingDetailCodeType
	 */
	public function getRatingDetail()
	{
		return $this->RatingDetail;
	}
	/**
	 * Set Rating
	 * @param double Rating
	 * @return double
	 */
	public function setRating($_Rating)
	{
		return ($this->Rating = $_Rating);
	}
	/**
	 * Get Rating
	 * @return double
	 */
	public function getRating()
	{
		return $this->Rating;
	}
	/**
	 * Set RatingCount
	 * @param int RatingCount
	 * @return int
	 */
	public function setRatingCount($_RatingCount)
	{
		return ($this->RatingCount = $_RatingCount);
	}
	/**
	 * Get RatingCount
	 * @return int
	 */
	public function getRatingCount()
	{
		return $this->RatingCount;
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