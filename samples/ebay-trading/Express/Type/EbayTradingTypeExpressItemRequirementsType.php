<?php
/**
 * Class file for EbayTradingTypeExpressItemRequirementsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeExpressItemRequirementsType
 * Documentation : Contains details about why an item does or doesn't qualify as an eBay Express listing.
 * @date 04/07/2012
 */
class EbayTradingTypeExpressItemRequirementsType extends EbayTradingWsdlClass
{
	/**
	 * The SellerExpressEligible
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If false, indicates that an item is not Express-eligible because the seller is not Express-eligible. Only returned if false, and no other settings are returned in this case.
	 * @var boolean
	 */
	public $SellerExpressEligible;
	/**
	 * The ExpressOptOut
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, this field indicates the item was opted out of Express; that is, ExpressOptOut was true in the listing request. Only returned if true, and no other settings are returned in this case.
	 * @var boolean
	 */
	public $ExpressOptOut;
	/**
	 * The ExpressApproved
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates eBay has marked the item as eligible for eBay Express based on direct evaluation. Only returned if true, and no other settings are returned in this case.
	 * @var boolean
	 */
	public $ExpressApproved;
	/**
	 * The ExpressEligibleListingType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates the item listing format is eligible for Express. If false, the listing format is ineligible (and the item is therefore ineligible).
	 * @var boolean
	 */
	public $ExpressEligibleListingType;
	/**
	 * The ExpressEnabledCategory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the item's primary category is enabled for Express. If false, the primary category is not enabled for Express (and the item is therefore ineligible).
	 * @var boolean
	 */
	public $ExpressEnabledCategory;
	/**
	 * The EligiblePayPalAccount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the seller has an Express-eligible PayPal account.
	 * @var boolean
	 */
	public $EligiblePayPalAccount;
	/**
	 * The DomesticShippingCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, domestic shipping costs are specified for the item. If false, they aren't specified (and the item is therefore ineligible).
	 * @var boolean
	 */
	public $DomesticShippingCost;
	/**
	 * The EligibleReturnPolicy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the item is covered by a return policy that meets the site's requirements for Express. Only returned for Express Germany. (A return policy is optional for Express US.)
	 * @var boolean
	 */
	public $EligibleReturnPolicy;
	/**
	 * The Picture
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the item includes a picture. If false, the item doesn't include a picture. Only returned if the category requires a picture for Express. Some categories waive the picture requirement.
	 * @var boolean
	 */
	public $Picture;
	/**
	 * The EligibleItemCondition
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the item specifies an eligible item condition. If false, the item doesn't specify an eligible item condition. Only returned if the category requires an item condition for Express. Some categories waive the item condition requirement.
	 * @var boolean
	 */
	public $EligibleItemCondition;
	/**
	 * The PriceAboveMinimum
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the price of the item is above the minimum price allowed on Express. That is, the StartPrice, BuyItNowPrice, or CurrentPrice is above the minimum.)
	 * @var boolean
	 */
	public $PriceAboveMinimum;
	/**
	 * The PriceBelowMaximum
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the price of the item is below the maximum price allowed on Express. (That is, the StartPrice, BuyItNowPrice, or CurrentPrice is below the maximum.)
	 * @var boolean
	 */
	public $PriceBelowMaximum;
	/**
	 * The EligibleCheckout
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates the item meets the site's eBay Express requirements for checkout. (A common case when this could be false would be when ThirdPartyCheckout is true but ThirdPartyCheckoutIntegration is false.)
	 * @var boolean
	 */
	public $EligibleCheckout;
	/**
	 * The NoPreapprovedBidderList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the item has no pre-approved bidder list.
	 * @var boolean
	 */
	public $NoPreapprovedBidderList;
	/**
	 * The NoCharity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the item is not an eBay Giving Works item. Only returned if the site does not allow charity listings on Express. (In other words, if the site excludes charity listings from Express, then NoCharity=true means the item meets the eligibility requirement.)
	 * @var boolean
	 */
	public $NoCharity;
	/**
	 * The CombinedShippingDiscount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the item offers a combined shipping discount. Only returned if the Express site has an item-level combined shipping discount requirement. (Some Express sites only require you to accept combined payments at the seller level, in your My eBay preferences.)
	 * @var boolean
	 */
	public $CombinedShippingDiscount;
	/**
	 * The ShipFromEligibleCountry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the country you specified for the item meets the specified site's shipping origin requirements for Express.
	 * @var boolean
	 */
	public $ShipFromEligibleCountry;
	/**
	 * The PayPalAccountAcceptsUnconfirmedAddress
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the PayPal account for the item accepts payments from a buyer with an unconfirmed address. If false, the account blocks unconfirmed addresses (and the item is therefore ineligible).
	 * @var boolean
	 */
	public $PayPalAccountAcceptsUnconfirmedAddress;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean SellerExpressEligible
	 * @param boolean ExpressOptOut
	 * @param boolean ExpressApproved
	 * @param boolean ExpressEligibleListingType
	 * @param boolean ExpressEnabledCategory
	 * @param boolean EligiblePayPalAccount
	 * @param boolean DomesticShippingCost
	 * @param boolean EligibleReturnPolicy
	 * @param boolean Picture
	 * @param boolean EligibleItemCondition
	 * @param boolean PriceAboveMinimum
	 * @param boolean PriceBelowMaximum
	 * @param boolean EligibleCheckout
	 * @param boolean NoPreapprovedBidderList
	 * @param boolean NoCharity
	 * @param boolean CombinedShippingDiscount
	 * @param boolean ShipFromEligibleCountry
	 * @param boolean PayPalAccountAcceptsUnconfirmedAddress
	 * @param DOMDocument any
	 * @return EbayTradingTypeExpressItemRequirementsType
	 */
	public function __construct($_SellerExpressEligible = null,$_ExpressOptOut = null,$_ExpressApproved = null,$_ExpressEligibleListingType = null,$_ExpressEnabledCategory = null,$_EligiblePayPalAccount = null,$_DomesticShippingCost = null,$_EligibleReturnPolicy = null,$_Picture = null,$_EligibleItemCondition = null,$_PriceAboveMinimum = null,$_PriceBelowMaximum = null,$_EligibleCheckout = null,$_NoPreapprovedBidderList = null,$_NoCharity = null,$_CombinedShippingDiscount = null,$_ShipFromEligibleCountry = null,$_PayPalAccountAcceptsUnconfirmedAddress = null,$_any = null)
	{
		parent::__construct(array('SellerExpressEligible'=>$_SellerExpressEligible,'ExpressOptOut'=>$_ExpressOptOut,'ExpressApproved'=>$_ExpressApproved,'ExpressEligibleListingType'=>$_ExpressEligibleListingType,'ExpressEnabledCategory'=>$_ExpressEnabledCategory,'EligiblePayPalAccount'=>$_EligiblePayPalAccount,'DomesticShippingCost'=>$_DomesticShippingCost,'EligibleReturnPolicy'=>$_EligibleReturnPolicy,'Picture'=>$_Picture,'EligibleItemCondition'=>$_EligibleItemCondition,'PriceAboveMinimum'=>$_PriceAboveMinimum,'PriceBelowMaximum'=>$_PriceBelowMaximum,'EligibleCheckout'=>$_EligibleCheckout,'NoPreapprovedBidderList'=>$_NoPreapprovedBidderList,'NoCharity'=>$_NoCharity,'CombinedShippingDiscount'=>$_CombinedShippingDiscount,'ShipFromEligibleCountry'=>$_ShipFromEligibleCountry,'PayPalAccountAcceptsUnconfirmedAddress'=>$_PayPalAccountAcceptsUnconfirmedAddress,'any'=>$_any));
	}
	/**
	 * Set SellerExpressEligible
	 * @param boolean SellerExpressEligible
	 * @return boolean
	 */
	public function setSellerExpressEligible($_SellerExpressEligible)
	{
		return ($this->SellerExpressEligible = $_SellerExpressEligible);
	}
	/**
	 * Get SellerExpressEligible
	 * @return boolean
	 */
	public function getSellerExpressEligible()
	{
		return $this->SellerExpressEligible;
	}
	/**
	 * Set ExpressOptOut
	 * @param boolean ExpressOptOut
	 * @return boolean
	 */
	public function setExpressOptOut($_ExpressOptOut)
	{
		return ($this->ExpressOptOut = $_ExpressOptOut);
	}
	/**
	 * Get ExpressOptOut
	 * @return boolean
	 */
	public function getExpressOptOut()
	{
		return $this->ExpressOptOut;
	}
	/**
	 * Set ExpressApproved
	 * @param boolean ExpressApproved
	 * @return boolean
	 */
	public function setExpressApproved($_ExpressApproved)
	{
		return ($this->ExpressApproved = $_ExpressApproved);
	}
	/**
	 * Get ExpressApproved
	 * @return boolean
	 */
	public function getExpressApproved()
	{
		return $this->ExpressApproved;
	}
	/**
	 * Set ExpressEligibleListingType
	 * @param boolean ExpressEligibleListingType
	 * @return boolean
	 */
	public function setExpressEligibleListingType($_ExpressEligibleListingType)
	{
		return ($this->ExpressEligibleListingType = $_ExpressEligibleListingType);
	}
	/**
	 * Get ExpressEligibleListingType
	 * @return boolean
	 */
	public function getExpressEligibleListingType()
	{
		return $this->ExpressEligibleListingType;
	}
	/**
	 * Set ExpressEnabledCategory
	 * @param boolean ExpressEnabledCategory
	 * @return boolean
	 */
	public function setExpressEnabledCategory($_ExpressEnabledCategory)
	{
		return ($this->ExpressEnabledCategory = $_ExpressEnabledCategory);
	}
	/**
	 * Get ExpressEnabledCategory
	 * @return boolean
	 */
	public function getExpressEnabledCategory()
	{
		return $this->ExpressEnabledCategory;
	}
	/**
	 * Set EligiblePayPalAccount
	 * @param boolean EligiblePayPalAccount
	 * @return boolean
	 */
	public function setEligiblePayPalAccount($_EligiblePayPalAccount)
	{
		return ($this->EligiblePayPalAccount = $_EligiblePayPalAccount);
	}
	/**
	 * Get EligiblePayPalAccount
	 * @return boolean
	 */
	public function getEligiblePayPalAccount()
	{
		return $this->EligiblePayPalAccount;
	}
	/**
	 * Set DomesticShippingCost
	 * @param boolean DomesticShippingCost
	 * @return boolean
	 */
	public function setDomesticShippingCost($_DomesticShippingCost)
	{
		return ($this->DomesticShippingCost = $_DomesticShippingCost);
	}
	/**
	 * Get DomesticShippingCost
	 * @return boolean
	 */
	public function getDomesticShippingCost()
	{
		return $this->DomesticShippingCost;
	}
	/**
	 * Set EligibleReturnPolicy
	 * @param boolean EligibleReturnPolicy
	 * @return boolean
	 */
	public function setEligibleReturnPolicy($_EligibleReturnPolicy)
	{
		return ($this->EligibleReturnPolicy = $_EligibleReturnPolicy);
	}
	/**
	 * Get EligibleReturnPolicy
	 * @return boolean
	 */
	public function getEligibleReturnPolicy()
	{
		return $this->EligibleReturnPolicy;
	}
	/**
	 * Set Picture
	 * @param boolean Picture
	 * @return boolean
	 */
	public function setPicture($_Picture)
	{
		return ($this->Picture = $_Picture);
	}
	/**
	 * Get Picture
	 * @return boolean
	 */
	public function getPicture()
	{
		return $this->Picture;
	}
	/**
	 * Set EligibleItemCondition
	 * @param boolean EligibleItemCondition
	 * @return boolean
	 */
	public function setEligibleItemCondition($_EligibleItemCondition)
	{
		return ($this->EligibleItemCondition = $_EligibleItemCondition);
	}
	/**
	 * Get EligibleItemCondition
	 * @return boolean
	 */
	public function getEligibleItemCondition()
	{
		return $this->EligibleItemCondition;
	}
	/**
	 * Set PriceAboveMinimum
	 * @param boolean PriceAboveMinimum
	 * @return boolean
	 */
	public function setPriceAboveMinimum($_PriceAboveMinimum)
	{
		return ($this->PriceAboveMinimum = $_PriceAboveMinimum);
	}
	/**
	 * Get PriceAboveMinimum
	 * @return boolean
	 */
	public function getPriceAboveMinimum()
	{
		return $this->PriceAboveMinimum;
	}
	/**
	 * Set PriceBelowMaximum
	 * @param boolean PriceBelowMaximum
	 * @return boolean
	 */
	public function setPriceBelowMaximum($_PriceBelowMaximum)
	{
		return ($this->PriceBelowMaximum = $_PriceBelowMaximum);
	}
	/**
	 * Get PriceBelowMaximum
	 * @return boolean
	 */
	public function getPriceBelowMaximum()
	{
		return $this->PriceBelowMaximum;
	}
	/**
	 * Set EligibleCheckout
	 * @param boolean EligibleCheckout
	 * @return boolean
	 */
	public function setEligibleCheckout($_EligibleCheckout)
	{
		return ($this->EligibleCheckout = $_EligibleCheckout);
	}
	/**
	 * Get EligibleCheckout
	 * @return boolean
	 */
	public function getEligibleCheckout()
	{
		return $this->EligibleCheckout;
	}
	/**
	 * Set NoPreapprovedBidderList
	 * @param boolean NoPreapprovedBidderList
	 * @return boolean
	 */
	public function setNoPreapprovedBidderList($_NoPreapprovedBidderList)
	{
		return ($this->NoPreapprovedBidderList = $_NoPreapprovedBidderList);
	}
	/**
	 * Get NoPreapprovedBidderList
	 * @return boolean
	 */
	public function getNoPreapprovedBidderList()
	{
		return $this->NoPreapprovedBidderList;
	}
	/**
	 * Set NoCharity
	 * @param boolean NoCharity
	 * @return boolean
	 */
	public function setNoCharity($_NoCharity)
	{
		return ($this->NoCharity = $_NoCharity);
	}
	/**
	 * Get NoCharity
	 * @return boolean
	 */
	public function getNoCharity()
	{
		return $this->NoCharity;
	}
	/**
	 * Set CombinedShippingDiscount
	 * @param boolean CombinedShippingDiscount
	 * @return boolean
	 */
	public function setCombinedShippingDiscount($_CombinedShippingDiscount)
	{
		return ($this->CombinedShippingDiscount = $_CombinedShippingDiscount);
	}
	/**
	 * Get CombinedShippingDiscount
	 * @return boolean
	 */
	public function getCombinedShippingDiscount()
	{
		return $this->CombinedShippingDiscount;
	}
	/**
	 * Set ShipFromEligibleCountry
	 * @param boolean ShipFromEligibleCountry
	 * @return boolean
	 */
	public function setShipFromEligibleCountry($_ShipFromEligibleCountry)
	{
		return ($this->ShipFromEligibleCountry = $_ShipFromEligibleCountry);
	}
	/**
	 * Get ShipFromEligibleCountry
	 * @return boolean
	 */
	public function getShipFromEligibleCountry()
	{
		return $this->ShipFromEligibleCountry;
	}
	/**
	 * Set PayPalAccountAcceptsUnconfirmedAddress
	 * @param boolean PayPalAccountAcceptsUnconfirmedAddress
	 * @return boolean
	 */
	public function setPayPalAccountAcceptsUnconfirmedAddress($_PayPalAccountAcceptsUnconfirmedAddress)
	{
		return ($this->PayPalAccountAcceptsUnconfirmedAddress = $_PayPalAccountAcceptsUnconfirmedAddress);
	}
	/**
	 * Get PayPalAccountAcceptsUnconfirmedAddress
	 * @return boolean
	 */
	public function getPayPalAccountAcceptsUnconfirmedAddress()
	{
		return $this->PayPalAccountAcceptsUnconfirmedAddress;
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