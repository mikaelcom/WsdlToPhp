<?php
/**
 * Class file for EbayShoppingTypeShippingCostSummaryType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeShippingCostSummaryType
 * Documentation : Type for the shipping-related details for an item or transaction.
 * @date 05/07/2012
 */
class EbayShoppingTypeShippingCostSummaryType extends EbayShoppingWsdlClass
{
	/**
	 * The ShippingServiceName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of a shipping service.
	 * @var string
	 */
	public $ShippingServiceName;
	/**
	 * The ShippingServiceCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The basic shipping cost of the item. This reflects the domestic shipping cost or the international shipping costs, depending on which applies (that is, whether the bidder/buyer is in the same country as the listing site of the item). <br> <br> In GetSingleItem, this is always returned when ShippingCostSummary is returned, except for when the ShippingType is Freight. <br> <br> GetShippingCosts: <i>Flat shipping:</i> single-item listing: this matches (in)ShippingServiceCost; multi-quantity listing: with a request version of 665 or greater, this is the total of (in)ShippingServiceCost plus ((in)ShippingServiceAdditionalCost times the number of items beyond the first item), and with a request version lower than 665, this is (in)ShippingServiceCost. <br> <i>Promotional shipping:</i> For a request version lower than 665, promotional shipping has no effect on shipping costs. Otherwise: if the promotional shipping option is lower than other shipping services being offered, the savings is reflected in the returned shipping cost; the shipping service named Promotional Shipping Service (or whatever is the localized name for it) is included among the shipping services; if the promotional shipping cost is lower than the cost of other shipping services being offered, it is presented first in the list (the lowest shipping service cost is always presented first, regardless of whether there is promotional shipping). <br> <i>Shipping surcharge:</i> With a request version of 665 or greater, shipping cost includes any surcharge, and surcharge is not returned as an individual tag. With a request version lower than 665, surcharge is not part of the total cost and is returned as its own tag.
	 * @var EbayShoppingTypeAmountType
	 */
	public $ShippingServiceCost;
	/**
	 * The InsuranceCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The cost of insurance. For flat rate shipping, this is the value set by the seller, if any. For calculated shipping, this is the value calculated by eBay with the shipping carrier for the particular item and can only be determined once the final item price is known when the listing ends. To determine whether a listing has ended, see EndTime or ListingStatus in GetSingleItem.
	 * @var EbayShoppingTypeAmountType
	 */
	public $InsuranceCost;
	/**
	 * The ShippingType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : How the seller stated that cost of shipping is to be determined, such as flat rate or calculated.
	 * @var EbayShoppingTypeShippingTypeCodeType
	 */
	public $ShippingType;
	/**
	 * The LocalPickup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If ShippingCosts is specified for the IncludeSelector, and if the seller has specified local pickup for this item; the LocalPickup boolean is returned as true. This indicates that the seller does not ship this item. If local pickup was not specified for this item by the seller, the LocalPickup boolean is not returned.
	 * @var boolean
	 */
	public $LocalPickup;
	/**
	 * The InsuranceOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether the seller offers shipping insurance and, if so, whether the insurance is optional or required. Flat and calculated shipping.
	 * @var EbayShoppingTypeInsuranceOptionCodeType
	 */
	public $InsuranceOption;
	/**
	 * The ListedShippingServiceCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The listed shipping cost of the item. If multiple items were purchased, this includes the listed ShippingServiceAdditionalCost. <br> <br> In GetSingleItem, this is always returned when ShippingCostSummary is returned, except when the ShippingType is Freight.
	 * @var EbayShoppingTypeAmountType
	 */
	public $ListedShippingServiceCost;
	/**
	 * The ImportCharge
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total cost of customs and taxes for the international leg of an order shipped using the Global Exchange program. This amount is calculated and supplied for each item by the international shipping provider when a buyer views the item properties. <br/><br/> <span class="tablenote"> <strong>Note:</strong> The Global Exchange program is available for testing with simulated responses in the Sandbox in mid-June 2012. The full functionality of the Global Exchange program will be available in August 2012. </span>
	 * @var EbayShoppingTypeAmountType
	 */
	public $ImportCharge;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string ShippingServiceName
	 * @param EbayShoppingTypeAmountType ShippingServiceCost
	 * @param EbayShoppingTypeAmountType InsuranceCost
	 * @param EbayShoppingTypeShippingTypeCodeType ShippingType
	 * @param boolean LocalPickup
	 * @param EbayShoppingTypeInsuranceOptionCodeType InsuranceOption
	 * @param EbayShoppingTypeAmountType ListedShippingServiceCost
	 * @param EbayShoppingTypeAmountType ImportCharge
	 * @param DOMDocument any
	 * @return EbayShoppingTypeShippingCostSummaryType
	 */
	public function __construct($_ShippingServiceName = null,$_ShippingServiceCost = null,$_InsuranceCost = null,$_ShippingType = null,$_LocalPickup = null,$_InsuranceOption = null,$_ListedShippingServiceCost = null,$_ImportCharge = null,$_any = null)
	{
		parent::__construct(array('ShippingServiceName'=>$_ShippingServiceName,'ShippingServiceCost'=>$_ShippingServiceCost,'InsuranceCost'=>$_InsuranceCost,'ShippingType'=>$_ShippingType,'LocalPickup'=>$_LocalPickup,'InsuranceOption'=>$_InsuranceOption,'ListedShippingServiceCost'=>$_ListedShippingServiceCost,'ImportCharge'=>$_ImportCharge,'any'=>$_any));
	}
	/**
	 * Set ShippingServiceName
	 * @param string ShippingServiceName
	 * @return string
	 */
	public function setShippingServiceName($_ShippingServiceName)
	{
		return ($this->ShippingServiceName = $_ShippingServiceName);
	}
	/**
	 * Get ShippingServiceName
	 * @return string
	 */
	public function getShippingServiceName()
	{
		return $this->ShippingServiceName;
	}
	/**
	 * Set ShippingServiceCost
	 * @param AmountType ShippingServiceCost
	 * @return AmountType
	 */
	public function setShippingServiceCost($_ShippingServiceCost)
	{
		return ($this->ShippingServiceCost = $_ShippingServiceCost);
	}
	/**
	 * Get ShippingServiceCost
	 * @return EbayShoppingTypeAmountType
	 */
	public function getShippingServiceCost()
	{
		return $this->ShippingServiceCost;
	}
	/**
	 * Set InsuranceCost
	 * @param AmountType InsuranceCost
	 * @return AmountType
	 */
	public function setInsuranceCost($_InsuranceCost)
	{
		return ($this->InsuranceCost = $_InsuranceCost);
	}
	/**
	 * Get InsuranceCost
	 * @return EbayShoppingTypeAmountType
	 */
	public function getInsuranceCost()
	{
		return $this->InsuranceCost;
	}
	/**
	 * Set ShippingType
	 * @param ShippingTypeCodeType ShippingType
	 * @return ShippingTypeCodeType
	 */
	public function setShippingType($_ShippingType)
	{
		return ($this->ShippingType = EbayShoppingTypeShippingTypeCodeType::valueIsValid($_ShippingType)?$_ShippingType:null);
	}
	/**
	 * Get ShippingType
	 * @return EbayShoppingTypeShippingTypeCodeType
	 */
	public function getShippingType()
	{
		return $this->ShippingType;
	}
	/**
	 * Set LocalPickup
	 * @param boolean LocalPickup
	 * @return boolean
	 */
	public function setLocalPickup($_LocalPickup)
	{
		return ($this->LocalPickup = $_LocalPickup);
	}
	/**
	 * Get LocalPickup
	 * @return boolean
	 */
	public function getLocalPickup()
	{
		return $this->LocalPickup;
	}
	/**
	 * Set InsuranceOption
	 * @param InsuranceOptionCodeType InsuranceOption
	 * @return InsuranceOptionCodeType
	 */
	public function setInsuranceOption($_InsuranceOption)
	{
		return ($this->InsuranceOption = EbayShoppingTypeInsuranceOptionCodeType::valueIsValid($_InsuranceOption)?$_InsuranceOption:null);
	}
	/**
	 * Get InsuranceOption
	 * @return EbayShoppingTypeInsuranceOptionCodeType
	 */
	public function getInsuranceOption()
	{
		return $this->InsuranceOption;
	}
	/**
	 * Set ListedShippingServiceCost
	 * @param AmountType ListedShippingServiceCost
	 * @return AmountType
	 */
	public function setListedShippingServiceCost($_ListedShippingServiceCost)
	{
		return ($this->ListedShippingServiceCost = $_ListedShippingServiceCost);
	}
	/**
	 * Get ListedShippingServiceCost
	 * @return EbayShoppingTypeAmountType
	 */
	public function getListedShippingServiceCost()
	{
		return $this->ListedShippingServiceCost;
	}
	/**
	 * Set ImportCharge
	 * @param AmountType ImportCharge
	 * @return AmountType
	 */
	public function setImportCharge($_ImportCharge)
	{
		return ($this->ImportCharge = $_ImportCharge);
	}
	/**
	 * Get ImportCharge
	 * @return EbayShoppingTypeAmountType
	 */
	public function getImportCharge()
	{
		return $this->ImportCharge;
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