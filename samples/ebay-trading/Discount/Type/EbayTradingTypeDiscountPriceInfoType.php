<?php
/**
 * Class file for EbayTradingTypeDiscountPriceInfoType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDiscountPriceInfoType
 * Documentation : Using this container, a seller can supply original retail price and discount price for an item to clarify the discount treatment (also known as strike-through pricing). Only applies to fixed price, Buy It Now listings. This feature is available for large enterprise sellers via white list. A seller can provide discount treatment regardless of whether the listing includes a SKU.
 * @date 04/07/2012
 */
class EbayTradingTypeDiscountPriceInfoType extends EbayTradingWsdlClass
{
	/**
	 * The OriginalRetailPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The actual retail price set by the manufacturer (OEM). eBay does not maintain or validate the OriginalRetailPrice supplied by the seller. OriginalRetailPrice should always be less than StartPrice. Compare the StartPrice/BuyItNowPrice to OriginalRetailPrice to determine the amount of savings to the buyer.
	 * @var EbayTradingTypeAmountType
	 */
	public $OriginalRetailPrice;
	/**
	 * The MinimumAdvertisedPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Minimum Advertised Price (MAP) is an agreement between suppliers (or manufacturers (OEM)) and the retailers (sellers) stipulating the lowest price an item is allowed to be advertised at. Sellers can offer prices below MAP by means of other discounts. Applies only to fixed price and Buy It Now listings.
	 * @var EbayTradingTypeAmountType
	 */
	public $MinimumAdvertisedPrice;
	/**
	 * The MinimumAdvertisedPriceExposure
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : For MinimumAdvertisedPrice (MAP) listings only. A seller cannot show the actual discounted price on eBay's View Item page. Instead, the buyer can either click on a pop-up on eBay's View Item page, or the discount price will be shown during checkout.
	 * @var EbayTradingTypeMinimumAdvertisedPriceExposureCodeType
	 */
	public $MinimumAdvertisedPriceExposure;
	/**
	 * The PricingTreatment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Not applicable in listing requests. Based on OriginalRetailPrice, MinimumAdvertisedPrice, and StartPrice values, eBay identifies whether the listing falls under MAP or STP (aka OriginalRetailPrice). GetItem returns this for items listed with one of these discount pricing treatments. GetSellerList returns the DiscountPriceInfo container.
	 * @var EbayTradingTypePricingTreatmentCodeType
	 */
	public $PricingTreatment;
	/**
	 * The SoldOneBay
	 * Meta informations :
	 * 	- default : false
	 * 	- minOccurs : 0
	 * 	- documentation : Used by the eBay UK and eBay Germany (DE) sites, this field indicates that the discount price (specified as StartPrice) is the price for which the seller offered the same (or similar) item for sale on eBay within the previous 30 days. The discount price is always in reference to the seller's own price for the item. <br><br> If this field is set, eBay displays 'Was' in the UK and 'Ursprunglich' in Germany, next to the discounted price of the item. In the event both SoldOffeBay and SoldOneBay fields are set, SoldOneBay takes precedence.
	 * @var boolean
	 */
	public $SoldOneBay;
	/**
	 * The SoldOffeBay
	 * Meta informations :
	 * 	- default : false
	 * 	- minOccurs : 0
	 * 	- documentation : Used by the eBay UK and eBay Germany (DE) sites, this field indicates that the discount price (specified as StartPrice) is the price for which the seller offered the same (or similar) item for sale on a web site or offline store other than eBay in the previous 30 days. The discount price is always in reference to the seller's own price for the item. <br><br> If this field is set, eBay displays 'Was*' in the UK and 'Ursprunglich*' in Germany, next to the discounted price of the item. In the event both SoldOffeBay and SoldOneBay fields are set, SoldOneBay takes precedence.
	 * @var boolean
	 */
	public $SoldOffeBay;
	/**
	 * The MadeForOutletComparisonPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Applicable only if the item was specifically made for sale through dedicated eBay outlet pages (e.g., eBay Fashion Outlet).<br> <br> The comparison price is the price of a comparable product sold through non-outlet channels on eBay (or elsewhere), or not specifically made for the outlet.<br> <br> In fashion, a "comparable" product shares the same design, but is not considered an identical product. Some products are specifically made for outlets, and may have a different SKU than the "comparable" product. These made-for-outlet products may be manufactured in a different place, with different materials, or according to different specifications (i.e. different stitch pattern, seam reinforcement, button quality, etc.)
	 * @var EbayTradingTypeAmountType
	 */
	public $MadeForOutletComparisonPrice;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeAmountType OriginalRetailPrice
	 * @param EbayTradingTypeAmountType MinimumAdvertisedPrice
	 * @param EbayTradingTypeMinimumAdvertisedPriceExposureCodeType MinimumAdvertisedPriceExposure
	 * @param EbayTradingTypePricingTreatmentCodeType PricingTreatment
	 * @param boolean SoldOneBay
	 * @param boolean SoldOffeBay
	 * @param EbayTradingTypeAmountType MadeForOutletComparisonPrice
	 * @param DOMDocument any
	 * @return EbayTradingTypeDiscountPriceInfoType
	 */
	public function __construct($_OriginalRetailPrice = null,$_MinimumAdvertisedPrice = null,$_MinimumAdvertisedPriceExposure = null,$_PricingTreatment = null,$_SoldOneBay = false,$_SoldOffeBay = false,$_MadeForOutletComparisonPrice = null,$_any = null)
	{
		parent::__construct(array('OriginalRetailPrice'=>$_OriginalRetailPrice,'MinimumAdvertisedPrice'=>$_MinimumAdvertisedPrice,'MinimumAdvertisedPriceExposure'=>$_MinimumAdvertisedPriceExposure,'PricingTreatment'=>$_PricingTreatment,'SoldOneBay'=>$_SoldOneBay,'SoldOffeBay'=>$_SoldOffeBay,'MadeForOutletComparisonPrice'=>$_MadeForOutletComparisonPrice,'any'=>$_any));
	}
	/**
	 * Set OriginalRetailPrice
	 * @param AmountType OriginalRetailPrice
	 * @return AmountType
	 */
	public function setOriginalRetailPrice($_OriginalRetailPrice)
	{
		return ($this->OriginalRetailPrice = $_OriginalRetailPrice);
	}
	/**
	 * Get OriginalRetailPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getOriginalRetailPrice()
	{
		return $this->OriginalRetailPrice;
	}
	/**
	 * Set MinimumAdvertisedPrice
	 * @param AmountType MinimumAdvertisedPrice
	 * @return AmountType
	 */
	public function setMinimumAdvertisedPrice($_MinimumAdvertisedPrice)
	{
		return ($this->MinimumAdvertisedPrice = $_MinimumAdvertisedPrice);
	}
	/**
	 * Get MinimumAdvertisedPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getMinimumAdvertisedPrice()
	{
		return $this->MinimumAdvertisedPrice;
	}
	/**
	 * Set MinimumAdvertisedPriceExposure
	 * @param MinimumAdvertisedPriceExposureCodeType MinimumAdvertisedPriceExposure
	 * @return MinimumAdvertisedPriceExposureCodeType
	 */
	public function setMinimumAdvertisedPriceExposure($_MinimumAdvertisedPriceExposure)
	{
		return ($this->MinimumAdvertisedPriceExposure = EbayTradingTypeMinimumAdvertisedPriceExposureCodeType::valueIsValid($_MinimumAdvertisedPriceExposure)?$_MinimumAdvertisedPriceExposure:null);
	}
	/**
	 * Get MinimumAdvertisedPriceExposure
	 * @return EbayTradingTypeMinimumAdvertisedPriceExposureCodeType
	 */
	public function getMinimumAdvertisedPriceExposure()
	{
		return $this->MinimumAdvertisedPriceExposure;
	}
	/**
	 * Set PricingTreatment
	 * @param PricingTreatmentCodeType PricingTreatment
	 * @return PricingTreatmentCodeType
	 */
	public function setPricingTreatment($_PricingTreatment)
	{
		return ($this->PricingTreatment = EbayTradingTypePricingTreatmentCodeType::valueIsValid($_PricingTreatment)?$_PricingTreatment:null);
	}
	/**
	 * Get PricingTreatment
	 * @return EbayTradingTypePricingTreatmentCodeType
	 */
	public function getPricingTreatment()
	{
		return $this->PricingTreatment;
	}
	/**
	 * Set SoldOneBay
	 * @param boolean SoldOneBay
	 * @return boolean
	 */
	public function setSoldOneBay($_SoldOneBay)
	{
		return ($this->SoldOneBay = $_SoldOneBay);
	}
	/**
	 * Get SoldOneBay
	 * @return boolean
	 */
	public function getSoldOneBay()
	{
		return $this->SoldOneBay;
	}
	/**
	 * Set SoldOffeBay
	 * @param boolean SoldOffeBay
	 * @return boolean
	 */
	public function setSoldOffeBay($_SoldOffeBay)
	{
		return ($this->SoldOffeBay = $_SoldOffeBay);
	}
	/**
	 * Get SoldOffeBay
	 * @return boolean
	 */
	public function getSoldOffeBay()
	{
		return $this->SoldOffeBay;
	}
	/**
	 * Set MadeForOutletComparisonPrice
	 * @param AmountType MadeForOutletComparisonPrice
	 * @return AmountType
	 */
	public function setMadeForOutletComparisonPrice($_MadeForOutletComparisonPrice)
	{
		return ($this->MadeForOutletComparisonPrice = $_MadeForOutletComparisonPrice);
	}
	/**
	 * Get MadeForOutletComparisonPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getMadeForOutletComparisonPrice()
	{
		return $this->MadeForOutletComparisonPrice;
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