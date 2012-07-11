<?php
/**
 * Class file for EbayTradingTypeAddFixedPriceItemResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddFixedPriceItemResponseType
 * Documentation : Returns the item ID, SKU (if any), and the estimated fees for the new listing (except the Final Value Fee, which isn't calculated until the item has sold), the start and end times of the listing, and other details.
 * @date 04/07/2012
 */
class EbayTradingTypeAddFixedPriceItemResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for the new fixed price listing.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The SKU
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Item-level SKU for the new listing, if the seller specified Item.SKU in the request. Variation-level SKUs are not returned (see GetItem instead).
	 * @var EbayTradingTypeSKUType
	 */
	public $SKU;
	/**
	 * The StartTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Starting date and time for the new listing. This value is based on the time the listing was received and processed, or the time the item will be listed if the seller specified Item.ScheduleTime in the request.
	 * @var dateTime
	 */
	public $StartTime;
	/**
	 * The EndTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Date and time when the new listing ends. This is the starting time plus the listing duration.
	 * @var dateTime
	 */
	public $EndTime;
	/**
	 * The Fees
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Child elements contain the estimated listing fees for the new item listing. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold.
	 * @var EbayTradingTypeFeesType
	 */
	public $Fees;
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of the primary category in which the item was listed. Only returned if you set Item.CategoryMappingAllowed to true in the request and the ID you passed in PrimaryCategory was mapped to a new ID by eBay. If the primary category has not changed or if it has expired with no replacement, CategoryID does not return a value.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The Category2ID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of the secondary category in which the item was listed. Only returned if you set Item.CategoryMappingAllowed to true in the request and the ID you passed in SecondaryCategory was mapped to a new ID by eBay. If the secondary category has not changed or it has expired with no replacement, Category2ID does not return a value.
	 * @var string
	 */
	public $Category2ID;
	/**
	 * The DiscountReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The nature of the discount, if a discount is applied.
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
	 * @param EbayTradingTypeSKUType SKU
	 * @param dateTime StartTime
	 * @param dateTime EndTime
	 * @param EbayTradingTypeFeesType Fees
	 * @param string CategoryID
	 * @param string Category2ID
	 * @param EbayTradingTypeDiscountReasonCodeType DiscountReason
	 * @param EbayTradingTypeProductSuggestionsType ProductSuggestions
	 * @return EbayTradingTypeAddFixedPriceItemResponseType
	 */
	public function __construct($_ItemID = null,$_SKU = null,$_StartTime = null,$_EndTime = null,$_Fees = null,$_CategoryID = null,$_Category2ID = null,$_DiscountReason = null,$_ProductSuggestions = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'SKU'=>$_SKU,'StartTime'=>$_StartTime,'EndTime'=>$_EndTime,'Fees'=>$_Fees,'CategoryID'=>$_CategoryID,'Category2ID'=>$_Category2ID,'DiscountReason'=>$_DiscountReason,'ProductSuggestions'=>$_ProductSuggestions));
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
	 * Set StartTime
	 * @param dateTime StartTime
	 * @return dateTime
	 */
	public function setStartTime($_StartTime)
	{
		return ($this->StartTime = $_StartTime);
	}
	/**
	 * Get StartTime
	 * @return dateTime
	 */
	public function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * Set EndTime
	 * @param dateTime EndTime
	 * @return dateTime
	 */
	public function setEndTime($_EndTime)
	{
		return ($this->EndTime = $_EndTime);
	}
	/**
	 * Get EndTime
	 * @return dateTime
	 */
	public function getEndTime()
	{
		return $this->EndTime;
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