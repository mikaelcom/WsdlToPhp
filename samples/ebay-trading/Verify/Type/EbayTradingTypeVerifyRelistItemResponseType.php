<?php
/**
 * Class file for EbayTradingTypeVerifyRelistItemResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeVerifyRelistItemResponseType
 * Documentation : Returns the estimated fees for the listing that is being verified for a re-list.
 * @date 04/07/2012
 */
class EbayTradingTypeVerifyRelistItemResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique item ID for the new listing. As VerifyRelistItem does not actually re-list an item, returns 0 instead of a normal item ID.
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
	 * @param dateTime StartTime
	 * @param dateTime EndTime
	 * @param EbayTradingTypeDiscountReasonCodeType DiscountReason
	 * @param EbayTradingTypeProductSuggestionsType ProductSuggestions
	 * @return EbayTradingTypeVerifyRelistItemResponseType
	 */
	public function __construct($_ItemID = null,$_Fees = null,$_StartTime = null,$_EndTime = null,$_DiscountReason = null,$_ProductSuggestions = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'Fees'=>$_Fees,'StartTime'=>$_StartTime,'EndTime'=>$_EndTime,'DiscountReason'=>$_DiscountReason,'ProductSuggestions'=>$_ProductSuggestions));
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