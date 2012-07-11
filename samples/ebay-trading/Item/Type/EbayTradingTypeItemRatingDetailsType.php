<?php
/**
 * Class file for EbayTradingTypeItemRatingDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemRatingDetailsType
 * Documentation : Applicable to sites that support the Detailed Seller Ratings feature. The ItemRatingDetailsType contains detailed seller ratings for an order line item in one area. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling. Users retrieve detailed ratings as averages of the ratings left by buyers.
 * @date 04/07/2012
 */
class EbayTradingTypeItemRatingDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The RatingDetail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The area of a specific detailed seller rating for an order line item. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling.
	 * @var EbayTradingTypeFeedbackRatingDetailCodeType
	 */
	public $RatingDetail;
	/**
	 * The Rating
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A detailed seller rating for an order line item applied to the area in the corresponding RatingDetail field. Valid input values are numerical integers 1 though 5.
	 * @var int
	 */
	public $Rating;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeFeedbackRatingDetailCodeType RatingDetail
	 * @param int Rating
	 * @param DOMDocument any
	 * @return EbayTradingTypeItemRatingDetailsType
	 */
	public function __construct($_RatingDetail = null,$_Rating = null,$_any = null)
	{
		parent::__construct(array('RatingDetail'=>$_RatingDetail,'Rating'=>$_Rating,'any'=>$_any));
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
	 * @param int Rating
	 * @return int
	 */
	public function setRating($_Rating)
	{
		return ($this->Rating = $_Rating);
	}
	/**
	 * Get Rating
	 * @return int
	 */
	public function getRating()
	{
		return $this->Rating;
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