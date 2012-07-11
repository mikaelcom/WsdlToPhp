<?php
/**
 * Class file for EbayTradingTypeRelistItemResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeRelistItemResponseType
 * Documentation : Returns the item ID and the estimated fees for the re-listed listing.
 * @date 04/07/2012
 */
class EbayTradingTypeRelistItemResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique item ID for the new listing.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The Fees
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Child elements contain the estimated listing fees for the new item listing. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold.
	 * @var EbayTradingTypeFeesType
	 */
	public $Fees;
	/**
	 * The StartTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Date and time the new listing became active on the eBay site.
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
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of the primary category in which the item was listed. Only returned if you set Item.CategoryMappingAllowed to true in the request and the ID passed in Item.PrimaryCategory was mapped to a new ID by eBay. If the primary category has not changed or it has expired with no replacement, CategoryID does not return a value.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The Category2ID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of the secondary category in which the item was listed. Only returned if you set Item.CategoryMappingAllowed to true in the request and the ID passed in Item.SecondaryCategory was mapped to a new ID by eBay. If the secondary category has not changed or it has expired with no replacement, Category2ID does not return a value.
	 * @var string
	 */
	public $Category2ID;
	/**
	 * The DiscountReason
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The nature of the discount, if a discount applied.
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
	 * @param dateTime StartTime
	 * @param dateTime EndTime
	 * @param string CategoryID
	 * @param string Category2ID
	 * @param EbayTradingTypeDiscountReasonCodeType DiscountReason
	 * @param EbayTradingTypeProductSuggestionsType ProductSuggestions
	 * @return EbayTradingTypeRelistItemResponseType
	 */
	public function __construct($_ItemID = null,$_Fees = null,$_StartTime = null,$_EndTime = null,$_CategoryID = null,$_Category2ID = null,$_DiscountReason = null,$_ProductSuggestions = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'Fees'=>$_Fees,'StartTime'=>$_StartTime,'EndTime'=>$_EndTime,'CategoryID'=>$_CategoryID,'Category2ID'=>$_Category2ID,'DiscountReason'=>$_DiscountReason,'ProductSuggestions'=>$_ProductSuggestions));
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