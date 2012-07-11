<?php
/**
 * Class file for EbayShoppingTypeShippingDetailsType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeShippingDetailsType
 * Documentation : Type for the shipping-related details for an item or transaction.
 * @date 05/07/2012
 */
class EbayShoppingTypeShippingDetailsType extends EbayShoppingWsdlClass
{
	/**
	 * The GetItFast
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the seller has opted the listing into the Get It Fast feature. If GetItFast is true, and if at least one of the domestic shipping services offered by the seller is an expedited shipping service, every shipping service offered by the seller is considered a Get It Fast service, and the seller commits to delivering the item to the buyer-selected shipping service within one day.
	 * @var boolean
	 */
	public $GetItFast;
	/**
	 * The InsuranceCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The cost of insurance. For flat rate shipping, this is the value set by the seller, if any. For calculated shipping, this is the value calculated by eBay with the shipping carrier for the particular item and can only be determined once the final item price is known when the listing ends. To determine whether a listing has ended, use GetSingleItem. <br> <br> Not applicable to eBay Motors vehicle listings.
	 * @var EbayShoppingTypeAmountType
	 */
	public $InsuranceCost;
	/**
	 * The InsuranceOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether the seller offers shipping insurance and, if so, whether the insurance is optional or required. Flat and calculated shipping.
	 * @var EbayShoppingTypeInsuranceOptionCodeType
	 */
	public $InsuranceOption;
	/**
	 * The InternationalShippingServiceOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Shipping costs and options related to an international shipping service. For calculated shipping, postal code must be known to determine final shipping cost (and this can only be known if a transaction has been created). For GetShippingCosts, if the postal code or bidder is in the same country as the listing site for the item, it is "domestic shipping" and this container is not returned (and ShippingServiceOption is returned instead). Otherwise, it is "international shipping" and this container is returned. <br> <br> For GetShippingCosts, results are filtered: if any service is not available in the buyer's region, it is removed. If no services remain after this filtering, a warning is returned. <br><br> Not applicable to Half.com or eBay Motors vehicle listings.
	 * @var EbayShoppingTypeInternationalShippingServiceOptionType
	 */
	public $InternationalShippingServiceOption;
	/**
	 * The SalesTax
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Sales tax details. US site only. Flat and calculated shipping. <br> <br> Not applicable to eBay Motors vehicle listings.
	 * @var EbayShoppingTypeSalesTaxType
	 */
	public $SalesTax;
	/**
	 * The ShippingRateErrorMessage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : For most applicable calls, returns the words No Error or returns an error message related to an attempt to calculate shipping rates. For calculated shipping only. <br> <br> Not applicable to Half.com or eBay Motors vehicle listings.
	 * @var string
	 */
	public $ShippingRateErrorMessage;
	/**
	 * The ShippingServiceOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Shipping costs and options related to a domestic shipping service. For GetShippingCosts, if the postal code or bidder is in the same country as the listing site for the item, it is "domestic shipping" and this container is returned. Otherwise, it is "international shipping" and this container is not returned (and InternationalShippingServiceOption is returned instead, if it exists). For calculated shipping, postal code must be known to determine final shipping cost (and this can only be known if a transaction has been created). For flat shipping: if the listing has not yet ended, any domestic shipping details are returned; if the listing has ended, domestic shipping details are only returned if the buyer's location is "domestic" (that is, it is the same country as the listing site). <br> Not applicable to Half.com or eBay Motors vehicle listings.
	 * @var EbayShoppingTypeShippingServiceOptionType
	 */
	public $ShippingServiceOption;
	/**
	 * The TaxTable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Tax details for a jurisdiction such as a state or province. Returned empty in if no tax table was used. <br> <br> Not applicable to Half.com.
	 * @var EbayShoppingTypeTaxTableType
	 */
	public $TaxTable;
	/**
	 * The InternationalInsuranceCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The cost of insurance for items shipped internationally. For flat rate shipping, this is the value set by the seller, if any. For calculated shipping, this is the value calculated by eBay with the shipping carrier for the particular item and can only be determined once the final item price is known when the listing ends. To determine whether a listing has ended, use GetSingleItem. <br> <br> Not applicable to eBay Motors vehicle listings.
	 * @var EbayShoppingTypeAmountType
	 */
	public $InternationalInsuranceCost;
	/**
	 * The InternationalInsuranceOption
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Whether the seller offers shipping insurance for items shipped internationally and, if so, whether the insurance is optional or required. Flat and calculated shipping.
	 * @var EbayShoppingTypeInsuranceOptionCodeType
	 */
	public $InternationalInsuranceOption;
	/**
	 * The CODCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Italy site (site ID 101) only. Contains the cost of cash-on-delivery shipping.
	 * @var EbayShoppingTypeAmountType
	 */
	public $CODCost;
	/**
	 * The ExcludeShipToLocation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A location to which the seller will not ship. Returned only if set via Trading API. Returned only with a request version of 665 or greater.
	 * @var string
	 */
	public $ExcludeShipToLocation;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean GetItFast
	 * @param EbayShoppingTypeAmountType InsuranceCost
	 * @param EbayShoppingTypeInsuranceOptionCodeType InsuranceOption
	 * @param EbayShoppingTypeInternationalShippingServiceOptionType InternationalShippingServiceOption
	 * @param EbayShoppingTypeSalesTaxType SalesTax
	 * @param string ShippingRateErrorMessage
	 * @param EbayShoppingTypeShippingServiceOptionType ShippingServiceOption
	 * @param EbayShoppingTypeTaxTableType TaxTable
	 * @param EbayShoppingTypeAmountType InternationalInsuranceCost
	 * @param EbayShoppingTypeInsuranceOptionCodeType InternationalInsuranceOption
	 * @param EbayShoppingTypeAmountType CODCost
	 * @param string ExcludeShipToLocation
	 * @param DOMDocument any
	 * @return EbayShoppingTypeShippingDetailsType
	 */
	public function __construct($_GetItFast = null,$_InsuranceCost = null,$_InsuranceOption = null,$_InternationalShippingServiceOption = null,$_SalesTax = null,$_ShippingRateErrorMessage = null,$_ShippingServiceOption = null,$_TaxTable = null,$_InternationalInsuranceCost = null,$_InternationalInsuranceOption = null,$_CODCost = null,$_ExcludeShipToLocation = null,$_any = null)
	{
		parent::__construct(array('GetItFast'=>$_GetItFast,'InsuranceCost'=>$_InsuranceCost,'InsuranceOption'=>$_InsuranceOption,'InternationalShippingServiceOption'=>$_InternationalShippingServiceOption,'SalesTax'=>$_SalesTax,'ShippingRateErrorMessage'=>$_ShippingRateErrorMessage,'ShippingServiceOption'=>$_ShippingServiceOption,'TaxTable'=>$_TaxTable,'InternationalInsuranceCost'=>$_InternationalInsuranceCost,'InternationalInsuranceOption'=>$_InternationalInsuranceOption,'CODCost'=>$_CODCost,'ExcludeShipToLocation'=>$_ExcludeShipToLocation,'any'=>$_any));
	}
	/**
	 * Set GetItFast
	 * @param boolean GetItFast
	 * @return boolean
	 */
	public function setGetItFast($_GetItFast)
	{
		return ($this->GetItFast = $_GetItFast);
	}
	/**
	 * Get GetItFast
	 * @return boolean
	 */
	public function getGetItFast()
	{
		return $this->GetItFast;
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
	 * Set InternationalShippingServiceOption
	 * @param InternationalShippingServiceOptionType InternationalShippingServiceOption
	 * @return InternationalShippingServiceOptionType
	 */
	public function setInternationalShippingServiceOption($_InternationalShippingServiceOption)
	{
		return ($this->InternationalShippingServiceOption = $_InternationalShippingServiceOption);
	}
	/**
	 * Get InternationalShippingServiceOption
	 * @return EbayShoppingTypeInternationalShippingServiceOptionType
	 */
	public function getInternationalShippingServiceOption()
	{
		return $this->InternationalShippingServiceOption;
	}
	/**
	 * Set SalesTax
	 * @param SalesTaxType SalesTax
	 * @return SalesTaxType
	 */
	public function setSalesTax($_SalesTax)
	{
		return ($this->SalesTax = $_SalesTax);
	}
	/**
	 * Get SalesTax
	 * @return EbayShoppingTypeSalesTaxType
	 */
	public function getSalesTax()
	{
		return $this->SalesTax;
	}
	/**
	 * Set ShippingRateErrorMessage
	 * @param string ShippingRateErrorMessage
	 * @return string
	 */
	public function setShippingRateErrorMessage($_ShippingRateErrorMessage)
	{
		return ($this->ShippingRateErrorMessage = $_ShippingRateErrorMessage);
	}
	/**
	 * Get ShippingRateErrorMessage
	 * @return string
	 */
	public function getShippingRateErrorMessage()
	{
		return $this->ShippingRateErrorMessage;
	}
	/**
	 * Set ShippingServiceOption
	 * @param ShippingServiceOptionType ShippingServiceOption
	 * @return ShippingServiceOptionType
	 */
	public function setShippingServiceOption($_ShippingServiceOption)
	{
		return ($this->ShippingServiceOption = $_ShippingServiceOption);
	}
	/**
	 * Get ShippingServiceOption
	 * @return EbayShoppingTypeShippingServiceOptionType
	 */
	public function getShippingServiceOption()
	{
		return $this->ShippingServiceOption;
	}
	/**
	 * Set TaxTable
	 * @param TaxTableType TaxTable
	 * @return TaxTableType
	 */
	public function setTaxTable($_TaxTable)
	{
		return ($this->TaxTable = $_TaxTable);
	}
	/**
	 * Get TaxTable
	 * @return EbayShoppingTypeTaxTableType
	 */
	public function getTaxTable()
	{
		return $this->TaxTable;
	}
	/**
	 * Set InternationalInsuranceCost
	 * @param AmountType InternationalInsuranceCost
	 * @return AmountType
	 */
	public function setInternationalInsuranceCost($_InternationalInsuranceCost)
	{
		return ($this->InternationalInsuranceCost = $_InternationalInsuranceCost);
	}
	/**
	 * Get InternationalInsuranceCost
	 * @return EbayShoppingTypeAmountType
	 */
	public function getInternationalInsuranceCost()
	{
		return $this->InternationalInsuranceCost;
	}
	/**
	 * Set InternationalInsuranceOption
	 * @param InsuranceOptionCodeType InternationalInsuranceOption
	 * @return InsuranceOptionCodeType
	 */
	public function setInternationalInsuranceOption($_InternationalInsuranceOption)
	{
		return ($this->InternationalInsuranceOption = EbayShoppingTypeInsuranceOptionCodeType::valueIsValid($_InternationalInsuranceOption)?$_InternationalInsuranceOption:null);
	}
	/**
	 * Get InternationalInsuranceOption
	 * @return EbayShoppingTypeInsuranceOptionCodeType
	 */
	public function getInternationalInsuranceOption()
	{
		return $this->InternationalInsuranceOption;
	}
	/**
	 * Set CODCost
	 * @param AmountType CODCost
	 * @return AmountType
	 */
	public function setCODCost($_CODCost)
	{
		return ($this->CODCost = $_CODCost);
	}
	/**
	 * Get CODCost
	 * @return EbayShoppingTypeAmountType
	 */
	public function getCODCost()
	{
		return $this->CODCost;
	}
	/**
	 * Set ExcludeShipToLocation
	 * @param string ExcludeShipToLocation
	 * @return string
	 */
	public function setExcludeShipToLocation($_ExcludeShipToLocation)
	{
		return ($this->ExcludeShipToLocation = $_ExcludeShipToLocation);
	}
	/**
	 * Get ExcludeShipToLocation
	 * @return string
	 */
	public function getExcludeShipToLocation()
	{
		return $this->ExcludeShipToLocation;
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