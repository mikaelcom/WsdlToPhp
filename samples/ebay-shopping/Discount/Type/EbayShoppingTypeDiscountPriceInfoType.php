<?php
/**
 * Class file for EbayShoppingTypeDiscountPriceInfoType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeDiscountPriceInfoType
 * Documentation : Contains the discount pricing details for an item, including the original retail price and the display treatment to be used for the item. The pricing treatment displayed for a discounted item depends on the values specified in this container when the item is listed. Discount pricing treatments (Strikethrough Pricing and Minimum Advertised Price) apply to only fixed price, BIN items. Sellers can apply Discount Pricing to both MSKU and Non-MSKU items.
 * @date 05/07/2012
 */
class EbayShoppingTypeDiscountPriceInfoType extends EbayShoppingWsdlClass
{
	/**
	 * The OriginalRetailPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field specifies the price to which the discounted-price display treatment will be applied (for example, a strikethrough price). The discounted price of an item (specified in the CurrentPrice field) is the BIN price and is less than the OriginalRetailPrice of the item. <br /><br /> See <a href= "http://developer.ebay.com/DevZone/XML/docs/WebHelp/index.htm?context=eBay_XML_API&topic=DiscountPricing"> Displaying Discount Pricing Information to Buyers</a> for guidelines on displaying STP and MAP items.
	 * @var EbayShoppingTypeAmountType
	 */
	public $OriginalRetailPrice;
	/**
	 * The MinimumAdvertisedPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A value equal to the agreed upon minimum advertised price. <br><br> The minimum advertised price is an agreed upon price that is set by the suppliers/OEMs and the retailers/sellers. The minimum advertised price is the lowest price for which an item can be advertised. Large volume sellers can negotiate with the suppliers/OEMs to offer certain items below the set minimum advertised price. eBay does not maintain or validate the agreed upon minimum advertised price; the seller is responsible for setting this value in accordance with their agreement with the supplier/OEMs. MAP pricing treatments apply to only fixed price, BIN items listed on the eBay US site.
	 * @var EbayShoppingTypeAmountType
	 */
	public $MinimumAdvertisedPrice;
	/**
	 * The MinimumAdvertisedPriceExposure
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If an item listing qualifies it to be listed as a MAP item (PricingTreatment returns MAP), the item price cannot be directly displayed on the page containing the item. When listing a MAP item, the seller stipulates how they want the buyer to view the price of the item by setting this field to either PreCheckout or DuringCheckout. If this feild is not set for a MAP item, the treatment defaults to PreCheckout. <br /><br /> If this field is set to PreCheckout, the buyer must click a link (or button) to view the item price on a different page (such as in a pop-up window). If this field is set to DuringCheckout, the StartPrice must be shown only when the buyer in the eBay checkout flow. <br /><br /> MAP items are supported only on the eBay US site.
	 * @var EbayShoppingTypeMinimumAdvertisedPriceExposureCodeType
	 */
	public $MinimumAdvertisedPriceExposure;
	/**
	 * The PricingTreatment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This field denotes whether or not an item qualifies for a discount pricing treatment display. If a seller lists an item with DiscountPriceInfo values, the item response container will include a DiscountPriceInfo container with this field set to either STP, MAP, or None. If this field is set to MAP, you must abide by the rules for displaying MAP items, as described in MinimumAdvertisedPriceExposure. <br /> <br /> <span class="tablenote"><b>Important:</b> For listings that return PricingTreatment set to MAP, you are legally required to follow the rules for displaying the price of the item to potential buyers. You are bound by the terms of the API License Agreement to follow these rules. Refer to the API License Agreement for consequences of non-compliance. </span>
	 * @var EbayShoppingTypePricingTreatmentCodeType
	 */
	public $PricingTreatment;
	/**
	 * The SoldOneBay
	 * Meta informations :
	 * 	- default : false
	 * 	- minOccurs : 0
	 * 	- documentation : Used by the eBay UK and eBay Germany (DE) sites, this field indicates that the discount price (specified as CurrentPrice) is the price for which the seller offered the same (or similar) item for sale on eBay within the previous 30 days. The discount price is always in reference to the seller's own price for the item. <br /><br /> In the event both soldOffeBay and soldOneBay fields are set, soldOneBay takes precedence.
	 * @var boolean
	 */
	public $SoldOneBay;
	/**
	 * The SoldOffeBay
	 * Meta informations :
	 * 	- default : false
	 * 	- minOccurs : 0
	 * 	- documentation : Used by the eBay UK and eBay Germany (DE) sites, this field indicates that the discount price (specified as currentPrice) is the price for which the seller offered the same item for sale on a web site or offline store other than eBay in the previous 30 days. The discount price is always in reference to the seller's own price for the item. <br /><br /> In the event both soldOffeBay and soldOneBay fields are set, soldOneBay takes precedence.
	 * @var boolean
	 */
	public $SoldOffeBay;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayShoppingTypeAmountType OriginalRetailPrice
	 * @param EbayShoppingTypeAmountType MinimumAdvertisedPrice
	 * @param EbayShoppingTypeMinimumAdvertisedPriceExposureCodeType MinimumAdvertisedPriceExposure
	 * @param EbayShoppingTypePricingTreatmentCodeType PricingTreatment
	 * @param boolean SoldOneBay
	 * @param boolean SoldOffeBay
	 * @param DOMDocument any
	 * @return EbayShoppingTypeDiscountPriceInfoType
	 */
	public function __construct($_OriginalRetailPrice = null,$_MinimumAdvertisedPrice = null,$_MinimumAdvertisedPriceExposure = null,$_PricingTreatment = null,$_SoldOneBay = false,$_SoldOffeBay = false,$_any = null)
	{
		parent::__construct(array('OriginalRetailPrice'=>$_OriginalRetailPrice,'MinimumAdvertisedPrice'=>$_MinimumAdvertisedPrice,'MinimumAdvertisedPriceExposure'=>$_MinimumAdvertisedPriceExposure,'PricingTreatment'=>$_PricingTreatment,'SoldOneBay'=>$_SoldOneBay,'SoldOffeBay'=>$_SoldOffeBay,'any'=>$_any));
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
	 * @return EbayShoppingTypeAmountType
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
	 * @return EbayShoppingTypeAmountType
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
		return ($this->MinimumAdvertisedPriceExposure = EbayShoppingTypeMinimumAdvertisedPriceExposureCodeType::valueIsValid($_MinimumAdvertisedPriceExposure)?$_MinimumAdvertisedPriceExposure:null);
	}
	/**
	 * Get MinimumAdvertisedPriceExposure
	 * @return EbayShoppingTypeMinimumAdvertisedPriceExposureCodeType
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
		return ($this->PricingTreatment = EbayShoppingTypePricingTreatmentCodeType::valueIsValid($_PricingTreatment)?$_PricingTreatment:null);
	}
	/**
	 * Get PricingTreatment
	 * @return EbayShoppingTypePricingTreatmentCodeType
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