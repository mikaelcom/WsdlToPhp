<?php
/**
 * Class file for EbayFindTypeDiscountPriceInfo
 * @date 04/07/2012
 */
/**
 * Class EbayFindTypeDiscountPriceInfo
 * Documentation : This container supplies information for an item that has a Strike-Through Pricing (STP) or Minimum Advertised Price (MAP) discount pricing treatment. STP and MAP applies to only fixed price, BIN items. STP is available on the US, UK, and DE sites while MAP is available only on the US site. <br><br> This feature is available to qualified sellers who participate in the Discount Pricing program. A seller can provide a discount price treatment for Non-MSKU and MSKU items in Clothing, Shoes and Accessories (CDA), Motors, and Electronics (Home and Garden is expected to be supported in the future). <br><br> This feature will be available mid-Summer, 2011.
 * @date 04/07/2012
 */
class EbayFindTypeDiscountPriceInfo extends EbayFindWsdlClass
{
	/**
	 * The originalRetailPrice
	 * Meta informations :
	 * 	- documentation : This is the actual retail price set by the OEM. eBay does not maintain or validate the originalRetailPrice as supplied by the seller.
	 * @var EbayFindTypeAmount
	 */
	public $originalRetailPrice;
	/**
	 * The minimumAdvertisedPriceExposure
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If a seller offers an item for less than the Minimum Advertised Price (MAP) of that item, the seller cannot show the actual discounted price on the view item page. The buyer must open a pop-up on view item page or the discount price will be shown during checkout. minimumAdvertisedPriceExposure defines how the buyer is to view the discounted price, either PreCheckout or DuringCheckout. This is applicable for MAP items only.
	 * @var EbayFindTypeMapExposureEnum
	 */
	public $minimumAdvertisedPriceExposure;
	/**
	 * The pricingTreatment
	 * Meta informations :
	 * 	- documentation : Defines the type of treatment applied to a discounted item, either Strike-Through Pricing (STP) or Minimum Advertised Price (MAP).
	 * @var EbayFindTypePriceTreatmentEnum
	 */
	public $pricingTreatment;
	/**
	 * The soldOnEbay
	 * Meta informations :
	 * 	- default : false
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates that the pricing is compared to an item being sold on eBay.
	 * @var boolean
	 */
	public $soldOnEbay;
	/**
	 * The soldOffEbay
	 * Meta informations :
	 * 	- default : false
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates that the pricing is compared to an item not being sold on eBay.
	 * @var boolean
	 */
	public $soldOffEbay;
	/**
	 * Constructor
	 * @param EbayFindTypeAmount originalRetailPrice
	 * @param EbayFindTypeMapExposureEnum minimumAdvertisedPriceExposure
	 * @param EbayFindTypePriceTreatmentEnum pricingTreatment
	 * @param boolean soldOnEbay
	 * @param boolean soldOffEbay
	 * @return EbayFindTypeDiscountPriceInfo
	 */
	public function __construct($_originalRetailPrice = null,$_minimumAdvertisedPriceExposure = null,$_pricingTreatment = null,$_soldOnEbay = false,$_soldOffEbay = false)
	{
		parent::__construct(array('originalRetailPrice'=>$_originalRetailPrice,'minimumAdvertisedPriceExposure'=>$_minimumAdvertisedPriceExposure,'pricingTreatment'=>$_pricingTreatment,'soldOnEbay'=>$_soldOnEbay,'soldOffEbay'=>$_soldOffEbay));
	}
	/**
	 * Set originalRetailPrice
	 * @param Amount originalRetailPrice
	 * @return Amount
	 */
	public function setOriginalRetailPrice($_originalRetailPrice)
	{
		return ($this->originalRetailPrice = $_originalRetailPrice);
	}
	/**
	 * Get originalRetailPrice
	 * @return EbayFindTypeAmount
	 */
	public function getOriginalRetailPrice()
	{
		return $this->originalRetailPrice;
	}
	/**
	 * Set minimumAdvertisedPriceExposure
	 * @param MapExposureEnum minimumAdvertisedPriceExposure
	 * @return MapExposureEnum
	 */
	public function setMinimumAdvertisedPriceExposure($_minimumAdvertisedPriceExposure)
	{
		return ($this->minimumAdvertisedPriceExposure = EbayFindTypeMapExposureEnum::valueIsValid($_minimumAdvertisedPriceExposure)?$_minimumAdvertisedPriceExposure:null);
	}
	/**
	 * Get minimumAdvertisedPriceExposure
	 * @return EbayFindTypeMapExposureEnum
	 */
	public function getMinimumAdvertisedPriceExposure()
	{
		return $this->minimumAdvertisedPriceExposure;
	}
	/**
	 * Set pricingTreatment
	 * @param PriceTreatmentEnum pricingTreatment
	 * @return PriceTreatmentEnum
	 */
	public function setPricingTreatment($_pricingTreatment)
	{
		return ($this->pricingTreatment = EbayFindTypePriceTreatmentEnum::valueIsValid($_pricingTreatment)?$_pricingTreatment:null);
	}
	/**
	 * Get pricingTreatment
	 * @return EbayFindTypePriceTreatmentEnum
	 */
	public function getPricingTreatment()
	{
		return $this->pricingTreatment;
	}
	/**
	 * Set soldOnEbay
	 * @param boolean soldOnEbay
	 * @return boolean
	 */
	public function setSoldOnEbay($_soldOnEbay)
	{
		return ($this->soldOnEbay = $_soldOnEbay);
	}
	/**
	 * Get soldOnEbay
	 * @return boolean
	 */
	public function getSoldOnEbay()
	{
		return $this->soldOnEbay;
	}
	/**
	 * Set soldOffEbay
	 * @param boolean soldOffEbay
	 * @return boolean
	 */
	public function setSoldOffEbay($_soldOffEbay)
	{
		return ($this->soldOffEbay = $_soldOffEbay);
	}
	/**
	 * Get soldOffEbay
	 * @return boolean
	 */
	public function getSoldOffEbay()
	{
		return $this->soldOffEbay;
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