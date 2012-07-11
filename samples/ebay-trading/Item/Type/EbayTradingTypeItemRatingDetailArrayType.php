<?php
/**
 * Class file for EbayTradingTypeItemRatingDetailArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemRatingDetailArrayType
 * Documentation : Container for a set of detailed seller ratings about an order line item. If a seller has detailed ratings, they are displayed in the Feedback Profile of the seller.
 * @date 04/07/2012
 */
class EbayTradingTypeItemRatingDetailArrayType extends EbayTradingWsdlClass
{
	/**
	 * The ItemRatingDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The ItemRatingDetails container is for detailed seller ratings about an order line item. When buyers leave an overall Feedback rating (positive, neutral, or negative) for a seller, they also can leave ratings in four areas: item as described, communication, shipping time, and charges for shipping and handling. Users retrieve detailed ratings as averages of the ratings left by buyers. <br><br> Applicable to sites that support the Detailed Seller Ratings feature.
	 * @var EbayTradingTypeItemRatingDetailsType
	 */
	public $ItemRatingDetails;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemRatingDetailsType ItemRatingDetails
	 * @return EbayTradingTypeItemRatingDetailArrayType
	 */
	public function __construct($_ItemRatingDetails = null)
	{
		parent::__construct(array('ItemRatingDetails'=>$_ItemRatingDetails));
	}
	/**
	 * Set ItemRatingDetails
	 * @param ItemRatingDetailsType ItemRatingDetails
	 * @return ItemRatingDetailsType
	 */
	public function setItemRatingDetails($_ItemRatingDetails)
	{
		return ($this->ItemRatingDetails = $_ItemRatingDetails);
	}
	/**
	 * Get ItemRatingDetails
	 * @return EbayTradingTypeItemRatingDetailsType
	 */
	public function getItemRatingDetails()
	{
		return $this->ItemRatingDetails;
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