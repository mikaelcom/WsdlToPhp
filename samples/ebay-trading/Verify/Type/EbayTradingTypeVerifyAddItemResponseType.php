<?php
/**
 * Class file for EbayTradingTypeVerifyAddItemResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVerifyAddItemResponseType
 * Documentation : Returns the estimated fees that would be applicable for a new listing (were the item actually listed to eBay with AddItem).
 * @date 04/07/2012
 */
class EbayTradingTypeVerifyAddItemResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Represents the item ID for the new listing. VerifyAddItem does not actually list an item, so 0 is returned instead of a normal item ID. <br><br> <span class="tablenote"><b>Note:</b> Although we represent item IDs as strings in the schema, we recommend you store them as 64-bit signed integers. If you choose to store item IDs as strings, allocate at least 19 characters (assuming decimal digits are used) to hold them. eBay will increase the size of IDs over time. Your code should be prepared to handle IDs of up to 19 digits. For more information about item IDs, see <a href= "http://ebay.custhelp.com/cgi-bin/ebay.cfg/php/enduser/std_adp.php?p_faqid=468"> Common FAQs on eBay Item IDs and other eBay IDs</a> in the Knowledge Base. </span>
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The Fees
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Child Fee containers provide the listing feature names, fees, and possible discounts for the new item listing. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold. <br /> <br /> There is no guarantee that a PromotionalDiscount returned with VerifyAddItem will be realized when the seller uses AddItem to list the same item. This is the result of the timing of certain promotions. <br /> <br /> <span class="tablenote"><strong>Note:</strong> Starting with version 619, the behavior of VerifyAddItem changed to match that of AddItem. With a request version of 619 or higher, the value of Fees.Fee.Fee for VerifyAddItem represents the actual cost of the respective feature, with any discounts subtracted from the posted feature price. With a request version lower than 619, VerifyAddItem returns the full price of the feature in the Fee element, regardless of whether or not a discount was applied. </span>
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
	 * 	- documentation : Contains details about why an item does or doesn't qualify as an eBay Express listing. Only returned when IncludeExpressRequirements is true the request. <br> <br> The item requirements are assessed in this order:<br> - SellerExpressEligible<br> - ExpressOptOut<br> - ExpressApproved<br> - All other settings
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
	 * The ProductSuggestions
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Provides a list of products recommended by eBay which match the item information provided by the seller. Not applicable to Half.com.
	 * @var EbayTradingTypeProductSuggestionsType
	 */
	public $ProductSuggestions;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param EbayTradingTypeFeesType Fees
	 * @param boolean ExpressListing
	 * @param EbayTradingTypeExpressItemRequirementsType ExpressItemRequirements
	 * @param string CategoryID
	 * @param string Category2ID
	 * @param EbayTradingTypeDiscountReasonCodeType DiscountReason
	 * @param EbayTradingTypeProductSuggestionsType ProductSuggestions
	 * @return EbayTradingTypeVerifyAddItemResponseType
	 */
	public function __construct($_ItemID = null,$_Fees = null,$_ExpressListing = null,$_ExpressItemRequirements = null,$_CategoryID = null,$_Category2ID = null,$_DiscountReason = null,$_ProductSuggestions = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'Fees'=>$_Fees,'ExpressListing'=>$_ExpressListing,'ExpressItemRequirements'=>$_ExpressItemRequirements,'CategoryID'=>$_CategoryID,'Category2ID'=>$_Category2ID,'DiscountReason'=>$_DiscountReason,'ProductSuggestions'=>$_ProductSuggestions));
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
	 * Set ProductSuggestions
	 * @param ProductSuggestionsType ProductSuggestions
	 * @return ProductSuggestionsType
	 */
	public function setProductSuggestions($_ProductSuggestions)
	{
		return ($this->ProductSuggestions = $_ProductSuggestions);
	}
	/**
	 * Get ProductSuggestions
	 * @return EbayTradingTypeProductSuggestionsType
	 */
	public function getProductSuggestions()
	{
		return $this->ProductSuggestions;
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