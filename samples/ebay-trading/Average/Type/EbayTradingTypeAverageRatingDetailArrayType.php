<?php
/**
 * Class file for EbayTradingTypeAverageRatingDetailArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAverageRatingDetailArrayType
 * Documentation : Container for average detailed seller ratings. If a seller has detailed ratings, they are displayed in the Feedback Profile of the seller.
 * @date 04/07/2012
 */
class EbayTradingTypeAverageRatingDetailArrayType extends EbayTradingWsdlClass
{
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
	 * Constructor
	 * @param EbayTradingTypeAverageRatingDetailsType AverageRatingDetails
	 * @return EbayTradingTypeAverageRatingDetailArrayType
	 */
	public function __construct($_AverageRatingDetails = null)
	{
		parent::__construct(array('AverageRatingDetails'=>$_AverageRatingDetails));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>