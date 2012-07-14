<?php
/**
 * Class file for PayPalTypeFeesType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeFeesType
 * Documentation : Following are the current set of eBay fee types AuctionLengthFee BoldFee BuyItNowFee CategoryFeaturedFee FeaturedFee FeaturedGalleryFee FixedPriceDurationFee GalleryFee GiftIconFee HighLightFee InsertionFee ListingDesignerFee ListingFee PhotoDisplayFee PhotoFee ReserveFee SchedulingFee ThirtyDaysAucFee Instances of this type could hold one or more supported types of fee.
 * @date 14/07/2012
 */
class PayPalTypeFeesType extends PayPalWsdlClass
{
	/**
	 * The Fee
	 * Meta informations :
	 * 	- maxOccurs : unbounded
	 * @var PayPalTypeFeeType
	 */
	public $Fee;
	/**
	 * Constructor
	 * @param PayPalTypeFeeType Fee
	 * @return PayPalTypeFeesType
	 */
	public function __construct($_Fee = null)
	{
		parent::__construct(array('Fee'=>$_Fee));
	}
	/**
	 * Set Fee
	 * @param FeeType Fee
	 * @return FeeType
	 */
	public function setFee($_Fee)
	{
		return ($this->Fee = $_Fee);
	}
	/**
	 * Get Fee
	 * @return PayPalTypeFeeType
	 */
	public function getFee()
	{
		return $this->Fee;
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