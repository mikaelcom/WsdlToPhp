<?php
/**
 * Class file for EbayTradingTypeVerifyAddFixedPriceItemResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVerifyAddFixedPriceItemResponseType
 * Documentation : Returns the estimated fees that would be applicable for a new listing (were the item actually listed to eBay with AddItem).
 * @date 04/07/2012
 */
class EbayTradingTypeVerifyAddFixedPriceItemResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Represents the item ID for the new fixed-price listing. VerifyAddFixedPriceItem does not actually list an item, so 0 is returned instead of a normal item ID.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The SKU
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Item-level SKU for the new listing, if the seller specified tem.SKU in the request. Variation SKUs are not returned (see GetItem instead).
	 * @var EbayTradingTypeSKUType
	 */
	public $SKU;
	/**
	 * The Fees
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Child elements contain the estimated listing fees for the new item listing. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold.
	 * @var EbayTradingTypeFeesType
	 */
	public $Fees;
	/**
	 * The ExpressListing
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates whether the item would be listed on eBay Express. See ExpressItemRequirements for hints about why this value is true or false for a given item.
	 * @var boolean
	 */
	public $ExpressListing;
	/**
	 * The ExpressItemRequirements
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains details about why an item does or doesn't qualify as an eBay Express listing. Only returned when IncludeExpressRequirements is true the request.<br> <br> The item requirements are assessed in this order:<br> - SellerExpressEligible<br> - ExpressOptOut<br> - ExpressApproved<br> - All other settings
	 * @var EbayTradingTypeExpressItemRequirementsType
	 */
	public $ExpressItemRequirements;
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of the primary category in which the item would be listed. Only returned if you set Item.CategoryMappingAllowed to true in the request and the ID you passed in PrimaryCategory was mapped to a new ID by eBay. If the primary category has not changed or it has expired with no replacement, CategoryID does not return a value.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The Category2ID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of the secondary category in which the item would be listed. Only returned if you set Item.CategoryMappingAllowed to true in the request and the ID you passed in SecondaryCategory was mapped to a new ID by eBay. If the secondary category has not changed or it has expired with no replacement, Category2ID does not return a value.
	 * @var string
	 */
	public $Category2ID;
	/**
	 * The DiscountReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The nature of the discount, if a discount would have applied had this actually been listed at this time.
	 * @var EbayTradingTypeDiscountReasonCodeType
	 */
	public $DiscountReason;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypeSKUType SKU
	 * @param EbayTradingTypeFeesType Fees
	 * @param boolean ExpressListing
	 * @param EbayTradingTypeExpressItemRequirementsType ExpressItemRequirements
	 * @param string CategoryID
	 * @param string Category2ID
	 * @param EbayTradingTypeDiscountReasonCodeType DiscountReason
	 * @return EbayTradingTypeVerifyAddFixedPriceItemResponseType
	 */
	public function __construct($_ItemID = null,$_SKU = null,$_Fees = null,$_ExpressListing = null,$_ExpressItemRequirements = null,$_CategoryID = null,$_Category2ID = null,$_DiscountReason = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'SKU'=>$_SKU,'Fees'=>$_Fees,'ExpressListing'=>$_ExpressListing,'ExpressItemRequirements'=>$_ExpressItemRequirements,'CategoryID'=>$_CategoryID,'Category2ID'=>$_Category2ID,'DiscountReason'=>$_DiscountReason));
	}
	/**
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = EbayTradingTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set SKU
	 * @param SKUType SKU
	 * @return SKUType
	 */
	public function setSKU($_SKU)
	{
		return ($this->SKU = EbayTradingTypeSKUType::valueIsValid($_SKU)?$_SKU:null);
	}
	/**
	 * Get SKU
	 * @return EbayTradingTypeSKUType
	 */
	public function getSKU()
	{
		return $this->SKU;
	}
	/**
	 * Set Fees
	 * @param FeesType Fees
	 * @return FeesType
	 */
	public function setFees($_Fees)
	{
		return ($this->Fees = $_Fees);
	}
	/**
	 * Get Fees
	 * @return EbayTradingTypeFeesType
	 */
	public function getFees()
	{
		return $this->Fees;
	}
	/**
	 * Set ExpressListing
	 * @param boolean ExpressListing
	 * @return boolean
	 */
	public function setExpressListing($_ExpressListing)
	{
		return ($this->ExpressListing = $_ExpressListing);
	}
	/**
	 * Get ExpressListing
	 * @return boolean
	 */
	public function getExpressListing()
	{
		return $this->ExpressListing;
	}
	/**
	 * Set ExpressItemRequirements
	 * @param ExpressItemRequirementsType ExpressItemRequirements
	 * @return ExpressItemRequirementsType
	 */
	public function setExpressItemRequirements($_ExpressItemRequirements)
	{
		return ($this->ExpressItemRequirements = $_ExpressItemRequirements);
	}
	/**
	 * Get ExpressItemRequirements
	 * @return EbayTradingTypeExpressItemRequirementsType
	 */
	public function getExpressItemRequirements()
	{
		return $this->ExpressItemRequirements;
	}
	/**
	 * Set CategoryID
	 * @param string CategoryID
	 * @return string
	 */
	public function setCategoryID($_CategoryID)
	{
		return ($this->CategoryID = $_CategoryID);
	}
	/**
	 * Get CategoryID
	 * @return string
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * Set Category2ID
	 * @param string Category2ID
	 * @return string
	 */
	public function setCategory2ID($_Category2ID)
	{
		return ($this->Category2ID = $_Category2ID);
	}
	/**
	 * Get Category2ID
	 * @return string
	 */
	public function getCategory2ID()
	{
		return $this->Category2ID;
	}
	/**
	 * Set DiscountReason
	 * @param DiscountReasonCodeType DiscountReason
	 * @return DiscountReasonCodeType
	 */
	public function setDiscountReason($_DiscountReason)
	{
		return ($this->DiscountReason = EbayTradingTypeDiscountReasonCodeType::valueIsValid($_DiscountReason)?$_DiscountReason:null);
	}
	/**
	 * Get DiscountReason
	 * @return EbayTradingTypeDiscountReasonCodeType
	 */
	public function getDiscountReason()
	{
		return $this->DiscountReason;
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